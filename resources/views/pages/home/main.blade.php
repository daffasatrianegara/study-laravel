<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('conf.bootstrap-config')
    <title>Beranda</title>
</head>

<style>
    .carousel-item {
        height: 90vh;
    }
</style>

<body>
    @include('pages.components.navbar')
    @include('pages.components.header')
    @include('pages.components.blog')
    <p>ini halaman awal</p>
    @include('conf.bootstrap-conf-js')
</body>

</html>