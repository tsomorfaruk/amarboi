@extends('frontEnd.master')
@section('title')
    Books Ad Show
@endsection
@section('mainContent')
    <div class="submit-ad main-grid-border">
        <div class="container">
            <h2 class="head">Show Ad Books</h2>
            @foreach($seller_ad_infos as $seller_ad_info)
                <div class="post-book-form">
                    <div class="book-pic">
                        <th>{{$seller_ad_info->id}}</th>
                        <a href="{{'/buy/'.$seller_ad_info->id}}"><img src="{{asset($seller_ad_info->bookImage)}}"
                                alt="{{$seller_ad_info->bookName}}"
                                 height="100px" width="100px">
                        </a>
                    </div>
                    <div class="book-info">
                        <a class="book-name" href="{{'/buy/'.$seller_ad_info->id}}">{{$seller_ad_info->bookName}}</a>
                        <p>
                            <span class="university-name">{{$seller_ad_info->universityName}}</span>
                            <span>, </span>
                            <span class="book-category">{{$seller_ad_info->categoryName}}</span>
                        </p>
                        <p class="book-price"><strong>৳ {{$seller_ad_info->bookPrice}}</strong></p>
                        <div class="book-date"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection











