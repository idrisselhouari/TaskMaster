<header>
    <h1>TaskTracker</h1>
    <nav>
        <ul>
            <li><button id="showFormButton" class="add-button">Add</button></li>
            <li><a href="{{ route('tasks') }}">My Tasks</a></li>
            <li><a href="{{ route('completedtasks') }}">Completed</a></li>
            @if(Auth::check())
                <li class="profile-container">
                    <img src="{{ Auth::user()->profile_image ?? asset('images/default-profile.png') }}" alt="Profile Image" class="profile-image" id="profileImage">
                    <div class="profile-info" id="profileInfo">
                        <span><i class="fas fa-user"></i> {{ session('user_name') }}</span><br>
                        <span><i class="fas fa-envelope"></i> {{ session('user_email') }}</span><br>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="logout-button"><i class="fas fa-sign-out-alt"></i> Logout</button>
                        </form>
                    </div>
                </li>
            @endif
        </ul>
    </nav>
</header>
