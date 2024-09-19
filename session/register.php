<?php
global $conn;

# Include connection
require_once ROOT . '/db/conn.php';

# Define variables and initialize with empty values
$username_err = $email_err = $password_err = $confirm_password_err = "";
$username = $email = $password = $confirm_password = "";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  # Validate username
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } else {
    $username = trim($_POST["username"]);
    if (!ctype_alnum(str_replace(array("@", "-", "_"), "", $username))) {
      $username_err = "Username can only contain letters, numbers and symbols like '@', '_', or '-'.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM user WHERE username = ?";

      if ($stmt = mysqli_prepare($conn, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        # Set parameters
        $param_username = $username;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if username is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $username_err = "This username is already registered.";
          }
        } else {
          echo "<script>alert('Oops! Something went wrong. Please try again later.')</script>";
        }

        # Close statement 
        mysqli_stmt_close($stmt);
      }
    }
  }

  # Validate email 
  if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter an email address";
  } else {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Please enter a valid email address.";
    } else {
      # Prepare a select statement
      $sql = "SELECT id FROM user WHERE email = ?";

      if ($stmt = mysqli_prepare($conn, $sql)) {
        # Bind variables to the statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_email);

        # Set parameters
        $param_email = $email;

        # Execute the prepared statement 
        if (mysqli_stmt_execute($stmt)) {
          # Store result
          mysqli_stmt_store_result($stmt);

          # Check if email is already registered
          if (mysqli_stmt_num_rows($stmt) == 1) {
            $email_err = "This email is already registered.";
          }
        } else {
          echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
        }

        # Close statement
        mysqli_stmt_close($stmt);
      }
    }
  }

  # Validate password
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } else {
    $password = trim($_POST["password"]);
    if (strlen($password) < 8) {
      $password_err = "Password must contain at least 8 or more characters.";
    }
  }

  # Validate confirm password
  if (empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Please confirm your password.";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if ($password !== $confirm_password) {
      $confirm_password_err = "Passwords do not match.";
    }
  }

  # Check input errors before inserting data into database
  if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
    # Prepare an insert statement
    $sql = "INSERT INTO user(username, email, password) VALUES (?, ?, ?)";

    if ($stmt = mysqli_prepare($conn, $sql)) {
      # Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

      # Set parameters
      $param_username = $username;
      $param_email = $email;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      # Execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // echo "<script>alert('Registration completed successfully. Login to continue.');</script>";
        header("Location: " . APP_URL . "/session/login.php");
        exit;
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

$pageTitlePrefix = "Register";
$faviconPath = APP_URL . "/assets/img/icons/lock-icon.svg";

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
                        <h1 class="breadcrumb__content--title text-white mb-25">Register</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start register section  -->
    <div class="login__section section--padding">
        <div class="container">
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="login__section--inner">
                    <div class="row row-cols-md-2 row-cols-1 d-flex justify-content-center">

                        <div class="col">
                            <div class="account__login register">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                    <p class="account__login--header__desc">Register here if you are a new customer</p>
                                </div>
                                <div class="account__login--inner">

                                    <input class="account__login--input" placeholder="Username" type="text"
                                        name="username" value="<?= $username; ?>">
                                    <span class="text-danger"><?= $username_err; ?></span>

                                    <input class="account__login--input" placeholder="Email Address" type="text"
                                        name="email" value="<?= $email; ?>">
                                    <span class="text-danger"><?= $email_err; ?></span>

                                    <input class="account__login--input" placeholder="Password" type="password"
                                        name="password">
                                    <span class="text-danger"><?= $password_err; ?></span>

                                    <input class="account__login--input" placeholder="Confirm Password" type="password"
                                        name="confirm_password">
                                    <span class="text-danger"><?= $confirm_password_err; ?></span>

                                    <div class="d-flex justify-content-end">
                                        <button class="account__login--btn primary__btn w-25" type="submit"
                                            name="submit">Register</button>
                                    </div>
                                    <!-- <div class="account__login--remember position__relative">
                                        <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label login__remember--label" for="check2">
                                            I have read and agree to the terms & conditions</label>
                                    </div> -->

                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>

                                    <p class="account__login--signup__text">Already Have an Account? <a
                                            href="<?php echo APP_URL; ?>/session/login.php">Login</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End register section  -->

    <!-- Display Benefits Section -->
    <?php include ROOT . '/includes/benefits.php'; ?>

</main>


<!-- Include Footer -->
<?php
include ROOT . '/includes/footer.php';
?>

</body>

</html>