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
                            <li><a href="{{'/home'}}"> My Profile</a></li>
                            <li><a href="{{'/update-profile'}}"> Update Profile</a></li>
                            <li><a href="{{'/my-ads'}}"> My Ads</a></li>
                            <li><a href="{{'/logout'}}"> Logout</a></li>
                        </ul>
                    </div>

                </div>
                <div class="ads-display col-md-9">
                    <div class="wrapper">
                        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home"
                                       aria-expanded="true">
                                        <span class="text">All Ads</span>
                                    </a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home"
                                     aria-labelledby="home-tab">
                                    <div>

                                        {!! Form::open() !!}
                                        <div class="form-style-4" action="" method="post">
                                            <label for="field1">
                                                <span>Enter Your Name</span><input type="text" name="field1" value="{{ Auth::user()->name }}"
                                                                                   required="true"/>
                                            </label>
                                            <label for="field2">
                                                <span>Email Address</span><input type="email" name="field2" value="{{ Auth::user()->email }}"
                                                                                 required="true"/>
                                            </label>
                                            <label for="field2">
                                                <span>Mobile Number</span><input type="email" name="field2"
                                                                                 required="true"/>
                                            </label>
                                            <label for="field2">
                                                <span>Date of Birth</span><input type="text" id="datepicker"/>
                                            </label>
                                            <label for="field2">
                                                <span>Gender</span>
                                            </label><br>
                                            <label for="field2">
                                                <input type="radio" name="male" required="true"/>
                                                <span style="margin-left: 100px">Male</span>
                                            </label>
                                            <label for="field2">
                                                <input type="radio" name="male" required="true"/>
                                                <span style="margin-left: 100px">Female</span>
                                            </label>
                                            <label for="field2">
                                                <span>Address</span><input type="email" name="field2" required="true"/>
                                            </label>
                                            <label for="field3">
                                                <span>Short Subject</span><input type="text" name="field3"
                                                                                 required="true"/>
                                            </label>
                                            <label for="field4">
                                                <span>Message to Us</span><textarea name="field4"
                                                                                    onkeyup="adjust_textarea(this)"
                                                                                    required="true"></textarea>
                                            </label>
                                            <label>
                                                <span> </span><input type="submit" value="Send Letter"/>
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                        {!! Form::close() !!}
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

    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                dateFormat: "dd-mm-yy",
                defaultDate: new Date(2009,11,31),
                changeMonth: true,
                changeYear: true,
                yearRange: '1950:2009'
            });
        } );
    </script>

    <script type="text/javascript">
        //auto expand textarea
        function adjust_textarea(h) {
            h.style.height = "20px";
            h.style.height = (h.scrollHeight) + "px";
        }
    </script>

@endsection

<style type="text/css">
    .form-style-4 {
        width: 450px;
        font-size: 16px;
        background: #f4f4f4;
        padding: 30px 30px 15px 30px;
        margin-left: 150px;
        border: 5px solid #01a185;
    }

    .form-style-4 input[type=submit],
    .form-style-4 input[type=button],
    .form-style-4 input[type=text],
    .form-style-4 input[type=email],
    .form-style-4 textarea,
    .form-style-4 label {
        font-family: Georgia, "Times New Roman", Times, serif;
        font-size: 16px;
        color: #f3c500;

    }

    .form-style-4 label {
        display: block;
        margin-bottom: 10px;
    }

    .form-style-4 label > span {
        display: inline-block;
        float: left;
        width: 150px;
    }

    .form-style-4 input[type=text],
    .form-style-4 input[type=email] {
        background: transparent;
        border: none;
        border-bottom: 1px dashed #83A4C5;
        width: 275px;
        outline: none;
        padding: 0px 0px 0px 0px;
        font-style: italic;
    }

    .form-style-4 textarea {
        font-style: italic;
        padding: 0px 0px 0px 0px;
        background: transparent;
        outline: none;
        border: none;
        border-bottom: 1px dashed #83A4C5;
        width: 275px;
        overflow: hidden;
        resize: none;
        height: 20px;
    }

    .form-style-4 textarea:focus,
    .form-style-4 input[type=text]:focus,
    .form-style-4 input[type=email]:focus,
    .form-style-4 input[type=email] :focus {
        border-bottom: 1px dashed #F3C500;
    }

    .form-style-4 input[type=submit],
    .form-style-4 input[type=button] {
        background: #F3C500;
        border: none;
        padding: 8px 10px 8px 10px;
        border-radius: 5px;
        color: #ffffff;
    }

    .form-style-4 input[type=submit]:hover,
    .form-style-4 input[type=button]:hover {
        background: rgba(1, 161, 133, 0.65);
    }
</style>
