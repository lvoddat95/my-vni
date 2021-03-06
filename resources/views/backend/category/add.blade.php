@extends('backend.layouts.master')
@section('title')
Thêm mới danh mục
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    @include('backend.layouts.partials.content-header', ['name' => 'Thêm mới danh mục', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Tiêu đề danh mục:  <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục...">
                        </div>
                        <div class="form-group">
                            <label for="">Slug (URL):</label>
                            <input type="text" name="slug" class="form-control" placeholder="Nhập slug...">
                            <small class="text-danger">*Sẽ được tạo tự động từ tiêu đề của bạn, nếu để trống.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Chọn danh mục cha:</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chọn danh mục cha</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary"><i class="far fa-save mr-1"></i>Lưu lại</button>
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