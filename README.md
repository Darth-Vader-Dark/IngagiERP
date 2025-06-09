# INGAGI ERP

INGAGI ERP is a comprehensive ERP-lite system built with Laravel 10, designed to manage various aspects of a hospitality business, including employee management, inventory, room bookings, restaurant menu, and order processing. It features role-based authentication, QR code integration for bookings and orders, and a simplified payment system.

## Table of Contents

- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Deployment](#deployment)
- [Free Hosting Configuration](#free-hosting-configuration)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Employee Management:** CRUD operations for managing employees with different roles.
- **Inventory Management:** Track and manage inventory levels.
- **Room Booking Management:** Handle room reservations with QR code generation.
- **Restaurant Menu Management:** Manage menu items.
- **Order Management:** Process restaurant orders with QR code generation.
- **Authentication & Authorization:** Role-based access control (Admin, Waiter, Chef, Inventory Manager, Receptionist).
- **QR Code Integration:** Generate QR codes for room bookings and orders for quick access.
- **Payment Integration (Dummy):** Simplified payment link generation and status updates.
- **Email Confirmations:** Send email confirmations for room bookings and orders.
- **Reporting & Analytics:** Generate sales reports, booking statistics, inventory trends, and paid/unpaid order reports.

## Requirements

Before you begin, ensure you have the following installed on your system:

- PHP >= 8.1
- Composer
- Node.js & npm (or Yarn)
- A database (SQLite, MySQL, PostgreSQL, etc. SQLite is used by default in this project).

## Installation

Follow these steps to get the INGAGI ERP up and running on your local machine:

1.  **Clone the repository:**
    ```bash
    git clone <repository_url>
    cd ingagi-erp
    ```
    *(Note: Replace `<repository_url>` with the actual repository URL if this project were hosted on Git.)*

2.  **Install Composer dependencies:**
    ```bash
    composer install
    ```

3.  **Install Node.js dependencies:**
    ```bash
    npm install
    ```

4.  **Copy the environment file:**
    ```bash
    cp .env.example .env
    ```

5.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

6.  **Configure your database:**
    By default, the project is configured to use SQLite. A `database.sqlite` file will be created in the `database/` directory if it doesn't exist.
    If you wish to use MySQL or PostgreSQL, update your `.env` file with your database credentials:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=ingagi_erp
    DB_USERNAME=your_mysql_username
    DB_PASSWORD=your_mysql_password
    ```

7.  **Run database migrations and seed the admin user:**
    ```bash
    php artisan migrate:fresh --seed --class=AdminUserSeeder
    ```
    This command will create all necessary tables and seed an initial admin user with the following credentials:
    - **Email:** `admin@example.com`
    - **Password:** `password`

8.  **Compile frontend assets:**
    ```bash
    npm run dev
    ```

9.  **Start the Laravel development server:**
    ```bash
    php artisan serve
    ```

    The application will be accessible at `http://127.0.0.1:8000` (or a similar address).

## Configuration

### Environment Variables

The `.env` file contains crucial configuration settings. After copying `.env.example` to `.env`, you may need to adjust the following:

-   `APP_NAME`: Your application's name.
-   `APP_URL`: The base URL of your application.
-   `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`: Database connection details.
-   `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_ENCRYPTION`, `MAIL_FROM_ADDRESS`, `MAIL_FROM_NAME`: Email configuration. A dummy Mailtrap setup is provided by default for development. For production, configure with your actual SMTP server details.

### User Roles

The system defines the following user roles:

-   `admin`
-   `waiter`
-   `chef`
-   `inventory_manager`
-   `receptionist`

New users can be created and assigned roles by an admin user through the employee management section.

## Usage

After installation and configuration, you can access the application through your web browser. Log in with the admin credentials (`admin@example.com` / `password`) to access the admin dashboard and manage employees, inventory, room bookings, menu items, and orders.

Each role has its dedicated dashboard with specific functionalities:

-   `/admin/dashboard`
-   `/waiter/dashboard`
-   `/chef/dashboard`
-   `/inventory-manager/dashboard`
-   `/receptionist/dashboard`

Public-facing pages include:

-   `/` (Landing Page)
-   `/room-bookings/{roomBooking}` (Public view of a room booking via QR code)
-   `/orders/{order}` (Public view of an order via QR code)

## Deployment

Deploying a Laravel application involves several steps. Here's a general guide:

1.  **Server Setup:** Ensure your server has PHP, Composer, Node.js, and a web server (Nginx or Apache) installed and configured.

2.  **Code Deployment:** Transfer your project files to the server. This can be done via Git, SCP, or FTP.

3.  **Environment Configuration:** Copy `.env.example` to `.env` on your server and update all necessary environment variables, especially `APP_URL` and database credentials.

4.  **Install Dependencies:** Run `composer install --no-dev` and `npm install --production` (or `npm run build` if you have a build step for production assets).

5.  **Generate Application Key:** `php artisan key:generate`

6.  **Run Migrations:** `php artisan migrate --force`

7.  **Set Permissions:** Ensure proper file permissions for `storage/` and `bootstrap/cache/` directories (usually `775` or `777` for web server user).

8.  **Web Server Configuration:** Configure your web server (Nginx or Apache) to point its document root to the `public/` directory of your Laravel project.

    **Nginx Example:**
    ```nginx
    server {
        listen 80;
        server_name your_domain.com;
        root /var/www/ingagi-erp/public;

        add_header X-Frame-Options "SAMEORIGIN";
        add_header X-XSS-Protection "1; mode=block";
        add_header X-Content-Type-Options "nosniff";
        add_header Referrer-Policy "no-referrer-when-downgrade";
        add_header Strict-Transport-Security "max-age=31536000; includeSubDomains; preload";

        index index.php index.html index.htm;

        charset utf-8;

        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location ~ \.php$ {
            fastcgi_pass unix:/var/run/php/php8.1-fpm.sock; # Adjust PHP version if different
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
            include fastcgi_params;
        }

        location ~ /\.ht {
            deny all;
        }
    }
    ```

    **Apache Example (.htaccess in public/):**
    Laravel comes with a `public/.htaccess` file that handles URL rewriting. Ensure `mod_rewrite` is enabled on your Apache server.

9.  **Optimize Laravel:**
    ```bash
    php artisan optimize
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    ```

## Free Hosting Configuration

While a full-fledged Laravel application with database and PHP-FPM requires a more robust hosting environment (like a VPS or dedicated server), some free hosting providers offer limited support for PHP applications. Here are general considerations and common approaches for free hosting:

**Limitations of Free Hosting:**

-   **Limited Resources:** Often have strict CPU, RAM, and disk space limits.
-   **No SSH Access:** Many free hosts do not provide SSH, making Composer and Artisan commands difficult or impossible to run directly.
-   **Database Restrictions:** May offer limited database types or sizes.
-   **PHP Version:** Might not support the latest PHP versions required by Laravel.
-   **No Composer/NPM:** You might need to run `composer install` and `npm install && npm run build` locally and then upload the entire `vendor/` and `node_modules/` (or `public/build/` for compiled assets) directories.
-   **No Artisan Commands:** Database migrations and other Artisan commands usually cannot be run directly. You might need to manually import SQL dumps or use a host's control panel for database management.

**Common Free Hosting Options (and their challenges for Laravel):**

1.  **Heroku (Free Tier - Deprecated for new projects):**
    -   Historically a good option, but their free tier for new projects has been discontinued.
    -   If you have an existing free tier account, it supports buildpacks for PHP and Node.js, making Laravel deployment relatively straightforward.

2.  **Netlify/Vercel (for Frontend only):**
    -   Excellent for static sites or frontend-only applications (like a React/Vue SPA). Not suitable for a full-stack Laravel application as they don't support PHP backends or databases.

3.  **000webhost / InfinityFree / ByetHost (Shared Hosting):**
    -   These often provide cPanel-like interfaces.
    -   **Challenges:**
        -   **Composer/NPM:** You'll likely need to run `composer install` and `npm run build` on your local machine and upload the `vendor` and `public/build` directories.
        -   **`.env` file:** Ensure your `.env` file is correctly configured and uploaded.
        -   **Database:** You'll need to create a database through their control panel and manually import your `database.sqlite` (if using SQLite) or an SQL dump (for MySQL/PostgreSQL).
        -   **Web Server Root:** You might need to adjust their web server configuration (if possible) to point to your `public/` directory, or use `.htaccess` rules.
        -   **PHP Version:** Verify their PHP version compatibility.

**General Steps for Free Shared Hosting (if supported):**

1.  **Local Build:** On your local machine, run `composer install` and `npm install && npm run build`.
2.  **Database Export:** If using MySQL/PostgreSQL, export your database as an SQL dump.
3.  **Upload Files:** Upload all your project files (including `vendor/` and compiled frontend assets in `public/build/` or similar) to your hosting account's root directory.
4.  **Configure `.env`:** Manually create or edit the `.env` file on the server with correct database and application URLs.
5.  **Database Import:** Use the hosting provider's control panel to create a database and import your SQL dump.
6.  **Public Directory:** If your host doesn't automatically point to `public/`, you might need to move all contents of your `public/` directory to the host's web root (e.g., `htdocs` or `public_html`) and adjust paths in `index.php` (e.g., `require __DIR__.'/../vendor/autoload.php';` might become `require __DIR__.'/vendor/autoload.php';`). This is generally not recommended for security but might be the only option on some free hosts.

**Recommendation:**

For a Laravel application, especially one intended for an ERP system, a free shared hosting environment is highly restrictive and often unsuitable due to performance, security, and feature limitations. It is strongly recommended to use a paid VPS (Virtual Private Server) or a dedicated Laravel hosting provider (e.g., DigitalOcean, Vultr, AWS EC2, Laravel Forge, Envoyer) for reliable and scalable deployment.

## Contributing

Feel free to fork this repository, submit pull requests, or open issues for bugs and feature requests.

## License

The INGAGI ERP is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

