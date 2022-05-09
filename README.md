# Residentes App
## _Mobile App for residents_

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://github.com/Nor01/residentes_app.git)

Residentes App description:

The world has access to information more and more thanks to the digital age. Currently seeks to carry out projects where the information may be required and available to everyone. A Despite this initiative, Honduras still carries out many of its processes in a traditional and nothing efficient. 

Although there are platforms and means for the control and administration of accesses to the residences these are static and ineffective for users. By creating a Mobile Application that facilitates both the Boards of Trustees and the Residents the process of Visit Control, Reception of Complaints, Payment Module, many barriers will be broken in the areas of monitoring and surveillance that will evolve more and more.

## Residentes App Modules and Features

| Admins | Residents | Security |
| ------ | --------- | -------- | 
| Creation of Users | Visits Module | Chat
| Activate/Deactivate User | Payment Module | Visitor Reception
| Block Guest Log | Expense Module | Farewell to Visitors
| Recover password | Chat with the Security | Scanner button for QR
| Main Dashboard | Access Log |
| Expenses Module | Panic alert |
| Revenue Module | Incidents/Complaints Module |
| Account statements | Survey Module |
| Communications Module | Reservations Module |
| Booking Module | Vehicle Registration |
| Visits by Enter | Main Dashboard |
| Frequent Visits | Profile Creation |
| Visitor Log | Pin/Password Change |
| Survey Module | Account status |
| Incident/Complaints Module |
| Generation of Fees/Charges |

## Tech

Residentes App uses a number of open source projects to work properly:

- [Laravel 9](https://laravel.com/docs/9.x) - Laravel is a web application framework with expressive, elegant syntax.
- [Laravel Sanctum](https://laravel.com/docs/9.x/sanctum) - Laravel Sanctum offers this feature by storing user API tokens in a single database table and authenticating incoming HTTP requests via the Authorization header which should contain a valid API token.
- [MySQL](https://docs.oracle.com/en-us/iaas/mysql-database/doc/getting-started.html) - MySQL Database Service is a fully managed Oracle Cloud Infrastructure native service, which automates tasks such as backup and recovery, and database and operating system patching.
- [Flutter](https://docs.flutter.dev/) - Flutter is Google’s portable UI toolkit for crafting beautiful, natively compiled applications for mobile, web, and desktop from a single codebase. Flutter works with existing code, is used by developers and organizations around the world, and is free and open source.

And of course Residentes App itself is open source with a [public repository](https://github.com/Nor01/residentes_app) on GitHub.

## Installation

Residentes App requires [Composer](https://getcomposer.org/doc/00-intro.md#system-requirements), [Laravel 9](https://laravel.com/docs/9.x) and [PHP ^8.1.0](https://www.php.net/releases/8.1/en.php) to run.

Install the dependencies and devDependencies and start the server.

```sh
cd residentes_app
composer install
```

Create a `MySQL Database` name the database as **residentes_app_db** then:
```sh
php artisan migrate
php artisan serve
```
The app will run by default on **http://localhost:8000** however to make some tests with the methods you will need to use postman as enviroment.

For testing `API Methods` using [POSTMAN :](https://www.postman.com/)

*`!important:` This information is for documentation only.*

> `GET` Method: `{{baseUrl}}`/api/v1/auth/residentes

> `POST` Method: `{{baseUrl}}`/api/v1/auth/logout

> `POST` Method: `{{baseUrl}}`/api/v1/register

> `POST` Method: `{{baseUrl}}`/api/v1/login

*login and register* are public methods, in order to use *logout and residentes* the user must be logged in, because the `${token}` is created and assigned once the user is register.

## License

Fundamentos de IT - CEUTEC Q3-2022
| Name | Account Number | Github Account |
| ------ | --------- | -------- | 
| Mainor Aguilar | 21411324| [Nor01](https://github.com/Nor01)
| Orinson Lobo | 61521041| [mloboc](https://github.com/mloboc)
| Erick Pineda | 20641025| [erickrpineda](https://github.com/erickrpineda)
| Allan Lopez | 21211119| [alopez94](https://github.com/alopez94)
| Francisco Garcia | 61641192 | [frangar97](https://github.com/frangar97)

**Free Software, Hell Yeah!**
