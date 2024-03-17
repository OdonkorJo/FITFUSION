document.addEventListener('DOMContentLoaded', (event) => {
    let draggedItem = null;

    document.querySelectorAll('.exercise').forEach(item => {
        item.addEventListener('dragstart', function() {
            draggedItem = item;
            setTimeout(() => {
                item.style.display = 'none';
            }, 0);
        });

        item.addEventListener('dragend', function() {
            setTimeout(() => {
                draggedItem.style.display = 'block';
                draggedItem = null;
            }, 0);
        });
    });

    document.querySelectorAll('.day').forEach(day => {
        day.addEventListener('dragover', function(e) {
            e.preventDefault();
        });

        day.addEventListener('dragenter', function(e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
        });

        day.addEventListener('dragleave', function() {
            this.style.backgroundColor = 'white';
        });

        day.addEventListener('drop', function(e) {
            this.append(draggedItem);
            this.style.backgroundColor = 'white';
        });

        day.addEventListener('click', function() {
            if (this.children.length > 0) {
                this.children[0].style.display = 'block'; 
                this.removeChild(this.children[0]); 
            }
        });
    });
});
