<?php
global $conn;

# Include connection
require_once ROOT . '/db/conn.php';

# Define variables and initialize with empty values
$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["user_login"]))) {
        $user_login_err = "Please enter your username or an email id.";
    } else {
        $user_login = trim($_POST["user_login"]);
    }

    if (empty(trim($_POST["user_password"]))) {
        $user_password_err = "Please enter your password.";
    } else {
        $user_password = trim($_POST["user_password"]);
    }

    # Validate credentials
    if (empty($user_login_err) && empty($user_password_err)) {
        # Prepare a select statement
        $sql = "SELECT id, username, password FROM user WHERE username = ? OR email = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            # Bind variables to the statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_user_login, $param_user_login);

            # Set parameters
            $param_user_login = $user_login;

            # Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                # Store result
                mysqli_stmt_store_result($stmt);

                # Check if user exists, If yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    # Bind values in result to variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

                    if (mysqli_stmt_fetch($stmt)) {
                        # Check if password is correct
                        if (password_verify($user_password, $hashed_password)) {

                            # Store data in session variables
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["loggedin"] = TRUE;

                            # Redirect user to index page
                            echo "<script>" . "window.location.href='../index.php'" . "</script>";
                            exit;
                        } else {
                            # If password is incorrect show an error message
                            $login_err = "The email or password you entered is incorrect.";
                        }
                    }
                } else {
                    # If user doesn't exist, show an error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
                echo "<script>" . "window.location.href='./login.php'" . "</script>";
                exit;
            }

            # Close statement
            mysqli_stmt_close($stmt);
        }
    }

    # Close connection
    mysqli_close($conn);
}

$pageTitlePrefix = "Login";

include ROOT . '/includes/header.php';
include ROOT . '/includes/menu.php';
?>

<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start login section  -->
    <div class="login__section section--padding">
        <div class="container">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
                <div class="login__section--inner">
                    <div class="row row-cols-md-2 row-cols-1 d-flex justify-content-center">
                        <div class="col">
                            <div class="account__login">
                                <div class="account__login--header text-center mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                    <p class="account__login--header__desc">Login if you are a returning customer.</p>
                                </div>
                                <div class="account__login--inner">

                                    <!-- Display common login error -->
                                    <?php if (!empty($login_err)) : ?>
                                    <div class="alert alert-danger"><?= $login_err; ?></div>
                                    <?php endif; ?>

                                    <!-- Email Field -->
                                    <input class="account__login--input form-control" placeholder="Email Address"
                                        type="text" name="user_login" id="user_login" value="<?= $user_login; ?>">
                                    <!-- Display email error -->
                                    <?php if (!empty($user_login_err)) : ?>
                                    <span class="text-danger"><?= $user_login_err; ?></span>
                                    <?php endif; ?>

                                    <!-- Password Field -->
                                    <input class="account__login--input form-control" placeholder="Password"
                                        type="password" name="user_password" id="password">
                                    <!-- Display password error -->
                                    <?php if (!empty($user_password_err)) : ?>
                                    <span class="text-danger"><?= $user_password_err; ?></span>
                                    <?php endif; ?>

                                    <div
                                        class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label"
                                                for="check1">
                                                Remember me</label>
                                        </div>
                                        <button class="account__login--forgot" type="submit">Forgot Your
                                            Password?</button>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="account__login--btn primary__btn w-25" type="submit"
                                            name="submit">Login</button>
                                    </div>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>
                                    <p class="account__login--signup__text">Don't Have an Account? <button
                                            type="submit">Sign up now</button></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- End login section  -->

    <!-- Display Benefits Section -->
    <?php include ROOT . '/includes/benefits.php'; ?>

</main>


<!-- Include Footer -->
<?php
include ROOT . '/includes/footer.php';
?>

</body>

</html>