<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('conf.bootstrap-config')
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row bg-primary p-4 text-white">
            <p class="col h2 w-25 m-0">Navbar</p>
            <div class="col d-flex flex-row gap-4">
                <p class="h6 mt-3 m-0">Beranda</p>
                <p class="h6 mt-3 m-0">Layanan Kami</p>
                <p class="h6 mt-3 m-0">Informasi Acara</p>
                <p class="h6 mt-3 m-0">Tentang Kami</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row bg-secondary p-4 text-white">
            <p class="h2 text-center py-5">Header</p>
        </div>
    </div>
    <div class="container">
        <div class="row bg-light text-dark p-4">
            <p class="h3 text-center">Content 1</p>
        </div>
        <div class="row text-light">
            <div class="col bg-warning p-4">
                <p class="h3 text-center">Content 2.1</p>
            </div>
            <div class="col bg-dark p-4">
                <p class="h3 text-center">Content 2.2</p>
            </div>
        </div>
        <div class="row bg-light p-4 text-dark">
            <p class="h3 text-center">Content 3</p>
        </div>
        <div class="row bg-info p-4 text-white">
            <div class="position-relative">
                <p class="h3 text-center">Content 4</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row bg-danger p-5 text-white">
            <p class="h3 text-center">Footer</p>
        </div>
    </div>
    @include('conf.bootstrap-conf-js')
</body>

</html>