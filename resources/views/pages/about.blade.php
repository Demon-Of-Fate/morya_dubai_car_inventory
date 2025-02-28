@extends('layout.user_layout')
@section('styleCode')
<style>
        ul.icon-righttext-list > li{
            /* width: 13rem */
            padding: 10px 12px;
        }
    ul.icon-righttext-list {
    display: flex;
    flex-wrap: wrap;
    padding: 20px 0;
    margin: 0 -18px;
    list-style: none;
}

.font{
    font-family: "Barlow Condensed", arial;
    font-weight: 700;
    line-height: 1.1;
    /* letter-spacing: 2px; */
}
/* ul.icon-righttext-list>li .icon {
        width: 50px;
        height: 52px;
        min-width: 50px;
        min-height: 52px;
        border-radius: 10px;
        padding: 8px;
    } */
ul.icon-righttext-list>li .icon{
    display: flex; 
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 12px;
    border: 1px solid #cacaca;
    border-radius: 15px; 
    min-width: 60px;
    min-height: 60px;
    margin-right: 15px;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 45%;
}

 
 .supercars{
    background-image: url('https://www.moryacars.in/images/luxarycarbrand-icon.png');  
}
.icon.established {
    background-image: url('https://moryacars.in/images/navshowroom-black-icon.png');
} 
.icon.person{
    background-image: url('https://moryacars.in/images/men-icon.png') ;
}
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
.text-yellow{
    color: #D7B65D;
}
.banner-faq{
    background-repeat: no-repeat;
    background-size: cover;
    /* object-fit: cover; */
    background-position:center;
    width: 100%;
    min-height: 25rem;
    padding: 0px 50px;

}
.bg-gold{
    background: radial-gradient(circle, rgba(234, 194, 64, 1) 60%, rgba(176, 77, 1, 1) 100%);
}
.car-img{
    height: 38rem;
    width: 25rem;
    border-radius: 50px;
}

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

<div class="container-fluid banner-faq text-light d-flex justify-content-start align-items-center" style="background-image: url('{{asset('img/car-banner3.jpg')}}')">
    
    <div class="d-flex  flex-column justify-content-end">
        <h3 class=" fs-1 text-yellow">About Us</h3>
    <h4>
       <a href="{{route('home')}}"  class="text-light text-decoration-none">Home</a>  /
        <a href="{{route('about')}}" class="text-light text-decoration-none"> About</a>
        </h4>
    </div>
    
 </div>

<div class="static mt-5">
    <section class="whyus-experience-sec">
            <div class="container">
                <div class="sec-row d-flex g-5 row flexrow">
                    
                    <div class="sec-lg-col-65 col-lg-8 d-flex text-left cntnt-clmn">
                        <div class="cntnt-grp">
                            <div class="headings ">
                                <h2 class="h1v1 csh1 font">Experience</h2>
                                <h3 class="font">Over a Decade <span class="trprt-txt">Of Experience</span></h3>
                               
                            </div>
                           <p>Our success story began in 2011 in India now with that immense experience we continue to the present with the same mission in mind to enrich customer’s car ownership experience by providing a world-class service and luxury cars at competitive market prices in India and Dubai.</p>
                           <p>At our forefront is Mr. Dhir Jeswani who has shaped and built the empire of Morya Cars with the help of the two strong pillars Mr. Manoj Jeswani &amp; Mr. Amit Jeswani.</p>
    
                           <p>We at Morya cars pride ourselves and contribute our success to the following attributes.</p>
                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-car"></i> A diverse collection of high-end automobiles under one roof in spick and span condition.</li>
                                <li class="list-group-item"><i class="fas fa-car"></i> A team of friendly and knowledgeable professionals from multicultural backgrounds with amazing customer service and after sale service.</li>
                                <li class="list-group-item"><i class="fas fa-car"></i> Amazing deals and offers all year round.</li>
                            </ul>
    
                            <p>In efforts to better serve our clients, we have recently expanded the horizons of our business. Morya cars can provide you with the most suitable vehicle that is tailored for your needs. Browse through our extensive range of new and used cars from top renowned brands including Rolls Royce, Bentley, Lamborghini, Ferrari, BMW, Mercedes and many more.</p>
                            <p>Each car is thoroughly inspected, evaluated, and then included in our listings to provide our valued customers with a hassle-free experience. This inspection process is just one of many services carried out by our teams at Morya cars.
                            </p>
    
                            <ul class="icon-righttext-list d-flex ">
                                <li class="d-flex align-items-center">
                                    <div class="icon person"></div>
                                    <div class="cntnt h6 w-50">Our Clientele <strong>10000 +</strong></div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="icon established"></div>
                                    <div class="cntnt h6 w-50">Established <strong>2011</strong></div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="icon supercars"></div>
                                    <div class="cntnt h6 w-50">Luxury Cars Sold <strong>5000+</strong></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  d-flex align-items-center justify-content-center">
                        <img src="https://moryacars.in/images/morya-car-powai.jpg" class="img-fluid car-img mb-5" alt="">
                    </div>
                </div>
            </div>
        </section>
    <div class="container">
        <div class="cntnt-grp">
            <div class="headings">
                <h3 class="font">MISSION</h3>
            </div>
                <p>To ensure our customers have a wonderful experience with us in terms of products and services.</p>
            <div class="headings">
                <h3 class="font">Our core values revolve around:</h3>
            </div>
            
                <p>• Integrity – We not only take pride in the quality of the vehicles we sell but also in the way we sell them. Our customers are our top priority, so we ensure that they will get the best vehicle and the best service at the best price.</p>
                <p>• Professionalism – We continue to expand our brand’s portfolio and to sell cars with the highest standard of professionalism. Supporting this professionalism is our team of friendly and multilingual sales executives who are knowledgeable in all the aspects and process of car buying, selling, and trade-in.</p>
                <p>• Excellent Customer Service – Our job does not end when we have closed a deal. We offer dedicated assistance from start to finish and ensure customer satisfaction through our friendly approach.</p>
    
            <div class="headings col-md-6">
                <h3 class="font">VISION</h3>
            </div>
            <p>To be the best around the world and increase the benchmark for providing the finest deals. To expand and cater to all the parts of the world with the most vivid brands of pre-owned luxury and super cars, and provide high quality service, and customer satisfaction.</p>
        </div>
    </div>
    <p><br></p>
    </div>


@endsection