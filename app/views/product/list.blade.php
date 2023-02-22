
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
<a href="{{route('add-product')}}">Thêm</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Tên Sp</td>
        <td>Giá</td>
    </tr>
    @foreach($products as $pr)
        <tr>
            <td>{{$pr->id}}</td>
            <td>{{$pr->ten_sp}}</td>
            <td>{{$pr->gia}}</td>
            <td>
                <a href="{{route('edit-product/'.$pr->id)}}">sửa</a>
                <a href="{{route('delete-product/'.$pr->id)}}">xóa</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection