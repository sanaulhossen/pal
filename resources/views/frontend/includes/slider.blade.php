<section class="caviar-hero-area" id="home">
    <!-- Welcome Social Info -->
    <div class="welcome-social-info">
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
    <!-- Welcome Slides -->
    <div class="caviar-hero-slides owl-carousel">

        @foreach ($sliders as $slider)
            <!-- Single Slides -->
            <div class="single-hero-slides bg-img" style="background-image: url({{ asset('dashbord/image/slider_image') }}/{{ $slider->slider_photo }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-8 col-lg-6">
                            <div class="hero-content">
                                <h2>{{ $slider->slider_title }}</h2>
                                <p>{!! $slider->slider_description !!}</p>
                                <a href="#" class="btn caviar-btn"><span></span> Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slides -->
        @endforeach

    </div>
</section>
