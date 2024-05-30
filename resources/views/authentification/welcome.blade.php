<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TASK MASTER - Home</title>

  <link rel="stylesheet" href="{{asset('css/index-style.css')}}">

</head>
<body>
    <div class="container">

        <header class="header">
            <nav class="navbar">
                <div class="logo"><a href="{{ route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Task Master Logo" srcset="" class="task-master-logo"></a></div>
                <div class="nav-buttons">
                    <button class="btn"><a href="{{ route('signIn') }}">Sign In</a></button>
                    <button class="btn"><a href="{{ route('signUp') }}">Sign Up</a></button>
                </div>
            </nav>
        </header>

        <section>

            <h1 >Finally organize your life and your work.</h1>
            <h2>Gain focus, organization, and peace of mind with TASK MASTER. The first task management and to-do list app.</h2>
            <div class="features">
                <div class="feature" id="feature1">
                    <div class="feature-content">
                        <h2>Easy to Use</h2>
                        <!-- <p>Our intuitive interface allows you to manage your tasks with ease.</p> -->
                        <p>Manage you tasks with the best easest way.</p>
                    </div>
                </div>
                <div class="feature" id="feature2">
                    <div class="feature-content">    
                        <h2>Stay Organized</h2>
                        <p>Keep track of all your tasks and projects in one place.</p>
                    </div>
                </div>
                <div class="feature" id="feature3">
                    <div class="feature-content">
                        <h2>Boost Productivity</h2>
                        <p>Prioritize your tasks and get more done in less time.</p>
                    </div>
                </div>
            </div>
            <h3>Over 42 million individuals and teams trust TASK MASTER with their peace of mind and productivity.</h3>
        </section>

        <section>
            <div class="section-content">
                <div class="section-text">
                    <p>Clear Your Mind</p>
                    <h2>The Best Way to Have a Free Mind.</h2>
                    <p>Simply jot down your tasks as they come. TASK MASTER's unique natural language processing will instantly populate your task list.</p>
                </div>
                <img src="{{asset('images/welcome/image2.png')}}" alt="Image">
            </div>
            

        </section>

        <section>
            <div class="section-content">
                <img src="{{asset('images/welcome/image3.png')}}" alt="Image">

                <div class="section-text">
                    <p>Focus on the Important Things</p>
                    <h2>The Mental Clarity You've Been Dreaming of.</h2>
                    <p>Your task lists are automatically sorted into Today, Upcoming, and custom filters views, helping you concentrate on what matters most.</p>
                </div>    
        </section>

        <section>
            <blockquote>"TASK MASTER is an excellent way to keep track of all your tasks, big and small."</blockquote>  
        </section>
        <img src="{{asset('images/welcome/image4.png')}}" alt="Image">
        <section>
            <h2>Explore all that TASK MASTER offers you.</h2>
            
            <img src="{{asset('images/welcome/image6.png')}}" alt="Image" id="id_offers">

            <blockquote>Gain peace of mind and clarity with the users' favorite productivity app.</blockquote>        </section>
        <img src="{{asset('images/welcome/image5.png')}}" alt="Image">

        <footer class="footer">
            <p>© 2024 TaskMaster. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
