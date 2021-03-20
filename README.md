<p align="center"><img src="https://github.com/iAmKevinMcKee/teamsy/blob/master/public/img/logos/teamsy.png?raw=true" width="500"></p>

## About Teamsy

Teamsy is a single database multi tenant application shell built for the Laracasts series "Single Database Multi Tenancy".

Use the "Lessons" section below to find the branch that corresponds to each lesson, or just clone the master branch to see the finished product. 

Feel free to use this as a starting point for your next multi tenant application.

Interact with me on [Twitter](https://twitter.com/iAmKevinMcKee) or open an issue or PR if you'd like to contribute to this project.

## Installation

Clone this repo to get started.

`git clone https://github.com/iAmKevinMcKee/teamsy.git`

Install Composer Dependencies

`composer install`

Copy the .env.example file to .env

`cp .env.example .env`

Up your sail
https://laravel.com/docs/8.x/sail
`sail up`

Update your .env file to connect to your local database.

Generate your application keys

`sail artisan key:generate`

Run the Demo Seeder to get started with a few tenants and some users

`sail artisan migrate:fresh --seed`

Install NPM Dependencies

`npm install && npm run dev`

Login to the app on your local maching using the following credentials:

admin@admin.com / password

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# multitenancy-laravel
