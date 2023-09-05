@extends('Front.master')
@section('title','homePage')

@section('body')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3">THERAPY LAB LTD.</h1>
                <h3>Perfect Therapeutic Medicine</h3>
                <br>
                <br>
                <br>
                <br>
                <p class="text-dark mb-4">Speech & Language Therapy</p>
                <p class="text-dark mb-4">Occupational Therapy</p>
                <p class="text-dark mb-4">Group Therapy</p>

                <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="{{asset('/')}}fornt/img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="{{asset('/')}}fornt/img/about.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4">About us (আমাদের সম্পর্কে)</h1>

                    <p class="mb-4">THERAPY LAB LTD. Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.</p>
                    <p class="mb-4">THERAPY LAB LTD. Eirmod est dolor nonumy sea amet dolore erat sit dolor et dolor vero. Tempor ipsum at justo amet at ipsum justo. Aiam kasd sea sit dolor duo elitr dolor amet, justo est ipsum amet dolor ut ipsum. Labore diam et nonumy amet dolores. Volup sit labore dolores erat, magna justo sed lorem kasd ea dolor. Labore sit clita invidunt, est dolores lorem sed ipsum kasd no amet ipsum.</p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our services (সেবা সমুহ)</h1>
            <div class="row">
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">স্পিচ এন্ড ল্যাগুয়েজ  থেরাপি <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">অকুপেশনাল থেরাপি <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">গ্রুপথেরাপি <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">মাসিক থেরাপি প্রোগ্রাম <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">ডাক্তার কনসালটেন্সি<span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">টেলিমেডিসিন এন্ড হোমকেয়ার সার্ভিস <span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">ডায়েট কনসালটেন্সি<span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">আনন্দ ল্যাব স্পেশাল স্কুলিং/ ভোকেশনাল টেনিং<span class="d-block text-body"></span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5"> Gallery (প্রোগ্রামের ছবি )</h1>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4 active" data-filter="*">
                            <i class="fa fa-star text-primary mr-2"></i>All
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".first">
                            <i class="fa fa-laptop-code text-primary mr-2"></i>Design
                        </li>
                        <li class="btn btn-outline-dark text-uppercase py-2 px-4" data-filter=".second">
                            <i class="fa fa-mobile-alt text-primary mr-2"></i>Development
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/portfolio-1.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/portfolio-2.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/portfolio-3.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/portfolio-4.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/portfolio-5.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative rounded overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/portfolio-6.jpg" alt="">
                        <div class="portfolio-btn d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-4x fa-plus text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Workshops (কর্মশালা)</h1>
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <h2 class="text-uppercase">একদিনের কর্মশালা</h2>
                        <h6 class="text-uppercase text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="bg-dark rounded text-center pt-5 mb-4">
                        <h2 class="text-uppercase text-white">৩ দিনের কর্মশালা</h2>
                        <h6 class="text-uppercase text-secondary mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary rounded-circle p-4 mb-2">
                            <h1 class="display-4 mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>99<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center text-secondary py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <h2 class=" text-uppercase">৭ দিনের কর্মশালা</h2>
                        <h6 class="text-uppercase text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>149<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Mother Training (প্রশিক্ষণ)</h1>
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <h2 class="text-uppercase">2 Week 14days</h2>
                        <h6 class="text-uppercase text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="bg-dark rounded text-center pt-5 mb-4">
                        <h2 class="text-uppercase text-white">4 Week 30days</h2>
                        <h6 class="text-uppercase text-secondary mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary rounded-circle p-4 mb-2">
                            <h1 class="display-4 mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>99<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center text-secondary py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <h2 class=" text-uppercase">12 week 90 days</h2>
                        <h6 class="text-uppercase text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>149<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Investigation Test End -->

    <!--  Investigation Teacher training Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Teacher Training (প্রশিক্ষণ)</h1>
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="bg-light rounded text-center pt-5 mt-lg-5 mb-4">
                        <h2 class="text-uppercase">12 Week 90days</h2>
                        <h6 class="text-uppercase text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark rounded-circle p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="bg-dark rounded text-center pt-5 mb-4">
                        <h2 class="text-uppercase text-white">24 Week 180days</h2>
                        <h6 class="text-uppercase text-secondary mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary rounded-circle p-4 mb-2">
                            <h1 class="display-4 mb-0">
                                <small class="align-top"
                                       style="font-size: 22px; line-height: 45px;">$</small>99<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center text-secondary py-4">
                            <p>HTML5 & CSS3</p>
                            <p>Bootstrap v4</p>
                            <p>Responsive Layout</p>
                            <p>Compatible With All Browsers</p>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Investigation Test Assessment</h1>
            <div class="text-center py-4">
                <p><a href="#">speech delay disorder screening (SDDS)</a></p>
                <p><a href="#">Language Delay Disorder Screenng (LDDS)</a></p>
                <p><a href="#">Higher Level Language Screening/IO Test(HLLS/IQ)</a></p>
                <p><a href="#">Learning Disability Assessment (LDA)</a></p>
                <p><a href="#">Articulation Screening (AS)</a></p>
                <p><a href="#">Preverbal Screening (PVS)</a></p>
                <p><a href="#">Dementia Assessment(DA)</a></p>
                <p><a href="#">Stammering Assessment (SA)</a></p>
                <p><a href="#">Voice Test (VT)</a></p>
                <p><a href="#">Speech Language Screen for Aphasia (SLSA)</a></p>
                <p><a href="#">Apraxia of Speech Assessment (ASA)</a></p>
                <p><a href="#">Orapharangial Assessment (OPA)</a></p>


            </div>
        </div>
    </div>
    <!--  Investigation Test End -->
    <!-- Consultancy & Intervention Start -->

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Consultancy & Intervention Program</h1>
            <div class="text-center py-4">
                <p><a href="#">speech delay disorder screening (SDDS)</a></p>
                <p><a href="#">Language Delay Disorder Screenng (LDDS)</a></p>
                <p><a href="#">Higher Level Language Screening/IO Test(HLLS/IQ)</a></p>
                <p><a href="#">Learning Disability Assessment (LDA)</a></p>
                <p><a href="#">Articulation Screening (AS)</a></p>
                <p><a href="#">Preverbal Screening (PVS)</a></p>
                <p><a href="#">Dementia Assessment(DA)</a></p>
                <p><a href="#">Stammering Assessment (SA)</a></p>
                <p><a href="#">Voice Test (VT)</a></p>
                <p><a href="#">Speech Language Screen for Aphasia (SLSA)</a></p>
                <p><a href="#">Apraxia of Speech Assessment (ASA)</a></p>
                <p><a href="#">Orapharangial Assessment (OPA)</a></p>


            </div>
        </div>
    </div>

    <!-- Consultancy & Intervention End -->
    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Meet Our Dector</h1>
            <div class="owl-carousel team-carousel position-relative" style="padding-left: 30px;">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/team-1.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">John Doe</h4>
                        <p class="m-0">CEO, Founder</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">Kate Wilson</h4>
                        <p class="m-0">Designer</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">John Brown</h4>
                        <p class="m-0">Developer</p>
                    </div>
                </div>
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="{{asset('/')}}fornt/img/team-4.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h4 class="text-uppercase">Paul Watson</h4>
                        <p class="m-0">Marketer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="{{asset('/')}}fornt/img/testimonial-1.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="{{asset('/')}}fornt/img/testimonial-2.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="{{asset('/')}}fornt/img/testimonial-3.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="{{asset('/')}}fornt/img/testimonial-4.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 px-0">
        <div class="row mt-5 mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
            <div class="col-lg-6 col-md-8 col-sm-10 px-0">
                <div class="contact-form bg-white rounded p-5">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="text" class="form-control bg-light border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="control-group">
                                    <input type="email" class="form-control bg-light border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control bg-light border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary text-uppercase py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
