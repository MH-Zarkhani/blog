@extends('admin.index')

@section('title','Post | Create')

@section('content-header','ایجاد مقاله')

@section('css')
    <!-- select2 -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ایجاد مقاله </h3>
            </div>
            <!-- /.box-header -->
            @include('admin.layouts.error')
            <!-- form start -->
            <form role="form" action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group col-lg-6">
                        <label for="title">عنوان :</label>
                        <input name="title" type="text" class="form-control " id="title" value="{{ old('title') }}" placeholder="عنوان مقاله">
                    </div>
                    <div class="form-group">
                        <label for="category">دسته بندی :</label>
                        <select id="category" name="category" class="form-control select2" style="width: 50%;padding: 0 5px">
                            <option value="">انتخاب دسته بندی</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editor1">متن مقاله :</label>
                        <textarea class="form-control" id="editor1" name="description" rows="10" cols="80">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tags">برچسب :</label>
                        <select name="tags[]" id="tags" class="form-control select2" multiple="multiple" data-placeholder="انتخاب برچسب"
                                style="width: 50%;">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="image">تصویر : </label>
                        <input name="image" id="image" class="form-control" type="file">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <!-- select2 -->
    <script src="{{ asset('admin/bower_components/select2/dist/js/select2.min.js') }}"></script>
    <!-- CK Editor -->
    <script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
@endsection
