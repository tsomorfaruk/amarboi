@extends('frontEnd.master')
@section('title')
    Books Ad Show
@endsection
@section('mainContent')
    <div class="submit-ad main-grid-border">
        <div class="container">
            <h2 class="head">Show Ad Books</h2>
            <div>
                <h2>{{$item_detailById->bookName}}</h2>
                <img src="{{asset($item_detailById->bookImage)}}" alt="{{$item_detailById->bookName}}" width="250" height="250">
                <h3>{{$item_detailById->sellerName}}</h3>
                <h3>{{$item_detailById->sellerMobileNo}}</h3>
                <h3>{{$item_detailById->sellerEmail}}</h3>
                <h3>{{$item_detailById->universityName}}</h3>
                <h3>{{$item_categoryByName->categoryName}}</h3>
                <h3>{{$item_detailById->sellerName}}</h3>
                <h3>{{$item_detailById->sellerName}}</h3>
            </div>
        </div>
    </div>
    </div>
@endsection











