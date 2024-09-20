<?php
# Start the session if not already started
ensureSessionStarted();

# Initialize connection (move this higher up)
global $conn;

# Include connection
require_once ROOT . '/db/conn.php';

# Define variables and initialize with empty values
$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    # Check if username or email is empty
    if (empty(trim($_POST["user_login"]))) {
        $user_login_err = "Please enter your username or email.";
    } else {
        $user_login = trim($_POST["user_login"]);
    }

    # Check if password is empty
    if (empty(trim($_POST["user_password"]))) {
        $user_password_err = "Please enter your password.";
    } else {
        $user_password = trim($_POST["user_password"]);
    }

    # Validate credentials if no errors
    if (empty($user_login_err) && empty($user_password_err)) {
        # Prepare a select statement
        $sql = "SELECT id, username, email, role, password FROM user WHERE username = ? OR email = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            # Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_user_login, $param_user_email);

            # Set parameters
            $param_user_login = $user_login;
            $param_user_email = $user_login; // Assuming user can enter either username or email

            # Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                # Store result
                mysqli_stmt_store_result($stmt);

                # Check if user exists, then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    # Bind values in result to variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $email, $role, $hashed_password);
                    
                    if (mysqli_stmt_fetch($stmt)) {
                        # Verify the password
                        if (password_verify($user_password, $hashed_password)) {
                            # Start session and store user data AFTER successful login
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;
                            $_SESSION["email"] = $email;
                            $_SESSION["role"] = $role;
                            $_SESSION["loggedin"] = TRUE;
                        
                            # Output session variables to the console
                            echo "<script>
                                // console.log('Session ID: {$_SESSION['id']}');
                                // console.log('Session Username: {$_SESSION['username']}');
                                // console.log('Session Email: {$_SESSION['email']}');
                                // console.log('Session Role: {$_SESSION['role']}');
                                // console.log('Session Logged In: true');
                        
                                // Time Delay before redirecting
                                setTimeout(function() {";
                            
                            # Check if there is a redirect URL stored in the session
                            if (isset($_SESSION['redirect_url'])) {
                                $redirect_url = $_SESSION['redirect_url'];

                                # Clear the redirect URL from session
                                unset($_SESSION['redirect_url']);

                                # Redirect to the stored URL after the delay
                                echo "window.location.href = '" . $redirect_url . "';";
                            } else {
                                # If no redirect URL, send to default page (homepage)
                                echo "window.location.href = '" . APP_URL . "';";
                            }                        
                            echo "}, 00); // delay in ms for viewing console logs
                            </script>";
                            exit;
                        
                        } else {
                            # Password is incorrect
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    # User doesn't exist
                    $login_err = "User does not exist.";
                }
            } else {
                echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
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
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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

                                    <!-- Username or Email Input Field -->
                                    <input class="account__login--input form-control" placeholder="Username or Email"
                                        type="text" name="user_login" id="user_login"
                                        value="<?= htmlspecialchars($user_login); ?>">
                                    <!-- Display username/email error -->
                                    <?php if (!empty($user_login_err)) : ?>
                                    <span class="text-danger"><?= $user_login_err; ?></span>
                                    <?php endif; ?>

                                    <!-- Password Input Field with Show/Hide functionality -->
                                    <div class="password-wrapper">
                                        <input class="account__login--input form-control" placeholder="Password"
                                            type="password" name="user_password" id="password">
                                        <i class="toggle-password far fa-eye"
                                            onclick="togglePasswordVisibility('password', this)"></i>
                                    </div>
                                    <!-- Display password error -->
                                    <?php if (!empty($user_password_err)) : ?>
                                    <span class="text-danger"><?= $user_password_err; ?></span>
                                    <?php endif; ?>

                                    <div
                                        class="account__login--remember__forgot mt-3 mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="rememberMeCheck"
                                                type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label"
                                                for="rememberMeCheck">
                                                Remember me
                                            </label>
                                        </div>
                                        <button class="account__login--forgot" type="button">Forgot Your
                                            Password?</button>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button class="account__login--btn primary__btn w-25" type="submit"
                                            name="submit">Login</button>
                                    </div>

                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>

                                    <p class="account__login--signup__text">Don't Have an Account? <a
                                            href="<?php echo APP_URL; ?>/session/register.php">Register now</a></p>

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