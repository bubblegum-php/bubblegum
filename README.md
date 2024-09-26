<p align="center">
<a href="https://github.com/bubblegum-php"><img src="https://raw.githubusercontent.com/bubblegum-php/gallery/9ba9c04b5632d25f4f0fd15873d8b03b88d391be/bubblegum.svg" width="420" alt="Bubblegum logo"></a>
</p>

## About Framework

__Bubblegum__ is a lightweight, modular [PHP](https://www.php.net/) framework that offers flexibility for both small-scale projects and complex applications. Its modular design allows you to combine the necessary components and remove unnecessary features, tailoring it to your specific needs.

## Features

- __Modularity__: Combine and customize modules to suit your specific needs.
- __Efficiency__: Remove unnecessary components to optimize performance.
- __Extensibility__: Create your own modules and extensions to enhance functionality.

## Install
__Using composer__ `composer create-project bubblegum-php/bubblegum myproject`

__Using git__ `git clone https://github.com/bubblegum-php/bubblegum.git`

## Docker setup

1. There are two important environment files: `/.env` `/docker/database.env`. Create these files by following the example files located in the respective folders.

2. Effortlessly build your project using pre-configured Docker files with a simple command: `docker compose up --build`

3. Connect to http://localhost:8666/

## Modules

- [__CORE__](https://github.com/bubblegum-php/bubblegum-core) 🍬 The core module that connects all other modules and provides a pre-built routing system.
- [__CONTROLLERS__](https://github.com/bubblegum-php/bubblegum-controllers) 🍬 Handles requests and generates responses.
- [__VIEWS__](https://github.com/bubblegum-php/bubblegum-views) 🍬 Manages views and view objects.
- [__ENVIRONMENT__](https://github.com/bubblegum-php/bubblegum-environment) 🍬 Facilitates loading environment variables from files and managing them within your code.
- [__DB__](https://github.com/bubblegum-php/bubblegum-db) 🍬 Offers database integration with PostgreSQL.
  - [__DB-MODELS__](https://github.com/bubblegum-php/bubblegum-db-models) 🍬 Provides models for efficient interaction with database entities.
  - [__DB-MIGRATIONS__](https://github.com/bubblegum-php/bubblegum-db-migrations) 🍬 Enables database schema management through migrations.
- [__MIDDLEWARES__](https://github.com/bubblegum-php/bubblegum-middlewares) 🍬 Adds middlewares to wrap your components.

__Or you always can create modules by yourself :)__

## License

The bubblegum framework is fully open-source software licenced under the [MIT LICENSE](https://opensource.org/licenses/MIT).