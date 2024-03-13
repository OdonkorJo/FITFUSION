drop database if exists FitFusion;
create database FitFusion;
use FitFusion;

-- Pre-populated
create table Workout (
WorkoutGoalID int not null primary key,
goalName varchar(100)
);

create table fitUser (
userID int not null primary key unique auto_increment,
fName varchar(100),
lName varchar(100),
dateOfBirth date,
sex varchar(10),
email varchar(50) unique,
emailPassword varchar(200),
registrationDate date, /* function that takes the date the user creates an account. */

workoutGoalID int,
foreign key (workoutGoalID) references Workout(WorkoutGoalID)
);

/* The only table that will be pre-populated is the exercise table. Which serves as a catalog for all the exercise at out user's disposal. */
create table exercises (
exerciseID int auto_increment not null primary key,
exerciseName varchar(100) unique
);

/* The purpose of the userExercise table is to track the exercises the user is doing. This is why there is no primary key.
The User ID will be replicated depending on how many exercises the user is doing in a week. When the user removes his workout from a certain day, 
the data is deleted from this table. When an exercise is added, it is added to the table. Keeping the data for the future till they decide to change 
or remove their exercise. */
create table userExercises (
userid int not null,
foreign key (userid) references fitUser(userID),

exerciseID int not null,
foreign key (exerciseID) references exercises(exerciseID),

workoutGoalID int,
foreign key (workoutGoalID) references Workout(WorkoutGoalID),

-- Adding a status column to this table.
userStatus varchar(20) -- Completed or incomplete
);

/* Based on your workout goal, this table serves to retrieve all the exercises that help achieve said goal. This also will be pre-populated. */
create table recommendations(
workoutGoalID int,
foreign key (workoutGoalID) references Workout(WorkoutGoalID),

exerciseID int,
foreign key (exerciseID) references exercises(exerciseID),

exercisename varchar(100),
foreign key (exercisename) references exercises(exerciseName)
);


/* Exercise catalog with all the exercises on our website. */
insert into exercises (exerciseName) values
-- The first ten are upper body exercises
('Push-up'),
('Pull-up'),
('Bench Press'),
('Dumbbell Flyes'),
('Tricep Dips'),
('Bicep Curls'),
('Shoulder Press'),
('Lateral Raises'),
('Front Raises'),
('Plank'),
-- The second ten are lower body exercises
('Deadlifts'),
('Squats'),
('Lunges'),
('Calf Raises'),
('Glute Bridge'),
('Hamstring Curls'),
('Leg Press'),
('Box Jumps'),
('Jump Squats'),
('Jumping Jacks'),
-- The third five are cardio exercises
('Running'),
('Cycling'),
('Swimming'),
('Jump Rope');

insert into Workout (WorkoutGoalID, goalName) values
(1, "Lose Fat"),
(2, "Build Muscle"),
(3, "Improve Stamina/Cardio");

insert into recommendations (workoutGoalID, exerciseID, exercisename) values
-- lose fat
(1, 21, 'Running'),
(1, 22, 'Cycling'),
(1, 23, 'Swimming'),
(1, 24, 'Jump Rope'),
-- get shredded
(2, 1, 'Push-up'),
(2, 2, 'Pull-up'),
(2, 3, 'Bench Press'),
(2, 4, 'Dumbbell Flyes'),
(2, 5, 'Tricep Dips'),
(2, 6, 'Bicep Curls'),
(2, 7, 'Shoulder Press'),
(2, 8, 'Lateral Raises'),
(2, 9, 'Front Raises'),
(2, 11,'Deadlifts'),
(2, 12,'Squats'),
(2, 13,'Lunges'),
(2, 14,'Calf Raises'),
(2, 15,'Glute Bridge'),
(2, 16,'Hamstring Curls'),
(2, 17,'Leg Press'),
-- Improve Stamina/Cardo
(3, 10, 'Plank'),
(3, 18, 'Box Jumps'),
(3, 19, 'Jump Squats'),
(3, 20, 'Jumping Jacks');

/* Display Tables */

select * from fitUser;
select * from Workout;
select * from exercises;
select * from userExercises;
select * from recommendations;

