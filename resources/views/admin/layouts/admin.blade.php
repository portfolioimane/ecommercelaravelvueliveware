<!-- resources/views/admin/layout/admin.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} Admin</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- FontAwesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- For Bootstrap dropdowns -->




</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('admin.layouts.sidebar')

            <!-- Content -->
            <div class="content" style="margin-left: 20%; padding: 2rem; width: 80%;">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
    </style>
</body>
</html>
