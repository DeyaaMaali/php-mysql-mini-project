<?php
include('mydb_connection.php');
session_start();
$email = $password =  "";
$error_msg = array('email' => '', 'password' => '', 'auth'=>'');
if(isset($_POST['submit'])) {
    if(empty($_POST['email'])){
        $error_msg['email'] = "Please Fill The Email";
    }
    else{
        $email = $_POST['email'];}


    if(empty($_POST['password'])){
        $error_msg['password'] = "Please Fill The Password";
    }else{
        $password = $_POST['password'];}


    if(( $email && $password )) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM users WHERE email = '$email' && password='$password'";
//       var_dump($sql);
        $result = mysqli_query($conn, $sql);

//        if($result = mysqli_query($conn, $sql))
//            echo "Good";
//            else
//                echo "error";

        $fresult = mysqli_fetch_assoc($result);
        if($fresult){
            $_SESSION['name'] = $fresult['first_name'];
//        echo $_SESSION['name'];
            header('Location: dashbord.php');}
        else
            $error_msg['auth'] = "You are not Authenticated";
//        echo " _________ <br/>";
//        echo $email . "<br/>";
//        echo  $password . "<br/>";
//        echo " _________ <br/>";
//
//
//        echo $_POST['email'] . "<br/>";
//        echo $_POST['password'] . "<br/>";

    }
}
?>


<!DOCTYPE html>
<html>

<?php include ('header.php'); ?>
<div class="container" style="width: 50%; border: 1px solid black; padding: 20px; margin-top:50px; margin-bottom:50px">
    <h1 style="text-align: center; margin-bottom: 25px"> Sign in</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

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