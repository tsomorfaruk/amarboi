@section('title')
    User Registration
@endsection
@extends('frontEnd.master')
@section('mainContent')
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">
                <div class="sign-in-form-top">
                    <h1>User Registration</h1>
                </div>
                <div class="sign-in-up">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="log-input">
                            <div class="log-input-left">Name
                                <input id="name" type="text" class="user" name="name" value="{{ old('name') }}"
                                       onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'Your Name';}" required/>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">Email
                                <input id="email" type="text" class="user" name="email" value="{{ old('email') }}"
                                       onfocus="this.value = '';"
                                       onblur="if (this.value == '') {this.value = 'Your Email';}" required/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">Password
                                <input id="password" type="password" class="lock" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="log-input">
                            <div class="log-input-left">Confirm Password
                                <input id="password-confirm" type="password" class="lock" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="Registration">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection