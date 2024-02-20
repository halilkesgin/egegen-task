<style>
    .bg-left-half {
        position: relative;
    }

    .bg-left-half:before {
        position: absolute;
        width: 50%;
        height: 100%;
        z-index: -1;
        content: "";
        left: 0;
        top: 0;
        background-color: #f8f9fa;
    }

    .media-29101 img {
        margin-bottom: 20px;
    }

    .media-29101 h3 {
        font-size: 18px;
        font-weight: 900 !important;
    }

    .media-29101 h3 a {
        color: #6c757d;
    }

    .owl-2-style .owl-nav {
        display: none;
    }

    .owl-2-style .owl-dots {
        text-align: center;
        position: relative;
        bottom: -30px;
    }

    .owl-2-style .owl-dots .owl-dot {
        display: inline-block;
    }

    .owl-2-style .owl-dots .owl-dot span {
        display: inline-block;
        width: 15px;
        height: 3px;
        border-radius: 0px;
        background: #cccccc;
        -webkit-transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
        -o-transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
        transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
        margin: 3px;
    }

    .owl-2-style .owl-dots .owl-dot.active span {
        background: #007bff;
    }

    .owl-2-style .owl-dots .owl-dot:active,
    .owl-2-style .owl-dots .owl-dot:focus {
        outline: none;
    }
</style>

<div class="site-section bg-left-half mb-5">
    <div class="container owl-2-style">
        <h2 class="text-primary py-5 ">Our Products</h2>
        <div class="owl-carousel owl-2">
            <div class="media-29101">
                <img src="{{ asset('img/item-1.svg') }}" class="d-block w-100" alt="...">

                <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
            </div>
            <div class="media-29101">
                <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                <h3><a href="#">Beatae Doloribu</a></h3>
            </div>
            <div class="media-29101">
                <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                <h3><a href="#">Accusantium Eius Soluta</a></h3>
            </div>
            <div class="media-29101">
                <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                <h3><a href="#">Consectetur Adipisicing Elit</a></h3>
            </div>
            <div class="media-29101">
                <a href="#"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
                <h3><a href="#">Beatae Doloribu</a></h3>
            </div>
            <div class="media-29101">
                <a href="#"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
                <h3><a href="#">Accusantium Eius Soluta</a></h3>
            </div>
        </div>

    </div>
</div>
<script>
    $(function() {

        if ($('.owl-2').length > 0) {
            $('.owl-2').owlCarousel({
                center: false,
                items: 1,
                loop: true,
                stagePadding: 0,
                margin: 20,
                smartSpeed: 1000,
                autoplay: true,
                nav: true,
                dots: true,
                pauseOnHover: false,
                responsive: {
                    600: {
                        margin: 20,
                        nav: true,
                        items: 2
                    },
                    1000: {
                        margin: 20,
                        stagePadding: 0,
                        nav: true,
                        items: 3
                    }
                }
            });
        }

    })
</script>
