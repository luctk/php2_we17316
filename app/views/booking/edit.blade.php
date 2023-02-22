@extends('layout.main')
@section('content')
    @if(isset($_SESSION['errors'])&&isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{$error}}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{$_SESSION['success']}}</span>
    @endif
    <form action="{{route('edit-booking-post/'.$bookings->id)}}" method="post">
        tên sản phẩm <input type="text" name="ten_sp" value="{{$bookings->ten_sp}}"><br>
        ngày đặt <input type="text" name="ngay_dat" value="{{$bookings->ngay_dat}}"><br>
        <input type="submit" name="sua" value="Sửa">
    </form>
@endsection