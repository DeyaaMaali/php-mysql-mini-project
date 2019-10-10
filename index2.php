<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">
    <title>PHP MySQL Mini Project</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">

    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-12">

            <!-- Title -->
            <h1 class="mt-4">PHP MySQL Mini Project</h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">Ala' Mohammad</a>
            </p>
            <!-- Preview Image -->
            <img class="img-fluid center" src="images/php-1024x538.png" alt="">

            <hr>
            <!-- Post Content -->
            <p class="lead">You will create a mini dashboard application,Your application should include these pages :
            <ol>
                <li>Landing Page [Static Page, and should include the menu]</li>
                <li>About us Page [Static Page, and should include the menu]</li>
                <li>Login Page</li>
                <li>Registration Page</li>
                <li>Dashboard Page</li>
            </ol>
            </p>
            <h3> Section 1: Pages</h3>
            <hr>
            <h4>1. Landing Page </h4>
            <p>Your landing page with a good design (You can downland any <b>Bootstrap</b> template and use it), your
                landing page should include at least two main components :
            <ul>
                <li>Menu: Your menu should include Home, About us , Login Button, Register Button</li>
                <li>Slider</li>
            </ul>
            </p>
            <hr>
            <h4>2. About us Page </h4>
            <p>The about us page should have a good design and include at least one image and lorem ipsum text
            </p>
            <hr>
            <h4>3. Registration page </h4>
            <p>When the user click on the sign up button in the landing page, the button should redirect him to the
                registration page, this page should include a registration form , the registration form should be active
                and save the user information in the DB
            </p>
            <hr>
            <h4>4. Login page </h4>
            <p>When the user click on the login button in the landing page, the button should redirect him to the login
                page, this page should include a login form , the login form should get the data from the DB and if the
                user has register before, the user should redirected to the Dashboard Page and see a welcoming message
                "Welcome USER_NAME" , if not the user should see a warning message at the login page "You are not
                Authenticated "
            </p>
            <hr>
            <h4>5. Dashboard page </h4>
            <p>When the user redirected to the dashboard page, the dashboard should displayed the welcome message "Welcome USER_NAME"</p>

            <hr>
            <h3> Section 2: Databases </h3>
            <p>Your database [my_db] should have one table for the users:  [users] table, your users table should have the following structure  </p>
            <table class="table table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>username</th>
                <th>password</th>
                <th>email</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>11</td>
                <td>255</td>
                <td>255</td>
                <td>255</td>
                <td>255</td>
                <td>255</td>
            </tr>
            <tr>
                <td>integer</td>
                <td>string</td>
                <td>string</td>
                <td>string</td>
                <td>string</td>
                <td>string</td>
            </tr>
            <tr>
                <td>AUTO INCREMENT</td>
                <td>--</td><td>--</td><td>--</td><td>--</td><td>--</td>
            </tr>
            </tbody>
            </table>

        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>