<div class="overlay" id="overlay"></div>
            
<form action="{{ route('addTask') }}" method="post" class="add-task-form" id="addTaskForm">
    {{ csrf_field() }}
    <label for="inputItem">Task Title</label>
    <input type="text" name="task_title" required>
    <br>
    <label for="dateItem">Task Date</label>
    <input type="date" name="task_date" required>
    <br>
    <label for="inputItem">Task Note</label>
    <input type="text" name="task_note">
    <br>
    
    <button type="submit">Add</button>
    <button type="button" id="closeFormButton">Cancel</button>
</form>