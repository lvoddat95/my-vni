@extends('backend.layouts.master')
@section('title')
Chỉnh sửa menu ID: {{$menu->id}}
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    @include('backend.layouts.partials.content-header', ['name' => 'Chỉnh sửa menu '.$menu->id, 'key' => 'Edit'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <form action="{{ route('menu.update', ['id' => $menu->id] ) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tên menu: <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên menu..." value="{{ $menu->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Slug:</label>
                            <input type="text" name="slug" class="form-control" placeholder="Nhập tên slug..." value="{{ $menu->slug }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Chọn menu cha:</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">--- Chọn ---</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Lưu</button>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection