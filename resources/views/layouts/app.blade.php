<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #111;
            color: white;
            display: flex;
            flex-direction: column;
        }

        .content-area {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="wrapper">

    {{-- Sidebar --}}
    <div class="sidebar">
        @include('layouts.sidebar')
    </div>

    {{-- Content --}}
    <div class="content-area">

        <div class="content">
            @yield('content')
        </div>

        @include('layouts.footer')

    </div>

</div>

</body>
</html>