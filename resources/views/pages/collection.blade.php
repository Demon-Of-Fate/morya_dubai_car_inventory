@extends('layout.user_layout')
@section('styleCode')
<style>
    .top-search {
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .top-search p {
        font-size: large;
        /* font-weight:  */

    }

    .down-search {
        display: flex;
        justify-content: end;
        align-items: center;
    }

    .select-input {
        border-radius: 5px;
    }

    .filtersbtn {
        height: 51px;
        width: 49px;

        padding: 15px;
        margin: 0 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
        display: inline-block;
        vertical-align: middle;
        background-image: url('https://moryacars.in/images/filters-icon-black.png');
        background-repeat: no-repeat;
        background-size: auto;
        background-position: center center;
    }
    @media (max-width: 480px){
        .down-search{
            flex-direction: column-reverse;
        }
    }

    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        justify-content: center;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a, .pagination li span {
        display: block;
        padding: 8px 12px;
        border: 1px solid #D7B65D;
        color: #D7B65D;
        text-decoration: none;
        border-radius: 5px;
    }

    .pagination li a:hover {
        background-color: #D7B65D;
        color: #fff;
    }

    .pagination li.active span {
        background-color: #D7B65D;
        color: #fff;
        border-radius: 5px;
    }

    .pagination li.disabled span {
        color: #ccc;
        border: 1px solid #ccc;
    }

</style>
@endsection
@section('content')

<div class="contianer p-5">
    <div class="container  border-bottom mb-5">
        <div class="top-search d-flex ">
            <p class="fs-2">Search By <q style="color:#eac240"> @if(!empty($brand)) {{$brand}} @endif</q></p>
            <p>Total {{$total_cars}} results found</p>
        </div>
        <div class="down-search d-flex pb-3">
            <div class="filter mx-5 d-flex justify-content-end align-items-center">
                <div class="filter-p">
                    <p class="d-flex fs-5">Filters:</p>
                </div>
                <div class="filtersbtn" data-modal="filter" data-bs-toggle="modal" data-bs-target="#exampleModal"></div>
            </div>

            <p class="fs-5">
            <form action="{{url('/search/sort')}}" method="post">
                @csrf
                <span class="lbl hide-767">Sort By:</span>
                <select class="sortbybtn-select" id="sortbtn" name="sort">
                    <option value="">Price</option>
                    <option value="desc">Price - High to Low</option>
                    <option value="asc">Price - Low to High</option>
                </select>
            </form>
            </p>
        </div>
    </div>


    {{-- <div class="row g-5">
        @foreach($cars as $c)
        @if($c->main_image==1)
        <div class="col-md-4">
            <div class="servicecard" style="border:1px grey dotted;">
                <div class="d-flex ">
                    <img src="https://www.app.moryacarsdubai.com/upload/car_images/{{$c->images}}" alt="{{$c->variant}}" class="img-fluid w-100" alt="car image" style="height: 15rem; object-fit: cover;">
                </div>
                <div class="px-4">
                    <p style="font-size: 1.7rem;">{{strtoupper($c->brand)}} {{strtoupper($c->model)}} {{strtoupper($c->variant)}}</p>
                    <!-- <p>Insured, leather interior, air conditioning, rain sensor, panoramic roof</p> -->
                    <div class="d-flex justify-content-between align-items-center px-1">
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-wrench"></i></span>
                            <span>MFG : {{$c->mfgDate}}</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span title="Drive" style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-car-side"></i></span>
                            <span>{{$c->usedkm}} KM</span>
                        </div>
                        <div class="d-flex justify-content-center align-items-center flex-column p-3" style="border: 1px solid #D7B65D;padding:5px;">
                            <span style="font-size: 1.5rem;color:#D7B65D"><i class="fa-solid fa-gas-pump"></i></span>
                            <span>{{$c->fueltype}}</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center my-2">
                        <p itemprop="offers" itemtype="https://schema.org/Offer" itemscope="">
                            <meta itemprop="priceCurrency" content="INR">
                            <meta itemprop="price" content="{{$c->sellingprice}}">
                            ₹{{$c->sellingprice}}
                        </p>
                        <p>⭐⭐⭐⭐</p>
                    </div>
                    <a href="{{ route('carDetail',$c->id) }}"><button class="btn mb-4 mt-2 py-3" style="background-color: #D7B65D;width:100%;">View Details</button></a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div> --}}



    {{-- <div class="bottom-cntnr">
        <div class="showmorebtn-grp hide-767">
            <div class="blog-pagination" style="text-align: right;">
                {{ $cars->links() }}


            </div>
        </div>
    </div> --}}

</div>


<div class="container">
    <div class="row g-4 mb-5">
        @foreach($cars as $c)
        @if($c->main_image==1)
        <div class="col-md-6 col-lg-6 col-xl-4">
            <div class="servicecard " style="border:1px grey dotted;">
                <div class="d-flex justify-content-center">
                    <img src="https://www.app.moryacarsdubai.com/upload/car_images/{{$c->images}}" alt="{{$c->variant}}" class="img-fluid w-100" alt="car image" style="height: 15rem; object-fit: cover;">
                </div>
                <div class="px-4">
                    <p style="font-size: 1.7rem;">{{strtoupper($c->brand)}} {{strtoupper($c->model)}} {{strtoupper($c->variant)}}</p>
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
    </div>
</div>
 <div class="bottom-cntnr">
    <div class="showmorebtn-grp hide-767">
        <div class="blog-pagination" style="text-align: right;">
            @if ($cars->hasPages())
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($cars->onFirstPage())
                        <li class="disabled"><span>&laquo;</span></li>
                    @else
                        <li><a href="{{ $cars->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($cars->links()->elements[0] as $page => $url)
                        @if ($page == $cars->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($cars->hasMorePages())
                        <li><a href="{{ $cars->nextPageUrl() }}" rel="next">&raquo;</a></li>
                    @else
                        <li class="disabled"><span>&raquo;</span></li>
                    @endif
                </ul>
            @endif
        </div>
    </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <style>
        /* Modal Styling */
        .modal-content {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            font-family: 'Roboto', Arial, sans-serif;
        }
        
        /* Filter Header */
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            border-bottom: 1px solid #e5e5e5;
        }
        
        .modal-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin: 0;
        }
        
        .btn-close {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #888;
        }
        
        /* Filter Body */
        .modal-body {
            padding: 16px 20px;
        }
        
        /* Reset Button at Top */
        .resetfltrbtn {
            background-color: #f0f0f0;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 14px;
            color: #555;
            cursor: pointer;
            margin-bottom: 20px;
        }
        
        /* Filter Section */
        fieldset {
            margin-bottom: 24px;
        }
        
        fieldset > label {
            font-size: 16px;
            color: #333;
            margin-bottom: 12px;
            font-weight: 500;
            display: block;
        }
        
        /* Filter Options */
        .checkboxinput-list, .radioinput-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 8px;
            list-style: none;
            padding-left: 0;
        }
        
        .checkboxinput-list li, .radioinput-list li {
            position: relative;
            background-color: #f8f8f8;
            border: 1px solid #e0e0e0;
            border-radius: 20px;
            padding: 8px 16px;
            font-size: 14px;
            color: #555;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        
        .checkboxinput-list input[type="checkbox"],
        .radioinput-list input[type="radio"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }
        
        .checkboxinput-list input[type="checkbox"]:checked + label,
        .radioinput-list input[type="radio"]:checked + label {
            color: white;
        }
        
        .checkboxinput-list li:has(input:checked),
        .radioinput-list li:has(input:checked) {
            background-color: #002244;
            border-color: #002244;
            color: white;
        }
        
        /* Brand Select */
        .inputgrp.slctinput {
            width: 100%;
        }
        
        .inputgrp.slctinput select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
            background-color: #f8f8f8;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
        }
        
        /* Button Group */
        .modal-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid #e5e5e5;
        }
        
        .btn-secondary {
            padding: 10px 20px;
            border: 1px solid #002244;
            background-color: white;
            color: #002244;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
        }
        
        .btn-primary {
            padding: 10px 20px;
            border: none;
            background-color: #002244;
            color: white;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
        }
        
        /* For better mobile display */
        @media (max-width: 576px) {
            .checkboxinput-list li, .radioinput-list li {
                flex-basis: calc(50% - 5px);
            }
        }
    </style>
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{url('/search/byfilter')}}" class="bbtmodal-form">
                @csrf
                <div class="modal-body">
                    <button class="btn btn-secondary resetfltrbtn">Reset Filter</button>
                    <fieldset>
                        <label>KMS Driven</label>
                        <ul class="checkboxinput-list">
                            <li>
                                <input type="checkbox" name="kms" id="kms-brandnew" value="0-0">
                                <label for="kms-brandnew">Brand New</label>
                            </li>
                            <li>
                                <input type="checkbox" name="kms" id="kms0-5000" value="0-5000">
                                <label for="kms0-5000">0 - 5000</label>
                            </li>
                            <li>
                                <input type="checkbox" name="kms" id="kms5000-10000" value="5000-10000">
                                <label for="kms5000-10000">5000 - 10000</label>
                            </li>
                            <li>
                                <input type="checkbox" name="kms" id="kms10000-15000" value="10000-15000">
                                <label for="kms10000-15000">10000 - 15000</label>
                            </li>
                            <li>
                                <input type="checkbox" name="kms" id="kms15000-20000" value="15000-20000">
                                <label for="kms15000-20000">15000 - 20000</label>
                            </li>
                            <li>
                                <input type="checkbox" name="kms" id="kms20000above" value="20000-100000">
                                <label for="kms20000above">20000 & Above</label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset>
                        <label>Budget</label>
                        <ul class="radioinput-list list-unstyled">
                            <li>
                                <input type="radio" name="price" id="bdgt-lsthn50l" value="1-5000000">
                                <label for="bdgt-lsthn50l">Less Than 50L</label>
                            </li>
                            <li>
                                <input type="radio" name="price" id="bdgt-50l-1cr" value="5000000-10000000">
                                <label for="bdgt-50l-1cr">50L to 1Cr</label>
                            </li>
                            <li>
                                <input type="radio" name="price" id="bdgt-1cr-1.5cr" value="10000000-15000000">
                                <label for="bdgt-1cr-1.5cr">1Cr to 1.5Cr</label>
                            </li>
                            <li>
                                <input type="radio" name="price" id="bdgt-1.5cr-above" value="15000000-50000000">
                                <label for="bdgt-1.5cr-above">1.5Cr & Above</label>
                            </li>
                        </ul>
                    </fieldset>
                    <fieldset>
                        <label>Brand</label>
                        <div class="inputgrp slctinput row p-3">
                            <select name="brand" onchange="this.form.submit()" class="col border p-2">
                                <option value="">Select Brand</option>
                                <option value="audi">Audi</option>
                                <option value="bmw">BMW</option>
                                <option value="jaguar">Jaguar</option>
                                <option value="land-rover">Land Rover</option>
                                <option value="nissan">Nissan</option>
                                <option value="toyota">Toyota</option>
                                <option value="volvo">Volvo</option>
                                <option value="mazda">Mazda</option>
                                <option value="mercedes benz">Mercedes Benz</option>
                                <option value="lotus">Lotus</option>
                                <option value="bentley">Bentley</option>
                                <option value="porsche">Porsche</option>
                                <option value="ssangyong">Ssangyong</option>
                                <option value="volkswagen">Volkswagen</option>
                            </select>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                </div>
            </form>
        </div>
    </div>
</div>


  
  <script>
    // Make the filter options work with checkboxes and radio buttons
    document.querySelectorAll('.filter-option').forEach(option => {
      option.addEventListener('click', function(e) {
        const input = this.querySelector('input');
        if (input.type === 'checkbox') {
          input.checked = !input.checked;
        } else if (input.type === 'radio') {
          input.checked = true;
        }
        e.preventDefault();
      });
    });
  </script>



<script>
    $(document).ready(function() {

        $('#sortbtn').on('change', function(e) {
            $(this).closest('form').submit();
        });

        $('.resetfltrbtn').click(function(e) {
            e.preventDefault(); 
            var newUrl = '/collection';
            window.location.href = newUrl;
        });

    });
</script>

@endsection