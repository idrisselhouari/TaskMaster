<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMaster - Home</title>
    <link rel="stylesheet" href="{{ asset('css\indexStyle.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <nav class="navbar">
                <div class="logo"><a href="{{ route('home')}}">TaskMaster</a></div>
                <div class="nav-buttons">
                    <button class="btn"><a href="{{ route('signIn') }}">Sign In</a></button>
                    <button class="btn"><a href="{{ route('signUp') }}">Sign Up</a></button>
                </div>
            </nav>
        </header>
        <section class="content">
            <h1>Organize Your Life with TaskMaster</h1>

            <p>Manage your tasks efficiently and boost your productivity.</p>
            <div class="features">
                <div class="feature">
                    <h2>Easy to Use</h2>
                    <p>Our intuitive interface allows you to manage your tasks with ease.</p>
                </div>
                <div class="feature">
                    <h2>Stay Organized</h2>
                    <p>Keep track of all your tasks and projects in one place.</p>
                </div>
                <div class="feature">
                    <h2>Boost Productivity</h2>
                    <p>Prioritize your tasks and get more done in less time.</p>
                </div>
            </div>
        </section>
        <footer class="footer">
            <p>© 2024 TaskMaster. All rights reserved.</p>
        </footer>
    </div>

    <script>
        function openSignIn() {
            window.location.href = ""; // Redirect to login page
        }
    </script>
</body>
</html>
