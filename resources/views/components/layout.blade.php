<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name='csrf-token' content="{{csrf_token()}}">
    <title>{{$title ?? ''}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-grigiochiaro">
    {{-- <x-navbar/> --}}
    @include('components.navbar', ['categories'=>\App\Models\Category::all()])

    {{$slot}}

    <x-footer/>

    <script src="{{asset('js/app.js')}}"></script>
    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/3fce9756f8.js" crossorigin="anonymous"></script>
</body>
</html>