<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="../bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }

        small {
            color: grey;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="row">
        <h1>
            Blog codePolitan
            <a class="btn btn-success" href="{{ url('posts/create')}}">+ buat sekarang</a>
        </h1>      
        @foreach($photos as $photo)
        <div class="col-4 pt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $photo->title }}</h5>
                <p class="card-text"><p>{{ $photo->content}}</p>
                <p class="card-text"><p>{{ date("d M Y H:i", strtotime( $photo->created_at )) }}</p>
                <a href="{{ url("posts/$photo->id") }}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ url("posts/$photo->id/edit") }}" class="btn btn-success">Edit</a>

            </div>
        </div>
        </div>
        
        @endforeach

        </div>
    </div>



</body>

</html>