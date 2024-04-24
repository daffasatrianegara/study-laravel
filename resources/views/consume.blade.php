<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consume API</title>
    @include('conf.bootstrap-config')
</head>

<body>
    <div class="container-fluid p-3">
        <p class="h2 text-center text-black-50">Data API Berita</p>
        <div class="row justify-content-center mt-2 p-2 mt-1">
            @foreach ($articles as $article)
            <div class="col-sm-3 bg-light m-1 mt-3 p-2 fw-semibold pb-4 rounded">
                <div class="mt-2" style="width: 100% ; height : 15vh;">
                    <p class="font fs-auto">{{ $article['title'] }}</p>
                </div>
                <p class="text-black-50 m-0 mt-3">{{ $article['author'] }}</p>
                <p class="m-0 fs-6">{{ date('d/m/Y', strtotime($article['publishedAt'])) }}</p>
                <div class="mt-3">
                    <a href="{{ $article['url'] }}" target="_blank">Baca selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('conf.bootstrap-conf-js')
</body>

</html>