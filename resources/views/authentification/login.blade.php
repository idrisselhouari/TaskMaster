<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - TaskMaster</title>

    <link rel="stylesheet" href="{{ asset('css/signinStyle.css') }}">

</head>
<body>
    <div class="container">
        <header class="header">
            <nav class="navbar">
                <div class="logo"><a href="{{ route('home')}}">TaskMaster</a></div>
                <div class="nav-buttons">
                    <button class="btn"><a href="{{ route('signUp') }}">Sign Up</a></button>
                </div>
            </nav>
        </header>
        <section class="signin-section">
            <div class="signin-container">
                <h1 style="text-align: center;">Welcome Back</h1>
                <p style="text-align: center;">Sign in to your TaskMaster account.</p>
                <form class="signin-form" action="{{ route('login_action') }}" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn">Sign In</button>
                </form>
            </div>
        </section>
        <footer class="footer">
            <p>© 2024 TaskMaster. All rights reserved.</p>
        </footer>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
