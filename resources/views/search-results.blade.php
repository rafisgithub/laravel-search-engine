<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Software Search Results</title>
    <link href="https://hostzam.com/ui/frontend/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card + .card {
            margin-top: 1rem;
        }
        .card-body a {
            color: #007bff;
            text-decoration: none;
        }
        .card-body a:hover {
            text-decoration: underline;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Search Results</h1>
        @if($searchResults->isEmpty())
            <div class="alert alert-warning" role="alert">
                No results found.
            </div>
        @else
            <div class="list-group">
                @foreach($searchResults as $software)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ $software->link }}">{{ $software->name }}</a></h5>
                            <p class="card-text">{{ $software->description }}</p>
                            <a href="{{ $software->link }}" class="card-link">Learn more</a>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <script src="https://hostzam.com/ui/frontend/js/bootstrap.bundle.min.js"></script>
</body>
</html>
