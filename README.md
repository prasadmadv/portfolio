<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Scope

Create portfolio Website.
Frontend: React (vite) (Typescript)
Backend: Laravel 10
Database: Mysql/Sqlite
Styling: Bootstrap/Tailwind

## Planning

1. Project plan
- Laravel will serve as API Backend
- React will serve as UI frontend
- Database - Initially we will use sqlite to store data. Maybe on production we will migrate to Mysql.
- Using TDD approach

2. Plan tasks

- Write tests
- Define Api Routes

    Part I -> Admin Api
    - CMS
        - Portfolio/Project CRUD
            - Name, Description, Image, Skills n tools, year, client
        - About page - edit save
        - Secure Login page, no registration
        - testimonials crud


    Part II -> Customer Api
    - SPA for following pages
        - home
        - about - short bio with photo, skills with context, education, awards, certifications, Downloadable resume
        - contact with linkedin, github links
    - separate page for portfolio
        - portfolio list products
        - portfolio single product (optional)
    - testimonials

## Development
1. Testimonials 
- write test cases for CRUD
- create migration, model, controller, factory(testing), policy(restricted access), form-requests, resources 
php artisan make:model Testimonial --all --resources
- setup migration
- setup Routes
- setup resource
- setup factory
- setup model fillables, casts
- setup controller
- setup validations
- run tests one by one, revisit above steps until all tests are passed


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
