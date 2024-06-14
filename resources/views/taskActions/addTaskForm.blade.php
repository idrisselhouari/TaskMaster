<form action="{{ route('addTask') }}" method="post" class="add-task-form" id="addTaskForm">
    {{ csrf_field() }}
    
    <label for="task_title">Task Title <span class="important-attribut">*</span></label>
    <input type="text" name="task_title" required>
    
    <label for="task_date">Task Date <span class="important-attribut">*</span></label>
    <input type="date" name="task_date" required>
    
    <div class="inline-fields">
            <label for="task_time_from">From</label>
            <input type="time" name="task_time_from">
            <label for="task_time_to">To</label>
            <input type="time" name="task_time_to">
    </div>
  
    <div class="inline-fields">
        <div class="field-group">
            <label for="task_priority">Priority <span class="important-attribut">*</span></label>
            <select name="task_priority">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
        </div>
        
        <div class="field-group">
            <label for="task_category">Category <span class="important-attribut">*</span></label>
            <select name="task_category">
                <option value="work">Work</option>
                <option value="personal">Personal</option>
                <option value="other">Other</option>
            </select>
        </div>
    </div>
    
    <label for="task_description">Task Description</label>
    <textarea name="task_description"></textarea>

    <label for="task_tags">Tags</label>
    <input type="text" name="task_tags" placeholder="Comma separated">
    
    <div class="form-actions">
        <button type="submit">Add</button>
        <button type="button" id="closeFormButton">Cancel</button>
    </div>
    
</form>
