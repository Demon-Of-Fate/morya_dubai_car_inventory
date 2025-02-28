@extends('layout.user_layout')
@section('styleCode')
<style>
    /* .carousel-item-image {
        flex: 1;
        padding: 0 10px;
    }

    .carousel-inner {
        padding: 10px 0;
    } */

    .carousel-inner {
      padding: 0.5em;
  }

  .carousel-control-prev,
  .carousel-control-next {
      background-color: #000000;
      width: 8vh;
      height: 8vh;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
  }
  .carousel-item img{
    padding: 5px;
}
@media (min-width: 768px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
}
.carousel-inner {
    display: flex;
}

}
@media (max-width: 768px) {
    .pagecontainer {
        padding-top: 20px !important; 
    }
}

    /* Apply smooth transition to the carousel items */
</style>

@endsection

@section('content')

<div class="container-fluid" style="background-color: #f4f4f4">
    <div class="row mt-3 mb-3 p-2">
        <div class="col d-flex ">
            <div class="head w-50 ms-5">
                <h2>{{$cars->brand}} {{$cars->model}} {{$cars->variant}}</h2>
            </div>
            <div class="details w-50">
                <ul class="list-unstyled">
                    <li><span class="key">Reg. Year : </span><span class="val">{{date('Y', strtotime($cars->regDate))}}</span></li>
                    <li><span class="key">KMS : </span><span class="val">{{$cars->usedKm}}</span></li>
                    <li><span class="key">Fuel Type : </span><span class="val">{{$cars->fuelType}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- start --}}
<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($images as $i)

        <div class="carousel-item">
            <img class="img-fluid" alt="Luxury Cars" src="https://www.app.moryacarsdubai.com/upload/car_images/{{$i->images}}">
        </div>
        @endforeach
     
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>

{{-- <div id="carouselExampleControls" class="carousel pointer-event" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="d-flex justify-content-between">

                @foreach($images as $i)
                    <div class="carousel-item-image ">
                        <img class="img-fluid " alt="Luxury Cars" src="https://www.app.moryacarsdubai.com/upload/car_images/{{$i->images}}">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- <div class="carousel-item">
            <div class="d-flex justify-content-between">
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371080WhatsApp Image 2022-05-24 at 11.12.28 AM (7).jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371082WhatsApp Image 2022-05-24 at 11.12.28 AM (4).jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371082WhatsApp Image 2022-05-24 at 11.12.28 AM (5).jpeg">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="d-flex justify-content-between">
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371082WhatsApp Image 2022-05-24 at 11.12.28 AM (3).jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371082WhatsApp Image 2022-05-24 at 11.12.28 AM (2).jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371083WhatsApp Image 2022-05-24 at 11.12.28 AM.jpeg">
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="d-flex justify-content-between">
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371083WhatsApp Image 2022-05-24 at 11.12.28 AM (1).jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371083WhatsApp Image 2022-05-24 at 11.12.28 AM.jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371082WhatsApp Image 2022-05-24 at 11.12.28 AM (4).jpeg">
                </div>
            </div>
        </div> -->
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> --}}

{{-- end --}}

<section class="cardetails-cntnt-sec hide-767">
    <div class="container">
        <h3 class="mt-5 text-warning">CAR SUMMARY</h3>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-dark table-striped">
                    <tbody>
                        <tr>
                            <th>Brand</th>
                            <td>:</td>
                            <td>{{strtoupper($cars->brand)}}</td>
                        </tr>
                        <tr>
                            <th>Model</th>
                            <td>:</td>
                            <td>{{strtoupper($cars->model)}}</td>
                        </tr>
                        <tr>
                            <th>Variant</th>
                            <td>:</td>
                            <td>{{strtoupper($cars->variant)}}</td>
                        </tr>
                        <tr>
                            <th>Manufacturing Date</th>
                            <td>:</td>
                            <td>{{date('M - Y', strtotime($cars->mfgDate))}}</td>
                        </tr>
                        <!-- <tr>
                            <th>Registration Date</th>
                            <td>:</td>
                            <td>{{date('M - Y', strtotime($cars->regDate))}}</td>
                        </tr> -->
                        <tr>
                            <th>Registration No</th>
                            <td>:</td>
                            <td>{{substr_replace(strtoupper($cars->regNo),'XX XX',6,5)}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-dark table-striped">
                    <tbody>
                        <tr>
                            <th>Color</th>
                            <td>:</td>
                            <td><span style="background: {{$cars->color}}; border-radius: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> {{strtoupper($cars->color)}}</td>
                        </tr>
                        <tr>
                            <th>Fuel Type</th>
                            <td>:</td>
                            <td>{{strtoupper($cars->fuelType)}}</td>
                        </tr>
                        <tr>
                            <th>Used KM</th>
                            <td>:</td>
                            <td>{{$cars->usedKm}}</td>
                        </tr>
                        <tr>
                            <th>Number Of Owner</th>
                            <td>:</td>
                            <td>{{$cars->noOfOwner}}</td>
                        </tr>
                        <tr>
                            <th>Insurance Validity</th>
                            <td>:</td>
                            <td>{{$cars->insuranceValidity}}</td>
                        </tr>
                        <tr>
                            <th colspan="3">
                                <div class="row">
                                    <div class="col">
                                    Hayaza @if($cars->hayaza==1) <i class="fas fa-check-square"></i>@endif 
                                    </div>
                                    <div class="col">
                                    VCC @if($cars->vcc==1) <i class="fas fa-check-square"></i>@endif </div>
                                    <div class="col">
                                        Second Key @if($cars->secondKey==1) <i class="fas fa-check-square"></i>@endif 
                                    </div>
                                    <div class="col">
                                        Semistry @if($cars->semistry==1) <i class="fas fa-check-square"></i>@endif  </div>
                                </div>
                            </th>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="#" class="btn bg-warning  btn-lg mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="https://moryacars.in/images/reserve.png"> RESERVE THIS CAR
                </a>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="bbtmodal-cntnr">
        <div class="bbtmodal-clsbtn">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="bbtmodal-cntnt-grp">
            <h3 class="h4 title text-center">Request A Call</h3>
            
            {{-- <form method="post" action="{{route('send.mail')}}" data-parsley-validate="" id="form">
                @csrf
                <div class="row">
                    <input type="hidden" name="pageurl" id="pageurl" value="{{$cars->brand}} {{$cars->model}} {{$cars->variant}}">
                <div class="inputgrp col-md-12">
                    <input type="text" placeholder="Name" name="name" class="" required="">
                </div>
                <div class="inputgrp col-md-12">
                    <input type="email" placeholder="Email" name="email" data-parsley-trigger="change" required="">
                </div>
                <div class="inputgrp col-md-12">
                    <input type="text" placeholder="Phone" pattern="[0-9]{10}" title="10 digit valid format XXXXXXXXXX" maxlength="10" min="10" name="mobile" required="">
                </div>
                <div class="inputgrp col-md-12">
                    <textarea placeholder="Message" name="message"></textarea>
                </div>
 
                </div>
                               
                <button type="submit" class="frmbtn btn  bg-dark text-light ">Submit</button>
            </form> --}}
            <form method="post" action="{{route('send.mail')}}" data-parsley-validate="" id="form">
                @csrf
                <div class="row">
                    <input type="hidden" name="pageurl" id="pageurl" value="{{$cars->brand}} {{$cars->model}} {{$cars->variant}}">
                    
                    <!-- Use smaller column widths if you want side-by-side fields -->
                    <div class="col-md-6 mb-3">
                        <div class="inputgrp">
                            <input type="text" class="form-control" placeholder="Name" name="name" required="">
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <div class="inputgrp">
                            <input type="email" class="form-control" placeholder="Email" name="email" data-parsley-trigger="change" required="">
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <div class="inputgrp">
                            <input type="text" class="form-control" placeholder="Phone" pattern="[0-9]{10}" title="10 digit valid format XXXXXXXXXX" maxlength="10" min="10" name="mobile" required="">
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <div class="inputgrp">
                            <textarea class="form-control" placeholder="Message" name="message"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <button type="submit" class="frmbtn btn bg-dark text-light">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
      </div>
     
    </div>
  </div>
</div>



@endsection

@section('scriptCode')
<script type="text/javascript">

// $(document).ready(function(){
    // Set the first carousel item as active
    // $(".carousel-inner .carousel-item:first").addClass("active");
    
    // Get carousel element
    // var multipleCardCarousel = document.querySelector("#carouselExampleControls");
    
    // Function to handle the carousel behavior
    // function setupCarousel() {
        // if (window.matchMedia("(min-width: 768px)").matches) {
            // Desktop version - multi-card display with custom scrolling
            
            // Initialize Bootstrap carousel with no auto-sliding
            // var carousel = new bootstrap.Carousel(multipleCardCarousel, {
            //     interval: false,
            //     wrap: false
            // });
            
            // Calculate dimensions
            // var carouselInner = $("#carouselExampleControls .carousel-inner");
            // var carouselWidth = carouselInner[0].scrollWidth;
            // var cardWidth = $(".carousel-item").width();
            // var scrollPosition = 0;
            
            // Configure carousel items for horizontal scrolling
            // carouselInner.css("overflow-x", "hidden");
            // $(".carousel-item").css({
            //     "display": "inline-block",
                // "flex": "0 0 33.333333%"  // Show 3 items at once (adjust as needed)
            // });
            
            // Next button click handler
            // $("#carouselExampleControls .carousel-control-next").off("click").on("click", function() {
                // Calculate max scroll position
            //     var maxScrollPosition = carouselWidth - (cardWidth * 3); // 3 visible items
                
            //     if (scrollPosition < maxScrollPosition) {
            //         scrollPosition += cardWidth;
            //         carouselInner.animate(
            //             { scrollLeft: scrollPosition },
            //             600
            //         );
            //     }
            // });
            
            // Previous button click handler
            // $("#carouselExampleControls .carousel-control-prev").off("click").on("click", function() {
            //     if (scrollPosition > 0) {
            //         scrollPosition -= cardWidth;
            //         carouselInner.animate(
            //             { scrollLeft: scrollPosition },
            //             600
            //         );
            //     }
            // });
            
            // Remove standard sliding behavior
//             $(multipleCardCarousel).removeClass("slide");
            
//         }else {
//       $(multipleCardCarousel).addClass("slide");
//   }


//     }
    
    // Initialize on page load
    // setupCarousel();
    
    // Re-initialize on window resize
    // $(window).resize(function() {
        // Reset scroll position
        // $("#carouselExampleControls .carousel-inner").scrollLeft(0);
        // scrollPosition = 0;
        
        // Re-setup the carousel
//         setupCarousel();
//     });
// });

$(document).ready(function(){
        // Ensure the first item is marked as active
        $(".carousel-inner .carousel-item:first").addClass("active");

        var multipleCardCarousel = document.querySelector("#carouselExampleControls");
        
        // Desktop and tablet support
        if (window.matchMedia("(min-width: 768px)").matches) {
            var carousel = new bootstrap.Carousel(multipleCardCarousel, {
                interval: false,
            });

            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();
            var scrollPosition = 0;

            // Next button functionality
            $("#carouselExampleControls .carousel-control-next").on("click", function () {
                if (scrollPosition < carouselWidth - cardWidth * 4) {
                    scrollPosition += cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate(
                        { scrollLeft: scrollPosition },
                        600
                    );
                }
            });

            // Prev button functionality
            $("#carouselExampleControls .carousel-control-prev").on("click", function () {
                if (scrollPosition > 0) {
                    scrollPosition -= cardWidth;
                    $("#carouselExampleControls .carousel-inner").animate(
                        { scrollLeft: scrollPosition },
                        600
                    );
                }
            });
        } else {
            // For mobile or smaller screens, apply "slide" class for Bootstrap carousel default behavior
            $(multipleCardCarousel).addClass("slide");
        }
    });
    
      
    </script>
@endsection