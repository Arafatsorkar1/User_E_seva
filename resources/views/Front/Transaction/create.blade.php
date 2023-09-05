@extends('Front.master')
@section('title','Transaction')
@section('css')
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-40">Tab with dropdown</h4>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home5" role="tab" aria-controls="home5" aria-expanded="true"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile5" role="tab" aria-controls="profile"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Profile</span></a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
                                        <span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Dropdown</span>
                                    </a>
                                    <div class="dropdown-menu"> <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" role="tab" data-bs-toggle="tab" aria-controls="dropdown1">@fat</a> <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" role="tab" data-bs-toggle="tab" aria-controls="dropdown2">@mdo</a> </div>
                                </li>
                            </ul>
                            <div class="tab-content tabcontent-border p-20" id="myTabContent">
                                <div role="tabpanel" class="tab-pane fade show active" id="home5" aria-labelledby="home-tab">
                                    <form action="{{route('user.transactions.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <section class="py-5">
                                            <div class="container">
                                                <div class="row" style="background: lemonchiffon; padding: 10px">
                                                    <div class="col-md-6">
                                                        <div class="row mt-3">
                                                            <label for="" class="col-md-4">Transaction ID</label>
                                                            <div class="col-md-8">
                                                                <input type="text" readonly name="trans_id" value="{{ $trans_id ?? '' }}" >
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <label for="" class="col-md-4">Your Name</label>
                                                            <div class="col-md-8">
                                                                <input type="text" readonly name="trans_buy" value="{{auth()->user()->name}}" >
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <label for="" class="col-md-4">Payment</label>
                                                            <div class="col-md-8">
                                                                <input type="number" name="payment" >
                                                            </div>
                                                        </div>
{{--                                                        <div class="row mt-3">--}}
{{--                                                            <label for="" class="col-md-4">Title</label>--}}
{{--                                                            <div class="col-md-8">--}}
{{--                                                                <input type="text" name="" >--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                    <div class="col-md-6">
{{--                                                        <div class="row mt-3">--}}
{{--                                                            <label for="" class="col-md-4">Time</label>--}}
{{--                                                            <div class="col-md-8">--}}
{{--                                                                <input type="date" name="date" >--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                        <div class="row mt-3">
                                                            <label for="" class="col-md-4">Transaction Type</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="purpose" >
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <label for="" class="col-md-4"></label>
                                                            <div class="col-md-8">
                                                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 text-white">Submit</button>

                                                            </div>
                                                        </div>
{{--                                                        <div class="row mt-3">--}}
{{--                                                            <label for="" class="col-md-4">Title</label>--}}
{{--                                                            <div class="col-md-8">--}}
{{--                                                                <input type="text" name="" >--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="row mt-3">--}}
{{--                                                            <label for="" class="col-md-4">Title</label>--}}
{{--                                                            <div class="col-md-8">--}}
{{--                                                                <input type="text" name="" >--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="row mt-3">--}}
{{--                                                            <label for="" class="col-md-4">Title</label>--}}
{{--                                                            <div class="col-md-8">--}}
{{--                                                                <input type="text" name="" >--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="mt-5">--}}
{{--                                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 text-white">Submit</button>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                </div>
{{--                                First tep section end--}}
{{--                                2end tep section --}}
                                <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab">
                                    <section style="background-color: #eee;">
                                        <div class="container py-5">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card mb-4">
                                                        <div class="card-body text-center">
                                                            <img src="{{asset(auth()->user()->image)}}"  data-default-file="{{asset('images/default.jpg')}}" alt="avatar"
                                                                 class="rounded-circle img-fluid" style="width: 150px;">
                                                            <h5 class="my-3">{{auth()->user()->name}}</h5>
                                                            <p class="text-muted mb-1">Full Stack Developer</p>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-4 mb-lg-0">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="card mb-4">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Full Name</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{auth()->user()->name}}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Email</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{auth()->user()->email}}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Phone</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0" >{{auth()->user()->phone}}</p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0">Address</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0">{{auth()->user()->address}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container" style="background: lemonchiffon">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card mt-4">
                                                        <div class="card-header">
                                                            <h3 class="text-center text-muted">Last Transaction Information</h3>
                                                        </div>
                                                        <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Transaction ID :</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{$lInformation->trans_id ?? ''}}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>

                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Your Name :</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{$lInformation?->user->name ?? ''}}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Payment :</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0" >{{$lInformation->payment ?? ''}}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Time :</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{$lInformation->created_at}}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Transaction Type </p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{$lInformation->purpose}}</p>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card mt-4">
                                                        <div class="card-header">
                                                            <h3 class="text-center text-muted">All Transaction Information</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p class="mb-0 font-weight-bold">Balance</p>
                                                                </div>
                                                                <div class="col-sm-9">
                                                                    <p class="text-muted mb-0 font-weight-bold">: {{ \App\Models\Transasction\trensactionHead::sum('payment')}} BDT</p>
                                                                </div>
                                                            </div>
{{--                                                            table--}}
                                                            <section class="py-5">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <h3 class="text-center">Transaction's</h3>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <table class="table baseDataTable">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>serial No </th>
                                                                                            <th>trans_id</th>
                                                                                            <th>Date</th>
                                                                                            <th>Amount</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        @foreach($informations as $information)
                                                                                            <tr>
                                                                                                <td>{{ $loop->iteration }}</td>
                                                                                                <td>{{$information->trans_id}}</td>
                                                                                                <td>{{$information->created_at}}</td>
                                                                                                <td>{{$information->payment}}</td>
                                                                                            </tr>
                                                                                        @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
{{--                                                            table end--}}
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </section>
                                </div>
{{--                                2end tep section end--}}
{{--                                3d tep section --}}
                                <div class="tab-pane fade" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab">
                                    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                                </div>
                                <div class="tab-pane fade" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab">
                                    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                                </div>
{{--                                3d tep section end--}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
