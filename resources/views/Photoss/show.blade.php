<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>
    <title>Blog | judul: {{$photo->title}}</title>
</head>
<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $photo->title }}</h2>
            <p>tanggal {{ date('d M Y H:i', strtotime($photo->created_at)) }}</p>
            <p>ini kontennya {{ $photo->content }}</p>
        </article>
        <a href="{{ url("posts")}}">KEMBALI</a>
    </div>
</body>
</html>
