<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Workout Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>DRAG EXERCISES TO YOUR DESIRED DAY:</h2>
        <div class="exercises">
            <div class="exercise" draggable="true" id="highIntensity">High Intensity Training</div>
            <div class="exercise" draggable="true" id="strengthTraining">Strength Training</div>
            <div class="exercise" draggable="true" id="yoga">Yoga</div>
            <div class="exercise" draggable="true" id="pilates">Pilates</div>
            <div class="exercise" draggable="true" id="cardio">Cardio</div>
            <div class="exercise" draggable="true" id="circuitTraining">Circuit Training</div>
        </div>
        <div class="schedule">
            <div class="day" id="monday">MONDAY</div>
            <div class="day" id="tuesday">TUESDAY</div>
            <div class="day" id="wednesday">WEDNESDAY</div>
            <div class="day" id="thursday">THURSDAY</div>
            <div class="day" id="friday">FRIDAY</div>
            <div class="day" id="saturday">SATURDAY</div>
            <div class="day" id="sunday">SUNDAY</div>
        </div>
        <button id="submitSchedule" type="button" onclick="submitSchedule()">Submit Schedule</button>
    </div>
    <script src="script.js"></script>
</body>
</html>
