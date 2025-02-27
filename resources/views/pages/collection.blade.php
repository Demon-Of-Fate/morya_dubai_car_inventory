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
</style>
@endsection
@section('content')

<div class="contianer p-5">
    <div class="container  border-bottom">
        <div class="top-search d-flex ">
            <p class="fs-2">Search By <q style="color:#eac240"> @if(!empty($brand)) {{$brand}} @endif</q></p>
            <p>Total {{$total_cars}} results found</p>
        </div>
        <div class="down-search d-flex pb-3">
            <div class="filter mx-5 d-flex justify-content-end align-items-center">
                <div class="filter-p">
                    <p class="d-flex fs-5">Filters:</p>
                </div>
                <div class="filtersbtn" data-modal="filter"></div>

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


    <div class="row g-5">
        @foreach($cars as $c)
        @if($c->main_image==1)
        <div class="col-md-4">
            <div class="servicecard" style="border:1px grey dotted;">
                <div class="d-flex justify-content-center">
                    <img src="https://www.app.moryacarsdubai.com/upload/car_images/{{$c->images}}" alt="{{$c->variant}}" class="img-fluid" alt="car image" style="height: 13rem;">
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
                    <button class="btn mb-4 mt-2 py-3" style="background-color: #D7B65D;width:100%;">View Details</button>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    <div class="bottom-cntnr">
        <div class="showmorebtn-grp hide-767">
            <div class="blog-pagination" style="text-align: right;">
                {{ $cars->links() }}


            </div>
        </div>
    </div>

</div>
@include('./layout/filter-modal')

<script>
    $('#sortbtn').on('change', function(e){
        $(this).closest('form').submit();
    });
</script>

@endsection