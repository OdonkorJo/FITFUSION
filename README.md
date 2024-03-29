# FitFusion

FitFusion is a fitness scheduler application designed to help users select goals, find recommended workouts, schedule workouts, and track their fitness progress.

## Project Structure

The project is organized into the following main folders:

- **action**: Contains PHP scripts handling various actions such as user login, registration, and recommendation retrieval.
  - `get_selected_recom_action.php`
  - `login_action.php`
  - `recommendation_action.php`
  - `register_action.php`

- **css**: Contains CSS files for styling different pages of the application.
  - `gh.css`
  - `Homepage.css`
  - `login.css`
  - `recommendation.css`
  - `schedule_workout.css`
  - `setgoals.css`
  - `style.css`

- **db**: Contains the SQL script for database setup.
  - `FitFusion.sql`

- **functions**: Contains PHP functions for various functionalities.
  - `get_id_fxn.php`
  - `workout_fxn.php`

- **images**: Placeholder for images used in the application.

- **js**: Contains JavaScript files for frontend interactions.
  - `Homepage.js`
  - `schedule_workout.js`

- **login**: Contains PHP scripts related to user authentication.
  - `login.php`
  - `logout.php`
  - `register.php`

- **settings**: Contains PHP scripts for database connection and core settings.
  - `connection.php`
  - `core.php`

- **view**: Contains PHP files representing different views/pages of the application.
  - `Homepage.php`
  - `index.php`
  - `Recommendation.php`
  - `set_goals.php`
  - `test.php`
  - `workout.php`

## Usage

To set up the FitFusion application locally, follow these steps:

1. Import the `FitFusion.sql` file into your database management system to create the necessary tables and schema.
2. Configure the database connection settings in `connection.php` located in the `settings` folder.
3. Ensure that your web server (e.g., Apache, Nginx) is properly configured to serve PHP files.
4. Access the application by navigating to the appropriate URL in your web browser.

## Contributing

Contributions to FitFusion are welcome! If you'd like to contribute, please fork the repository, make your changes, and submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

