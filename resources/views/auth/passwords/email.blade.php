@section('title')
    Reset Password
@endsection
@extends('frontEnd.master')
@section('mainContent')
    <div id="page-wrapper" class="sign-in-wrapper">
        <div class="graphs">
            <div class="sign-in-form">
                <div class="sign-in-form-top">
                    <h1>Reset Password</h1>
                </div>
                <div class="signin">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="log-input">
                            <div class="log-input-left">E-Mail Address
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
                        <input type="submit" value="Password Reset Link">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

