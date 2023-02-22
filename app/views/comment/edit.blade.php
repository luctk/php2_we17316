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
    <form action="{{route('edit-comment-post/'.$comment->id)}}" method="post">
        tên comment <input type="text" name="noi_dung" value="{{$comment->noi_dung}}"><br>
        <input type="submit" name="sua" value="sửa">
    </form>
@endsection