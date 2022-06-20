@extends('staffs.home')
@section('title', 'Danh sách khách hàng')
@section('content')
    <div style="margin: 20px"></div>
    <div class="row">

        <div class="col-6">
            <br>
            <a class="btn btn-primary" href="{{route('staffs.create')}}">Thêm mới</a>
        </div>
        <div class="col-6">
            <br>
            <form class="form-inline" method="get">
                <input class="form-control mr-sm-2" name="search"  type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        </div>
        <div class="row">



            <div class="col-12"><h1>Danh Sách Nhân Viên</h1></div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Nhóm nhân viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                    @foreach($staffs as $key => $staff)
                        <tr>
                            <th scope="row">{{ $staff->id }}</th>
                            <td>{{ $staff->group_staff }}</td>
                            <td>{{ $staff->username }}</td>
                            <td>{{ $staff->gender }}</td>
                            <td>{{ $staff->phone }}</td>
                            <td><a href="{{ route('staffs.edit', $staff->id) }}">
                                    <button type="submit" style="border-radius:20px "
                                            class="btn btn-sm btn-icon btn-secondary">sửa
                                    </button>
                                </a></td>
                            <td>
                                <form action="{{ route('staffs.destroy', $staff->id) }}"
                                      method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="border-radius:20px "
                                            class="btn btn-sm btn-icon btn-secondary">xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
