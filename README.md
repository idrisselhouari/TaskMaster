<h1 align="center">TaskMaster: Task Management System</h1>
<p align="center">
  <img src="https://github.com/idrisselhouari/TaskMaster/assets/95748912/c8ece7d3-6d18-4325-accb-d3e5a9e87b87" alt="logo">
</p>
<p align="center">
  This project aims to provide a comprehensive task management system where users can create, assign, track, and manage tasks efficiently. It's built using the Laravel framework along with PHP, HTML, CSS, and JavaScript.
</p>

## Technologies Used

- Laravel: Provides a robust and scalable framework for building web applications, handling routing, authentication, database operations, and more.
- PHP: Server-side scripting language used for backend development to handle business logic and data processing.
- HTML: Markup language for structuring web pages and displaying content.
- CSS: Stylesheet language for designing and formatting the visual presentation of web pages.
- JavaScript: Client-side scripting language for adding interactivity, dynamic behavior, and AJAX functionality to web pages.


## Cloning the Repository

1. Open your terminal or command prompt.
2. Navigate to the directory where you want to clone the project.
3. Clone the repository by running the following command:

   ```bash
   git clone https://github.com/idrisselhouari/TaskMaster.git
   ```

4. Navigate into the cloned project directory:

   ```bash
   cd TaskMaster
   ```

## Setting Up the Project

1. Make sure you installed Composer. And run this:

    ```bash
    composer install
    ```

2. Copy the example environment file and create a new `.env` file:

   ```bash
   cp .env.example .env
   ```

3. Generate an application key:

   ```bash
   php artisan key:generate
   ```

4. Configure your environment variables in the `.env` file. Make sure to set up your database connection, mail settings, and any other required configurations.

## Running Migrations

Run the database migrations to create the tables:

```bash
php artisan migrate
```

## Running the Application

1. Start the local development server:

   ```bash
   php artisan serve
   ```

2. Open your browser and visit `http://localhost:8000` to see the application running.

## Adding Custom HTML, CSS, and JavaScript

1. Place your HTML files in the `resources/views` directory.
2. Add your CSS files in the `public/css` directory.
3. Add your JavaScript files in the `public/js` directory.

You can reference these assets in your Blade templates located in the `resources/views` directory.

Example of including CSS and JS in a Blade template:

```blade
<!DOCTYPE html>
<html>
<head>
    <title>Project Title</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Welcome to My Laravel Project</h1>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
```

## Additional Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Composer Documentation](https://getcomposer.org/doc/)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE.txt) file for details.
