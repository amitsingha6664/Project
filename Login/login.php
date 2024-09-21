<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $number = '01779178486';
    $pass = '12345678';
    $error = "";
    $success = "";

    if(isset($_POST['submit'])){
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        if(empty($phone)){
            $error = 'Please fill in your phone number.';
        }
        elseif(empty($password)){
            $error = 'Please fill in your password.';
        }
        elseif(strlen($password) < 8 || strlen($password) > 20){
            $error = 'Password must be between 8 and 20 characters.';
        }
        elseif($phone !== $number || $password !== $pass){
            $error = 'Incorrect Phone or Password';
        }
        else{
            $success = 'Login successful!';
        }
    }
    ?>
    

    <section class="vh-100">
        <div class="container d-flex justify-content-center">
            <div class="card mt-5 p-5" style="width: 30rem;">
                <div class="card-body">
                    <form method="POST" action="">
                        <h3 class="d-flex justify-content-center fw-bold">Log In</h3>

                        <div class="container mt-3">
                            <?php if($error): ?>
                                <div class="alert alert-danger">
                                    <?php echo $error; ?>
                                </div>
                            <?php elseif($success): ?>
                                <div class="alert alert-success">
                                    <?php echo $success; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mt-4">
                            <label for="exampleInputText1" class="form-label d-flex justify-content-center fs-5">Email or Phone</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputText1" placeholder="Phone Number">
                        </div>

                        <div class="mt-3">
                            <label for="exampleInputPassword1" class="form-label d-flex justify-content-center fs-5">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <a class="d-flex justify-content-end text-decoration-none mt-2 mb-2" href="#">Forgot Password?</a>

                        <div class="d-flex justify-content-center mb-4 mt-4">
                            <button class="btn btn-primary" type="submit" name="submit">Login</button>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-center mt-4">
                            <p>Create New Account? <a class="text-decoration-none" href="#">Sign Up</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>
