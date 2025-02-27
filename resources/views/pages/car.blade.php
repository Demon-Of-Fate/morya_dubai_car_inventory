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

<div class="container-fluid" style="background-color: #f4f4f4">
    <div class="row mt-3 mb-3 p-2">
        <div class="col d-flex ">
            <div class="head w-50 ms-5">
                <h2>{{$cars->brand}} {{$cars->model}} {{$cars->variant}}</h2>
            </div>
            <div class="details w-50">
                <ul>
                    <li><span class="key">Reg. Year : </span><span class="val">{{date('Y', strtotime($cars->regDate))}}</span></li>
                    <li><span class="key">KMS : </span><span class="val">{{$cars->usedKm}}</span></li>
                    <li><span class="key">Fuel Type : </span><span class="val">{{$cars->fuelType}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- start --}}
<div id="carouselExampleControls" class="carousel pointer-event" data-bs-ride="carousel">
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
</div>

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
            
            <form method="post" action="{{route('send.mail')}}" data-parsley-validate="" id="form">
                @csrf
                <input type="hidden" name="pageurl" id="pageurl" value="{{$cars->brand}} {{$cars->model}} {{$cars->variant}}">
                <div class="inputgrp">
                    <input type="text" placeholder="Name" name="name" required="">
                </div>
                <div class="inputgrp">
                    <input type="email" placeholder="Email" name="email" data-parsley-trigger="change" required="">
                </div>
                <div class="inputgrp">
                    <input type="text" placeholder="Phone" pattern="[0-9]{10}" title="10 digit valid format XXXXXXXXXX" maxlength="10" min="10" name="mobile" required="">
                </div>
                <div class="inputgrp">
                    <textarea placeholder="Message" name="message"></textarea>
                </div>
                
                <button type="submit" class="frmbtn">Submit</button>
            </form>
        </div>
    </div>
      </div>
     
    </div>
  </div>
</div>

@endsection