<nav class="bg-dark " style="z-index: 5;">
    <div id="bignav" class="text-light px-4">
        <div>
            <a href="{{ route('home') }}">
            <img src="{{asset('img/logo.png')}}" alt="company-icon" class="img-fluid"></a>
        </div>
        <div class="d-flex justify-content-between align-items-center px-3" style="width: 100%;">
            <ol class="d-flex justify-content-evenly pl-2 mt-3 navbarlist z-index">
                <a href="{{ route('home') }}" >Home </a>
                <a href="#" id="aboutdropdown">About us <span class="text-warning">></span></a>
                <div id="aboutnavbar">
                    <div id="navbar1">
                        <a href="{{route ('testimonial')}}">Testimonial</a>
                        <a href="{{route ('faq')}}">Faq</a>
                        {{-- <a href="#">Gallery</a> --}}
                        <a href="{{route ('about')}}">About</a>
                    </div>
                </div>

                <a href="{{ route ('collection')}}" id="blogdropdown">Our Collection</a>
                <a href="{{ route('contactPage') }}">contacts</a>
            </ol>

            <div class="d-flex">
                <h1 class="text-warning navbarbigwhatsaap"><i class="fa-brands fa-whatsapp"></i></h1>&nbsp;&nbsp;
                <div class="navbarbigwhatsaap1">
                    <span class="text-warning fw-light">Call to Book an Order</span>
                    <p style="font-size:1.3rem" class="fw-light">+971569246931</p>
                </div>
            </div>
            <!-- <h3 class="navbarusericon"><i class="fa-solid fa-user"></i></h3> -->
        </div>
    </div>
    <div id="smallnavbar">
        <div id="smallnav" class="bg-dark text-light px-4">
            <div id="smallnavimage">
                <img src="{{asset('./img/logo.png')}}" class="img-fluid"style="height:80px" alt="company-icon">
            </div>
            <div id="smalldropdown">
                <i class="fa-solid fa-bars"></i>
            </div>
           
            {{-- <div id="small-nav-links" class="d-flex flex-column" style="display: none;">
                <a href="{{ route('home') }}">Home</a>
                <a href="#">About</a>
                <a href="#">Our Collection</a>
                <a href="{{ route('contactPage') }}">Contact</a>
            </div> --}}
            
            
        </div>
    </div>
    <div class="container-fulid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Faq</a>
                        <a class="dropdown-item" href="#">Testimonial</a>
                        <a class="dropdown-item" href="#">About Us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Our Collection</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function() {

        $("#aboutdropdown").hover(
            function() {
                $("#aboutnavbar").stop(true, true).fadeIn();
            },
            function() {
                setTimeout(function() {
                    if (!$("#aboutnavbar:hover").length) {
                        $("#aboutnavbar").fadeOut();
                    }
                }, 50);
            }
        );

        $("#aboutnavbar").hover(
            function() {
                $(this).stop(true, true).fadeIn();
            },
            function() {
                $(this).fadeOut();
            }
        );
        $('#smallnavbar').on("click", function(){
            var navbar = $('#navbarNav');
                // Toggle the "show" class
                navbar.toggleClass('show');
                if(navbar.hasClass('show')){

                }
        });
        $('#navbarNav').click(function (event) {
                // Check if the target of the click is not a link inside the navbar
                if (!$(event.target).closest('a').length) {
                    $(this).removeClass('show');
                    $(this).css('max-height', '0');
                }
            });    

            $('.nav-item.dropdown').click(function (e) {
                e.stopPropagation();  // Prevent event from bubbling up and closing the menu
                $(this).toggleClass('show');
                $(this).children('.dropdown-menu').toggle();
                // $(this).children('.dropdown-menu').stop(true, true).fadeToggle(300)
            });
            $(document).click(function (e) {
                if (!$(e.target).closest('.nav-item.dropdown').length) {
                    $('.nav-item.dropdown').removeClass('show');
                    $('.dropdown-menu').hide();
                }
            });    
        

    });
</script>