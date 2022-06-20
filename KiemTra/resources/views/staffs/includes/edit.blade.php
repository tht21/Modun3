@extends('staffs.home')
@section('title', 'Chỉnh sửa nhân viên')

@section('content')
    <h1>Chỉnh sửa nhân viên</h1>
    <form method="post" action="{{ route('staffs.update',$staff->id) }}" >
        @csrf
        @method('put')
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Mã nhân viên</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter name" value="{{$staff->id}}" readonly>
                    @error('id')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chọn nhóm nhân viên</label>
                    <input type="text" class="form-control" name="group_staff" value="{{$staff->group_staff}}" >
                    @error('group_staff')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ tên</label>
                    <input type="text" class="form-control" name="username"  value="{{$staff->username}}"  >
                    @error('username')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ngày sinh</label>
                    <input type="date" class="form-control" name="date_birth"  value="{{$staff->date_birth}}" >
                    @error('date_birth')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giới tính</label>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="gender"  value="Nam" checked="" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Nam</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="gender" value="Nữ" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Nữ</label>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" name="phone"  value="{{$staff->phone}}" >
                    @error('phone')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số CMND</label>
                    <input type="text" class="form-control" name="id_number" value="{{$staff->id_number}}" >
                    @error('id_number')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email"  value="{{$staff->email}}" >
                    @error('email')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ</label>
                    <input type="text" class="form-control" name="address"  value="{{$staff->address}}" >
                    @error('address')
                    <p style="color: red">{{($message)}}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
