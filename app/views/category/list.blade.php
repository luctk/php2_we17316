
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
<a href="{{route('add-category')}}">Thêm</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Tên Sp</td>
        <td>Giá</td>
    </tr>
    @foreach($categorys as $ct)
        <tr>
            <td>{{$ct->id}}</td>
            <td>{{$ct->ten_dm}}</td>
            <td>
                <a href="{{route('edit-category/'.$ct->id)}}">sửa</a>
                <a href="{{route('delete-category/'.$ct->id)}}">xóa</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection