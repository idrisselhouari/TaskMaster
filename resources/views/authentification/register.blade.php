<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign Up - TaskMaster</title>

    <link rel="stylesheet" href="{{ asset('css/auth-style.css') }}">

</head>
<body>
    <div class="container">
        
        <section class="signup-section">
            <div class="signup-container">
                <header class="header">
                    <nav class="navbar">
                    <div class="logo"><a href="{{ route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Task Master Logo" srcset="" class="task-master-logo"></a></div>
                        <div class="nav-buttons">
                            <button class="btn"><a href="{{ route('signIn') }}">Sign In</a></button>
                        </div>
                    </nav>
                </header>
                <h1 style="text-align: center;">Create Your Account</h1>
                <p style="text-align: center;">Join TaskMaster and start organizing your tasks efficiently.</p>
                @if(Session::has('success'))
                    <div role='alert' class="form-alert form-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <form class="signup-form" action="{{ route('register_action') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" id="firstname" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                </form>
            </div>
        </section>
        <footer class="footer">
            <p>© 2024 TaskMaster. All rights reserved.</p>
        </footer>
    </div>

</body>
</html>
