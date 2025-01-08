# Laravel 11 Livewire Microblogging App

Welcome to the **Laravel 11 Livewire Microblogging App**! This is a simple yet powerful microblogging platform called **Chirper**, built as part of the Laravel Bootcamp to demonstrate the features of Laravel and Livewire.

## Features
- **Dynamic Frontend**: Reactive and dynamic UI powered by Livewire, with no need for JavaScript.
- **Modern Laravel Stack**: Built on Laravel 11, leveraging the latest features and best practices.
- **CRUD Functionality**: Full Create, Read, Update, and Delete operations for microblogs ("chirps").
- **Real-Time Interaction**: Seamless user experience without page reloads.
- **Scalable Design**: Flexible architecture to extend features as needed.

## Prerequisites
To run this project, ensure you have the following installed:

- PHP 8.1 or higher
- Composer
- Node.js and npm
- Laravel CLI
- A database (e.g., MySQL or SQLite)

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/razorisuru/Laravel-11-Livewire-Status-Post-App.git
   cd Laravel-11-Livewire-Status-Post-App
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. Set up your environment variables:
   ```bash
   cp .env.example .env
   ```
   Configure your database and other settings in the `.env` file.

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations and seed the database (if applicable):
   ```bash
   php artisan migrate
   ```

6. Start the development server:
   ```bash
   php artisan serve
   ```

7. Visit the app in your browser at [http://localhost:8000](http://localhost:8000).

## Usage
- Create an account or log in to start posting chirps.
- Add, edit, and delete chirps with ease.
- Enjoy a smooth and reactive experience powered by Livewire.

## Technologies Used
- **Laravel 11**: The backend framework for robust application logic.
- **Livewire**: For dynamic, reactive UIs without writing JavaScript.
- **Bootstrap**: For clean and responsive design.
- **MySQL**: For database management.

## Project Structure
- `app/Http/Livewire`: Contains all Livewire components.
- `resources/views`: Blade templates for rendering the UI.
- `routes/web.php`: Defines the application routes.
- `public/`: Publicly accessible assets.

## Contributing
Contributions are welcome! To contribute:
1. Fork the repository.
2. Create a feature branch: `git checkout -b feature-name`.
3. Commit your changes: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature-name`.
5. Open a pull request.

## License
This project is open-sourced software licensed under the [MIT license](LICENSE).

## Acknowledgments
- Inspired by the Laravel Bootcamp project.
- Thanks to the Laravel community for creating such an amazing framework!
