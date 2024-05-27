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

