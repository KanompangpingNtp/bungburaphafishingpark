<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fishing Theme Room Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <style>
        .nav-item .nav-link:hover {
            background-color: blue;
            color: white;
            border-radius: 4px;
            padding: 8px 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .logout-item .nav-link:hover {
            background-color: red;
            color: white;
            border-radius: 4px;
            padding: 8px 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar {
            padding-top: 5px;
            padding-bottom: 6px;
        }

        .navbar-brand h4 {
            margin: 0;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('Booking')}}">
                <h4 style="color: white; margin-left:20px;">Bungburapha Resort & Restaurant</h4>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav" style="margin-right: 20px;">
                <ul class="navbar-nav ms-auto">
                    @if (Auth::check())

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('AdminIndex')}}">ประวัติการจองห้อง</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Booking')}}">จองห้อง</a>
                    </li>

                    <li class="nav-item logout-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">ออกจากระบบ</button>
                        </form>
                    </li>

                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('showLoginForm') }}">เข้าสู่ระบบ</a>
                    </li>

                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="mt-4">
        @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: 'success'
                , title: '{{ $message }}'
            , })

        </script>
        @endif

        @if ($message = Session::get('error'))
        <script>
            Swal.fire({
                icon: 'error'
                , title: '{{ $message }}'
            , })

        </script>
        @endif

        <div class="row justify-content-center">
            <div class="container">
                @yield('user_content')
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <div class="container">
            <p>&copy; 2024 Fishing Paradise. All Rights Reserved.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
