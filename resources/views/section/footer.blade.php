<style>
  @media (max-width: 768px){
    .subscribe{
      flex-direction: column;
    }
  }
</style>

<footer class="bg-dark">
    <div class="container p-5">
        <div class="d-flex justify-content-center align-items-center">
          <a href="{{ route('home') }}">
            <img src="{{asset('img/logo.png')}}" alt="company-icon" class="img-fluid"></a>
        </div>
        <div class="mt-5">
            <div class="row mt-5 d-flex justify-content-center">
                <div class="col-md-3 text-light ">
                    <div style="border-right:2px dashed grey;" class="d-flex justify-content-center align-items-center flex-column">
                        <span style="color:#D7B65D;font-size:1.3rem"><i class="fa-solid fa-phone"></i></span>
                        <!-- <span>+971569246931</span> -->
                        <span><a href="tel:+971569246931" style="text-decoration: none; color: inherit;">+971569246931</a></span>
                        <span style="color:#D7B65D">Round-the-clock</span>
                    </div>
                </div>
                <!-- <div class="col-md-3 text-light">
                    <div style="border-right:2px dashed grey;" class="d-flex justify-content-center align-items-center flex-column">
                        <span style="color:#D7B65D;font-size:1.3rem"><i class="fa-solid fa-location-crosshairs"></i></span>
                        <span style="color:#D7B65D" class="text-center">1353 Locust St, Kansas City, MO 64106</span>
                    </div>
                </div> -->
                <div class="col-md-3 text-light">
                    <!-- <div style="border-right:2px dashed grey;" class="d-flex justify-content-center align-items-center flex-column"> -->
                    <div style="" class="d-flex justify-content-center align-items-center flex-column">
                        <span style="color:#D7B65D;font-size:1.3rem"><i class="fa-solid fa-message"></i></span>
                        <span>moryacar@dubaigmail.com</span>
                        <span style="color:#D7B65D">Info@moryacarsdubai.com</span>
                    </div>
                </div>
                <!-- <div class="col-md-3 text-light">
                    <div style="border-right:2px dashed grey;" class="d-flex justify-content-center align-items-center flex-column">
                        <span style="color:#D7B65D;font-size:1.3rem"><i class="fa-solid fa-clock"></i></span>
                        <span>Mo-Sa: 07:00 - 22:00</span>
                        <span style="color:#D7B65D">Su: 07:00 - 16:00</span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</footer>

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