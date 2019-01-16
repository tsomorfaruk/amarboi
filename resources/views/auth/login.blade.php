@section('title')
    User Login
@endsection
@extends('frontEnd.master')
@section('mainContent')
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">
                <div class="sign-in-form-top">
                    <h1>Log in</h1>
                </div>
                <div class="signin">
                    <div class="signin-rit">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="log-input">
                            <div class="log-input-left">
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
                            <div class="log-input-left">
                                <input id="password" type="password" class="lock" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember
                                        Me</label>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Log in">
                    </form>
                </div>
                <div class="new_people">
                    <h2>For New People</h2>
                    <p>Having hands on experience in creating innovative designs,I do offer design
                        solutions which harness.</p>
                    <a href="{{ route('register') }}">Register Now!</a>
                </div>
            </div>
        </div>
    </div>
@endsection