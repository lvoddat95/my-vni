@extends('backend.layouts.master')
@section('title')
Thêm mới menu
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    @include('backend.layouts.partials.content-header', ['name' => 'Thêm mới menu', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('menu.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên menu: <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên menu...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug:</label>
                            <input type="text" name="slug" class="form-control" placeholder="Nhập tên slug...">
                            <p>Sẽ được tạo tự động từ tiêu đề của bạn, nếu để trống.</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Chọn menu cha:</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">--- Chọn ---</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Thêm mới</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection