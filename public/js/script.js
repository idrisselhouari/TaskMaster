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
    const updateTaskNote = document.getElementById('update-task-note');
    const taskUpdateForm = document.getElementById('taskUpdateForm');
    const cancelUpdateButton = document.getElementById('cancelUpdateButton');

    tasks.forEach(task => {
        task.addEventListener('click', function (event) {
            const taskId = this.getAttribute('data-id');
            const taskTitle = this.getAttribute('data-title');
            const taskDate = this.getAttribute('data-date');
            const taskNote = this.getAttribute('data-note');
            
            if (event.target.closest('button')) {
                return;
            }
            updateTaskTitle.value = taskTitle;
            updateTaskDate.value = taskDate;
            updateTaskNote.value = taskNote;

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

