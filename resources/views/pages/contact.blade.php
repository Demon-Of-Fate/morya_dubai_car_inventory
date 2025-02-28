@extends('layout.user_layout')
@section('styleCode')
{{-- <link rel="stylesheet" type="text/css" href="https://moryacars.in/css/app-style.css?v=1649311718"> --}}
   
    <style>
    .whyus-experience-sec .csh1 {
    color: #f6f6f7;
    margin: 0;
    text-transform: uppercase;
    font-size: 80px;
    letter-spacing: 0.6;
}
.h1v1{
    font-size:10px;
    font-family: "Barlow Condensed", arial;
    font-weight: 700;
    line-height: 1.05;
    
}
.static h1{
    text-align: center;
    position: relative;
    margin: auto;
    margin-top: 50px;
    width: 98%;
    font-size: 20px;
    background: black;
    border-radius: 2rem;
    padding: 0.4em;
    box-shadow: 0 0 .2rem #fff, 0 0 .2rem #fff, 0 0 1rem #f3cb47, 0 0 0.8rem #f3cb47, 0 0 1rem #f3cb47, inset 0 0 1.3rem #f3cb47;
    color: #f3cb47;
}
.bg-gold{
    background: radial-gradient(circle, rgba(234, 194, 64, 1) 60%, rgba(176, 77, 1, 1) 100%);
}
.text-gold{
    text-decoration: none;
    color: red ;
}
.text-yellow{
    color: #D7B65D;
}
.cntnt-grp{
    background-color: #ffffff;
}
.frm-title{
    font-family: "Barlow Condensed", arial;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0;
}
.frm-input{
   
    color: #000;
    font-family: "Barlow Condensed", arial;
    font-size: 12px;
    font-weight: 500;
    line-height: 1.4;
    /* letter-spacing: 2px; */
    text-transform: uppercase;
    border: 1px solid #ccc;
    border-radius: 12px;
    padding: 15.5px 25px;
    margin: 5px 0 0;
    width: 12rem;
    max-width: 100%;
}
.frm{
    border-radius: 25px;
}
.locatemap  {
    color: #96969c;
    font-size: 15px;
    font-weight: 500;
    line-height: inherit;
    text-decoration: none;
    letter-spacing: 0;
    display: inline-block;
    vertical-align: middle;
    border-bottom: 1px solid #96969c;
    margin-left: 7px;
}
.banner-contact{
    background-repeat: no-repeat;
    background-size: cover;
    /* object-fit: cover; */
    background-position:center;
    width: 100%;
    min-height: 25rem;
    padding: 0px 50px;

}
/* .cntctfrm-grp textarea {
    min-height: 120px;
} */
@media (max-width: 769px){
    .whyus-experience-sec .csh1 {
    font-size: 50px;
  
}

}
@media (max-width: 577px){
    .flexrow{
    width: 100%;
}
}
@media (max-width: 480px){
    .whyus-experience-sec .csh1 {
    font-size: 10.6vw;
  
}
}
    </style>
@endsection
@section('content')

<div class="container-fluid banner-contact text-light d-flex justify-content-start align-items-center" style="background-image: url('{{asset('img/car-banner3.jpg')}}')">
    
    <div class="d-flex  flex-column justify-content-end">
        <h3 class=" fs-1 text-yellow">Contacts</h3>
    <h4>
       <a href="{{route('home')}}"  class="text-light text-decoration-none">Home</a>  /
        <a href="{{route('contactPage')}}" class="text-light text-decoration-none"> Contact</a>
        </h4>
    </div>
    
 </div>

 
    <div class="static">
       
    <section class="whyus-experience-sec">
            <div class="container">
                <div class="row ">
                    
                    <div class="col-lg-6">
                        <div class="cntnt-grp">
                            <div class="headings">
                                <h2 class="h1v1 csh1 mt-5">Contact</h2>
                                <h3>Contact <span class="trprt-txt">Us</span></h3>
                            
                            </div>
                            <p>We will always endeavour to respond quickly and reliably to your enquiries.</p>   
                            <ul class="contactusdetail-list list-unstyled">
                                <li class="mail">
                                    <div class="li-innr">
                                        <h6 class="h7"><a href="mailto:info@moryacars.in" class="text-gold fw-bold">info@moryacars.in</a></h6>
                                        <p>The best way to get answer faster.</p>
                                    </div>
                                </li>
                                <li class="call">
                                    <div class="li-innr">
                                        <h6 class="h7">For Preowned Cars</h6>
                                        <h6 class="h7 "><a href="tel:+917844979999" class="text-gold fw-bold">+91 78449 79999</a></h6>
                                    </div>
                                </li>
                                
                            </ul>
                            <br class="hide-480">
                            <h2 class="h4 sectitle">Our Showroom</h2>
                            <ul class="contactusloctn-list list-unstyled">
                                <li>
                                    <h6 class="h7">Address Andheri <a href="https://g.page/morya-cars-pvt-ltd?share" target="_blank" class="locatemap">Locate on map</a></h6>
                                    <p>Shop no 1, Sri Krishna building, new link road, opposite to fun republic mall, Andheri west, Mumbai.</p>
                                    <p><i class="fas fa-phone-square text-danger"></i> <a href="#" class="text-gold fw-light">+91 78449 79999</a></p>
                                </li>
                                
                            </ul>
                            <ul class="contactusloctn-list list-unstyled">
                                <li>
                                    <h6 class="h7">Address Powai <a href="https://goo.gl/maps/qNQaHXp2J2c7xgxZ6" target="_blank" class="locatemap">Locate on map</a></h6>
                                    <p>Morya cars pvt ltd, Jogeshwari - Vikhroli link road, near Suvarna temple, Panchkutir Ganesh Nagar, Powai, Mumbai.</p>
                                    <p><i class="fas fa-phone-square text-danger"></i> <a href="#" class="text-gold fw-light">+91 8888 499000</a></p>
                                </li>
                                
                            </ul>
                                <ul class="contactusloctn-list list-unstyled">
                                <li>
                                    <h6 class="h7">Address Navi Mumbai <!-- <a href="#" target="_blank" class="locatemap">Locate on map</a> --></h6>
                                    <p>Shop #6, Kshitij Tower, Sector 19, Palm Beach Road, Sanpada, Navi Mumbai-400705</p>
                                    <p><i class="fas fa-phone-square text-danger"></i> <a href="#" class="text-gold fw-light">+91 9819642909</a></p>
                                </li>
                                
                            </ul>
                            
                            <ul class="contactusloctn-list list-unstyled">
                                <li>
                                    <h6 class="h7 ">Address Pune <a href="https://goo.gl/maps/sBwoEhNM2scdtCdu6" target="_blank" class="locatemap">Locate on map</a></h6>
                                    <p>Shop No. 1 &amp; 2, B-Zone Kohinoor Mumbai, Pune Bangalore Highway Pashan Exit, next to Citroen showroom, Baner, Pune.</p>
                                    <p><i class="fas fa-phone-square text-danger"></i> <a href="#" class="text-gold fw-light">69133 29999 / 69139 29999</a></p>
                                </li>
                                
                            </ul>
                            <ul class="contactusloctn-list list-unstyled">
                                <li>
                                    <h6 class="h7">Address Dubai <a href="https://goo.gl/maps/Y4VgHBGxH6eYWtSs9" target="_blank" class="locatemap">Locate on map</a></h6>
                                    <p>Warehouse no. 2, plot no. 0369-0604 opposite NMC trading LLC, al Quoz Ind 4, Dubai 28005 - United Arab Emirates.</p>
                                    <p class="mb-5"><i class="fas fa-phone-square text-danger "></i> <a href="#" class="text-gold fw-light">05619 01125 </a></p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="frm shadow p-5 mt-5 mb-5">
                            <div>
                                <h3 class="h4  frm-title">Send us an email</h3>
                                <p class="fs-5">Drop us a line by using the below form</p>
                            </div>
                                <form action="" method="POST" data-parsley-validate="" id="form" novalidate="">
                                
                                <div class="row mb-3">
                                    <!-- First input field -->
                                    <div class="col-md-6 mb-3 mb-md-3">
                                       
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                                    </div>
                                    
                                    <!-- Second input field -->
                                    <div class="col-md-6 mb-3 mb-md-0">
                                      
                                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
                                    </div>

                                    <div class="col-md-6 mb-3 mb-md-3">
                             
                                        <input type="text" class="form-control" id="location" placeholder="Enter Your Loaction">
                                    </div>
                                    <div class="col-md-6 mb-3 mb-md-0">
                    
                                        <input type="number" class="form-control" id="phone" placeholder="Enter Your Number">
                                    </div>
                                    
                                    <!-- Textarea -->
                                    <div class="col-md-12 mb-3 mb-md-0">
                
                                        <textarea class="form-control" id="message" rows="5"  placeholder="Enter your message"></textarea>
                                    </div>
                                </div>


                                
                                <button type="submit" class="frmbtn btn btn btn-dark  w-25 mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
    
                
            </div>
        </section>
    </div>
   
@endsection
      
  
 