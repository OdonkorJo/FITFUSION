$(document).ready(function() {
    // Drag and drop functionality for exercises
    $('.exercise').on('dragstart', function(event) {
        $(this).addClass('dragging');
        event.originalEvent.dataTransfer.setData('text/plain', $(this).text());
    });

    // Prevent default behavior when dragging over timetable
    $('.day').on('dragover', function(event) {
        event.preventDefault();
    });

    // Drop exercise into timetable
    $('.day').on('drop', function(event) {
        var exercise = event.originalEvent.dataTransfer.getData('text/plain');
        $(this).append(`<div class="exercise">${exercise}</div>`);
        $('.dragging').remove();
    });
});
