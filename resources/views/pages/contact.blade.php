@extends('layout.user_layout')

@section('content')
    <div class="container-fluid">
        <div style="height: 13rem;"></div>
        <div class="d-flex justify-content-center align-items-center">
            <p class="bg-dark rounded text-light text-center py-2" style="width: 80%;box-shadow: 2px 1px 5px 5px #FFC107,2px -1px 5px 5px #FFC107, -2px -1px 5px 5px #FFC107,-2px 1px 5px 5px #FFC107;">Contact Us</p>
        </div>
        <div class="container mt-5">
            <div class="mt-5">
                <h2>Contact Us</h2>
                <p>We will always endeavour to respond quickly and reliably to your enquiries</p>
                <div class="mb-5">
                    <div class="d-flex align-items-center">
                        <span style="font-size: 3rem;"><i class="fa-solid fa-envelope"></i></span>&nbsp;&nbsp;&nbsp;
                        <span class="d-flex flex-column"><span style="font-size: 1.3rem;color:red">info@moryacars.in</span><span>The best way to get answer faster.</span></span>
                    </div>

                    <div class="d-flex align-items-center">
                        <span style="font-size: 3rem;"><i class="fa-solid fa-phone-volume"></i></span>&nbsp;&nbsp;&nbsp;
                        <span class="d-flex flex-column">
                            <span  style="font-size: 1.3rem;">For Preowned Cars.</span>
                            <span style="font-size: 1.3rem;color:red">+91 78449 79999</span>
                        </span>
                    </div>
                </div>
                <div>
                    <h3>Our Showroom</h3>
                </div>
            </div>
        </div>
    </div>
@endsection