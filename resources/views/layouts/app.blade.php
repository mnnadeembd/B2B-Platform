<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
        }
        .sidebar a {
            color: #ddd;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 sidebar">
            <h4 class="p-3">B2B Panel</h4>

            <a href="/dashboard">Dashboard</a>
            <a href="/products">Products</a>
            <a href="/orders">Orders</a>
            <a href="/customers">Customers</a>
            <a href="/campaigns">Campaigns</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10">

            <!-- Navbar -->
            <nav class="navbar navbar-light bg-white shadow-sm mb-3">
                <div class="container-fluid">
                    <span class="navbar-brand">Admin Dashboard</span>

                    <div>
                        {{ auth()->user()->name ?? 'Guest' }}
                        <a href="/logout" class="btn btn-sm btn-danger">Logout</a>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <div class="p-3">
                @yield('content')
            </div>

        </div>
    </div>
</div>

</body>
</html>