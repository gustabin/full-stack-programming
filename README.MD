# Full Stack Programming — Source Code Examples

This repository contains the source code examples used in the book "Full Stack Programming". It is a compact PHP + MySQL web project with front-end demonstrations (HTML, CSS, JavaScript, jQuery, Bootstrap) and server-side examples (PHP scripts, database access, CRUD operations). The examples are intended for learning and experimentation.

## Contents

- Basic PHP + MySQL CRUD examples for users and forms.
- Several HTML demos showing client-side techniques: DOM events, form validation, AJAX, API consumption, jQuery utilities, and responsive layout.
- A small assets folder with CSS and styles.
- Include files for common header/footer markup.

## Notable files

- `index.php` — Project entry / sample page.
- `db.php` / `connection.php` — Database connection helper files.
- `create-db.sql` — SQL script to create the example database and tables.
- `insert-user.php`, `update-user.php`, `delete-user.php` — Server-side CRUD handlers.
- `retrieve-display-user.php`, `users.php` — Examples that retrieve and display data.
- `sanitization-user.php` — Example showing input sanitization.
- `consuming-API.html` — Client-side example consuming an external API.
- `events-dom.html`, `form-validation.html`, `jquery.html` — Front-end demos showcasing DOM events, validation, and jQuery usage.
- `assets/css/style.css` and `styles.css` — Project styles.
- `includes/header.php`, `includes/footer.php` — Shared layout fragments.

## Requirements

- PHP (tested with PHP 7.x / 8.x)
- MySQL or MariaDB
- A local web server such as XAMPP (Apache + PHP + MySQL)
- A modern web browser for front-end demos

## Setup

1. Place the project folder inside your web server document root (for example, `htdocs` in XAMPP).
2. Import the database schema using `create-db.sql` into your MySQL server. You can use phpMyAdmin or the `mysql` command-line tool.
3. Update database credentials in `db.php` or `connection.php` to match your local MySQL user and password.
4. Open the project in your browser, e.g. `http://localhost/my_project/` and navigate to `index.php`.

## Usage

- Use the provided form pages to create, edit, and delete sample user records.
- Explore the static HTML examples to learn front-end techniques (open files directly or via the local server).
- `consuming-API.html` demonstrates how to fetch remote data with the Fetch API and integrate responses into the page.

## Security and Notes

- These examples are educational and focus on clarity rather than production hardening.
- Review and improve input validation, sanitization, prepared statements, CSRF protection, and error handling before using anything in production.

## Contributing

Contributions and improvements are welcome. If you add content, please keep examples small and focused, and include brief notes explaining what changed.

## License

This collection is provided for learning purposes. If you want a license applied, consider using the MIT License or consult the original book's licensing.

## Acknowledgements

Examples and structure are based on materials from the "Full Stack Programming" book and its accompanying source code.
