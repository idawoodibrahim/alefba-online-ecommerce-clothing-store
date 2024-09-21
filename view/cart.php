<?php
include ROOT . '/session/session_check.php';
include ROOT . '/db/conn.php';

// Fetch products from the database
$sql = "SELECT * FROM product WHERE display = 'yes' LIMIT 13";
// Fetch cart from the database
$cartSql = "
    SELECT c.*, p.* FROM cart c
    INNER JOIN product p ON c.product_id = p.id
    WHERE c.user_id = $USER_ID
";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_cart'])) {
    foreach ($_POST['cart'] as $cart_item) {
        $product_id = (int)$cart_item['product_id'];
        $qty = (int)$cart_item['quantity'];

        // Ensure quantity is not negative or zero
        $qty = max(1, $qty);

        // Update the quantity in the cart
        $updateCartSql = "UPDATE cart SET qty = $qty WHERE product_id = $product_id AND user_id = $USER_ID";
        $conn->query($updateCartSql);
    }

    // Redirect to the same page to avoid form resubmission on refresh
    header('Location: cart.php');
    exit;
}


$pageTitlePrefix = "Cart";

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
                        <h1 class="breadcrumb__content--title text-white mb-25">Shopping Cart</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white"
                                    href="<?php echo APP_URL; ?>">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Shopping Cart</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- cart section start -->
    <section class="cart__section section--padding">
        <div class="container-fluid">
            <div class="cart__section--inner">
                <form action="cart.php" method="POST">
                    <input type="hidden" name="update_cart" value="1" />

                    <h2 class="cart__title mb-40">Shopping Cart</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart__table">
                                <table class="cart__table--inner">
                                    <thead class="cart__table--header">
                                        <tr class="cart__table--header__items">
                                            <th class="cart__table--header__list">Product</th>
                                            <th class="cart__table--header__list">Price</th>
                                            <th class="cart__table--header__list">Quantity</th>
                                            <th class="cart__table--header__list">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="cart__table--body">
                                        <?php
                                        if (!$USER_LOGGED_IN) {
                                        ?>
                                        <tr>
                                            <td colspan="4" class="text-center">To view your cart, please
                                                <a href="<?php echo APP_URL; ?>/session/login.php">Login</a> or
                                                <a href="<?php echo APP_URL; ?>/session/register.php">Register</a>
                                            </td>
                                        </tr>
                                        <?php
                                        } elseif ($USER_LOGGED_IN) {
                                            // Fetch wishlist items for the logged-in user
                                            $cartResult = $conn->query($cartSql);
                                            
                                            while ($cart = $cartResult->fetch_assoc()):
                                        ?>
                                        <tr class="cart__table--body__items">
                                            <td class="cart__table--body__list">
                                                <div class="cart__product d-flex align-items-center">
                                                    <button class="cart__remove--btn" aria-label="search button"
                                                        type="button" href="javascript:void(0)"
                                                        onclick="manageCart(<?php echo $cart['id']; ?>, 'remove', this)">
                                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 24 24" width="16px" height="16px">
                                                            <path
                                                                d="M 4.7070312 3.2929688 L 3.2929688 4.7070312 L 10.585938 12 L 3.2929688 19.292969 L 4.7070312 20.707031 L 12 13.414062 L 19.292969 20.707031 L 20.707031 19.292969 L 13.414062 12 L 20.707031 4.7070312 L 19.292969 3.2929688 L 12 10.585938 L 4.7070312 3.2929688 z" />
                                                        </svg>
                                                    </button>
                                                    <div class="cart__thumbnail">
                                                        <a href="<?php echo APP_URL; ?>/view/product-details.php"><img
                                                                class="border-radius-5"
                                                                src="<?php echo APP_URL . $cart['product_primary_img']; ?>"
                                                                alt="cart-product"></a>
                                                    </div>
                                                    <div class="cart__content">
                                                        <h4 class="cart__content--title"><a
                                                                href="<?php echo APP_URL; ?>/view/product-details.php"><?php echo $cart['name']; ?></a>
                                                        </h4>
                                                        <span class="cart__content--variant">
                                                            <?php echo $cart['details']; ?>
                                                        </span>
                                                        <!-- <span class="cart__content--variant">SIZE: M</span> -->
                                                        <!-- <span class="cart__content--variant">WEIGHT: 2 Kg</span> -->
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list"><strong>€</strong>
                                                <span class="cart__price"><?php echo $cart['sale_price']; ?></span>
                                            </td>
                                            <td class="cart__table--body__list">
                                                <div class="quantity__box">
                                                    <button type="button"
                                                        class="quantity__value quickview__value--quantity decrease"
                                                        aria-label="quantity value" value="Decrease Value">-</button>
                                                    <label>
                                                        <input type="number"
                                                            class="quantity__number quickview__value--number"
                                                            name="cart[<?php echo $cart['id']; ?>][quantity]"
                                                            value="<?php echo $cart['qty']; ?>" data-counter />
                                                    </label>
                                                    <button type="button"
                                                        class="quantity__value quickview__value--quantity increase"
                                                        aria-label="quantity value" value="Increase Value">+</button>

                                                    <input type="hidden"
                                                        name="cart[<?php echo $cart['id']; ?>][product_id]"
                                                        value="<?php echo $cart['product_id']; ?>">
                                                </div>
                                            </td>
                                            <td class="cart__table--body__list"><strong>€</strong>
                                                <span class="cart__price end">130.00</span>
                                            </td>
                                        </tr>
                                        <?php 
                                            endwhile; 
                                            } 
                                        ?>
                                    </tbody>
                                </table>
                                <div class="continue__shopping d-flex justify-content-between">
                                    <a class="continue__shopping--link" href="<?php echo APP_URL; ?>/view/shop">Continue
                                        shopping</a>
                                    <!-- <button class="continue__shopping--clear" type="submit">Clear Cart</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart__summary border-radius-10">
                                <!-- <div class="coupon__code mb-30">
                                    <h3 class="coupon__code--title">Coupon</h3>
                                    <p class="coupon__code--desc">Enter your coupon code if you have one.</p>
                                    <div class="coupon__code--field d-flex">
                                        <label>
                                            <input class="coupon__code--field__input border-radius-5"
                                                placeholder="Coupon code" type="text">
                                        </label>
                                        <button class="coupon__code--field__btn primary__btn" type="submit">Apply
                                            Coupon</button>
                                    </div>
                                </div>
                                <div class="cart__note mb-20">
                                    <h3 class="cart__note--title">Note</h3>
                                    <p class="cart__note--desc">Add special instructions for your seller...</p>
                                    <textarea class="cart__note--textarea border-radius-5"></textarea>
                                </div> -->
                                <div class="cart__summary--total mb-20">
                                    <table class="cart__summary--total__table">
                                        <tbody>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">SUBTOTAL</td>
                                                <td class="cart__summary--amount text-right subtotal">€0.00</td>
                                            </tr>
                                            <tr class="cart__summary--total__list">
                                                <td class="cart__summary--total__title text-left">GRAND TOTAL</td>
                                                <td class="cart__summary--amount text-right grandtotal">€0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="cart__summary--footer">
                                    <p class="cart__summary--footer__desc">Shipping & taxes calculated at checkout</p>
                                    <ul class="d-flex justify-content-between">
                                        <li><button class="cart__summary--footer__btn primary__btn cart"
                                                type="submit">Update Cart</button></li>
                                        <!-- <li><a class="cart__summary--footer__btn primary__btn checkout"
                                                href="<?php echo APP_URL; ?>/view/checkout.php">Check Out</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Display Benefits, Partners & New Products Section -->
    <?php
    include ROOT . '/includes/benefits.php';
    include ROOT . '/includes/partners.php';
    include ROOT . '/includes/new-products.php';
    ?>

</main>


<!-- Include Footer -->
<?php
mysqli_close($conn);
include ROOT . '/includes/footer.php';
?>

<script>
// Call updateCartTotals on page load
document.addEventListener('DOMContentLoaded', updateCartTotals);

// Function to calculate total based on quantity change
function updateCartTotals() {
    let cartItems = document.querySelectorAll('.cart__table--body__items');
    let subtotal = 0;

    cartItems.forEach(item => {
        let quantityInput = item.querySelector('.quantity__number');
        let price = parseFloat(item.querySelector('.cart__price').textContent);
        let quantity = parseInt(quantityInput.value);

        // Ensure the quantity is never negative
        if (isNaN(quantity) || quantity < 1) {
            quantity = 1;
            quantityInput.value = 1;
        }

        // Calculate total for the current product
        let total = price * quantity;

        // Update the total for this item in the UI
        item.querySelector('.cart__price.end').textContent = total.toFixed(2);

        // Add to subtotal
        subtotal += total;
    });

    // Update the subtotal and grand total in the UI
    document.querySelector('.cart__summary--total__table .subtotal').textContent = '€' + subtotal.toFixed(2);
    document.querySelector('.cart__summary--total__table .grandtotal').textContent = '€' + subtotal.toFixed(
        2); // Assuming grand total is the same as subtotal for now
}

// Attach event listeners to quantity input fields for manual change
document.querySelectorAll('.quantity__number').forEach(input => {
    input.addEventListener('input', updateCartTotals);
});

// Attach event listeners to increment and decrement buttons
document.querySelectorAll('.quantity__value.increase').forEach(btn => {
    btn.addEventListener('click', function() {
        let input = this.parentElement.querySelector('.quantity__number');
        // input.value = parseInt(input.value) + 1;
        updateCartTotals();
    });
});

document.querySelectorAll('.quantity__value.decrease').forEach(btn => {
    btn.addEventListener('click', function() {
        let input = this.parentElement.querySelector('.quantity__number');
        // input.value = Math.max(1, parseInt(input.value) - 1); // Ensure value doesn't go below 1
        updateCartTotals();
    });
});
</script>

</body>

</html>