<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layout.style')
</head>

<body>
<div class="container">
    <header>
        <div class="header-main">
            <ul class="menu">
                <li><a href="{{route('product')}}">Quản lý sản phẩm</a></li>
                <li><a href="{{route('category')}}">Quản lý danh mục</a></li>
                <li><a href="{{route('user')}}">Quản lý user</a></li>
                <li><a href="{{route('comment')}}">Quản lý comment</a></li>
                <li><a href="{{route('booking')}}">Quản lý booking</a></li>
            </ul>

        </div>
    </header>
    <section class="content">
        @yield('content')
    </section>
    <footer>
        <span>fpt</span>
    </footer>
</div>
</body>

</html>