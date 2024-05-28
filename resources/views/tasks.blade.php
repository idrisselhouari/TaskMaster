<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    @include('assets/header')

    <div class="container">

        <div>
            @foreach ($listItems as $listItem)
            <div class="task-list" data-id="{{ $listItem->id }}" data-title="{{ $listItem->task_title }}" data-date="{{ $listItem->task_date }}" data-note="{{ $listItem->task_note }}">
                <p class="task-item">{{ $listItem->task_title }} <span class="task-date">{{ $listItem->task_date }}</span> {{ $listItem->task_note }}</p>

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

            @include('taskActions/addTaskForm')

            @foreach ($listItems as $listItem)
                @include('taskActions/updateTaskForm')
            @endforeach
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
