@extends('admin.index')

@section('title','Post')

@section('content-header','مقالات')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                @csrf
                <div class="box-header">
                    <h3 class="box-title">ایجاد مقاله جدید :</h3>
                    <div class="box-tools">
                        <a class="btn btn-primary" href="{{ route('admin.post.create') }}">افزودن</a>
                    </div>
                </div>
                @if( $errors->any() )
                    <div class="callout callout-danger">
                        <ul>
                            @foreach( $errors->all() as $error )
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                @if( session()->has('image_success') )
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fa fa-check"></i>{{ session()->get('image_success') }}</h6>
                    </div>
                @endif
                @if( session()->has('image_error') )
                    <div class="alert alert-error alert-dismissible">
                        <button type="button" class="close pull-left" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fa fa-ban"></i>{{ session()->get('image_error') }}</h6>
                    </div>
                @endif
            <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    @if( $posts )
                        <table class="table direction table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان</th>
                                <th>تعداد پیام ها</th>
                                <th>اخرین ویرایش</th>
                                <th>عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>20</td>
                                    <td>{{ jdate($post->updated_at)->ago() }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{ route('admin.post.destroy',$post) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('admin.post.edit',$post) }}"
                                                   class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h1 class="text-center">مقاله ایی وجود ندارد !</h1>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.box -->
    </div>
    </div>

@endsection
