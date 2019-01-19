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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection


