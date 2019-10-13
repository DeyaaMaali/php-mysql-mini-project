<?php
include('mydb_connection.php');
session_start();
$email = $password =  "";
$error_msg = array('email' => '', 'password' => '', 'auth'=>'');

// What connection variable contain:

//echo "<h1> The Connection variable:" . "</h1>";
//var_dump($conn);

// ___________________

// What _POST variable contain:

// echo "<h1> The _POST variable: </h1>";
// print_r ($_POST);

// ___________________

// How to pull out the value of every individual input:

// echo "<h1> Email input: " . $_POST['email'] . "</h1> <br />";
// echo "<h1> Password input: " . $_POST['password'] . "</h1> <br />";
// echo "<h1> Submit input: " . $_POST['submit'] . "</h1> <br />";

// ___________________

// How to handle the form with simple validation:

if(isset($_POST['submit'])) {
// to handle the errors:
    if(empty($_POST['email'])){
        $error_msg['email'] = "Please Fill The Email";
    }
    else{
        $email = $_POST['email'];}


    if(empty($_POST['password'])){
        $error_msg['password'] = "Please Fill The Password";
    }else{
        $password = $_POST['password'];}


    if(( $email && $password )) { // to check if the email and password are empty or not.
        $email = mysqli_real_escape_string($conn, $_POST['email']); // to escape the characters to database
        $password = mysqli_real_escape_string($conn, $_POST['password']);


        // preparing sql statement to use it in mysqli_query:
        $sql = "SELECT * FROM users WHERE email='$email' && password='$password'";



        //var_dump($sql);

        // do the query:
        $result = mysqli_query($conn, $sql);

        // what store in result:

//        echo "<h1>result: </h1>";
//        var_dump($result);

        // How to check if we did the query successfully:

//        if($result = mysqli_query($conn, $sql))
//            echo "Good";
//        else
//            echo 'query error: '. mysqli_error($conn);

        // How to handle the first row in result:
        $fresult = mysqli_fetch_assoc($result);

        // How the mysqli_fetch_assoc function exactly print the next row:

//        echo "<br/> <h1>fresult:</h1>";
//        var_dump($fresult);
//        $fresult = mysqli_fetch_assoc($result);
//        echo "<br/> <h1>fresult2:</h1>";
//        var_dump($fresult);
//        $fresult = mysqli_fetch_assoc($result);
//        echo "<br/> <h1>fresult3:</h1>";
//        var_dump($fresult);



        if($fresult){
            $_SESSION['name'] = $fresult['first_name'];
//        echo $_SESSION['name'];
            header('Location: dashbord.php');
}
        else
            $error_msg['auth'] = "You are not Authenticated";

    }
}
// echo $_SERVER['PHP_SELF'] use this to redirect to the same page.
// Cross Site Scripting (when you dont use htmlspecialchar the hackers can use the below script to redirect the input to another page)
// <script> window.location = "http://www.google.com" </script>
?>


<!DOCTYPE html>
<html>

<?php include ('header.php'); ?>
<div class="container" style="width: 50%; border: 1px solid black; padding: 20px; margin-top:50px; margin-bottom:50px">
    <h1 style="text-align: center; margin-bottom: 25px"> Sign in</h1>
    <form action="signin.php" method="POST">

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value=<?php echo htmlspecialchars($email) ?>>
            <p style="color: red; font-size: 10px"><?php echo $error_msg['email'] ?></p>

        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
            <p style="color: red; font-size: 10px"><?php echo $error_msg['password'] ?></p>

        </div>
        <div>
            <p style="color: red"> <?php echo $error_msg['auth'] ?></p>
        </div>
        <div style="margin: auto; width: 35%; padding: 25px">
            <input type="submit" name="submit" value="Login!" class="btn btn-danger" style="width: 100%">
        </div>

    </form>
</div>
<?php include ('footer.php'); ?>

</html>