<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <header>
        <h1>TaskTracker</h1>
        <nav>
            <ul>
                <li><button id="showFormButton" class="add-button">Add</button></li>
                <li><a href="/">My Tasks</a></li>
                <li><a href="{{ route('completedtasks') }}">Completed</a></li>
            </ul>
        </nav>
    </header>   

    <div class="container">
        <h1>Welcome </h1>
        <div>
            @foreach ($listItems as $listItem)
            <div class="task-list">
                <p class="task-item">{{ $listItem->task_title }} <span class="task-date">{{ $listItem->task_date }}</span></p>

                <div class="task-actions">
                    <form action="{{ route('markCompleted', $listItem->id) }}" method="post" class="complete-form">
                        {{ csrf_field() }}
                        <button type="submit" class="complete-button"><img src="{{ asset('images/submit_icon.png') }}" alt="Complete" class="icon"></button>
                    </form>

                    <form action="{{ route('destroyTask', $listItem->id) }}" method="post" class="delete-form">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="delete-button"><img src="{{ asset('images/delete_icon.png') }}" alt="Delete" class="icon"></button>
                    </form>
                </div>
                
            </div>
            @endforeach

            <!-- <button id="showFormButton" class="add-button">Add Task</button> -->

            <div class="overlay" id="overlay"></div>
            
            <form action="{{ route('addTask') }}" method="post" class="add-task-form" id="addTaskForm">
                {{ csrf_field() }}
                <label for="inputItem">Task</label>
                <input type="text" name="task_title" required>
                <br>
                <label for="inputItem">Note</label>
                <input type="text" name="task_note" required>
                <br>
                <label for="dateItem">Date</label>
                <input type="date" name="task_date" required>
                <br>
                <button type="submit">Add</button>
                <button type="button" id="closeFormButton">Cancel</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
