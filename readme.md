<!DOCTYPE html>
<html>

<head>
    <title>NoLibX - PHP Framework</title>
</head>

<body>
    <h1>NoLibX - PHP Framework</h1>
    <p>NoLibX is a lightweight PHP framework designed for web developers who prefer to build web applications using
        pure PHP, HTML, and CSS, without any external libraries or dependencies. It provides a simple and intuitive
        structure for organizing your code and building web applications efficiently.</p>

    <h2>Features</h2>
    <ol>
        <li>Pure PHP, HTML, and CSS: No external libraries or dependencies are required, making it easy to understand
            and customize.</li>
        <li>MVC Architecture: Follows the Model-View-Controller (MVC) design pattern for separating business logic,
            presentation logic, and user interface.</li>
        <li>Flexible Routing: Provides a flexible routing system for handling URLs and mapping them to appropriate
            controllers and actions.</li>
        <li>Common Functions: Includes common functions for handling HTTP requests and responses, form validation, data
            validation, error handling, and more.</li>
        <li>View Templating: Supports view templating for separating HTML markup from PHP code, making it easier to
            maintain and update your application's UI.</li>
        <li>Resource Organization: Provides a well-organized directory structure for organizing your PHP files, HTML
            templates, CSS stylesheets, JavaScript files, and image assets.</li>
        <li>Uploads Handling: Includes a designated "uploads" directory for handling file uploads from users.</li>
        <li>Front-end Assets: Comes with pre-configured Bootstrap 4.6.0 CSS and JS files for easy front-end styling
            and interactivity.</li>
    </ol>

    <h2>Directory Structure</h2>
    <pre>
        C:.
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
        ├───resources
        │   ├───js
        │   └───view
        │       ├───Auth
        │       ├───Back
        │       ├───CSS
        │       └───Navigations
        └───view
            ├───css
            └───img
    </pre>

    <h2>Getting Started</h2>
    <ol>
        <li>Clone the NoLibX repository to your local development environment.</li>
        <li>Configure your web server to point to the <code>public</code> directory as the document root.</li>
        <li>Start building your web application by adding controllers, models, and views in the respective directories
            within the <code>app</code> and <code>view</code> directories.</li>
        <li>Define routesin the <code>app/Http/Controller</code> directory to handle incoming URLs and map them to appropriate controller actions.</li>
<li>Use the common functions provided by NoLibX for handling HTTP requests and responses, form validation, data validation, error handling, and more.</li>
<li>Customize the view templates in the <code>view</code> and <code>resources/view</code> directories to define the UI of your web application.</li>
<li>Add front-end assets such as CSS stylesheets, JavaScript files, and image assets in the respective directories within the <code>public</code> directory.</li>
<li>Handle file uploads from users in the designated <code>public/uploads</code> directory.</li>
<li>Customize and extend the functionalities of NoLibX as per your project requirements.</li>
</ol><h2>Documentation</h2>
<p>For detailed documentation on using NoLibX framework, please refer to the following files:</p>
<ul>
    <li><code>app/Http/Controller/README.md</code>: Provides information on creating controllers and defining routes.</li>
    <li><code>app/README.md</code>: Provides information on organizing your models and common functions.</li>
    <li><code>view/README.md</code>: Provides information on creating view templates and using view templating.</li>
    <li><code>resources/view/README.md</code>: Provides information on customizing view templates and handling front-end assets.</li>
    <li><code>public/README.md</code>: Provides information on handling front-end assets, file uploads, and configuring the web server.</li>
</ul>

<h2>Contributing</h2>
<p>If you would like to contribute to NoLibX framework, please follow the guidelines outlined in the <code>CONTRIBUTING.md</code> file.</p>

<h2>License</h2>
<p>NoLibX is open-source software released under the MIT License. See the <code>LICENSE</code> file for more information.</p>

<h2>Contact</h2>
<p>If you have any questions or feedback regarding NoLibX framework, please contact me at marcraineer0089@gmail.com.</p>
</body>
</html>
