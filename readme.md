# Landing page for the Three Minute Geek Show
## Installation

1. Clone the repository locally
2. Install dependencies with `composer install` 
3. Copy `.env.example` to `.env` and modify its contents to reflect your local environment
4. Generate application key
```bash
php artisan key:generate
```
5. Configure a web server, such as the built-in PHP web server, to serve this site using the +public+ directory as its root
```bash
php -S localhost:8080 -t public
```