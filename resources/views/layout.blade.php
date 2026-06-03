<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" style="width:250px; min-height:100vh;">
        <h4>Student Management</h4>
        <hr>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a href="/" class="nav-link text-white">
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="/students" class="nav-link text-white">
                    Students
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    Courses
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    Fees
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    Logout
                </a>
            </li>

        </ul>
    </div>

    <!-- Main Content Area -->
    <div class="container-fluid p-4">

        @yield('content')

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>