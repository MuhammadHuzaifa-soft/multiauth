{{--
<!DOCTYPE html>
<html>

<head>
    <title>Neumorphism/Soft UI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .form-control,
        .form-control:focus,
        .btn {
            border-radius: 50px;
            background: #e0e0e0;
            box-shadow: 20px 20px 60px #bebebe,
                -20px -20px 60px #ffffff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class="text-center m-5">Vendor dashboard</h1>
                @if(\Session::has('error'))
                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                @endif
                <form method="get" action="{{ route('admin.logout') }}">
                    @csrf
                    <div class="row mt-3">
                        <button type="submit" class="btn">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Vendor Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Vendor Dashboard</a>
            <a href="/vendor/logout">Logout</a>
        </div>
    </nav>

    <div class="alert alert-success" role="alert">
        Welcome to Vendor dashboard
    </div>

</body>

</html>
