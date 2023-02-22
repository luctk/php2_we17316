@extends ('layout.main')
@section ('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="{{route('add-user')}}">Thêm</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>User</td>
        <td>Pass</td>
    </tr>
    @foreach($users as $us)
        <tr>
            <td>{{$us->id}}</td>
            <td>{{$us->username}}</td>
            <td>{{$us->password}}</td>
            <td>
                <a href="{{route('edit-user/'.$us->id)}}">sửa</a>
                <a href="{{route('delete-user/'.$us->id)}}">xóa</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection