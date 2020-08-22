@extends('v2.layouts.app')

@section('content')

    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#home">Business Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu1">Location Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#menu2">Upload Images</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
            <div class="form-group">
                <label for="email">Business Name:</label>
                <input type="email" class="form-control" placeholder="" id="email">
            </div>

            <div class="form-group">
                <label for="email">Contact Number:</label>
                <input type="email" class="form-control" placeholder="" id="email">
            </div>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
           Location Date
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            Upload Images
        </div>
    </div>

@endsection
