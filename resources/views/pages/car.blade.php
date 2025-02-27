@extends('layout.user_layout')
@section('styleCode')
<style>
.carousel-item-image {
    flex: 1;
    padding: 0 10px;
}

.carousel-inner {
    padding: 10px 0;
}

/* Apply smooth transition to the carousel items */


</style>

@endsection

@section('content')

<div class="container-fluid"style="background-color: #f4f4f4">
    <div class="row mt-3 mb-3 p-2">
        <div class="col d-flex " >
            <div class="head w-50 ms-5">
                 <h2>Porsche CAYENNE S HYBRID</h2>
                 <h3 class="text-warning">$2850000</h3>
            </div>
            <div class="details w-50">
                <p>Reg. Year : 2012 <br>

                    KMS : 81000 <br>
                    Fuel Type : petrol  </p>
            </div>
        </div>
    </div>
</div>
{{-- start --}}
<div id="carouselExampleControls" class="carousel pointer-event" data-bs-ride="carousel">
    <div class="carousel-inner">
        
        <div class="carousel-item active">
            <div class="d-flex justify-content-between">
                <div class="carousel-item-image ">
                    <img class="img-fluid " alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371079WhatsApp Image 2022-05-24 at 11.12.28 AM (9).jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371079WhatsApp Image 2022-05-24 at 11.12.28 AM (8).jpeg">
                </div>
                <div class="carousel-item-image">
                    <img class="img-fluid" alt="Luxury Cars" src="https://app.moryacars.in/upload/car_images/1653371080WhatsApp Image 2022-05-24 at 11.12.28 AM (6).jpeg">
                </div>
            </div>
        </div>

        <div class="carousel-item">
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
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- end --}}

<section class="cardetails-cntnt-sec hide-767">
    <div class="container">
       <h3 class="mt-5 text-warning">CAR SUMMARY</h3>
       <div class="row">
        <div class="col-md-6">
               <table class="table table-dark table-striped">
                    <tbody><tr>
                        <th>Brand</th><td>:</td><td>PORSCHE</td>
                    </tr>
                    <tr>
                        <th>Model</th><td>:</td><td>CAYENNE</td>
                    </tr>
                    <tr>
                        <th>Variant</th><td>:</td><td>S HYBRID</td>
                    </tr>
                    <tr>
                        <th>Manufacturing Date</th><td>:</td><td>Mar - 2012</td>
                    </tr>
                    <tr>
                        <th>Registration Date</th><td>:</td><td>May - 2012</td>
                    </tr>
                    <tr>
                        <th>Registration No</th><td>:</td><td>MH 12 XX XX64</td>
                    </tr>
                    
                </tbody></table>
            </div>
            <div class="col-md-6">
                 <table class="table table-dark table-striped">
                    <tbody><tr>
                        <th>Color</th><td>:</td><td><span style="background: BLUE; border-radius: 5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> BLUE</td>
                    </tr>
                    <tr>
                        <th>Fuel Type</th><td>:</td><td>PETROL</td>
                    </tr>
                    <tr>
                        <th>Used KM</th><td>:</td><td>81000</td>
                    </tr>
                    <tr>
                        <th>Number Of Owner</th><td>:</td><td>2</td>
                    </tr>
                    <tr>
                        <th>Insurance Validity</th><td>:</td><td>2022-06-09</td>
                    </tr>
                    <tr>
                        <th colspan="3">
                            <div class="row">
                                <div class="col"> 
                                    RC  <i class="fas fa-check-square"></i> 
                                </div>
                                <div class="col"> 
                                    TTO  <i class="fas fa-check-square"></i>                                </div>
                                <div class="col">
                                    Second Key  <i class="fas fa-check-square"></i> 
                                </div>
                                <div class="col">
                                    Bank NOC  <i class="fas fa-check-square"></i>                                </div>
                            </div>
                        </th>
                    </tr>

                </tbody></table>
            </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="#" class="btn bg-warning  btn-lg mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <img src="https://moryacars.in/images/reserve.png"> RESERVE THIS CAR
            </a>
        </div>
    </div>
</div></section>

@endsection