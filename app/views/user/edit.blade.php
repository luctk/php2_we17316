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
    <form action="{{route('edit-user-post/'.$users->id)}}" method="post">
        username <input type="text" name="username" value="{{$users->username}}" ><br>
        password <input type="text" name="password"value="{{$users->password}}" ><br>
        <input type="submit" name="sua" value="sua">
    </form>
@endsection