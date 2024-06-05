<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Engine for Software</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link href="https://hostzam.com/ui/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <div class="main-search">
        <div class="container">
            <div class="d-flex justify-content-center logo-resizing">
                <img src="{{ asset('assets') }}/image/search_logo.png" alt="Laravel" class="logo">
            
            </div>
            <form action="{{ route('search-software') }}" method="POST" class="search-form">
                @csrf
                <div class="input-group mb-3 position-relative">
                    <input type="text" class="form-control search_data" id="emcav-form" name="keyword" placeholder="Search Software e.g Postman" aria-label="Search" required>
                    <div class="input-group-append search-btn">
                        <button class="btn search-btn1" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
             
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(".search_data").on('keyup', function() {
            var keyword = $(this).val();
            $.ajax({
                url: "{{ route('search-software') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    keyword: keyword
                },
                success: function(response) {
                    // Handle the search results here
                    console.log(response);
                }
            });
        });
    </script>
</body>
</html>
