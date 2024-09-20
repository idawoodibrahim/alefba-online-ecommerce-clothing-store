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
                                                <span class="cart__content--variant">SIZE: M</span>
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
                                        <a class="wishlist__cart--btn primary__btn" href="cart.php">Add To Cart</a>
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


    <!-- Start new product section -->
    <section class="product__section product__section--style3 section--padding">
        <div class="container product3__section--container">
            <div class="section__heading text-center mb-50">
                <h2 class="section__heading--maintitle">New Products</h2>
            </div>
            <div class="product__section--inner product__swiper--column4__activation swiper">
                <div class="swiper-wrapper">
                    <?php
                    // Re-run the SQL query
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()):
                    ?>
                    <div class="swiper-slide">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="<?php echo APP_URL; ?>/view/product-details.php">
                                    <img class="product__items--img product__primary--img"
                                        src="<?php echo APP_URL . $row['product_primary_img']; ?>" alt="product-img">
                                    <img class="product__items--img product__secondary--img"
                                        src="<?php echo APP_URL . $row['product_secondary_img']; ?>" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale"><?php echo $row['badge']; ?></span>
                                </div>
                            </div>
                            <div class="product__items--content">
                                <span class="product__items--content__subtitle"><?php echo $row['tags']; ?></span>
                                <h3 class="product__items--content__title h4"><a
                                        href="<?php echo APP_URL; ?>/view/product-details.php"><?php echo $row['name']; ?></a>
                                </h3>
                                <div class="product__items--price">
                                    <span class="current__price">€<?php echo $row['sale_price']; ?></span>
                                    <span class="price__divided"></span>
                                    <span class="old__price">€<?php echo $row['original_price']; ?></span>
                                </div>

                                <ul class="rating product__rating d-flex">
                                    <?php
                                        $total_stars = 5; // Set the number of stars you want to display
                                        for ($i = 0; $i < $total_stars; $i++) { ?>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg"
                                                width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy"
                                                    d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                    transform="translate(0 -0.018)" fill="currentColor">
                                                </path>
                                            </svg>
                                        </span>
                                    </li>
                                    <?php
                                        }
                                        ?>
                                </ul>

                                <ul class="product__items--action d-flex">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn add__to--cart" href="cart.php">
                                            <span class="add__to--cart__text"> Add to cart</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn"
                                            href="<?php echo APP_URL; ?>/view/wishlist.php">
                                            <svg class="product__items--action__btn--svg"
                                                xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="32"></path>
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>

                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End new product section -->

    <!-- Display Benefits Section -->
    <?php
    include ROOT . '/includes/benefits.php';
    ?>

</main>

<!-- Include Footer -->
<?php
mysqli_close($conn);
include ROOT . '/includes/footer.php';
?>

</body>

</html>