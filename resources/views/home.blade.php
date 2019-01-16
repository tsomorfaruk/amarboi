@section('title')
    {{--User Dashboard--}}
    {{ Auth::user()->name }}
@endsection
@extends('frontEnd.master')
@section('mainContent')




    <div class="categories-section main-grid-border">
        <div class="container">
            <h2 class="head">My Profile</h2>
            <div class="category-list">
                <div id="parentVerticalTab">
                    <ul class="resp-tabs-list hor_1">
                        <li>My Profile</li>
                        <li>Update Profile</li>
                        <li>My Ads</li>
                        <li>Logout</li>
                    </ul>
                    <div class="resp-tabs-container hor_1">
                        <span class="active total" style="display:block;" data-toggle="modal"
                              data-target="#myModal"><strong>Show Profile</strong></span>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{URL::asset('frontEnd/images/cat1.png')}}" title="image" alt=""/>
                                </div>
                                <div class="category-info">
                                    <h4>{{Auth::user()->name}}</h4>
                                    <span>{{Auth::user()->email}}</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div>
                            {!! Form::open() !!}
                            <div class="form-style-5">
                                <fieldset>
                                    <legend><span class="number">1</span> Candidate Info</legend>
                                    <input type="text" name="field1" placeholder="Your Name *">
                                    <input type="email" name="field2" placeholder="Your Email *">
                                    <textarea name="field3" placeholder="About yourself"></textarea>
                                </fieldset>
                                <input type="submit" value="Apply"/>
                            </div>
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>



    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <h2 class="text-center text-success">{{Session::get('message')}}</h2>
            <div class="book-info">
                <p>
                    <span class="university-name">{{Auth::user()->name}}</span>
                    <span>, </span>
                    <span class="book-category">{{Auth::user()->email}}</span>
                </p>
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
