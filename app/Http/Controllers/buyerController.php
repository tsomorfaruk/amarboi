<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\SellerAdInfo;
use DB;

class buyerController extends Controller
{

    public function showAd()
    {
        $seller_ad_infoById=DB::table('seller_ad_infos')
            ->join('categories','seller_ad_infos.categoryId','=','categories.id')
            ->select('seller_ad_infos.*','categories.categoryName')
            ->get();
        /*echo "</pre>";
        print_r($seller_ad_infoById);
        exit();*/
        return view('frontEnd.home.showAdContent', ['seller_ad_infos'=>$seller_ad_infoById]);
    }
    public function showAdForm($id)
    {
        $item_detailById = SellerAdInfo::where('id', $id)->first();
        $item_categoryById = $item_detailById->categoryId;
        $item_categoryByName = Category::where('id', $item_categoryById)->first();
        return view('frontEnd.home.itemDetailsContent', ['item_detailById'=>$item_detailById, 'item_categoryByName'=>$item_categoryByName]);
    }
}
