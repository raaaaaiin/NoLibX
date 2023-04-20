<h1>NoLibX - PHP Framework</h1>
<p>NoLibX is a lightweight PHP framework designed for web developers who prefer to build web applications using
    pure PHP, HTML, and CSS, without any external libraries or dependencies. It provides a simple and intuitive
    structure for organizing your code and building web applications efficiently.</p>

<h1>Features</h1>

- Pure PHP, HTML, and CSS: No external libraries or dependencies are required, making it easy to understand and customize.
- MVC Architecture: Follows the Model-View-Controller (MVC) design pattern for separating business logic, presentation logic, and user interface.
- Flexible Routing: Provides a flexible routing system for handling URLs and mapping them to appropriate controllers and actions.
- Common Functions: Includes common functions for handling HTTP requests and responses, form validation, data validation, error handling, and more.
- View Templating: Supports view templating for separating HTML markup from PHP code, making it easier to maintain and update your application's UI.
- Resource Organization: Provides a well-organized directory structure for organizing your PHP files, HTML templates, CSS stylesheets, JavaScript files, and image assets.
- Uploads Handling: Includes a designated "uploads" directory for handling file uploads from users.
- Front-end Assets: Comes with pre-configured Bootstrap 4.6.0 CSS and JS files for easy front-end styling and interactivity.


<h1>Directory Structure</h1>
<pre> C:.
├───.idea
├───app
│   ├───Common
│   ├───Http
│   │   └───Controller
│   │       ├───Auth
│   │       ├───Back
│   │       ├───Master
│   │       └───Navigations
│   └───Models
├───public
│   ├───css
│   │   └───bootstrap-4.6.0-dist
│   │       ├───css
│   │       └───js
│   ├───front
│   ├───js
│   └───uploads
└───resources
    ├───js
    └───view
        ├───Auth
        ├───Back
        ├───CSS
        └───Navigations
</pre>
<h1>Getting Started</h1>

1. Clone the NoLibX repository to your local development environment.
2. Configure your web server to point to the `public` directory as the document root.
3. Start building your web application by adding controllers, models, and views in the respective directories within the `app` and `view` directories.
4. Define routes in the `app/Http/Controller` directory to handle incoming URLs and map them to appropriate controller actions.
5. Use the common functions provided by NoLibX for handling HTTP requests and responses, form validation, data validation, error handling, and more.
6. Customize the view templates in the `view` and `resources/view` directories to define the UI of your web application.
7. Add front-end assets such as CSS stylesheets, JavaScript files, and image assets in the respective directories within the `public` directory.
8. Handle file uploads from users in the designated `public/uploads` directory.
9. Customize and extend the functionalities of NoLibX as per your project requirements.

<h2>Documentation</h2>

For detailed documentation on using NoLibX framework, please refer to the following files:

- `app/Http/Controller/AuthController.php`: Example controller file for handling authentication-related functionality.
- `app/Http/Controller/BackController.php`: Example controller file for handling backend functionality.
- `app/Http/Controller/MasterController.php`: Example controller file for handling master data related functionality.
- `app/Http/Controller/NavigationsController.php`: Example controller file for handling navigation-related functionality.
- `app/Models/`: Directory for storing model files that interact with the database.
- `public/css/bootstrap-4.6.0-dist`: Directory for storing Bootstrap 4.6.0 CSS and JS files.
- `public/front`: Directory for storing front-end assets such as CSS, JS, and image files specific to the front-end of your application.
- `public/js`: Directory for storing custom JavaScript files.
- `public/uploads`: Directory for storing uploaded files from users.
- `resources/js`: Directory for storing JavaScript files for the back-end of your application.
- `resources/view/Auth`: Directory for storing view templates related to authentication.
- `resources/view/Back`: Directory for storing view templates related to backend functionality.
- `resources/view/CSS`: Directory for storing CSS files specific to your application.
- `resources/view/Navigations`: Directory for storing view templates related to navigation.
- `view/css`: Directory for storing CSS files for the front-end of your application.
- `view/img`: Directory for storing image files for the front-end of your application.

<h1>Contributing</h1>

If you would like to contribute to NoLibX framework, please follow these steps:

1. Fork the repository on GitHub.
2. Create a branch for your feature or bugfix.
3. Make your changes and commit them with descriptive commit messages.
4. Push your changes to your forked repository on GitHub.
5. Submit a pull request to the main repository.
6. Await review and feedback from the project maintainers.
7. Once your changes are approved, they will be merged into the main repository.

<h1>License</h1>

NoLibX is an open-source project released under the GNU General Public License v3.0 (LICENSE).

<h1>Contact</h1>

For any inquiries or questions, please contact the project maintainer at Marcraineer0089@gmail.com
