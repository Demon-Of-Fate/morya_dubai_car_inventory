@extends('layout.user_layout')  
@section('styleCode')
<style>
    .top-search{
        display: flex;
        justify-content: space-between;
        align-items: center ;

    }
    .top-search p{
        font-size: large;
        /* font-weight:  */

    }
    .down-search{
        display: flex;
        justify-content: end;
        align-items: center;
    }
    .select-input{
        border-radius: 5px;
    }
    .filtersbtn{
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
          <p class="fs-2">Search By <span class="text-warning">""</span></p>
          <p>Total 2 Results Found</p>
    </div>
    <div class="down-search d-flex pb-3">
       <div class="filter mx-5 d-flex justify-content-end align-items-center">
        <div class="filter-p"><p class="d-flex fs-5">Filters:</p></div>
          <div class="filtersbtn" data-modal="filter"></div>
        
        </div>

        <p class="fs-5">Sort By: 
            <Select class="p-1 select-input">
                <option value="">Price</option>
                <option value="">Price- High to Low</option>
                <option value="">Price- Low to High</option>
            </Select>
        </p>
        

    </div>


  
</div>


    <div class="row g-5">
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_01-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_03-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
            </div>
            <div class="px-4">
                <p style="font-size: 1.7rem;">Mercedes Benz E-Class</p>
                <p>Insured, leather interior, air conditioning, rain sensor, panoramic roof</p>
                <div class="row"></div>
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
    <div class="col-md-4">
        <div class="servicecard" style="border:1px grey dotted;">
            <div class="d-flex justify-content-center">
                <img src="http://limme.like-themes.com/wp-content/uploads/2020/11/car_02-768x510.jpg" class="img-fluid" alt="car image" style="height: 13rem;">
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
</div>

</div>


@endsection