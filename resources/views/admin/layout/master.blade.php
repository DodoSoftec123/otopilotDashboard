<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>OtopilotSolar</title>
    @include('admin.component.head')
</head>

<body>
    @include('admin.component.header')

    @yield('content')

    @include('admin.component.foot')
</body>

</html>
