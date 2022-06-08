@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.includes.contentHeader',['name'=>'Danh sách danh mục','key'=>'Danh sách danh mục'])
    <div class="container-fluid">
        <div class="row">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                </p>
            @endif
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title"></h3>
                    <a href="{{route('categories.create')}}">
                        <button class="text-muted">Thêm danh mục</button>
                    </a>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Tên danh mục</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($categories) === 0)
                                <tr>
                                    <td colspan="4">Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        @if($category->status === 0)
                                            <td><a href="{{ route('categories.unactive' , $category->id) }}"><i
                                                        class='far fa-eye-slash'></i></a></td>
                                        @else
                                            <td><a href="{{ route('categories.active' , $category->id) }}"><i
                                                        class='far  fas fa-eye'></i></a></td>
                                        @endif
                                        <td>

                                            <a href="{{ route('categories.edit' , $category->id) }}">
                                                <button style="border-radius:20px "
                                                        class="btn btn-sm btn-icon btn-secondary"><i
                                                        class="fa fa-pencil-alt"></i></button>
                                            </a>
                                            <form action="{{ route('categories.destroy', $category->id) }}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="border-radius:20px "
                                                        class="btn btn-sm btn-icon btn-secondary"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="col-ms-12">
                        {{ $paginate->appends(request()->query()) }}
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
