# CF-Test

This project will show you a form where you can see a list of users and also create, update and delete users.

## System requirements

 - PHP 8.1 or above.
 - Git.
 - Composer.
 - Docker.

## Download the source code:

Go to the folder where you have all your projects:

```bash
cd /path/to/projects/folder/
```

Then clone the Git Repository:

```bash
git clone https://github.com/JPGSP/cf-test.git
```

Once the previous process has finished a new folder ```cf-test``` will be created.

## Installation

- Docker

Go to your project folder:

```bash
cd /path/to/projects/folder/cf-test
```

Write the following command:

```bash
docker-compose run php composer install --ignore-platform-reqs && docker-compose up -d
```

- No Docker.

Go to your project folder:

```bash
cd /path/to/projects/folder/cf-test
```

Write the following command:

```bash
composer install
```

## Setup

1. Copy `env` to `.env` and put the values for the database variables

```bash
DB_USER = 
DB_PWD = 
DB_NAME = 
DB_PORT = 
DB_HOST = 
```

2. Run the migration

```bash
php spark migrate
```

3. Run the seeder

```bash
php spark db:seed UsersSeeder
```

4. Run the server

```bash
php spark server
```

<img width="1430" alt="Screenshot 2023-04-11 at 11 08 51" src="https://user-images.githubusercontent.com/31289182/231146962-949f3723-401c-4738-9662-949a60222d65.png">


## Next?

- Refactor

Decouple models from the controllers (use services).
Add validation on the forms.
Add test units.
