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
                <div class="col-12 col-md-6">
                    <div class="welcome-text-area">
                        <h6 class="mb-3"> 
                            ✨ Platform digagas oleh Sistem Informasi - UPN Veteran Jawa Timur
                        </h6>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                            Simulasi Interaktif untuk Pembelajaran Sains<br/>
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
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-5">
                    <!-- Welcome Thumb-->
                    <div class="welcome-area-thumb text-center">
                        <img src="img/bg-img/hero-12.jpg" alt="">
                        <div class="video-area-text">
                            <!-- <a class="video-btn mt-0" href="https://www.youtube.com/watch?v=YLtFGWVWiGo">
                                <i class="lni-play"></i><span class="video-sonar"></span>
                            </a> -->
                        </div>
                        <!-- Thumb Shape-->
                        <div class="thumb-shape1"><img src="img/core-img/line-shape.png" alt=""></div>
                        <div class="thumb-shape2"></div>
                        <div class="thumb-shape3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- <div class="container">
        <div class="welcome-border"></div>
    </div> -->

    <!-- About App Area-->
    <section class="using-benefits-area section-padding-130-0">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- About Image-->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="about-image mb-5 mb-md-0">
                    <!-- Circle Shape-->
                    <div class="circle-shape wow fadeInUp" data-wow-delay="500ms"></div>
                    <!-- Big Thumbnail-->
                    <div class="big-thumb wow fadeInUp"><img src="img/bg-img/about-app-1.png" alt=""></div>
                    <!-- Small Thumbnail-->
                    <div class="small-thumb wow fadeInUp"><img src="img/bg-img/about-app-2.png" alt=""></div>
                    </div>
                </div>
                <!-- About Text-->
                <div class="col-12 col-md-6 col-lg-5">
                    <!-- Section Heading--> 
                    <div class="section-heading white  wow fadeInUp">
                        <h3>🔬 Selamat Datang<br/>di Laboratorium Virtual</h3>
                        <div class="line me-auto ms-0"></div>
                    </div>
                    <!-- About Us Text-->
                    <div class="about-us-text-area wow fadeInUp"> 
                        <p>
                            <span class="text-primary">Lab Virtual SMAN 1 Ngraho</span>
                            adalah platform pembelajaran digital 
                            yang menghubungkan siswa dengan laboratorium sains terbaik di dunia. 
                            Melalui portal ini, pembelajaran sains menjadi lebih interaktif, mudah diakses, dan menyenangkan!
                        </p>
                        <div class="border-top my-5"></div>  
                        <p>
                            Program ini merupakan hasil kolaborasi antara 
                            <span class="text-primary">SMAN 1 Ngraho</span> 
                            dengan 
                            <span class="text-primary">Program Studi Sistem Informasi UPN Veteran Jawa Timur</span> 
                            , bertujuan untuk meningkatkan kualitas pendidikan STEM melalui inovasi teknologi pembelajaran.
                        </p>
                        <div class="border-top my-5"></div>  
                        <p>
                            <span class="text-primary">💡 Mengapa Lab Virtual?</span> Dengan lab virtual, 
                            eksperimen sains dapat dilakukan kapan saja, di mana saja, tanpa keterbatasan peralatan fisik. 
                            Siswa dapat mengeksplorasi konsep fisika, kimia, dan biologi dengan simulasi interaktif yang aman 
                            dan realistic.
                        </p>
                        <div class="border-top my-5"></div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
 
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
                            Laboratorium virtual dari University of Colorado Boulder yang menyediakan lebih dari 160 simulasi sains dan matematika interaktif. 
                            Cocok untuk pembelajaran Fisika, Kimia, Biologi, Matematika, dan Ilmu Kebumian.
                        </p>
                        <div class="features mt-4">
                            <small class="feature-tag">🎯 Gratis</small>
                            <small class="feature-tag">🌍 Bahasa Indonesia</small>
                            <small class="feature-tag">📱 Mobile Friendly</small>
                            <small class="feature-tag">🏆 Award-winning</small>
                        </div> 
                        
                        <div class="button mt-2">
                            <a class="btn btn-success" href="https://phet.colorado.edu/"  target="_blank">
                                🚀 Mulai Eksplorasi
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="core-features-card shadow-sm text-center wow fadeInUp" data-wow-delay="0.3s">
                        <img class="mb-4" src="{{ asset('/labvirtual') }}/assets/img/2.png" style="padding:1px">
                        <h4 class="mb-3">ChemCollective</h4>
                        <p class="mb-0">
                            Platform laboratorium kimia virtual dari Carnegie Mellon University yang menawarkan simulasi eksperimen 
                            kimia realistis. Siswa dapat melakukan titrasi, reaksi kimia, dan eksperimen stoikiometri layaknya 
                            di lab sungguhan. 
                        </p>
                        <div class="features mt-4">
                            <small class="feature-tag">🔬 Lab Kimia Lengkap</small>
                            <small class="feature-tag">📊 Hasil Real-time</small>
                            <small class="feature-tag">✅ Autograded Activities</small>
                            <small class="feature-tag">👨‍🔬 Interactive Tutorials</small>
                        </div>
                        
                        <div class="button mt-2">
                            <a class="btn btn-success" href="https://chemcollective.org/"  target="_blank">
                                🚀 Mulai Praktikum
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="core-features-card shadow-sm text-center wow fadeInUp" data-wow-delay="0.1s">
                        <img class="mb-4" src="{{ asset('/labvirtual') }}/assets/img/3.png" style="padding:1px">
                        <h4 class="mb-3">Go-Lab</h4>
                        <p class="mb-0">
                            Platform pembelajaran berbasis inquiry yang mengintegrasikan ratusan lab virtual dan 
                            remote labs dari seluruh Eropa. Menyediakan tools pembelajaran STEM yang komprehensif 
                            untuk eksplorasi sains mendalam. 
                        </p>
                        <div class="features mt-4">
                            <small class="feature-tag">🌐 500+ Labs</small>
                            <small class="feature-tag">🎓 Inquiry Learning</small>
                            <small class="feature-tag">🤝 Collaborative Tools</small>
                            <small class="feature-tag">📚 Learning Apps</small>
                        </div> 
                        
                        <div class="button mt-2">
                            <a class="btn btn-success" href="https://www.golabz.eu/"  target="_blank">
                                🚀 Jelajahi Sekarang
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="container">
        <div class="border-top"></div>
    </div>
 
@endsection
