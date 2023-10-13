<!DOCTYPE html>
<html lang="en">
<head>
    @include("partials._head")
</head>
<body>
    <header>@include("partials._navbar")</header>
    <main>@yield('main-content')</main>
    <footer></footer>
</body>
</html>