
@extends('layout.user_layout') 
@section('styleCode')
<style>
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
.bg-gold{
    background: radial-gradient(circle, rgba(234, 194, 64, 1) 60%, rgba(176, 77, 1, 1) 100%);
}
</style>
@endsection
@section('content')
 
  
  <div class="static">
  <div class="container-fluid">
      
  </div>
  <h1 class="text-center">Testimonials</h1>
  
  <div id="container pagecontainer">
  
     <!-- <div class="taggbox-container" style="width:80%;height:100%;overflow: auto; margin:50px auto;">
        <h3 class="text-center">What google says about us?</h3>
        <div class="taggbox-socialwall" data-wall-id="98420" view-url="https://widget.taggbox.com/98420"></div><script src="https://widget.taggbox.com/embed.min.js" type="text/javascript"></script>
     </div> -->
     <div class="row mt-4 mb-4 pt-4">
           <div class="col-md-8 offset-md-3">
               <img src="https://moryacars.in/images/reviews/r1.jpg" class="img-fluid">
              <img src="https://moryacars.in/images/reviews/r2.jpg" class="img-fluid">
              <img src="https://moryacars.in/images/reviews/r3.jpg" class="img-fluid">
              <img src="https://moryacars.in/images/reviews/r4.jpg" class="img-fluid">
              <img src="https://moryacars.in/images/reviews/r5.jpg" class="img-fluid">
           </div>
        </div>
        <div class="d-flex justify-content-center mb-4" style="margin-top:-20px;">
           <a href="https://www.google.com/search?q=morya+cars+powai&amp;sxsrf=ALiCzsY5nr1I3xOqePOeSMfuJznJyYYF7g%3A1671160295208&amp;ei=5-GbY6KnDPTB3LUP6bK0gAI&amp;ved=0ahUKEwjitoielf37AhX0ILcAHWkZDSAQ4dUDCA8&amp;uact=5&amp;oq=morya+cars+powai&amp;gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIFCAAQgAQyBggAEBYQHjIFCAAQhgMyBQgAEIYDMgUIABCGAzIFCAAQhgMyBQgAEIYDOgQIIxAnOgsILhCvARDHARCABDoLCC4QgAQQxwEQrwE6CAgAEIAEEMsBSgQIQRgASgQIRhgAUABY3wtggg5oAHABeACAAZsCiAGKC5IBAzItNpgBAKABAcABAQ&amp;sclient=gws-wiz-serp#lrd=0x3be7c7f0296b0ac1:0xde68d55cf8e1975a,1,,," class="btn bg-gold" target="_blank"><i class="fas fa-star"></i> More Reviews</a>
        </div>
  </div>
  </div>


  

  
  
  {{-- <a href="https://api.whatsapp.com/send?phone=6913329999&amp;text=Hello Morya Cars Team, I Would like to know more about Selling or Buying a Car ?" class="float" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a> --}}
@endsection