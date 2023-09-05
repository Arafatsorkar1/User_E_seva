@extends('Admin.Dashboard.master')
@section('title', 'All-user')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">User Request</h3>
                        </div>
                        <div class="card-body">
                            <table class="table baseDataTable">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lists as  $list)
                                    <tr>
                                        <td>#{{ $loop->iteration }}</td>
                                        <td>#{{ $list->name ?? '' }}</td>
                                        <td>
                                            <div class="fit">
                                                <img class="fit-image" height="50px" width="50px" src="{{ $list->image? asset($list->image) : asset('images/default.jpg') }}" alt="">
                                            </div>
                                        </td>
                                        <td>{{ $list->address ?? '' }}</td>
                                        <td>
                                            <a href="{{ route('all-users.show',$list->id) }}" class="btn btn-success btn-sm text-white">show</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Address</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
