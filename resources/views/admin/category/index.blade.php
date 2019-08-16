@extends('admin.index')

@section('title','Category')

@section('content-header','دسته بندی')

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <form action="<?= isset($category) ? route('admin.category.update', $category) : route('admin.category.store')  ?>"
                      method="post">
                    @if(isset($category))
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="box-header">
                        <h3 class="box-title"><?= isset($category) ? 'ویرایش دسته بندی :' : 'ایجاد دسته بندی جدید :' ?></h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 200px;">
                                <input name="title" class="form-control pull-left" placeholder="نام دسته را وارد نمایید"
                                       value="<?= isset($category) ? $category->title : old('title')?>" type="text">
                                <div class="input-group-btn">
                                    <button type="submit"
                                            class="btn btn-primary"><?= isset($category) ? 'ویرایش' : 'افزودن' ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @if( $errors->any() )
                    <div class="callout callout-danger">
                        <ul>
                            @foreach( $errors->all() as $error )
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table direction table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان</th>
                            <th>تعداد مقالات</th>
                            <th>اخرین ویرایش</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if( !empty($categories) )
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>20</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('admin.category.delete',$category) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('admin.category.edit',$category) }}"
                                                   class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td><h3 class="text-center">'دسته بندی وجود ندارد'</h3></td>
                            </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

@endsection