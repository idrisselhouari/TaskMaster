<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css\style.css') }}">
    <title>Completed Tasks</title>
</head>
<body>

    @include('assets/header')

    <div class="container">
        <div>
            @if ($listItems->isEmpty())
                <div class="no-tasks-placeholder">
                    <img src="{{ asset('images/no-tasks.png') }}" alt="No tasks" class="placeholder-image">
                    <p>No completed tasks found. Start now your successful day by the first task!!</p>
                </div>
            @else
                @foreach ($listItems as $listItem)
                    <div class="task-list">
                        <p class="task-item">{{ $listItem->task_title }} <span class="task-date">{{ $listItem->task_date }}</span> {{ $listItem->task_note }}</p>

                        <form action="{{ route('markNotCompleted', $listItem->id) }}" method="post" class="complete-form">
                            {{ csrf_field() }}
                            <button type="submit" class="complete-button"><img src="{{ asset('images\reload_icon.png') }}" alt="" srcset="" class="icon"></button>
                        </form>
                    </div>
                @endforeach
            @endif

            @include('taskActions/addTaskForm')

        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>