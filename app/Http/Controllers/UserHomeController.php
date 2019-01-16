<?php

namespace App\Http\Controllers;

use App\SellerAdInfo;
use Illuminate\Http\Request;
use App\Category;

class UserHomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('frontEnd.user.showLoginForm');
    }
    public function showAdForm()
    {
        $categories = Category::where('publicationStatus',1)->get();
        return view('frontEnd.user.showAddForm',['categories'=>$categories]);
    }
    public function storeAdForm(Request $request)
    {
        $this->validate($request,[
            'bookName'=>'required',
            'bookTitle'=>'required',
            'bookDescription'=>'required',
            'bookPrice'=>'required',
            'bookImage'=>'required',
            'sellerName'=>'required',
            'sellerMobileNo'=>'required',
            'sellerEmail'=>'required',
        ]);
        $bookImage = $request->file('bookImage');
        $imageName = $bookImage->getClientOriginalName();
        $newImageName = explode('.', $imageName, 2);
        $newImageName[0] = $request->bookName;
        $newImageName = implode('.', $newImageName);
        $uploadPath = 'bookImage/';
        $bookImage->move($uploadPath, $newImageName);
        $imageUrl = $uploadPath . $newImageName;
        $this->saveAdForm($request, $imageUrl);
        return redirect('/home')->with('message', 'Your Book\'s Ad published successfully!!!');
    }
    public function saveAdForm($request, $imageUrl)
    {
        $sellerAdForm = new SellerAdInfo();
        $sellerAdForm->categoryId = $request->categoryId;
        $sellerAdForm->bookName = $request->bookName;
        $sellerAdForm->isbnNumber = $request->isbnNumber;
        $sellerAdForm->bookTitle = $request->bookTitle;
        $sellerAdForm->bookDescription = $request->bookDescription;
        $sellerAdForm->bookPrice = $request->bookPrice;
        $sellerAdForm->bookImage = $imageUrl;
        $sellerAdForm->sellerName = $request->sellerName;
        $sellerAdForm->sellerMobileNo = $request->sellerMobileNo;
        $sellerAdForm->sellerEmail = $request->sellerEmail;
        $sellerAdForm->universityName = $request->universityName;
        $sellerAdForm->save();
    }
}
