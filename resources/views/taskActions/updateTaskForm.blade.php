<div class="overlay" id="updateOverlay"></div>
<div class="update-task-form" id="updateForm">
    <form id="taskUpdateForm" action="{{ route('updateTask', $listItem->id) }}" method="post" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label for="update-task-title">Task Title</label>
        <input type="text" id="update-task-title" name="task_title" required>
        <label for="update-task-date">Task Date</label>
        <input type="date" id="update-task-date" name="task_date" required>
        <label for="update-task-note">Task Note</label>
        <input type="text" id="update-task-note" name="task_note">
        <button type="submit">Update</button>
        <button type="button" id="cancelUpdateButton">Cancel</button>
    </form>
</div>