<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="Description" content="Enter your description here" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
        />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 border-right" style="min-height: 100vh;">
                    <br><br><br>
                    <nav class="nav flex-column py-4 text-center">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                        <a class="nav-link" href="{{ route('productscategory.index') }}">Products Category</a>
                        <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                        <a class="nav-link" href="{{ route('productsimages.index') }}">Products Images</a>
                        <form action="{{ route('logout') }}" method="post" style="display:inline-block;">
                        @csrf
                            <button type="submit" class="btn btn-light">Logout</button>
                        </form>

                    </nav>
                </div>

                <div class="col-md-9 py-2">
                    @yield('content')
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
