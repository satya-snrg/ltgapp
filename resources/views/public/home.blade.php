@extends('public.layouts.app')
@section('content')
    <section id="hero">
        <div class="hero-container">
            <h1>Letter to God</h1>
            <h2>Please, fill out the for below to get the Answer!</h2>
            <form role="form" class="php-email-form" style="width: 600px;" id="questionForm">
                <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <div style="display: none;">
                            <input type="radio" id="inscript" name="layout" onclick="setTypingLayout('inscript')"/>INSCRIPT &nbsp;&nbsp;
                            <input type="radio" id="transliteration" name="layout" checked="true" onclick="setTypingLayout('transliteration')"/>Transliteration
                        </div>
                        <select class="form-control" id="language" style="font-family:verdna,Arial;font-size: 15px;width: 200px; margin: 0px 200px ;">
                            <option value="en_in">English</option>
                            <option value="hi_in" selected="selected" alt="Type in Hindi">हिन्दी</option>
                            <option value="tl_in" alt="Type in Telugu">తెలుగు</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" autocomplete="off" name="name" style="margin: 0px 180px ;" class="form-control" id="name" placeholder="Your Name" required />
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" autocomplete="off" name="questionInput" id="questionInput" placeholder="Type your question here." required></textarea>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="mb-1">
                    <div class="loading" id="loading" style="display: none;">Please Wait....</div>
                </div>
                <div class="text-center"><button type="submit">Submit</button></div>
            </form>
        </div>
    </section><!-- #hero -->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">God's Message</h4>
                    <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <span id="responseContent"></span>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal()">Close</button>
                </div>

            </div>
        </div>
    </div>
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{ asset('public_theme/assets/img/rajayogamed.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>BRAHMA KUMARIS  NAGARJUNA MANAGEMENT CENTRE</h3>
                        <p class="font-italic">
                            FOR PEACE OF MIND & SELF DEVELOPMENT
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> RAJA YOGA MEDITATION.</li>
                            <li><i class="bx bx-check-double"></i> POSITIVE THINKING.</li>
                            <li><i class="bx bx-check-double"></i> STREE FREE LIVING.</li>
                            <li><i class="bx bx-check-double"></i> MANAGING RELATIONS.</li>
                            <li><i class="bx bx-check-double"></i> SPIRITUAL COUNSELLING.</li>

                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public_theme/assets/img/rajayogamed.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="bx bx-book-reader"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">RAJA YOGA MEDITATION</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public_theme/assets/img/pt.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="bx bx-calendar-edit"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">POSITIVE THINKING</a></h5>
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <img src="{{ asset('public_theme/assets/img/sc.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="bx bx-landscape"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">SPIRITUAL COUNSELLING</a></h5>
                                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->
        <!-- ======= Frequenty Asked Questions Section ======= -->
        <section class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>Frequenty Asked Questions</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">What is Brahma Kumaris?<i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-parent=".faq-list">
                            <p>

                                Brahma Kumaris (BK) was founded in India in the 1930s by Brahma Baba and now has its spiritual headquarters in Mount Abu, Rajasthan, India. Brahma Kumaris service outside India began in 1971 and now comprises a worldwide network of centres in over 110 countries and territories. There are currently estimated to be around one million students. It provides spiritual education and reflective practices for people from diverse cultural backgrounds, inspiring them to live according to their own higher nature and contribute towards a better world.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed"> What are the aspirations of Brahma Kumaris? <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                                <ul>

                                <li>To encourage a deeper understanding of the individual's place and purpose within the broader context of life.</li>
                                <li>To reaffirm the spiritual identity, inherent goodness, dignity and worth of the human being.</li>
                                <li>To encourage a change of awareness, attitude, vision and behaviour within the human family.</li>
                                <li>To help individuals rediscover their latent personal relationship with the Source of all goodness.</li>
                                <li>To foster a spirit of human brotherhood - every human being, irrespective of their religion, their race, their gender or their nationality, can draw profound inner strength from a relationship with their eternal Parent, the Divine.</li>
                                <li>To support the betterment of the human condition by remaining fully engaged in our communities and to support programmes, projects and initiatives with this rediscovered inner strength.</li>
                                <li>To establish a relationship between human beings and the environment based on the principle of non-violence.</li>
                            </ul>

                        </div>
                    </li>
                </ul>

            </div>
        </section><!-- End Frequenty Asked Questions Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>
                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-5 mb-5 mb-md-0">
                        <div class="info">
                            <div class="address">
                                <i class="bx bx-map"></i>
                                <p>Plot No. 55, Nagarjuna Hills, Punjagutta, <br>Hyderabad, Telangana 500082</p>
                            </div>

                            <div class="email">
                                <i class="bx bx-envelope"></i>
                                <p>bknmcprograms@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bx bx-phone-call"></i>
                                <p>(040) 66788662, 23350784</p>
                            </div>
                        </div>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7">
                        <form method="post" role="form" class="php-email-form" id="contactForm">
                            <div class="form-group">
                                <input type="text" autocomplete="off" name="name" class="form-control" id="cname" placeholder="Your Name" required data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" autocomplete="off" class="form-control" name="email" id="cemail" placeholder="Your Email" required data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="subject" id="csubject" placeholder="Subject" required data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" autocomplete="off" name="cmessage" rows="5"  id="cmessage" data-rule="required" required data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading" id="cloading">Please Wait...</div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->
    </main><!-- End #main -->

@section('js')
    <script>
        function closeModal(){
            $('#myModal').hide();
            $('#name').val("");
            $('#questionInput').val("");
            $("#responseContent").html("");
        }

        $('#questionForm').on('submit', function (e) {
            $('.error-message').fadeIn(200).hide();
            e.preventDefault();
            let _token = $('#_token').val();
            let lang = $('#language').val().trim();
            let name = $('#name').val().trim();
            let question = $('#questionInput').val().trim();

            if(name!='' && question!=''){
                $('#loading').show();
                $.ajax({
                    type:'POST',
                    url:'{{URL::to('/')}}/post-question',
                    data: {_token:_token ,name: name, question: question,lang:lang},
                    success:function(data) {
                        $("#responseContent").html(data);
                        $('#myModal').show();
                        $('#loading').hide();
                    }
                });
            }else{
                // $('.error-message').fadeIn(200).show();
                // $('.error').fadeOut(200).hide();
            }
        });

        $('#contactForm').on('submit', function (e) {
            e.preventDefault();
            let _token = $('#_token').val();
            let cname = $('#cname').val().trim();
            let cemail = $('#cemail').val().trim();
            let csubject = $('#csubject').val().trim();
            let cmessage = $('#cmessage').val().trim();

            if(cname!='' && cemail!='' && csubject!='' && cmessage!=''){
                $('#cloading').show();
                $.ajax({
                    type:'POST',
                    url:'{{URL::to('/')}}/contactform',
                    data: {_token:_token ,name: cname, email: cemail,subject:csubject, message:cmessage},
                    success:function(data) {
                        $('.sent-message').fadeIn(200).show();
                        $('#cloading').hide();
                    }
                });
            }else{
             }
       });

        $(document).ready(function () {
            var locale = null;
            var cookies = document.cookie.split(";");
            $(cookies).each(function (i, cookie) {
                if (cookie.indexOf("LanguageLocale=") != -1) {
                    locale = cookie.split("=")[1];
                    setLanguage(locale);
                    $("#language").val(locale);
                }
            });
            if (locale == null) {
                locale = $('#language').find('option:selected').val();;
                setLanguage(locale);
                setCookie(locale);
            }
            $('#language').on('change', function () {
                locale = this.value;
                setLanguage(locale);
                setCookie(locale);
            });

            $('#kbdIcon').on('click', function(){
                //openKeyboard($('#language').find('option:selected').text().toLowerCase());
                openKeyboard($('#language').find('option:selected').val());
            });
            function setCookie(langLocale)
            {
                /*Setting Cookie*/
                var today = new Date();
                var expire = new Date();
                expire.setTime(today.getTime() + 3600000 * 24 * 7);
                document.cookie = "LanguageLocale=" + langLocale + "; expires=" + expire.toUTCString();
                /*Setting Cookie*/
            }
            enableTyping(new Array('username'), null, 'ADDRESS', locale);
            enableTyping(new Array('questionInput'), null, 'NAME', locale);
        });

        window.onload = function() {
            // document.getElementById("addressInput").focus();
        };
    </script>
@endsection


