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
    <form action="{{route('edit-category-post/'.$category->id)}}" method="post">
        tên danh mục <input type="text" name="ten_dm" value="{{$category->ten_dm}}"><br>
        <input type="submit" name="sua" value="sua">
    </form>
@endsection