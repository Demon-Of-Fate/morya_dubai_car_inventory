@extends('layout.user_layout')

@section('styleCode')
<style>
     * {
       margin: 0;
       padding: 0;
       box-sizing: border-box;
     }
     body {
       font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       color: #333;
       /* overflow-x: hidden; */
     }
     
    /* Home page slider part start  */

    .slider-section{
        height: 50rem;
        width: 100%;
        
    }
    /* Home page slider part end */


    /* home page service part Start */

    .imageservice1 img {
        border-radius: 100%;
        width: 100px;
        height: 100px;
    }

    .textservice1 p {
        color: #D7B65D;
        font-size: 1.3rem;
    }

    /* Home Page Service Part End */

    /* Home page hero start */
    /* 

    .homehero div #homeheroheading {
        font-size: 2.5rem;
        width: 70%;
    } */.homehero {
        height: auto;
    }

    .homehero  button {
        background-color: #D7B65D;
        border: 1px solid #D7B65D;
        padding: 10px 40px;
    }

    /* .homehero div {
        width: 50%;
        padding: 0 30px;
    }

    .homehero p img {
        width: 100%;
        height: 330px;
    } */

    .slider-container {
       position: relative;
       width: 100%;
       height: 80vh;
       overflow: hidden;
     }
     
     .slider {
       width: 100%;
       height: 100%;
       position: relative;
     }
     
     .slide {
       position: absolute;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       opacity: 0;
       transition: opacity 1s ease-in-out;
       background-size: cover;
       background-position: center;
       display: flex;
       align-items: center;
       justify-content: center;
     }
     
     .slide.active {
       opacity: 1;
     }
     
     .slide::before {
       content: '';
       position: absolute;
       top: 0;
       left: 0;
       right: 0;
       bottom: 0;
       background: rgba(0, 0, 0, 0.5);
     }
     
     .slide-content {
       position: relative;
       z-index: 10;
       text-align: center;
       max-width: 800px;
       padding: 0 20px;
       color: white;
     }
     
     .slide-title {
       font-size: 3rem;
       margin-bottom: 1rem;
       font-weight: 700;
       text-transform: uppercase;
       letter-spacing: 1px;
     }
     
     .slide-subtitle {
       font-size: 1.5rem;
       margin-bottom: 2rem;
       font-weight: 300;
     }
     
     .slide-btn {
       display: inline-block;
       padding: 15px 30px;
       background-color: #f7c427;
       color: #333;
       text-decoration: none;
       font-weight: 600;
       text-transform: uppercase;
       letter-spacing: 1px;
       border-radius: 4px;
       transition: all 0.3s ease;
     }
     
     .slide-btn:hover {
       background-color: #e4b419;
       transform: translateY(-3px);
     }
     
     .slider-controls {
       position: absolute;
       bottom: 30px;
       left: 0;
       right: 0;
       display: flex;
       justify-content: center;
       z-index: 10;
     }
     
     .slider-dot {
       width: 12px;
       height: 12px;
       background-color: rgba(255, 255, 255, 0.5);
       border-radius: 50%;
       margin: 0 5px;
       cursor: pointer;
       transition: all 0.3s ease;
     }
     
     .slider-dot.active {
       background-color: #f7c427;
       transform: scale(1.2);
     }
     
     .slider-arrows {
       position: absolute;
       top: 50%;
       left: 0;
       right: 0;
       display: flex;
       justify-content: space-between;
       z-index: 10;
       transform: translateY(-50%);
       padding: 0 30px;
     }
     
     .slider-arrow {
       width: 50px;
       height: 50px;
       background-color: rgba(0, 0, 0, 0.5);
       border-radius: 50%;
       display: flex;
       align-items: center;
       justify-content: center;
       cursor: pointer;
       transition: all 0.3s ease;
     }
     
     .slider-arrow:hover {
       background-color: rgba(0, 0, 0, 0.8);
     }
     .bg-gold{
        color:#D7B65D;
     }
     
     .slider-arrow i {
       color: white;
       font-size: 1.5rem;
     }
     .comfort{
        line-height: 1.2;
     }
     .incredible{
        line-height: 0.8;
     }
     /* @media( max-width: 1200px){
        .luxury-car{
            display: none;
        }
     } */
      @media (max-width: 1200px){
        .luxury-car{
            display:none;
        }
      }
     
     @media (max-width: 768px) {
       .slide-title {
         font-size: 2rem;
       }
       
       .slide-subtitle {
         font-size: 1.2rem;
       }
       
       .slide-btn {
         padding: 12px 24px;
       }
       
       .slider-arrows {
         padding: 0 15px;
       }
       
       .slider-arrow {
         width: 40px;
         height: 40px;
       }
       .trip-img{
        display: none;
       }
       .trip-left{
        display: flex;
        align-items: center;
        justify-content: center;
        padding-left:0px; 
        margin-left: -40rem;
        flex-direction: column;
        
       }
       
     }
    

    /* Home page hero end */
</style>
@section('content')
 <!-- Start slider Section -->
   <div class="slider-container">
     <div class="slider">
       <div class="slide active" style="background-image: url('http://limme.like-themes.com/wp-content/uploads/2020/11/SLIDE_05.jpg');">
         <div class="slide-content">
           <h2 class="slide-title">Luxury Mourya Cars Service</h2>
           <p class="slide-subtitle">Experience the ultimate in luxury transportation for any occasion</p>
           <a href="{{route('collection')}}" class="slide-btn">Book Now</a>
         </div>
       </div>
       <div class="slide" style="background-image: url('http://limme.like-themes.com/wp-content/uploads/2020/11/SLIDE_03.jpg');">
         <div class="slide-content">
           <h2 class="slide-title">Corporate Transportation</h2>
           <p class="slide-subtitle">Reliable and professional service for your business needs</p>
           <a href="{{route('collection')}}" class="slide-btn">View Collection</a>
         </div>
       </div>
       <div class="slide" style="background-image: url('http://limme.like-themes.com/wp-content/uploads/2020/11/SLIDE_02.jpg');">
         <div class="slide-content">
           <h2 class="slide-title">Special Events</h2>
           <p class="slide-subtitle">Make your wedding, prom or special occasion memorable</p>
           <a href="{{route('collection')}}" class="slide-btn">View Cars</a>
         </div>
       </div>
     </div>
     
     <div class="slider-controls">
       <div class="slider-dot active" data-index="0"></div>
       <div class="slider-dot" data-index="1"></div>
       <div class="slider-dot" data-index="2"></div>
     </div>
     
     <div class="slider-arrows">
       <div class="slider-arrow slider-prev">
         <i>←</i>
       </div>
       <div class="slider-arrow slider-next">
         <i>→</i>
       </div>
     </div>
   </div>
  <!-- End slider Section -->


   <!-- Start Services Section -->
   <div class="container-fluid px-0">  <!-- Container with no horizontal padding -->
    <div class="bg-dark text-light"> <!-- Background color container -->
      <div class="container">  <!-- Standard Bootstrap container -->
        <div class="row py-5"> <!-- Row with vertical padding only -->
          <div class="col-lg-4 d-flex mt-3">
            <div class="imageservice1">
              <img src="http://limme.like-themes.com/wp-content/uploads/2019/06/serv_01-100x100.jpg" alt="service">
            </div>
            <div class="textservice1 px-4">
              <p>Car Transfer</p>
              <span>Transfer your car from one place to another.</span>
            </div>
          </div>
          <div class="col-lg-4 d-flex mt-3">
            <div class="imageservice1">
              <img src="http://limme.like-themes.com/wp-content/uploads/2019/06/serv_02-100x100.jpg" alt="service">
            </div>
            <div class="textservice1 px-4">
              <p>Business Transfer</p>
              <span>Experience the ultimate in luxury transportation for any occasion</span>
            </div>
          </div>
          <div class="col-lg-4 d-flex mt-3">
            <div class="imageservice1">
              <img src="http://limme.like-themes.com/wp-content/uploads/2019/06/serv_03-100x100.jpg" alt="service">
            </div>
            <div class="textservice1 px-4">
              <p>Events & Weddings</p>
              <span>Make your Weddings Special With our Rental Car .</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- End Services Section -->


{{-- <div class="homehero d-flex flex-wrap align-items-center">
    <div >
        <p id="homeheroheading"><span style="color: #FFC107;">Luxury Cars</span> for Maximum
            Satisfaction</p>
        <p>Nullam sed ultricies erat, nec euismod metus. Morbi porttitor sapien vitae leo scelerisque. Nullam sed ultricies erat.</p>
        <button class="btn">Read More</button>
    </div>
    <p class="d-flex">
        <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-limmo.png" class="img-fluid luxury-car" alt="main hero">
    </p>
</div> --}}
{{-- <div class="homehero d-flex flex-wrap align-items-center">
    <div >
        <p id="homeheroheading"><span style="color: #FFC107;">Luxury Cars</span> for Maximum
            Satisfaction</p>
        <p>Nullam sed ultricies erat, nec euismod metus. Morbi porttitor sapien vitae leo scelerisque. Nullam sed ultricies erat.</p>
        <button class="btn">Read More</button>
    </div>
    <p class="d-flex">
        <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-limmo.png" class="img-fluid luxury-car" alt="main hero">
    </p>
</div> --}}

<!-- Hero Section Start  -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 homehero d-flex justify-content-center align-items-center flex-column text-center">
            
            <p id="homeheroheading" class="fs-1 w-50 text-center mt-5"><span style="color: #D7B65D;">Luxury Cars</span> for Maximum
                Satisfaction</p>
            <p class="mb-5">Feel the Luxury that can make your every Special moment Memorial with our latest Car Design and Model</p>
            {{-- <button class="btn mb-5">Read More</button> --}}
            

        </div>
        <div class="col-lg-6">
            <p class="d-flex mt-5">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-limmo.png" class="img-fluid luxury-car" alt="main hero">
            </p>

        </div>
    </div>
</div>  
<!-- Hero Section End  -->

<!-- Collection Section Start  -->
<div class="container mt-5">
    <div class="row g-4 mb-5">
      @foreach($cars as $c)
      @if($c->main_image==1)
      <div class="col-md-6 col-lg-6 col-xl-4">
          <div class="servicecard " style="border:1px grey dotted;">
              <div class="d-flex justify-content-center">
                  <img src="https://www.app.moryacarsdubai.com/upload/car_images/{{$c->images}}" alt="{{$c->variant}}" class="img-fluid w-100" alt="car image" style="height: 15rem; object-fit: cover;">
              </div>
              <div class="px-4">
                  <p class="fs-5 mt-2">{{strtoupper($c->brand)}} {{strtoupper($c->model)}} {{strtoupper($c->variant)}}</p>
                  <div class="d-flex justify-content-between align-items-center px-1">
                      <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                          <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-wrench"></i></span>
                          <span>MFG : {{$c->mfgDate}}</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                          <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-car-side"></i></span>
                          <span>{{$c->usedkm}} KM</span>
                      </div>
                      <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                          <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-gas-pump"></i></span>
                          <span>{{$c->fueltype}}</span>
                      </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center my-2">
                      <p><span style="color:#D7B65D;font-size:1.5rem">₹ </span>{{$c->sellingprice}}</p>
                      <p>⭐⭐⭐⭐</p>
                  </div>
                  <a href="{{ route('carDetail',$c->id) }}"><button class="btn mb-4 mt-2 py-3" style="background-color: #D7B65D;width:100%;">View Details</button></a>
              </div>
          </div>
      </div>
      @endif
      @endforeach
        {{-- <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="servicecard p-3" style="border:1px grey dotted;">
                <div class="d-flex justify-content-center">
                    <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_01-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
                </div>
                <div class="px-4">
                    <p style="font-size: 1.7rem;">Cadillac Limousine XTS</p>
                    <p>Insured, leather interior, air conditioning, rain sensor, panoramic roof</p>
                    <div class="d-flex justify-content-between align-items-center px-1">
                        <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p><span style="color:#D7B65D;font-size:1.5rem">260$ / </span>per hour</p>
                        <p>⭐⭐⭐⭐</p>
                    </div>
                    <button class="btn mb-4 mt-2 py-3" style="background-color: #D7B65D;width:100%;">Get Limousine</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="servicecard p-3" style="border:1px grey dotted;">
                <div class="d-flex justify-content-center">
                    <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_01-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
                </div>
                <div class="px-4">
                    <p style="font-size: 1.7rem;">Cadillac Limousine XTS</p>
                    <p>Insured, leather interior, air conditioning, rain sensor, panoramic roof</p>
                    <div class="d-flex justify-content-between align-items-center px-1">
                        <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-2" style="border: 1px solid #D7B65D;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p><span style="color:#D7B65D;font-size:1.5rem">260$ / </span>per hour</p>
                        <p>⭐⭐⭐⭐</p>
                    </div>
                    <button class="btn mb-4 mt-2 py-3" style="background-color: #D7B65D;width:100%;">Get Limousine</button>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="d-flex justify-content-center mt-4 mb-5">
      <button class="btn" style="padding: 1rem 2rem; border-radius:15px; border:none; background-color: #D7B65D;">
        <a class="text-dark" style="text-decoration: none;" href="{{ route('collection') }}">View Collections</a>
      </button>
    </div>
</div>

<!-- Collection Section End  -->


<div style="background-image:url('https://images.unsplash.com/photo-1597200381847-30ec200eeb9a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')" class="text-center py-5">
    <div class="d-flex justify-content-center align-items-center flex-column">
        <p class="" style="width: 30%;font-size:1.3rem">We value the time and quality of travel for each of our clients</p>
        <p class="d-flex flex-column incredible" style="width:80%;"><span class="p-0 m-0 bg-gold">Incredible</span> <span class="p-0 m-0 comfort">comfort</span></p>
    </div>
    <div>
        <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-limmo-large.png" alt="image here"class="img-fluid" style="max-width: 100%;">
    </div>
</div>
<div class="bg-dark text-light" style="padding: 3rem;">
    <div class="d-flex justify-content-between ">
        <div style="width: 100%;">
            <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-chairs.png" alt="car image"class="trip-img img-fluid h-100">
        </div>
        <div style="width:100%;" class="trip-left p-3">
            <p style="text-transform: capitalize;font-size:2.2rem">We make sure that <span class="text-warning">your every trip</span> is comfortable</p>
            <div class="row mt-5">
                <div class="col-md-4 p-3 d-flex justify-content-center align-items-center flex-column text-center" style="border-right: 1px dashed;">
                    <span style="font-size: 3rem;color:#D7B65D"><i class="fa-solid fa-car"></i></span>
                    <span>Luxury Limousine Selection</span>
                </div>
                <div class="col-md-4 p-3 d-flex justify-content-center align-items-center flex-column text-center" style="border-right: 1px dashed;">
                    <span style="font-size: 3rem;color:#D7B65D"><i class="fa-solid fa-phone"></i></span>
                    <span>27/7 Order Available</span>
                </div>
                <div class="col-md-4 p-3 d-flex justify-content-center align-items-center flex-column text-center" style="border-right: 1px dashed;">
                    <span style="font-size: 3rem;color:#D7B65D"><i class="fa-solid fa-clock"></i></span>
                    <span>Fast Car Delivery Service</span>
                </div>
                <div class="col-md-4 mt-5 p-3 d-flex justify-content-center align-items-center flex-column text-center" style="border-right: 1px dashed;">
                    <span style="font-size: 3rem;color:#D7B65D"><i class="fa-solid fa-chair"></i></span>
                    <span>High Safety and Nurity</span>
                </div>
                <div class="col-md-4 mt-5 p-3 d-flex justify-content-center align-items-center flex-column text-center" style="border-right: 1px dashed;">
                    <span style="font-size: 3rem;color:#D7B65D"><i class="fa-solid fa-tag"></i></span>
                    <span>Fixed Price & Bonus System</span>
                </div>
                <div class="col-md-4 mt-5 p-3 d-flex justify-content-center align-items-center flex-column text-center" style="border-right: 1px dashed;">
                    <span style="font-size: 3rem;color:#D7B65D"><i class="fa-regular fa-id-card"></i></span>
                    <span>Professional Car Drivers</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="background-image: url('https://images.unsplash.com/photo-1562373170-3bb8cc71d3c3?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');height:100vh;" class="d-flex justify-content-center align-items-center">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <p class="text-center" style="font-size:3rem;color:white"><span class="text-warning">To the airport</span> <br> with maximum comfort</p>
        <p class="text-light text-center" style="font-size:1.5rem;width:65%">We value the time and quality of travel for each of our clients</p>
        {{-- <button style="background-color: #D7B65D;padding:1rem 3rem;border:0;font-size:.9rem">Read More</button> --}}
    </div>
</div>
@endsection