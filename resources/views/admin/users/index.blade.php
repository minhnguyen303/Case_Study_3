@extends('layout.dashboard')
@section('title') Quản lý người dùng @endsection
@section('body')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý người dùng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý người dùng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col" class="align-content-end">
                        <a href="{{route('admin.users.create')}}" class="btn btn-primary">Thêm mới</a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($users[0]))
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    @endforeach
                @else
                    <tr class="table-danger">
                        <th scope="row" colspan="6"><h3 class="text-center">Không có người dùng nào !!!</h3></th>
                    </tr>
                    <tr><th></th></tr>
                @endif
                </tbody>
            </table>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
