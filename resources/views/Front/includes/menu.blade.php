<div class="container-fluid bg-white position-relative">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
        <a href="index.html" class="navbar-brand text-secondary">
            <div class="logo"> <a href="index.html"><img src="{{asset('/')}}fornt/img/logo.png" alt="#"></a> </div>

        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0 pr-3 border-right">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">হোম</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="about.html" class="dropdown-item">আমাদের সম্পর্কে</a>
                        <a href="testimonial.html" class="dropdown-item">ডোনার</a>
                        <a href="testimonial.html" class="dropdown-item">ডোনার তালিকা</a>
                        <a href="testimonial.html" class="dropdown-item">ব্লগ</a>


                    </div>
                </div>


{{--                <a href="sheba.html" class="nav-item nav-link">ফ্রি সেবার জন্য সদস্য</a>--}}
{{--                <div class="nav-item dropdown">--}}
{{--                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">প্রশিক্ষণ</a>--}}
{{--                    <div class="dropdown-menu rounded-0 m-0">--}}
{{--                        <a href="testimonial.html" class="dropdown-item">Our Workshops (কর্মশালা)</a>--}}
{{--                        <a href="testimonial.html" class="dropdown-item">মা -বাবাদের ট্রেনিং</a>--}}
{{--                        <a href="testimonial.html" class="dropdown-item">শিক্ষক প্রশিক্ষণ  </a>--}}
{{--                        <a href="testimonial.html" class="dropdown-item"> Child IEP Program</a>--}}

{{--                    </div>--}}
{{--                </div>--}}





                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">অডিওলজিক্যাল পরীক্ষা</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="testimonial.html" class="dropdown-item">Pure Tone Audiometry (PTA)</a>
                        <a href="testimonial.html" class="dropdown-item">Speech recognition Threshold (SRT)</a>
                        <a href="testimonial.html" class="dropdown-item">Speech Audiometry(SA)  </a>
                        <a href="testimonial.html" class="dropdown-item"> Play Audiometry (PA) </a>
                        <a href="testimonial.html" class="dropdown-item"> Behavioral observational Audiometry(BOA) </a>

                    </div>
                </div>

                <a href="service.html" class="nav-item nav-link">সার্ভিস</a>


                   @auth

{{--                    <a href="{{ route('user.profile.index') }}" class="dropdown-item">Profile{{ auth()->user()->email ?? '' }}</a>--}}

                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{auth()->user()->name}}</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="{{ route('user.profile.index') }}" class="dropdown-item">Profile</a>
                            <a href="{{route('user.transactions.create')}}" class="dropdown-item">Transaction</a>
                            <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                @csrf
                            </form>


                        </div>
                    </div>




                @else


                <a href="{{route('login')}}" class="nav-item nav-link">লগ ইন </a>



                <a href="{{route('register')}}" class="nav-item nav-link">রেজিস্ট্রেশান </a>

                    <a href="contact.html" class="nav-item nav-link">যোগাযোগ</a>
                @endauth





            </div>
            <div class="d-none d-lg-flex align-items-center pl-4">
                <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                <div>
                    <h6 class="text-body text-uppercase mb-1"><small>Call Anytime</small></h6>
                    <h6 class="m-0">+8801762030500</h6>
                    <h6 class="m-0">+8801979030500</h6>
                </div>
            </div>
        </div>
    </nav>
</div>
