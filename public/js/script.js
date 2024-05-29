document.getElementById('showFormButton').addEventListener('click', function() {
    document.getElementById('addTaskForm').classList.add('show');
    document.getElementById('overlay').classList.add('show');
});

document.getElementById('closeFormButton').addEventListener('click', function() {
    document.getElementById('addTaskForm').classList.remove('show');
    document.getElementById('overlay').classList.remove('show');
});

document.getElementById('overlay').addEventListener('click', function() {
    document.getElementById('addTaskForm').classList.remove('show');
    document.getElementById('overlay').classList.remove('show');
});

document.addEventListener('DOMContentLoaded', function () {
    var profileImage = document.getElementById('profileImage');
    var profileInfo = document.getElementById('profileInfo');

    profileImage.addEventListener('mouseover', function () {
        profileInfo.style.display = 'block';
    });

    profileImage.addEventListener('mouseout', function () {
        profileInfo.style.display = 'none';
    });

    profileInfo.addEventListener('mouseover', function () {
        profileInfo.style.display = 'block';
    });

    profileInfo.addEventListener('mouseout', function () {
        profileInfo.style.display = 'none';
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const tasks = document.querySelectorAll('.task-list');
    const overlay = document.getElementById('updateOverlay');
    const updateForm = document.getElementById('updateForm');

    const updateTaskTitle = document.getElementById('update-task-title');
    const updateTaskDate = document.getElementById('update-task-date');
    const updateTaskTimeFrom = document.getElementById('update-task-time-from');
    const updateTaskTimeTo= document.getElementById('update-task-time-to');
    const updateTaskPriority = document.getElementById('update-task-priority');
    const updateTaskCategory = document.getElementById('update-task-category');
    const updateTaskDescription = document.getElementById('update-task-description');
    const updateTaskTags = document.getElementById('update-task-tags');


    const taskUpdateForm = document.getElementById('taskUpdateForm');
    const cancelUpdateButton = document.getElementById('cancelUpdateButton');

    tasks.forEach(task => {
        task.addEventListener('click', function (event) {
            const taskTitle = this.getAttribute('data-title');
            const taskDate = this.getAttribute('data-date');
            const taskTimeFrom = this.getAttribute('data-time-from');
            const taskTimeTo = this.getAttribute('data-time-to');
            const taskDescription = this.getAttribute('data-description');
            const taskPriority = this.getAttribute('data-priority');
            const taskCategory = this.getAttribute('data-category');
            const taskTags = this.getAttribute('data-tags');

            
            if (event.target.closest('button')) {
                return;
            }
            updateTaskTitle.value = taskTitle;
            updateTaskPriority.value = taskPriority;
            updateTaskCategory.value = taskCategory;
            updateTaskDate.value = taskDate;
            updateTaskTimeFrom.value = taskTimeFrom;
            updateTaskTimeTo.value = taskTimeTo;
            
            updateTaskDescription.value = taskDescription;
            updateTaskTags.value = taskTags;

            // taskUpdateForm.action = `/updateTask`;  // Update with the correct route if necessary

            overlay.classList.add('show');
            updateForm.classList.add('show');
        });
    });

    cancelUpdateButton.addEventListener('click', function () {
        overlay.classList.remove('show');
        updateForm.classList.remove('show');
    });

    overlay.addEventListener('click', function () {
        overlay.classList.remove('show');
        updateForm.classList.remove('show');
    });
});

