let exerciseOrder = JSON.parse(localStorage.getItem('exerciseOrder')) || [];

const exercises = document.querySelectorAll('.exercise');

exercises.forEach(exercise => {
    exercise.addEventListener('dragstart', dragStart);
    exercise.style.order = exerciseOrder.indexOf(exercise.id).toString() || '0';
});

function dragStart(e) {
    e.dataTransfer.setData('text/plain', e.target.id);
    setTimeout(() => {
        e.target.classList.add('hide');
    }, 0);
}

const days = document.querySelectorAll('.day');

days.forEach(day => {
    day.addEventListener('dragenter', dragEnter)
    day.addEventListener('dragover', dragOver);
    day.addEventListener('dragleave', dragLeave);
    day.addEventListener('drop', drop);
});

function dragEnter(e) {
    e.preventDefault();
    e.target.classList.add('drag-over');
}

function dragOver(e) {
    e.preventDefault();
    e.target.classList.add('drag-over');
}

function dragLeave(e) {
    e.target.classList.remove('drag-over');
}

function drop(e) {
    e.preventDefault();
    e.target.classList.remove('drag-over');

    const id = e.dataTransfer.getData('text/plain');
    const draggable = document.getElementById(id);

    e.target.appendChild(draggable);

    exerciseOrder = Array.from(exercises).map(exercise => exercise.id);
    localStorage.setItem('exerciseOrder', JSON.stringify(exerciseOrder));

    draggable.classList.remove('hide');
}
