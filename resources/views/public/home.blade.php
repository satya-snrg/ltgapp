@extends('public.layouts.app')
@section('content')
    <section id="hero">
        <div class="hero-container">
            <h1>Letter From God</h1>
            <h3>An initiative by Business & Industry Wing of Brahma Kumaris</h3>
            <h4>Please, fill out the form below to get the Answer!</h4>
            <br>
            <form role="form" class="php-email-form" id="questionForm">
                <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <div style="display: none;">
                            <input type="radio" id="inscript" name="layout" onclick="setTypingLayout('inscript')"/>INSCRIPT
                            &nbsp;&nbsp;
                            <input type="radio" id="transliteration" name="layout" checked="true"
                                   onclick="setTypingLayout('transliteration')"/>Transliteration
                        </div>
                        <select class="form-control" id="language" style="font-family:verdna,Arial;font-size: 15px;">
                            <option value="en_in">English</option>
                            <option value="hi_in" selected="selected" alt="Type in Hindi">हिन्दी</option>
                            <option value="tl_in" alt="Type in Telugu">తెలుగు</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" autocomplete="off" name="name" class="form-control" id="name"
                               placeholder="Your Name" required/>
                        <div class="validate"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" autocomplete="off" name="usercontactinfo" class="form-control"
                               id="usercontactinfo" placeholder="Phone Number / Email" required/>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <textarea class="form-control" autocomplete="off" name="questionInput" id="questionInput"
                                  placeholder="Type your question here." required></textarea>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="mb-1">
                    <div class="loading" id="loading" style="display: none;">Please Wait....</div>
                </div>
                <div class="text-center">
                    <button type="submit">Submit</button>
                </div>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal()">Close
                    </button>
                </div>

            </div>
        </div>
    </div>
    <main id="main">
        <!-- ======= About Section ======= -->

        <section id="" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Business & Industry Wing</h3>
                        <p>
                            National Co-ordinating Office <br>
                            Juhu Vile Parle(W), Mumbai
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>Initiative by Brahma Kumaris Nagarjuna Hills</h3>
                        <div class="email">
                            <i class="bx bx-envelope"></i>
                            <span>bknmcprograms@gmail.com</span>
                        </div>

                        <div class="phone">
                            <i class="bx bx-phone-call"></i>
                            <span>(040) 66788662, 23350784</span>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
        <hr>

        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo e(asset('public_theme/assets/img/rajayogamed.jpg')); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>BRAHMA KUMARIS NAGARJUNA HILLS</h3>
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
                            <img src="<?php echo e(asset('public_theme/assets/img/aboutbk.png')); ?>" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">About Brahma Kumaris</a></h5>
                                <p class="card-text" style="text-align: justify; line-height: 1.6;">Prajapita Brahma
                                    Kumaris lshwariya Vishwa Vidyalaya is an international, voluntary, spiritual
                                    organization head-quarteredinMt. Abu, Rajasthan. Established in 1937, the
                                    institution now has more than 4000 centers with its presence in rethan130countries.<span id="aboutbkreadmoreDots">...</span>
                                    <span id="aboutbkreadmoreText" style="display: none;">
                                    Working at all levels of society to bring a positive change, it recognizes the
                                    intrinsic goodness of every human being and helps people rediscover their
                                    fundamental nature of peace and purity. The institution carries out a wide range of
                                    self-development program for the growth of human and spiritual values.
                                    ItalsoteachesRajyogameditation and spirituality to help develop inner resources and
                                    strengths face any situation. The institution encourages co-operation and promotes
                                    dialogue for world peace locally and in global forums. Brahma Kumaris is affiliated
                                    to the UnitedNations(UN) as an NGO in general consultative status with the
                                    UN’sEconomicandSocialCouncil(ECOSOC)and UNICEF.
                                    </span>
                                    <button class="btn-sm btn-primary" onclick="readMoreFun('aboutbkreadmoreDots', 'aboutbkreadmoreText', 'aboutbkreadmoreBtn')" id="aboutbkreadmoreBtn">Read more</button>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <img src="<?php echo e(asset('public_theme/assets/img/biwing.png')); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">About Business & Industry Wing</a></h5>
                                <p class="card-text" style="text-align: justify; line-height: 1.6;">The Business &
                                    Industry wing renders voluntary services to business and industry through various
                                    self-development programs. It aims to practice and promote ethical values in the
                                    world of business. Throughout the country, various conferences,<span id="aboutbiwingDots">...</span>
                                    <span id="aboutbiwingmoreText" style="display: none;"> dialogues, workshops
                                    and other initiatives are conducted by this wing. These organized activities
                                    introduce the concept of adding values in the workplace. Creative methods and
                                    interactive techniques are used to assist individuals in recognizing how to change
                                    business into an art with integrity and commitment. These programs are interactive
                                    and informative.They include group discussions, case studies, reflective and
                                    engaging exercises to make the learning process more effective. They have been
                                    conducted in more than 1000 companies all over India.
                                </span>
                                    <button class="btn-sm btn-primary" onclick="readMoreFun('aboutbiwingDots', 'aboutbiwingmoreText', 'aboutbiwingreadmoreBtn')" id="aboutbiwingreadmoreBtn">Read more</button>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <img src="<?php echo e(asset('public_theme/assets/img/rajayogamed.png')); ?>" class="card-img-top"
                                 alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="">RAJA YOGA MEDITATION</a></h5>
                                <p class="card-text" style="text-align: justify; line-height: 1.6;">
                                    If you are frequently stressed, often tired, finding peace of mind or perhaps just
                                    looking for greater meaning and purpose in life, then you are probably ready for
                                    Raja Yoga Meditation.
                                    <br>
                                    Raja Yoga meditation is an open-eyed technique that can be used
                                    <span id="aboutrjygDots">...</span>
                                    <span id="aboutrjygmoreText" style="display: none;">
                                    by anyone, anywhere.
                                    Whether you want to learn how to relax, need to be more concentrated and creative or
                                    are searching for personal enlightenment, Raja Yoga Meditation can satisfy each of
                                    those needs.
                                    <br>
                                    The Brahma Kumaris teach Raja Yoga, a meditation practice combined with spiritual
                                    self-knowledge. The meditation course is not based on a regime of physical postures
                                    but rather an insight into the workings of the mind, intellect and subconscious and
                                    the ability to apply this knowledge in everyday situations.
                                         </span>
                                    <button class="btn-sm btn-primary" onclick="readMoreFun('aboutrjygDots', 'aboutrjygmoreText', 'aboutrjygreadmoreBtn')" id="aboutrjygreadmoreBtn">Read more</button>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <hr>
        </section><!-- End Why Us Section -->
        <!-- ======= Frequenty Asked Questions Section ======= -->

        <section id="msgfortheday" class="contact section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Message For The Day Subscription</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <form method="post" role="form" class="php-email-form" id="msgSubcriptionForm">
                            <div class="form-group">
                                <input type="text" autocomplete="off" name="msgsub_name" class="form-control" id="msgsub_name"
                                       placeholder="Your Name" required
                                       data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="msgsub_contact" id="msgsub_contact"
                                       placeholder="Your Email" required
                                       data-msg="Please enter a valid Email"/>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading" id="msgsub_cloading">Please Wait...</div>
                                <div class="sent-message">Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

        <section class="faq">
            <div class="container">

                <div class="section-title">
                    <h2>Frequenty Asked Questions</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">What is Brahma Kumaris?<i
                                class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-parent=".faq-list">
                            <p>

                                Brahma Kumaris (BK) was founded in India in the 1930s by Brahma Baba and now has its
                                spiritual headquarters in Mount Abu, Rajasthan, India. Brahma Kumaris service outside
                                India began in 1971 and now comprises a worldwide network of centres in over 110
                                countries and territories. There are currently estimated to be around one million
                                students. It provides spiritual education and reflective practices for people from
                                diverse cultural backgrounds, inspiring them to live according to their own higher
                                nature and contribute towards a better world.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed"> What are the aspirations of Brahma
                            Kumaris? <i class="bx bx-down-arrow-alt icon-show"></i><i
                                class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                            <ul>

                                <li>To encourage a deeper understanding of the individual's place and purpose within the
                                    broader context of life.
                                </li>
                                <li>To reaffirm the spiritual identity, inherent goodness, dignity and worth of the
                                    human being.
                                </li>
                                <li>To encourage a change of awareness, attitude, vision and behaviour within the human
                                    family.
                                </li>
                                <li>To help individuals rediscover their latent personal relationship with the Source of
                                    all goodness.
                                </li>
                                <li>To foster a spirit of human brotherhood - every human being, irrespective of their
                                    religion, their race, their gender or their nationality, can draw profound inner
                                    strength from a relationship with their eternal Parent, the Divine.
                                </li>
                                <li>To support the betterment of the human condition by remaining fully engaged in our
                                    communities and to support programmes, projects and initiatives with this
                                    rediscovered inner strength.
                                </li>
                                <li>To establish a relationship between human beings and the environment based on the
                                    principle of non-violence.
                                </li>
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
                                <input type="text" autocomplete="off" name="name" class="form-control" id="cname"
                                       placeholder="Your Name" required data-rule="minlen:4"
                                       data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" autocomplete="off" class="form-control" name="email" id="cemail"
                                       placeholder="Your Email" required data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" autocomplete="off" class="form-control" name="subject" id="csubject"
                                       placeholder="Subject" required data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject"/>
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" autocomplete="off" name="cmessage" rows="5" id="cmessage"
                                          data-rule="required" required data-msg="Please write something for us"
                                          placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading" id="cloading">Please Wait...</div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->
    </main><!-- End #main -->

@endsection

@section('js')
    <script>

        function readMoreFun(dotsID, moreTextID, btnTextID ) {
            var dots = document.getElementById(dotsID);
            var moreText = document.getElementById(moreTextID);
            var btnText = document.getElementById(btnTextID);

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

        function closeModal() {
            $('#myModal').hide();
            $('#name').val("");
            $('#questionInput').val("");
            $('#usercontactinfo').val("");
            $("#responseContent").html("");
        }

        function isValidPhone(_phone){
            intRegex = /[0-9 -()+]+$/;
            if ((_phone.length < 6) || !intRegex.test(_phone)) {
                return false;
            } else {
                return true
            }
        }

        function isValidEmail(_email){
            email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
            if ((_email.length < 6) || !email_regex.test(_email)) {
                return false;
            } else {
                return true
            }
        }

        function focusElem(ele){
            setTimeout(function() {
                $("#"+ele).focus();
            }, 1000);
        }


        $('#questionForm').on('submit', function (e) {
            $('.error-message').fadeIn(200).hide();
            e.preventDefault();
            let _token = $('#_token').val();
            let lang = $('#language').val().trim();
            let name = $('#name').val().trim();
            let usercontactinfo = $('#usercontactinfo').val().trim();
            let question = $('#questionInput').val().trim();

            if (name.length < 3) {
                focusElem('name');
                swal('Please enter a name 3 characters or more.', '', 'error');
                return false;
            }

            var usercontactinfoValidationFlag = false;
            var _email = '';
            var _phone = '';

            if(isValidPhone(usercontactinfo)){
                _phone = usercontactinfo;
                usercontactinfoValidationFlag = true;
                console.log('phone validated');
            }else if(isValidEmail(usercontactinfo)){
                _email = usercontactinfo;
                usercontactinfoValidationFlag = true;
                console.log('email validated');
            }

            if (!usercontactinfoValidationFlag) {
                focusElem('usercontactinfo');
                swal('Please enter valid Email / Phone Number.', '', 'error');
                return false;
            }

            if (question.length < 8) {
                focusElem('questionInput');
                 swal('Please enter a valid question.', '', 'error');
                return false;
            }

            $('#loading').show();
            $.ajax({
                type: 'POST',
                url: '<?php echo e(URL::to('/')); ?>/post-question',
                data: {_token: _token, name: name, email: _email,  phone: _phone , question: question, lang: lang},
                success: function (data) {

                    $("#responseContent").html(data);
                    $('#myModal').show();
                    $('#loading').hide();
                    $('#questionForm')[0].reset();
                }
            });
        });




        $('#msgSubcriptionForm').on('submit', function (e) {
            e.preventDefault();
            var _token = $('#_token').val();
            var cname = $('#msgsub_name').val().trim();
            var usercontactinfo = $('#msgsub_contact').val().trim();

            var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
            if (cname.length < 3) {
                focusElem('msgsub_name');
                swal('Please enter a name 3 characters or more.', '', 'error');
                return false;
            }

            var usercontactinfoValidationFlag = false;
            var _email = '';
            var _phone = '';

            // if(isValidPhone(usercontactinfo)){
            //     console.log('phone validated');
            //     _phone = usercontactinfo;
            //     usercontactinfoValidationFlag = true;
            // }

           if(!isValidEmail(usercontactinfo)){
                console.log('email validated');
                _email = usercontactinfo;
                //usercontactinfoValidationFlag = true;
               focusElem('msgsub_contact');
               swal('Please enter valid Email', '', 'error');
               return false;
            }


            $('#msgsub_cloading').show();
            $.ajax({
                type: 'POST',
                url: '<?php echo (URL::to('/')); ?>/msgsubscription',
                data: {_token: _token, name: cname, email: _email, phone: _phone},
                success: function (data) {
                    swal('Thank you for subscribing', '', 'success');
                    $('#msgsub_cloading').hide();
                    $('#msgSubcriptionForm')[0].reset();
                }
            });
        });

        $('#contactForm').on('submit', function (e) {
            e.preventDefault();
            let _token = $('#_token').val();
            let cname = $('#cname').val().trim();
            let cemail = $('#cemail').val().trim();
            let csubject = $('#csubject').val().trim();
            let cmessage = $('#cmessage').val().trim();

            if (cname.length < 3 || csubject.length < 5 || cmessage.length < 8) {
                //focusElem('cname');
                swal('Please enter valid details', '', 'error');
                return false;
            }

            if(!isValidEmail(cemail)){
                focusElem('cemail');
                swal('Please enter valid email address', '', 'error');
                return false;
            }

            if(cname!='' && cemail!='' && csubject!='' && cmessage!=''){
                $('#cloading').show();
                $.ajax({
                    type:'POST',
                    url:'{{URL::to('/')}}/contactform',
                    data: {_token:_token ,name: cname, email: cemail,subject:csubject, message:cmessage},
                    success:function(data) {
                        swal('Your message has been sent. Thank you!', '', 'success');
                        //$('.sent-message').fadeIn(200).show();
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
                locale = $('#language').find('option:selected').val();
                setLanguage(locale);
                setCookie(locale);
            }
            $('#language').on('change', function () {
                locale = this.value;
                setLanguage(locale);
                setCookie(locale);
            });

            $('#kbdIcon').on('click', function () {
                //openKeyboard($('#language').find('option:selected').text().toLowerCase());
                openKeyboard($('#language').find('option:selected').val());
            });

            function setCookie(langLocale) {
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

        window.onload = function () {
            // document.getElementById("addressInput").focus();
        };
    </script>
@endsection


