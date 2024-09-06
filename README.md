# Book Information Storage System

A simple and efficient web application for managing a collection of books. This system allows users to create, read, update, and delete book entries, including details such as title, author, publisher, and year of publication.

## Key Features

- **CRUD Operations**: Add new books, update details, view the list of books, and delete records.
- **Book Attributes**: Store and manage details like title, author, publisher, and year published.
- **User Interface**: A clean, modern interface designed with colors like Aqua Green, Light Violet, Black, and Blue.
- **Responsive Design**: Optimized for desktop and mobile devices.
- **MVC Architecture**: Follows the Model-View-Controller design pattern for maintainability and scalability.

## Technologies Used

- **Frontend**: HTML, CSS (custom styling with Aqua Green, Light Violet, Black & Blue color palette)
- **Backend**: Laravel (PHP)
- **Database**: MySQL
- **Additional Libraries**: 
  - Laravel Blade for templating
  - Icons for better user experience on edit/delete buttons

## Installation

To get this project up and running locally on your machine, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/book-information-system.git
2. **Change directory:**
   ```bash
   cd book_storage
3. **Install dependencies:**
   ```bash
   composer install
4. **open code editor with project folder than .env.example file rename .env:**
5. **setup database and give name as like my project**
6. **go to cmd and type:**
   ```bash
   php artisan migrate
7. **generate a app_key for .env file:**
   ```bash
   php artisan key:generate
8. **create symlink to your storage folder**
   ```bash
   php artisan storage:link
9. **Run migrations and seed the database**
   ```bash
   php artisan migrate --seed
1. **Serve the application:**
   ```bash
   php artisan serve

## Usage

Create a Book: Add a new book by filling in the required fields (title, author, publisher, year).
View Books: See the full list of added books on the dashboard.
Update Book: Edit the details of an existing book.
Delete Book: Remove a book from the collection.


## Contact
Feel free to contact me:
- Email: `sakibchy.bban.puc@gmail.com`


   

