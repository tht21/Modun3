@extends('admin.layouts.app')
@section('title', 'Cập nhật nhãn hiệu')
@section('content')

    @include('admin.layouts.includes.contentHeader',['name'=>'Cập nhật nhãn hiệu','key'=>'Cập nhật nhãn hiệu'])
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-xlg-3 col-md-12">
            </div>
            <div class="col-lg-6 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('brands.update',$brands->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-4">
                                <label for="example" class="col-md-12 p-0">Tên nhãn hiệu</label>
                                <div class="col-md-12 border p-0">
                                    <input name='name' type="text" placeholder="Tên nhãn hiệu"
                                           class="form-control p-0 border-0" name="example-email"
                                           id="example-email" value="{{$brands->name}}">
                                </div>
                            </div>
                            {{--                            <div class="form-group mb-4">--}}
                            {{--                                <label class="col-sm-12">Chọn danh muc cha</label>--}}
                            {{--                                <div class="col-sm-12 border">--}}
                            {{--                                    <select name='parent_id'--}}
                            {{--                                            class="form-select shadow-none p-0 border-0 form-control-line">--}}
                            {{--                                        <option value="">chọn một</option>--}}
                            {{--                                        {!! $data !!}--}}
                            {{--                                    </select>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="form-group mb-4">
                                <label for="example" class="col-md-12 p-0">Mô tả nhãn hiệu</label>
                                <div class="col-md-12 border p-0">
                                    <input name='description' type="text" placeholder="Mô tả nhãn hiệu"
                                           class="form-control p-1 border-0" name="example-email"
                                           id="example-email" value="{{$brands->description}}">
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <div class="col-lg-3 col-xlg-3 col-md-12">
        </div>
@endsection


