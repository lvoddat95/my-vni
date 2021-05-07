@extends('backend.layouts.master')
@section('title')
    Menu
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    @include('backend.layouts.partials.content-header', ['name' => 'menu', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="{{ route('menu.create') }}" class="btn btn-success btn-sm m-2">
                        <span class="opacity-7 mr-1">
                            <i class="fa fa-plus-circle fa-sm"></i>
                        </span>
                        Thêm mới
                    </a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên menu</th>
                            <th scope="col">Slug</th>
                            <th scope="col" class="text-center">Hiển thị</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($menu as $value)

                                <tr>
                                    <th scope="row">{{ $value->id }}</th>
                                    <td><a href="{{ route('menu.edit', ['id' => $value->id]) }}">{{ $value->name }}</a></td>
                                    <td>{{ $value->slug }}</td>
                                    <td class="text-center">
                                        <input type="checkbox" disabled {{ $value->display == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <a href="{{ route('menu.edit', ['id' => $value->id]) }}" class="btn btn-outline-dark btn-default btn-sm"><i class="fa fa-edit fa-sm mr-1"></i>Edit</a>
                                        <a href="{{ route('menu.delete', ['id' => $value->id]) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-sm mr-1"></i>Delete</a>
                                    </td>
                                </tr>

                            @endforeach

                        
                        </tbody>
                      </table>
                </div>
                <div class="col-md-12">
                    {{ $menu->links() }}
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection