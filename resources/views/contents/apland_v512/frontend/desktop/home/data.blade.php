@extends('templates.'.$template.'.home')

@section('title', $panel_name)

@section('content') 


    <!-- Welcome Area-->
    <section class="hero-barishal welcome-area" id="home">
        <!-- Big Circle-->
        <div class="big-circle"></div>
        <!-- Circle Shape Animation-->
        <div class="circle-shape-animation">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <div class="container h-100">
            <div class="row h-75 justify-content-between align-items-center">
                <div class="col-12 ">
                    <div class="welcome-text-area"> 
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Simulasi Interaktif untuk Pembelajaran Sains<br/>
                            <div class="animated-headline">
                                <div class="ah-headline">
                                    <span class="ah-words-wrapper">
                                        <b class="is-visible">Lebih Dekat.</b>
                                        <b>Dimana Saja.</b>
                                        <b>Kapan Saja.</b>
                                    </span>
                                </div>
                            </div>
                        </h2>
                        <h5 class="wow fadeInUp" data-wow-delay="0.3s">Apland is a completely <span class="text-primary">creative, lightweight, clean &amp; super responsive </span> app landing page. It's built with the latest technology &amp; comes with <span class="text-primary">dark mode.</span></h5>
                     
                    </div>
                </div>
                {{-- <div class="col-12 col-sm-9 col-md-5">
                    <!-- Welcome Thumb-->
                    <div class="welcome-area-thumb text-center wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{ asset('/apland_v512') }}/assets/img/bg-img/hero-12.jpg" alt="">
                        <div class="video-area-text">
                            <a class="video-btn mt-0" href="https://www.youtube.com/watch?v=YLtFGWVWiGo">
                                <i class="lni-play"></i>
                                <span class="video-sonar"></span>
                            </a>
                        </div>
                    <!-- Thumb Shape-->
                        <div class="thumb-shape1">
                            <img src="{{ asset('/apland_v512') }}/assets/img/core-img/line-shape.png" alt="">
                        </div>
                        <div class="thumb-shape2"></div>
                        <div class="thumb-shape3"></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <div class="container">
        <div class="welcome-border"></div>
    </div> --}}

    <!-- Core Features Wrapper-->
    <div class="core-features-wrapper section-padding-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="0.2s">
                        <h6 class="alert alert-success">Eksperimen Sains Interaktif:</h6>
                        <h3>Lab Virtual Favorit</h3>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="core-features-card shadow-sm text-center wow fadeInUp" data-wow-delay="0.2s">
                        <img class="mb-4" src="{{ asset('/labvirtual') }}/assets/img/1.png" style="padding:1px">
                        <h4 class="mb-3">PhET</h4>
                        <p class="mb-0">
                            Jelajahi dunia fisika mulai dari mekanika hingga gelombang dan energi. 
                            Setiap simulasi menawarkan cara baru untuk memahami hukum alam melalui eksperimen virtual 
                            yang mudah dipahami.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="core-features-card shadow-sm text-center wow fadeInUp" data-wow-delay="0.3s">
                        <img class="mb-4" src="{{ asset('/labvirtual') }}/assets/img/2.png" style="padding:1px">
                        <h4 class="mb-3">golabz</h4>
                        <p class="mb-0">We've used npm for easily manage and update all assets.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="core-features-card shadow-sm text-center wow fadeInUp" data-wow-delay="0.1s">
                        <img class="mb-4" src="{{ asset('/labvirtual') }}/assets/img/3.png" style="padding:1px">
                        <h4 class="mb-3">chemcollective</h4>
                        <p class="mb-0">A toolkit to automate &amp; enhance your workflow.</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="border-top"></div>
    </div>
 
@endsection
