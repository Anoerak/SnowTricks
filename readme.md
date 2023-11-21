# Symfony Project "SnowTricks"

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

-   PHP
-   Composer
-   npm
-   phpMyAdmin

### Installing

1. Clone the repository
2. Install dependencies with `composer install` and `npm install`
3. Update the `.env` file with your database credentials
4. Run `php bin/console doctrine:database:create`to create a database into your system
5. Run `php bin/console doctrine:migrations:migrate` to create the database schema
6. Run `php bin/console doctrine:fixtures:load` to load sample data into the database
7. Use Symfony UX with Sass by running `npm run watch`. This will compile your Sass files into CSS and watch for changes.
8. Use File Loader by running `npm run dev` in order to add the images from the "assets/images" folder to the "build/images" folder.
9. Use Messenger to send emails by running `php bin/console messenger:consume async` in a separate terminal window.
10. Use Dump Server by running `symfony console server:dump` in a separate terminal window.
11. Run `symfony serve` to start the web server and access the application in your browser at the given URL (https://localhost:8000 by
    default).

## Built With

-   [Symfony](https://symfony.com/)
-   [Doctrine](https://www.doctrine-project.org/)
-   [npm](https://www.npmjs.com/)

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
