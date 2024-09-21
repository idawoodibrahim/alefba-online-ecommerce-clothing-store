<?php
include ROOT . '/session/session_check.php';
include ROOT . '/db/conn.php';

// Fetch products from the database
$sql = "SELECT * FROM product WHERE display = 'yes' LIMIT 13";
// Fetch wishlist from the database
$wishlistSql = "
    SELECT w.*, p.* FROM wishlist w
    INNER JOIN product p ON w.product_id = p.id
    WHERE w.user_id = $USER_ID
";

$pageTitlePrefix = "Wishlist";

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
                        <h1 class="breadcrumb__content--title text-white mb-25">Wishlist</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Wishlist section start -->
    <section class="cart__section section--padding">
        <div class="container">
            <div class="cart__section--inner">
                <form action="#">
                    <h2 class="cart__title mb-40">Wishlist</h2>
                    <div class="cart__table">
                        <table class="cart__table--inner">
                            <thead class="cart__table--header">
                                <tr class="cart__table--header__items">
                                    <th class="cart__table--header__list">Product</th>
                                    <th class="cart__table--header__list">Price</th>
                                    <th class="cart__table--header__list text-center">STOCK STATUS</th>
                                    <th class="cart__table--header__list text-right">ADD TO CART</th>
                                </tr>
                            </thead>
                            <tbody class="cart__table--body">
                                <?php
                                if (!$USER_LOGGED_IN) {
                                ?>
                                    <tr>
                                        <td colspan="4" class="text-center">To see wishlist, please
                                            <a href="<?php echo APP_URL; ?>/session/login.php">Login</a> or
                                            <a href="<?php echo APP_URL; ?>/session/register.php">Register</a>
                                        </td>
                                    </tr>
                                    <?php
                                } elseif ($USER_LOGGED_IN) {
                                    // Fetch wishlist items for the logged-in user
                                    $wishlistResult = $conn->query($wishlistSql);

                                    while ($wishlist = $wishlistResult->fetch_assoc()):
                                        $in_cart = false;

                                        // Check if the product is in the user's cart
                                        $cart_query = "SELECT * FROM cart WHERE user_id = $USER_ID AND product_id = " . $wishlist['product_id'];
                                        $cart_result = $conn->query($cart_query);

                                        $in_cart = $cart_result->num_rows > 0; // Boolean: true if the product is in the cart, otherwise false
                                    ?>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <button class="cart__remove--btn wishlist-btn" aria-label="remove button"
                                                        type="button" href="javascript:void(0)"
                                                        onclick="toggleWishlist(<?php echo $wishlist['product_id']; ?>, this)">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path
                                                                d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg>
                                                    </button>
                                                    <div class="cart__thumbnail">
                                                        <a href="<?php echo APP_URL; ?>/view/product-details.php">
                                                            <img class="border-radius-5"
                                                                src="<?php echo APP_URL . $wishlist['product_primary_img']; ?>"
                                                                alt="cart-product">
                                                        </a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title">
                                                            <a
                                                                href="<?php echo APP_URL; ?>/view/product-details.php"><?php echo $wishlist['name']; ?></a>
                                                        </h4>
                                                        <!-- <span class="cart__content--variant">SIZE: M</span> -->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <span class="cart__price">€<?php echo $wishlist['sale_price']; ?></span>
                                            </td>
                                            <td class="cart__table--body__list text-center">
                                                <span
                                                    class="in__stock text__secondary"><?php echo $wishlist['stock_status']; ?></span>
                                            </td>
                                            <td class="cart__table--body__list text-right">
                                                <a class="wishlist__cart--btn primary__btn" href="javascript:void(0)"
                                                    onclick="manageCart(<?php echo $wishlist['product_id']; ?>, this)"
                                                    style="background-color: <?php echo $in_cart ? 'red' : ''; ?>; color: <?php echo $in_cart ? 'white' : ''; ?>"
                                                    <?php echo $in_cart ? 'disabled' : ''; ?>>
                                                    <?php echo $in_cart ? 'Already Added' : 'Add to Cart'; ?>
                                                </a>
                                            </td>
                                        </tr>
                                <?php
                                    endwhile;
                                }
                                ?>

                            </tbody>
                        </table>
                        <div class="continue__shopping d-flex justify-content-between">
                            <a class="continue__shopping--link" href="<?php echo APP_URL; ?>/#products">Continue
                                shopping</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Wishlist section end -->


    <!-- Display Benefits & New Products Section -->
    <?php
    include ROOT . '/includes/benefits.php';
    include ROOT . '/includes/new-products.php';
    ?>

</main>

<!-- Include Footer -->
<?php
mysqli_close($conn);
include ROOT . '/includes/footer.php';
?>

</body>

</html>