
@extends ('layout.main')
@section ('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{route('add-booking')}}">Thêm</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Tên Sp</td>
        <td>Ngày đặt</td>
    </tr>
    @foreach($bookings as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->ten_sp}}</td>
            <td>{{$b->ngay_dat}}</td>
            <td>
                <a href="{{route('edit-booking/'.$b->id)}}">sửa</a>
                <a href="{{route('delete-booking/'.$b->id)}}">xóa</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection