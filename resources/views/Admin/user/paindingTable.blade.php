@extends('Admin.Dashboard.master')

@section('title','pending-list')

@section('css')
    <link href="{{asset('/')}}fornt/css/style.css" rel="stylesheet">

    <link href="{{asset('/')}}node_modules/dropify/dist/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('js')

    <script src="{{asset('/')}}node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script>
        $(function () {
            $('.baseDataTable').DataTable();
        })
    </script>

    <script src="{{asset('/')}}fornt/mail/contact.js"></script>

@endsection

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
                                    <th>serial No </th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Status</th>
                                    <th> User Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $use)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$use->name}}</td>
                                    <td>{{$use->email}}</td>
                                    <td>{{ $use->status }}</td>
                                    <td>{{ $use->type }}</td>
                                    <td>
                                        <a href="{{ route('approve-user',$use->id) }}" onclick="return confirm('Are you sure to accept User?')"  class=""><i class="ti-check"></i></a>
                                        <a href="{{route('destroy',['id'=>$use->id])}}" class=""><i class="ti-trash p-4"></i></a>
                                </tr>
                                @endforeach
                                </tbody>
                                <tbody>
                                <tr>
                                    <th>serial No </th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Status</th>
                                    <th> User Type</th>
                                    <th>Action</th>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
