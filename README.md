# RaveTodo

This is a simple Todo app 🔥.

This is built using Laravel Framework 7.2.

### Features
- Create a Todo
- Update, Delete a Todo
- Mark Todo as Complete and Mark Todo as Incomplete
- Todo Description

### Upcoming Features
- Implementing Livewire Support for adding Steps for any created todo
- Implementing AJAX support 
- Improved UI

## Installation

Clone the repository-
```
git clone https://github.com/OlawaleJnr/Ravetodo.git
```

Then cd into the folder with this command-
```
cd Ravetodo
```

Then do a composer install
```
composer install
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `todos` and then do a database migration using this command-
```
php artisan migrate
```

At last generate application key.
```
php artisan key:generate
```

## Run server

Run server using the below command
```
php artisan serve
```

Then go to `http://127.0.0.1:8000` from your browser and enjoy the functionality of RaveTodo.

## Ask a question?

If you have any query please contact at flioolawale@gmail.com

## Project Url
Click to view [RaveTodo][1] open source web application.

[1]: http://ravetodo.herokuapp.com "RaveTodo"
