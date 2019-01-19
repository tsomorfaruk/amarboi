@section('title')
    {{--User Dashboard--}}
    {{ Auth::user()->name }}
@endsection
@extends('frontEnd.master')
@section('mainContent')

    <div class="main-banner banner text-center" style="min-height: 150px">
        <div class="container" style="padding-bottom: 20px">
            <a href="{{'/buy'}}">Buy</a>
            <a href="{{'/sell'}}">Sell/Rent</a>
            <a href="post-ad.html">eBooks</a>
        </div>
    </div>
    <div class="total-ads main-grid-border">
        <div class="container">
            <div class="ads-grid">
                <div class="side-bar col-md-3">
                    <div class="brand-select">
                        <h3 class="sear-head">Brand name</h3>
                        <ul class="resp-tabs-list hor_1">
                            <li ><a href="{{'/home'}}"> My Profile</a></li>
                            <li ><a href="{{'/update-profile'}}"> Update Profile</a></li>
                            <li ><a href="{{'/my-ads'}}"> My Ads</a></li>
                            <li ><a href="{{'/logout'}}"> Logout</a></li>
                        </ul>
                    </div>

                </div>
                <div class="ads-display col-md-9">
                    <div class="wrapper">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                        <span class="text">All Ads</span>
                                    </a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                    <div>
                                        <div id="container">

                                            {!! Form::open() !!}
                                            <div class="form-style-5">
                                                <fieldset>
                                                    <legend><span class="number">1</span> Candidate Info</legend>
                                                    <input type="text" name="field1" value="{{Auth::user()->name}}"/>
                                                    <input type="email" name="field2" value="{{Auth::user()->email}}"/>
                                                    <input type="email" name="field2" value="{{Auth::user()->dateOfBirth}}"/>
                                                    <input type="email" name="field2" value="{{Auth::user()->gender}}"/>
                                                    <input type="email" name="field2" value="{{Auth::user()->address}}"/>
                                                    <input type="email" name="field2" value="{{Auth::user()->city}}"/>
                                                    <textarea name="field3" placeholder="About yourself"></textarea>
                                                </fieldset>
                                                <input type="submit" value="Apply"/>
                                            </div>
                                            <div class="clearfix"></div>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection

<style type="text/css">
    .form-style-5 {
        max-width: 500px;
        padding: 10px 20px;
        background: #f4f7f8;
        margin: 10px auto;
        padding: 20px;
        background: #f4f7f8;
        border-radius: 8px;
        font-family: Georgia, "Times New Roman", Times, serif;
    }

    .form-style-5 fieldset {
        border: none;
    }

    .form-style-5 legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    .form-style-5 label {
        display: block;
        margin-bottom: 8px;
    }

    .form-style-5 input[type="text"],
    .form-style-5 input[type="date"],
    .form-style-5 input[type="datetime"],
    .form-style-5 input[type="email"],
    .form-style-5 input[type="number"],
    .form-style-5 input[type="search"],
    .form-style-5 input[type="time"],
    .form-style-5 input[type="url"],
    .form-style-5 textarea,
    .form-style-5 select {
        font-family: Georgia, "Times New Roman", Times, serif;
        background: rgba(255, 255, 255, .1);
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin: 0;
        outline: 0;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #e8eeef;
        color: #8a97a0;
        -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
        margin-bottom: 30px;
    }

    .form-style-5 input[type="text"]:focus,
    .form-style-5 input[type="date"]:focus,
    .form-style-5 input[type="datetime"]:focus,
    .form-style-5 input[type="email"]:focus,
    .form-style-5 input[type="number"]:focus,
    .form-style-5 input[type="search"]:focus,
    .form-style-5 input[type="time"]:focus,
    .form-style-5 input[type="url"]:focus,
    .form-style-5 textarea:focus,
    .form-style-5 select:focus {
        background: #d2d9dd;
    }

    .form-style-5 select {
        -webkit-appearance: menulist-button;
        height: 35px;
    }

    .form-style-5 .number {
        background: #1abc9c;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
        border-radius: 15px 15px 15px 0px;
    }

    .form-style-5 input[type="submit"],
    .form-style-5 input[type="button"] {
        position: relative;
        display: block;
        padding: 19px 39px 18px 39px;
        color: #FFF;
        margin: 0 auto;
        background: #1abc9c;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        width: 100%;
        border: 1px solid #16a085;
        border-width: 1px 1px 3px;
        margin-bottom: 10px;
    }

    .form-style-5 input[type="submit"]:hover,
    .form-style-5 input[type="button"]:hover {
        background: #109177;
    }
</style>
