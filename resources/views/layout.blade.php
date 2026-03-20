<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 bg-success-subtle text-center py-2">
                <h2>Eloquent CRUD</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-8 bg-warning-subtle mb-3">
                <h4> @yield('title') </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>

        </div>
    </div>
</body>
</html>