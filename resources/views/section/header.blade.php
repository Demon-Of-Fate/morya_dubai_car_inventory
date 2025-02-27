<nav class="bg-dark " style="z-index: 5;">
    <div id="bignav" class="text-light px-4">
        <div>
            <img src="{{asset('img/logo.png')}}" alt="company-icon" class="img-fluid">
        </div>
        <div class="d-flex justify-content-between align-items-center px-3" style="width: 100%;">
            <ol class="d-flex justify-content-evenly pl-2 mt-3 navbarlist z-index">
                <a href="#" id="homedropdown">Home <span class="text-warning">></span></a>
                <div id="homenavbar">
                    <div id="navbar1">
                        <a href="#">Limousine</a>
                        <a href="#">Retal Service</a>
                        <a href="#">Luxury Cars</a>
                        <a href="#">RTL Limunose</a>
                    </div>
                </div>
                <a href="#" id="aboutdropdown">About us <span class="text-warning">></span></a>
                <div id="aboutnavbar">
                    <div id="navbar1">
                        <a href="{{route ('testimonial')}}">Testimonial</a>
                        <a href="{{route ('faq')}}">Faq</a>
                        {{-- <a href="#">Gallery</a> --}}
                        <a href="{{route ('about')}}">About</a>
                    </div>
                </div>
                <a href="#" id="productdropdown">products <span class="text-warning">></span></a>
                <div id="productnavbar">
                    <div id="navbar1">
                        <a href="#">Shop</a>
                        <a href="#">Cart</a>
                        <a href="#">Checkout</a>
                        <a href="#">My Account</a>
                    </div>
                </div>
                <a href="#" id="blogdropdown">blog <span class="text-warning">></span></a>
                <div id="blognavbar">
                    <div id="navbar1">
                        <a href="#">Journey</a>
                        <a href="#">Mission</a>
                    </div>
                </div>
                <a href="{{ route('contactPage') }}">contacts</a>
            </ol>

            <div class="d-flex">
                <h1 class="text-warning navbarbigwhatsaap"><i class="fa-brands fa-whatsapp"></i></h1>&nbsp;&nbsp;
                <div class="navbarbigwhatsaap1">
                    <span class="text-warning fw-light">Call to Book an Order</span>
                    <p style="font-size:1.3rem" class="fw-light">8-800-10-500</p>
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
        </div>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $("#homedropdown").hover(
            function() {
                $("#homenavbar").stop(true, true).fadeIn();
            },
            function() {
                setTimeout(function() {
                    if (!$("#homenavbar:hover").length) {
                        $("#homenavbar").fadeOut();
                    }
                }, 50);
            }
        );

        $("#homenavbar").hover(
            function() {
                $(this).stop(true, true).fadeIn();
            },
            function() {
                $(this).fadeOut();
            }
        );

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

        $("#productdropdown").hover(
            function() {
                $("#productnavbar").stop(true, true).fadeIn();
            },
            function() {
                setTimeout(function() {
                    if (!$("#productnavbar:hover").length) {
                        $("#productnavbar").fadeOut();
                    }
                }, 50);
            }
        );

        $("#productnavbar").hover(
            function() {
                $(this).stop(true, true).fadeIn();
            },
            function() {
                $(this).fadeOut();
            }
        );

        $("#blogdropdown").hover(
            function() {
                $("#blognavbar").stop(true, true).fadeIn();
            },
            function() {
                setTimeout(function() {
                    if (!$("#blognavbar:hover").length) {
                        $("#blognavbar").fadeOut();
                    }
                }, 50);
            }
        );

        $("#blognavbar").hover(
            function() {
                $(this).stop(true, true).fadeIn();
            },
            function() {
                $(this).fadeOut();
            }
        );
    });
</script>