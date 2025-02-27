@extends('layout.user_layout')

@section('styleCode')
<style>
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
    .homehero {
        height: 100vh;
    }

    .homehero div #homeheroheading {
        font-size: 2.5rem;
        width: 70%;
    }

    .homehero div button {
        background-color: #D7B65D;
        border: 1px solid #D7B65D;
        padding: 10px 40px;
    }

    .homehero div {
        width: 30%;
        padding: 0 30px;
    }

    .homehero p img {
        width: 100%;
        height: 330px;
    }


    /* Home page hero end */
</style>

{{-- @section('content')
<div class="bg-info slider-section">
<div class="slide" style="background-image: url('')">
    <div class="slide-content">
        <h1>Design With Technology</h1>
        <p>for your Success in Business</p>
    </div>

</div>
</div>

@endsection --}}

@section('content')
 <!-- Start Hero Section -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Limousine Service Slider</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <style>
     * {
       margin: 0;
       padding: 0;
       box-sizing: border-box;
     }
     
     body {
       font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       color: #333;
     }
     
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
     
     .slider-arrow i {
       color: white;
       font-size: 1.5rem;
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
     }
   </style>
 </head>
 <body>
   <div class="slider-container">
     <div class="slider">
       <div class="slide active" style="background-image: url('http://limme.like-themes.com/wp-content/uploads/2020/11/SLIDE_05.jpg');">
         <div class="slide-content">
           <h2 class="slide-title">Luxury Limousine Service</h2>
           <p class="slide-subtitle">Experience the ultimate in luxury transportation for any occasion</p>
           <a href="#" class="slide-btn">Book Now</a>
         </div>
       </div>
       <div class="slide" style="background-image: url('http://limme.like-themes.com/wp-content/uploads/2020/11/SLIDE_03.jpg');">
         <div class="slide-content">
           <h2 class="slide-title">Corporate Transportation</h2>
           <p class="slide-subtitle">Reliable and professional service for your business needs</p>
           <a href="#" class="slide-btn">Learn More</a>
         </div>
       </div>
       <div class="slide" style="background-image: url('http://limme.like-themes.com/wp-content/uploads/2020/11/SLIDE_02.jpg');">
         <div class="slide-content">
           <h2 class="slide-title">Special Events</h2>
           <p class="slide-subtitle">Make your wedding, prom or special occasion memorable</p>
           <a href="#" class="slide-btn">View Packages</a>
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
 
   <script>
     $(document).ready(function() {
       let currentSlide = 0;
       const slides = $('.slide');
       const dots = $('.slider-dot');
       const totalSlides = slides.length;
       
       // Auto slide function
       function autoSlide() {
         showSlide((currentSlide + 1) % totalSlides);
       }
       
       // Set interval for auto sliding
       let slideInterval = setInterval(autoSlide, 5000);
       
       // Show slide function
       function showSlide(index) {
         // Reset interval when manually changing slides
         clearInterval(slideInterval);
         slideInterval = setInterval(autoSlide, 5000);
         
         // Update current slide
         currentSlide = index;
         
         // Remove active class from all slides and dots
         slides.removeClass('active');
         dots.removeClass('active');
         
         // Add active class to current slide and dot
         $(slides[index]).addClass('active');
         $(dots[index]).addClass('active');
       }
       
       // Click handlers for dots
       dots.click(function() {
         const index = $(this).data('index');
         showSlide(index);
       });
       
       // Click handlers for arrows
       $('.slider-prev').click(function() {
         let prevSlide = currentSlide - 1;
         if (prevSlide < 0) prevSlide = totalSlides - 1;
         showSlide(prevSlide);
       });
       
       $('.slider-next').click(function() {
         let nextSlide = (currentSlide + 1) % totalSlides;
         showSlide(nextSlide);
       });
       
       // Pause auto slide on hover
       $('.slider-container').hover(
         function() {
           clearInterval(slideInterval);
         },
         function() {
           slideInterval = setInterval(autoSlide, 5000);
         }
       );
     });
   </script>
 </body>
 </html>
 
  <!-- End Hero Section -->
<div class="homeservice p-5 bg-dark text-light row" style="width: 100vw;">
    <div class="col-lg-4 d-flex mt-3">
        <div class="imageservice1"><img src="http://limme.like-themes.com/wp-content/uploads/2019/06/serv_01-100x100.jpg" alt="service"></div>
        <div class="textservice1 px-4">
            <p>Airport Transfer</p>
            <span>Pellentesque semper dui eget ferm.</span>
        </div>
    </div>
    <div class="col-lg-4 d-flex mt-3">
        <div class="imageservice1"><img src="http://limme.like-themes.com/wp-content/uploads/2019/06/serv_02-100x100.jpg" alt="service"></div>
        <div class="textservice1 px-4">
            <p>Business Transfer</p>
            <span>Sed nisi magna, rhoncus nec.</span>
        </div>
    </div>
    <div class="col-lg-4 d-flex mt-3">
        <div class="imageservice1"><img src="http://limme.like-themes.com/wp-content/uploads/2019/06/serv_03-100x100.jpg" alt="service"></div>
        <div class="textservice1 px-4">
            <p>Events & Weddings</p>
            <span>Pellentesque semper dui eget .</span>
        </div>
    </div>
</div>
<div class="homehero d-flex flex-wrap align-items-center">
    <div>
        <p id="homeheroheading"><span style="color: #FFC107;">Luxury Cars</span> for Maximum
            Satisfaction</p>
        <p>Nullam sed ultricies erat, nec euismod metus. Morbi porttitor sapien vitae leo scelerisque. Nullam sed ultricies erat.</p>
        <button class="btn">Read More</button>
    </div>
    <p class="d-flex">
        <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-limmo.png" class="img-fluid" alt="main hero">
    </p>
</div>
<div>
    <div class="row">
        <div class="col-md-4 p-5">
            <div class="servicecard" style="border:1px grey dotted;">
                <div class="d-flex justify-content-center">
                    <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_01-768x510.jpg" alt="car image" style="height: 13rem;">
                </div>
                <div class="px-4">
                    <p style="font-size: 1.7rem;">Cadillac Limousine XTS</p>
                    <p>Insured, leather interior, air conditioning, rain sensor, panoramic roof</p>
                    <div class="d-flex justify-content-between align-items-center px-1">
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
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
        <div class="col-md-4 p-5">
            <div class="servicecard" style="border:1px grey dotted;">
                <div class="d-flex justify-content-center">
                    <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" alt="car image" style="height: 13rem;">
                </div>
                <div class="px-4">
                    <p style="font-size: 1.7rem;">Mercedes Benz E-Class</p>
                    <p>Insured, leather interior, air conditioning, rain sensor, panoramic roof</p>
                    <div class="d-flex justify-content-between align-items-center px-1">
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
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
        <div class="col-md-4 p-5">
            <div class="servicecard" style="border:1px grey dotted;">
                <div class="d-flex justify-content-center">
                    <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_03-768x510.jpg" alt="car image" style="height: 13rem;">
                </div>
                <div class="px-4">
                    <p style="font-size: 1.7rem;">Range Rover Sport 5.5</p>
                    <p>Insured, leather interior, air conditioning, rain sensor, panoramic roof</p>
                    <div class="d-flex justify-content-between align-items-center px-1">
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-bag-shopping"></i></span>
                            <span>4 Seats</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
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
    </div>
</div>
<div style="background-image:url('https://images.unsplash.com/photo-1597200381847-30ec200eeb9a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')" class="text-center py-5">
    <div class="d-flex justify-content-center align-items-center flex-column">
        <p class="" style="width: 30%;font-size:1.3rem">We value the time and quality of travel for each of our clients</p>
        <p class="d-flex flex-column" style="width:35%;font-size:5rem;"><span class="p-0 m-0">Incredible</span> <span class="p-0 m-0">comfort</span></p>
    </div>
    <div>
        <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-limmo-large.png" alt="image here" class="img-fluid" style="width: 80rem;">
    </div>
</div>
<div class="bg-dark text-light" style="padding: 3rem;">
    <div class="d-flex justify-content-between ">
        <div style="width: 100%;">
            <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/about-chairs.png" alt="car image" style="height:100vh;width:45vw">
        </div>
        <div style="width:100%;padding-left:5rem">
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
        <button style="background-color: #D7B65D;padding:1rem 3rem;border:0;font-size:.9rem">Read More</button>
    </div>
</div>
@endsection