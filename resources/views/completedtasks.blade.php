<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Task Master - My Completed Tasks</title>

    <link rel="stylesheet" href="{{ asset('css\style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>

    @include('assets/header')
    <h4 class="page-title">My Completed Tasks</h4>
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
                    <div class="task-info">
                        <div class="task-title">
                            <h3 class="task-item">{{ $listItem->task_title }}</h3>
                            <p><span>Category:</span> {{ $listItem->task_category }}  |  <span>Priority:</span> {{ $listItem->task_priority }}</p>
                        </div>
                        <p class="task-date">{{ $listItem->task_date }} 
                            @if (!empty($listItem->task_time_from)) 
                                From {{ $listItem->task_time_from }} 
    
                                @if (!empty($listItem->task_time_to )) 
                                    To {{ $listItem->task_time_to }}
                                @endif
                            @endif 
                        </p>
                        <div class="task-details">
                            <p>{{ $listItem->task_description }}</p>
                            @if (!empty($listItem->task_tags))
                                <p><i class="fas fa-tags"></i> {{ $listItem->task_tags }}</p>
                            @endif
                        </div>
                    </div>
                        <form action="{{ route('markNotCompleted', $listItem->id) }}" method="post" class="complete-form">
                            {{ csrf_field() }}
                            <button type="submit" class="complete-button"><img src="{{ asset('images\reload_icon.png') }}" alt="" srcset="" class="icon"></button>
                        </form>
                    </div>
                @endforeach
            @endif

            <div class="overlay" id="overlay"></div>

            @include('taskActions/addTaskForm')

        </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>