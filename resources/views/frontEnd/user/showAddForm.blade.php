@extends('frontEnd.master')
@section('title')
    Add Form
@endsection
@section('mainContent')
    <div class="submit-ad main-grid-border">
        <div class="container">
            <h2 class="head">Sell or Rent Books</h2>
            <div class="post-ad-form">
                {!! Form::open(['url'=>'sell/save','method'=>'POST', 'name'=>'sellerForm', 'enctype'=>'multipart/form-data'])!!}
                    <label>Select Books Category <span>*</span></label>
                    <select class="" name="categoryId">
                        <option>Select Category Name</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->categoryName}}</option>
                            @endforeach
                    </select>
                <span class="text-danger">{{$errors->has('categoryName')? $errors->first('categoryName') :''}}</span>
                <div class="clearfix"></div>
                    <label>Book Name <span>*</span></label>
                    <input type="text" class="phone" name="bookName">
                <span class="text-danger">{{$errors->has('bookName')? $errors->first('bookName') :''}}</span>
                <div class="clearfix"></div>
                    <label>ISBN Number </label>
                    <input type="text" class="phone" name="isbnNumber">
                    <div class="clearfix"></div>
                    <label>Books Title <span>*</span></label>
                    <input type="text" class="phone" name="bookTitle" placeholder="Write title of books Ad">
                <span class="text-danger">{{$errors->has('bookTitle')? $errors->first('bookTitle') :''}}</span>
                    <div class="clearfix"></div>
                    <label>Books Description <span>*</span></label>
                    <textarea class="mess" name="bookDescription" placeholder="Write few lines about your product"></textarea>
                <span class="text-danger">{{$errors->has('bookDescription')? $errors->first('bookDescription') :''}}</span>
                <div class="clearfix"></div>
                <label>Books Price (Tk.)<span>*</span></label>
                <input type="number" class="phone" name="bookPrice">
                <span class="text-danger">{{$errors->has('bookPrice')? $errors->first('bookPrice') :''}}</span>
                <div class="clearfix"></div>
                    <div class="upload-ad-photos">
                        <label>Photos of your Book : *</label>
                        <div class="photos-upload-view">
                                <input type="file" name="bookImage" accept="image/*">
                                <span class="text-danger">{{$errors->has('bookImage')? $errors->first('bookImage') :''}}</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="personal-details">
                        {!! Form::open() !!}
                            <label>Your Name <span>*</span></label>
                            <input type="text" class="name" name="sellerName" placeholder="">
                            <span class="text-danger">{{$errors->has('sellerName')? $errors->first('sellerName') :''}}</span>
                            <div class="clearfix"></div>
                            <label>Your Mobile No <span>*</span></label>
                            <input type="text" class="phone" name="sellerMobileNo">
                            <span class="text-danger">{{$errors->has('sellerMobileNo')? $errors->first('sellerMobileNo') :''}}</span>
                            <div class="clearfix"></div>
                            <label>Your Email Address<span>*</span></label>
                            <input type="text" class="email" name="sellerEmail">
                            <span class="text-danger">{{$errors->has('sellerEmail')? $errors->first('sellerEmail') :''}}</span>
                            <div class="clearfix"></div>
                            <label>Select Your University </label>
                            <select class="" name="universityName">
                                <option name="ASA University Bangladesh">ASA University Bangladesh</option>
                                <option name="Ahsanullah University of Science and Technology">Ahsanullah University of Science and Technology</option>
                                <option name="American International University-Bangladesh">American International University-Bangladesh</option>
                                <option name="Anwer Khan Modern University">Anwer Khan Modern University</option>
                                <option name="Army University of Engineering and Technology (BAUET), Qadirabad">Army University of Engineering and Technology (BAUET), Qadirabad</option>
                                <option name="Asian University for Women">Asian University for Women</option>
                                <option name="Asian University of Bangladesh">Asian University of Bangladesh</option>
                                <option name="Atish Dipankar University of Science & Technology">Atish Dipankar University of Science & Technology</option>
                                <option name="BGC Trust University Bangladesh">BGC Trust University Bangladesh</option>
                                <option name="BGMEA University of Fashion & Technology(BUFT)">BGMEA University of Fashion & Technology(BUFT)</option>
                                <option name="BRAC University">BRAC University</option>
                                <option name="Bangabandhu Sheikh Mujib Medical University">Bangabandhu Sheikh Mujib Medical University</option>
                                <option name="Bangabandhu Sheikh Mujibur Rahman Agricultural University">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option>
                                <option name="Bangabandhu Sheikh Mujibur Rahman Maritime University">Bangabandhu Sheikh Mujibur Rahman Maritime University</option>
                                <option name="Bangabandhu Sheikh Mujibur Rahman Science & Technology University">Bangabandhu Sheikh Mujibur Rahman Science & Technology University</option>
                                <option name="Bangladesh Agricultural University">Bangladesh Agricultural University</option>
                                <option name="Bangladesh Army International University of Science & Technology(BAIUST) ,Comilla">Bangladesh Army International University of Science & Technology(BAIUST) ,Comilla</option>
                                <option name="Bangladesh Islami University">Bangladesh Islami University</option>
                                <option name="Bangladesh Open University">Bangladesh Open University</option>
                                <option name="Bangladesh University">Bangladesh University</option>
                                <option name="Bangladesh University of Business & Technology">Bangladesh University of Business & Technology</option>
                                <option name="Bangladesh University of Engineering & Technology">Bangladesh University of Engineering & Technology</option>
                                <option name="Bangladesh University of Health Sciences">Bangladesh University of Health Sciences</option>
                                <option name="Bangladesh University of Professionals">Bangladesh University of Professionals</option>
                                <option name="Bangladesh University of Textiles">Bangladesh University of Textiles</option>
                                <option name="Barisal University">Barisal University</option>
                                <option name="Begum Rokeya University">Begum Rokeya University</option>
                                <option name="Britannia University">Britannia University</option>
                                <option name="CCN University of Science & Technology">CCN University of Science & Technology</option>
                                <option name="Canadian University of Bangladesh">Canadian University of Bangladesh</option>
                                <option name="Central University of Science and Technology">Central University of Science and Technology</option>
                                <option name="Central Women's University">Central Women's University</option>
                                <option name="Chittagong Independent University">Chittagong Independent University</option>
                                <option name="Chittagong Medical University">Chittagong Medical University</option>
                                <option name="Chittagong University of Engineering & Technology">Chittagong University of Engineering & Technology</option>
                                <option name="Chittagong Veterinary and Animal Sciences University">Chittagong Veterinary and Animal Sciences University</option>
                                <option name="City University">City University</option>
                                <option name="Comilla University">Comilla University</option>
                                <option name="Cox's Bazar International University">Cox's Bazar International University</option>
                                <option name="Daffodil International University">Daffodil International University</option>
                                <option name="Dhaka International University">Dhaka International University</option>
                                <option name="Dhaka University of Engineering & Technology">Dhaka University of Engineering & Technology</option>
                                <option name="East Delta University">East Delta University</option>
                                <option name="East West University">East West University</option>
                                <option name="Eastern University">Eastern University</option>
                                <option name="European University of Bangladesh">European University of Bangladesh</option>
                                <option name="Exim Bank Agricultural University, Bangladesh">Exim Bank Agricultural University, Bangladesh</option>
                                <option name="Fareast International University">Fareast International University</option>
                                <option name="Feni University">Feni University</option>
                                <option name="First Capital University of Bangladesh">First Capital University of Bangladesh</option>
                                <option name="German University Bangladesh">German University Bangladesh</option>
                                <option name="Global University Bangladesh">Global University Bangladesh</option>
                                <option name="Gono Bishwabidyalay">Gono Bishwabidyalay</option>
                                <option name="Green University of Bangladesh">Green University of Bangladesh</option>
                                <option name="Hajee Mohammad Danesh Science & Technology University">Hajee Mohammad Danesh Science & Technology University</option>
                                <option name="Hamdard University Bangladesh">Hamdard University Bangladesh</option>
                                <option name="Hamdard University Bangladesh">Hamdard University Bangladesh</option>
                                <option name="Independent University, Bangladesh">Independent University, Bangladesh</option>
                                <option name="International Islamic University Chittagong">International Islamic University Chittagong</option>
                                <option name="International University of Business Agriculture & Technology">International University of Business Agriculture & Technology</option>
                                <option name="Ishakha International University, Bangladesh">Ishakha International University, Bangladesh</option>
                                <option name="Islamic Arabic University">Islamic Arabic University</option>
                                <option name="Islamic University">Islamic University</option>
                                <option name="Islamic University of Technology, Gazipur">Islamic University of Technology, Gazipur</option>
                                <option name="Jagannath University">Jagannath University</option>
                                <option name="Jahangirnagar University">Jahangirnagar University</option>
                                <option name="Jatiya Kabi Kazi Nazrul Islam University">Jatiya Kabi Kazi Nazrul Islam University</option>
                                <option name="Jessore University of Science & Technology">Jessore University of Science & Technology</option>
                                <option name="Khulna University">Khulna University</option>
                                <option name="Khulna University of Engineering and Technology">Khulna University of Engineering and Technology</option>
                                <option name="Khwaja Yunus Ali University">Khwaja Yunus Ali University</option>
                                <option name="Leading University">Leading University</option>
                                <option name="Manarat International University">Manarat International University</option>
                                <option name="Mawlana Bhashani Science & Technology University">Mawlana Bhashani Science & Technology University</option>
                                <option name="Metropolitan University">Metropolitan University</option>
                                <option name="N.P.I University of Bangladesh">N.P.I University of Bangladesh</option>
                                <option name="National University">National University</option>
                                <option name="Noakhali Science & Technology University">Noakhali Science & Technology University</option>
                                <option name="North Bengal International University">North Bengal International University</option>
                                <option name=" North East University Bangladesh"> North East University Bangladesh</option>
                                <option name="North South University">North South University</option>
                                <option name="North Western University">North Western University</option>
                                <option name="Northern University Bangladesh">Northern University Bangladesh</option>
                                <option name="Northern University of Business & Technology, Khulna">Northern University of Business & Technology, Khulna</option>
                                <option name="Notre Dame University Bangladesh">Notre Dame University Bangladesh</option>
                                <option name="Pabna University of Science and Technology">Pabna University of Science and Technology</option>
                                <option name="Patuakhali Science And Technology University">Patuakhali Science And Technology University</option>
                                <option name="Port City International University">Port City International University</option>
                                <option name="Premier University">Premier University</option>
                                <option name="Presidency University">Presidency University</option>
                                <option name="Prime University">Prime University</option>
                                <option name="Primeasia University">Primeasia University</option>
                                <option name="Pundra University of Science & Technology">Pundra University of Science & Technology</option>
                                <option name="Queens University">Queens University</option>
                                <option name="Rabindra Maitree University, Kushtia">Rabindra Maitree University, Kushtia</option>
                                <option name="Rabindra University, Bangladesh">Rabindra University, Bangladesh</option>
                                <option name="Rajshahi Medical University">Rajshahi Medical University</option>
                                <option name="Rajshahi Science & Technology University (RSTU), Natore">Rajshahi Science & Technology University (RSTU), Natore</option>
                                <option name="Rajshahi University of Engineering & Technology">Rajshahi University of Engineering & Technology</option>
                                <option name="Ranada Prasad Shaha University">Ranada Prasad Shaha University</option>
                                <option name="Rangamati Science and Technology University">Rangamati Science and Technology University</option>
                                <option name="Royal University of Dhaka">Royal University of Dhaka</option>
                                <option name="Rupayan A.K.M Shamsuzzoha University">Rupayan A.K.M Shamsuzzoha University</option>
                                <option name="Shahjalal University of Science & Technology">Shahjalal University of Science & Technology</option>
                                <option name="Shanto-Mariam University of Creative Technology">Shanto-Mariam University of Creative Technology</option>
                                <option name="Sheikh Fazilatunnesa Mujib University">Sheikh Fazilatunnesa Mujib University</option>
                                <option name="Sher-e-Bangla Agricultural University">Sher-e-Bangla Agricultural University</option>
                                <option name="Sonargaon University">Sonargaon University</option>
                                <option name="South Asian University">South Asian University</option>
                                <option name="Southeast University">Southeast University</option>
                                <option name="Southern University Bangladesh">Southern University Bangladesh</option>
                                <option name="Stamford University Bangladesh">Stamford University Bangladesh</option>
                                <option name="State University of Bangladesh">State University of Bangladesh</option>
                                <option name="Sylhet Agricultural University">Sylhet Agricultural University</option>
                                <option name="Sylhet International University">Sylhet International University</option>
                                <option name="Tagore University of Creative Arts, Keranigonj, Bangladesh">Tagore University of Creative Arts, Keranigonj, Bangladesh</option>
                                <option name="The International University of Scholars">The International University of Scholars</option>
                                <option name="The Millennium University">The Millennium University</option>
                                <option name="The People's University of Bangladesh">The People's University of Bangladesh</option>
                                <option name="The University of Asia Pacific">The University of Asia Pacific</option>
                                <option name="Times University, Bangladesh">Times University, Bangladesh</option>
                                <option name="United International University">United International University</option>
                                <option name="University of Chittagong">University of Chittagong</option>
                                <option name="University of Creative Technology, Chittagong">University of Creative Technology, Chittagong</option>
                                <option name="University of Development Alternative">University of Development Alternative</option>
                                <option name="University of Dhaka">University of Dhaka</option>
                                <option name="University of Global Village">University of Global Village</option>
                                <option name="University of Information Technology & Sciences">University of Information Technology & Sciences</option>
                                <option name="University of Liberal Arts Bangladesh">University of Liberal Arts Bangladesh</option>
                                <option name="University of Rajshahi">University of Rajshahi</option>
                                <option name="University of Science & Technology Chittagong">University of Science & Technology Chittagong</option>
                                <option name="University of South Asia">University of South Asia</option>
                                <option name="Uttara University">Uttara University</option>
                                <option name="Varendra University">Varendra University</option>
                                <option name="Victoria University of Bangladesh">Victoria University of Bangladesh</option>
                                <option name="World University of Bangladesh">World University of Bangladesh</option>
                                <option name="Z.H Sikder University of Science & Technology">Z.H Sikder University of Science & Technology</option>
                            </select>
                            <div class="clearfix"></div>
                            <p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> and <a href="privacy.html" target="_blank">Privacy Policy</a></p>
                            <input type="submit" value="Post">
                            <div class="clearfix"></div>
                        {!! Form::close() !!}
                    </div>
            </div>
        </div>
    </div>
@endsection