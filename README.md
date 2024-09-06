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

1. Download zip from github
2. Unzip and go to project folder
- **or, 
3. than open cmd and (composer install)
4. open code editor with project folder
5. than .env.example file rename .env
6. setup database and give name as like my project
7. go to cmd and type- php artisan migrate
8. generate a app_key for .env file(write command-> php artisan key:generate
9. than Command-> php artisan storage:link
10. than run-> php artisan serve

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/book-information-system.git
   cd book_storage


