@extends('backend.layouts.master')
@section('title')
Danh mục
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    @include('backend.layouts.partials.content-header', ['name' => 'Danh mục', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách</h3>
                            <div class="card-tools">
                                <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm float-right"><i class="fas fa-plus"></i> Thêm mới</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên danh mục (ID)</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categories as $index => $category)

                                        <tr>
                                            <th scope="row">{{ $index+1 }}</th>
                                            <td>{{ $category->name }} ({{ $category->id }})</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                                                    class="btn btn-default">Edit</a>
                                                <a href="{{ route('categories.delete', ['id' => $category->id]) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection