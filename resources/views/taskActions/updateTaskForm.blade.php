<div class="overlay" id="updateOverlay"></div>
<div class="update-task-form" id="updateForm">
    <form id="taskUpdateForm" action="{{ route('updateTask', $listItem->id) }}" method="post" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label for="update-task-title">Task Title <span class="important-attribut">*</span></label>
        <input type="text" id="update-task-title" name="task_title" required>
        
        <label for="update-task-date">Task Date <span class="important-attribut">*</span></label>
        <input type="date" id="update-task-date" name="task_date" required>
        
        <div class="inline-fields">
                <label for="update-task-time-from">From</label>
                <input type="time" id="update-task-time-from" name="task_time_from">
                <label for="update-task-time-to">To</label>
                <input type="time" id="update-task-time-to" name="task_time_to">
        </div>
    
        <div class="inline-fields">
            <div class="field-group">
                <label for="update-task-priority">Priority <span class="important-attribut">*</span></label>
                <select id="update-task-priority" name="task_priority">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>
            
            <div class="field-group">
                <label for="update-task-category">Category <span class="important-attribut">*</span></label>
                <select id="update-task-category" name="task_category">
                    <option value="work">Work</option>
                    <option value="personal">Personal</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
        </div>
        
        <label for="update-task-description">Task Description</label>
        <textarea id="update-task-description" name="task_description"></textarea>

        <label for="update-task-tags">Tags</label>
        <input type="text" id="update-task-tags" name="task_tags" placeholder="Comma separated">
        
        <div class="form-actions">
            <button type="submit">Update</button>
            <button type="button" id="cancelUpdateButton">Cancel</button>
        </div>
    
    </form>
</div>