# Contributing to the Location Taxonomy plugin

## Code of conduct

As with all WordPress projects, we want to ensure a welcoming environment for everyone. With that in mind, all contributors are expected to follow the [WordPress Code of Conduct](https://make.wordpress.org/handbook/community-code-of-conduct/).

## License

The Location Taxonomy plugin is [licensed under the GPLv2 (or later)](/license.txt), and all contributions will be released under the GPLv2 license. You maintain copyright over any contribution you make, and by submitting a pull request, you are agreeing to release that contribution under the GPLv2 license.

## Coding standards

In general, all code must follow the [WordPress Coding Standards and best practices](https://developer.wordpress.org/coding-standards/). All code must furthermore satisfy the following minimum requirements:

- **WordPress**: The plugin's minimum required WordPress version is 6.0.
- **PHP**: The plugin's minimum required PHP version is 7.2.

## Getting started with code contributions

### Prerequisites

* Node.js
* Docker
* Git
* Composer (if you prefer to run the Composer tools locally)

### Setting up the development environment

1. Install and configure the prerequisites noted above.
2. Clone the repository (or a fork of it) into your local machine, e.g. using `git clone https://github.com/felixarntz/location-taxonomy.git`.
3. Install local development dependencies by first running `npm install` (and optionally `composer install`) in the project folder.
4. Start the local development environment via `npm run wp-env start`. The WordPress development site will be available at `http://localhost:8888` and WP admin will be available at `http://localhost:8888/wp-admin/`. You can log in to the WP Admin interface using the username `admin` and password `password`.

### Useful commands

* `npm install`: Installs local development dependencies
* `npm run wp-env start`: Starts the local development environment
* `npm run wp-env stop`: Stops the local development environment
* `npm run lint-php`: Lints all PHP code
* `npm run format-php`: Formats all PHP code
* `npm run test-php`: Runs PHPUnit tests for all PHP code
* `npm run test-php-multisite`: Runs PHPUnit tests in multisite for all PHP code
