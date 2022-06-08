@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.includes.contentHeader',['name'=>'Danh sách nhãn hiệu','key'=>'Danh sách nhãn hiệu'])
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
                    <a href="{{route('brands.create')}}">
                        <button class="text-muted">Thêm nhãn hiệu</button>
                    </a>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Tên nhãn hiệu</th>
                                <th class="border-top-0">Trạng thái</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($brands) === 0)
                                <tr>
                                    <td colspan="4">Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($brands as $key => $brand)
                                    <tr>
                                        <td>{{$brand->id}}</td>
                                        <td>{{$brand->name}}</td>
                                        @if($brand->status === 0)
                                            <td><a href="{{ route('brands.unactive' , $brand->id) }}"><i
                                                        class='far fa-eye-slash'></i></a></td>
                                        @else
                                            <td><a href="{{ route('brands.active' , $brand->id) }}"><i
                                                        class='far  fas fa-eye'></i></a></td>
                                        @endif
                                        <td>

                                            <a href="{{ route('brands.edit' , $brand->id) }}">
                                                <button style="border-radius:20px "
                                                        class="btn btn-sm btn-icon btn-secondary"><i
                                                        class="fa fa-pencil-alt"></i></button>
                                            </a>
                                            <form action="{{ route('brands.destroy', $brand->id) }}"
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
                </div>
            </div>
        </div>
    </div>

@endsection
