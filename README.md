
# Animal Library – Laravel Web Programming II

## About the Project

Animal Library is a Laravel web application presenting animals appearing in the novels of Hungarian writer István Fekete.

The website allows visitors to explore animal and novel information, send messages, and view statistics. Registered users can access received messages, while administrators can manage animal records.

## Technologies Used

- PHP 8.3
- Laravel 12
- MySQL / MariaDB
- HTML and CSS
- JavaScript
- Chart.js
- Bootstrap / custom responsive styling (where applicable)

## Main Features

- User registration, login and logout
- Animal database with information from three related tables
- Eloquent ORM relationships
- Contact form with server-side validation
- Messages page for authenticated users
- Graph page displaying animal statistics using Chart.js
- Administrator-only CRUD operations
- Role-based access control
- Responsive website layout

## Database Structure

The project uses three main animal-library tables:

1. **animals** – animal names and species
2. **novels** – novel titles, publication years and publishers
3. **connecting** – relationships between animals and novels

The application also uses users and messages tables.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/king2245/animal-library-laravel.git
   ```

2. Enter the project folder:

   ```bash
   cd animal-library-laravel
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Create your environment file:

   ```bash
   cp .env.example .env
   ```

5. Generate the application key:

   ```bash
   php artisan key:generate
   ```

6. Configure your MySQL database in `.env`.

7. Run migrations and seeders:

   ```bash
   php artisan migrate --seed
   ```

8. Install and build frontend assets:

   ```bash
   npm install
   npm run build
   ```

9. Start the Laravel development server:

   ```bash
   php artisan serve
   ```

10. Open `http://127.0.0.1:8000` in your browser.

## GitHub Repository

https://github.com/king2245/animal-library-laravel

## Authors

- Student 1: [chika chinedu david ] – [BYQJBV]
- Student 2: [Aiana Usubalieva] – [GOXWA1]

## License

This project was developed for the Web Programming II course.
