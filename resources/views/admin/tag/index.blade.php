@extends('admin.index')

@section('title','Tag')

@section('content-header','برچسب')

@section('content')

    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <form action="<?= isset($tag) ? route('admin.tag.update', $tag) : route('admin.tag.store')  ?>"
                      method="post">
                    @if(isset($tag))
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="box-header">
                        <h3 class="box-title"><?= isset($tag) ? 'ویرایش برچسب :' : 'ایجاد برچسب جدید :' ?></h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 300px;">
                                <input name="title" class="form-control pull-left"
                                       placeholder="نام برچسب را وارد نمایید"
                                       value="<?= isset($tag) ? $tag->title : old('title')?>" type="text">
                                <div class="input-group-btn">
                                    <button type="submit"
                                            class="btn btn-primary"><?= isset($tag) ? 'ویرایش' : 'افزودن' ?></button>
                                    @if( isset($tag) )
                                        <a href="{{ route('admin.tag.index') }}"  class="btn btn-default">بازگشت</a>
                                    @endif
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
                        @if( !empty($tags) )
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $tag->title }}</td>
                                    <td>20</td>
                                    <td>{{ jdate($tag->updated_at)->ago() }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('admin.tag.delete',$tag) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('admin.tag.edit',$tag) }}"
                                                   class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td><h3 class="text-center">'برچسب وجود ندارد'</h3></td>
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
