<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fitness Tracker</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
  <h1>Fitness Tracker</h1>
  <form>
    <div class="task">
      <label for="task_completed">Task Completed:</label>
      <input type="checkbox" id="task_completed" name="task_completed">
    </div>
    <div class="days">
      <h2>Days:</h2>
      <label for="monday" class="day-checkbox">
        <input type="checkbox" id="monday" name="day" value="Monday">
        Monday
      </label>
      <label for="tuesday" class="day-checkbox">
        <input type="checkbox" id="tuesday" name="day" value="Tuesday">
        Tuesday
      </label>
      <label for="wednesday" class="day-checkbox">
        <input type="checkbox" id="wednesday" name="day" value="Wednesday">
        Wednesday
      </label>
      <label for="thursday" class="day-checkbox">
        <input type="checkbox" id="thursday" name="day" value="Thursday">
        Thursday
      </label>
      <label for="friday" class="day-checkbox">
        <input type="checkbox" id="friday" name="day" value="Friday">
        Friday
      </label>
      <label for="saturday" class="day-checkbox">
        <input type="checkbox" id="saturday" name="day" value="Saturday">
        Saturday
      </label>
      <label for="sunday" class="day-checkbox">
        <input type="checkbox" id="sunday" name="day" value="Sunday">
        Sunday
      </label>
    </div>
  </form>
</div>
</body>
</html>
