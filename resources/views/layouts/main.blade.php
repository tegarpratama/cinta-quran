<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinta Qur'an Foundation</title>
    @include('includes.style')
</head>

<body>

    @include('includes.sidebar')
    @include('includes.header')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    @include('includes.script')
</body>

</html>