<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Task Master - My Tasks</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    @include('assets/header')
    <h4 class="page-title">My Tasks</h4>
    <div class="container">

        <div>
            @if ($listItems->isEmpty())
                <div class="no-tasks-placeholder">
                    <img src="{{ asset('images/no-tasks.png') }}" alt="No tasks" class="placeholder-image">
                    <p>No tasks found. Start adding tasks to organize your day!</p>
                </div>
            @else
                @foreach ($listItems as $listItem)
                <div class="task-list" data-title="{{ $listItem->task_title }}" data-date="{{ $listItem->task_date }}" data-time-from="{{ $listItem->task_time_from }}" data-time-to="{{ $listItem->task_time_to }}" data-description="{{ $listItem->task_description }}" data-priority="{{ $listItem->task_priority }}" data-category="{{ $listItem->task_category }}" data-tags="{{ $listItem->task_tags }}">
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

                    <div class="task-actions">
                        <form action="{{ route('markCompleted', $listItem->id) }}" method="post" class="complete-form">
                            {{ csrf_field() }}
                            <button type="submit" class="complete-button"><i class="fas fa-check"></i></button>
                        </form>

                        <form action="{{ route('destroyTask', $listItem->id) }}" method="post" class="delete-form">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="delete-button"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </div>
                @endforeach
            @endif
            
            @include('taskActions/addTaskForm')

            @foreach ($listItems as $listItem)
                @include('taskActions/updateTaskForm')
            @endforeach
        </div>

        
    </div>
    <footer class="footer">
            <p>© 2024 TaskMaster. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
