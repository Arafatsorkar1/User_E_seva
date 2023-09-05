@extends('Admin.Dashboard.master')

@section('title','user-information')

@section('body')
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{asset($informations->image)}}"  data-default-file="{{asset('images/default.jpg')}}" alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{$informations->name}}</h5>
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
                                    <p class="text-muted mb-0">{{$informations->name}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$informations->email}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" >{{$informations->phone}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$informations->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <sectiion>
        <div class="container py-5">
            <div class="container" style="background: lemonchiffon">
                <div class="row">
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="card mt-4">--}}
{{--                            <div class="card-header">--}}
{{--                                <h3 class="text-center text-muted">Last Transaction Information</h3>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-3">--}}
{{--                                        <p class="mb-0">Transaction ID :</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <p class="text-muted mb-0">{{$lInformation->trans_id ?? ''}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <hr>--}}

{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-3">--}}
{{--                                        <p class="mb-0">Your Name :</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <p class="text-muted mb-0">{{$lInformation->user->name ?? ''}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-3">--}}
{{--                                        <p class="mb-0">Payment :</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <p class="text-muted mb-0" >{{$lInformation->payment ?? ''}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-3">--}}
{{--                                        <p class="mb-0">Time :</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <p class="text-muted mb-0">{{$lInformation->created_at}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <hr>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-3">--}}
{{--                                        <p class="mb-0">Transaction Type </p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-9">--}}
{{--                                        <p class="text-muted mb-0">{{$lInformation->purpose}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-lg-12">
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
                                                            @foreach($informations->transition as $information)
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
        </div>

    </sectiion>
@endsection


