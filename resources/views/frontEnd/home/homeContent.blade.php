@extends('frontEnd.master')
@section('title')
    Book Store
@endsection
@section('mainContent')
    <div class="main-banner banner text-center" style="min-height: 150px">
        <div class="container" style="padding-bottom: 20px">
            <a href="{{'/buy'}}">Buy</a>
            <a href="{{'/sell'}}">Sell/Rent</a>
            <a href="post-ad.html">eBooks</a>
        </div>
    </div>
    <div class="content">
        <div class="categories">
            <div class="container">
                <div class="col-md-3 focus-grid">
                    <a href="categories.html">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-mobile"></i></div>
                                <h4 class="clrchg">Mobiles</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 focus-grid">
                    <a href="categories.html#parentVerticalTab12">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image"><i class="fa fa-home"></i></div>
                                <h4 class="clrchg">Real Estate</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection