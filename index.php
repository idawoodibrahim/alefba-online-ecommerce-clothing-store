<?php
include ROOT . '/db/conn.php';

// Fetch products from the database
$sql = "SELECT * FROM product WHERE display = 'yes' LIMIT 10";
$result = $conn->query($sql);

$pageTitlePrefix = null;

include ROOT . '/includes/header.php';
include ROOT . '/includes/menu.php';
?>

<main class="main__content_wrapper">
    <!-- Start slider section -->
    <section class="hero__slider--section">
        <div class="hero__slider--inner hero__slider--activation swiper">
            <div class="hero__slider--wrapper swiper-wrapper">
                <div class="swiper-slide ">
                    <div class="hero__slider--items home1__slider--bg">
                        <div class="container-fluid">
                            <div class="hero__slider--items__inner">
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <div class="slider__content text-center">
                                            <p class="slider__content--desc desc1 mb-15"><img
                                                    class="slider__text--shape__icon"
                                                    src="<?php echo APP_URL; ?>/assets/img/icon/text-shape-icon.png"
                                                    alt="text-shape-icon">
                                                Awesome Benefits</p>
                                            <h2 class="slider__content--maintitle h1">FREE SHIPPING ON ORDERS
                                                <br>
                                                OVER €90
                                            </h2>
                                            <a class="slider__btn primary__btn"
                                                href="<?php echo APP_URL; ?>/view/shop">Shop Now
                                                <svg class="primary__btn--arrow__icon"
                                                    xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2"
                                                    viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="hero__slider--items home1__slider--bg two">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="hero__slider--items__inner">
                                        <div class="slider__content text-center">
                                            <p class="slider__content--desc desc1 mb-15"><img
                                                    class="slider__text--shape__icon"
                                                    src="<?php echo APP_URL; ?>/assets/img/icon/text-shape-icon.png"
                                                    alt="text-shape-icon">
                                                Awesome Benefits</p>
                                            <h2 class="slider__content--maintitle h1">FREE RETURNS AND <br>
                                                EXCHANGES</h2>
                                            <a class="primary__btn slider__btn"
                                                href="<?php echo APP_URL; ?>/view/shop">Shop Now
                                                <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="hero__slider--items home1__slider--bg three">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="hero__slider--items__inner">
                                        <div class="slider__content text-center">
                                            <p class="slider__content--desc desc1 mb-15"><img
                                                    class="slider__text--shape__icon"
                                                    src="<?php echo APP_URL; ?>/assets/img/icon/text-shape-icon.png"
                                                    alt="text-shape-icon">
                                                New Collection</p>
                                            <h2 class="slider__content--maintitle h1">The Great Fashion <br>
                                                Collection 2024</h2>
                                            <p class="slider__content--desc desc2 d-sm-2-none mb-40">Up To 40% Off
                                                Final Sale Items. <br>
                                                Caught in the Moment!</p>
                                            <a class="primary__btn slider__btn"
                                                href="<?php echo APP_URL; ?>/view/shop">Show Collection
                                                <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg"
                                                    width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                    <path
                                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper__nav--btn swiper-button-next"></div>
            <div class="swiper__nav--btn swiper-button-prev"></div>
        </div>
    </section>
    <!-- End slider section -->

    <!-- Start product section -->
    <section class="product__section section--padding-extra" id="products">
        <div class="container-fluid">
            <div class="section__heading text-center mb-35">
                <h2 class="section__heading--maintitle">Our Products</h2>
            </div>
            <!-- <ul class="product__tab--one product__tab--primary__btn d-flex justify-content-center mb-50">
                <li class="product__tab--primary__btn__list active" data-toggle="tab" data-target="#featured">
                    Featured </li>
                <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#trending">Trending
                </li>
                <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#newarrival">New Arrival
                </li>
            </ul> -->
            <div class="tab_content">
                <div id="featured" class="tab_pane active show">
                    <div class="product__section--inner">
                        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                            <?php
                            while ($row = $result->fetch_assoc()):
                                $in_wishlist = $in_cart = false;
                                if ($USER_LOGGED_IN) {
                                    // Check if the product is in the user's wishlist
                                    $wishlist_query = "SELECT * FROM wishlist WHERE user_id = $USER_ID AND product_id = " . $row['id'];
                                    $wishlist_result = $conn->query($wishlist_query);

                                    $in_wishlist = $wishlist_result->num_rows > 0; // Boolean: true if the product is in the wishlist, otherwise false

                                    // Check if the product is in the user's cart
                                    $cart_query = "SELECT * FROM cart WHERE user_id = $USER_ID AND product_id = " . $row['id'];
                                    $cart_result = $conn->query($cart_query);

                                    $in_cart = $cart_result->num_rows > 0; // Boolean: true if the product is in the cart, otherwise false
                                }
                            ?>

                            <div class="col mb-30">
                                <div class="product__items ">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link"
                                            href="<?php echo APP_URL; ?>/view/product-details.php">
                                            <img class="product__items--img product__primary--img"
                                                src="<?php echo APP_URL . $row['product_primary_img']; ?>"
                                                alt="product-img">
                                            <img class="product__items--img product__secondary--img"
                                                src="<?php echo APP_URL . $row['product_secondary_img']; ?>"
                                                alt="product-img">
                                        </a>
                                        <div class="product__badge">
                                            <span class="product__badge--items sale"><?php echo $row['badge']; ?></span>
                                        </div>
                                    </div>
                                    <div class="product__items--content">
                                        <span
                                            class="product__items--content__subtitle"><?php echo $row['tags']; ?></span>
                                        <h3 class="product__items--content__title h4">
                                            <a
                                                href="<?php echo APP_URL; ?>/view/product-details.php"><?php echo $row['name']; ?></a>
                                        </h3>
                                        <div class="product__items--price">
                                            <span class="current__price">€<?php echo $row['sale_price']; ?></span>
                                            <span class="price__divided"></span>
                                            <span class="old__price">€<?php echo $row['original_price']; ?></span>
                                        </div>
                                        <ul class="rating product__rating d-flex">
                                            <!-- Rating stars -->
                                            <?php for ($i = 0; $i < 5; $i++): ?>
                                            <li class="rating__list">
                                                <span class="rating__list--icon">
                                                    <svg class="rating__list--icon__svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="14.105"
                                                        height="14.732" viewBox="0 0 10.105 9.732">
                                                        <path data-name="star - Copy"
                                                            d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z"
                                                            transform="translate(0 -0.018)" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </li>
                                            <?php endfor; ?>
                                        </ul>

                                        <ul class="product__items--action d-flex">
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn add__to--cart"
                                                    href="javascript:void(0)"
                                                    onclick="manageCart(<?php echo $row['id']; ?>, 'add', this)"
                                                    style="background-color: <?php echo $in_cart ? 'red' : ''; ?>; color: <?php echo $in_cart ? 'white' : ''; ?>"
                                                    <?php echo $in_cart ? 'disabled' : ''; ?>>
                                                    <span
                                                        class="add__to--cart__text"><?php echo $in_cart ? 'Already Added' : 'Add to Cart'; ?></span>
                                                </a>
                                            </li>
                                            <li class="product__items--action__list">
                                                <a class="product__items--action__btn wishlist-btn"
                                                    href="javascript:void(0)"
                                                    onclick="toggleWishlist(<?php echo $row['id']; ?>, this)">
                                                    <svg class="product__items--action__btn--svg"
                                                        xmlns="http://www.w3.org/2000/svg" width="25.51" height="23.443"
                                                        viewBox="0 0 512 512" style="fill: <?php echo $in_wishlist ? 'red' : 'none'; ?>;
                                                        color: <?php echo $in_wishlist ? 'red' : '#B1B1B1FF'; ?>;">
                                                        <path
                                                            d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                                            fill="" stroke="currentColor" stroke-linecap="round"
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
                        <div class="d-flex justify-content-center mt-5">
                            <a class="primary__btn" href="<?php echo APP_URL; ?>/view/shop">View All
                                <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2"
                                    height="12.2" viewBox="0 0 6.2 6.2">
                                    <path
                                        d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z"
                                        transform="translate(-4 -4)" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product section -->
</main>

<!-- Include Footer -->
<?php
mysqli_close($conn);
include ROOT . '/includes/footer.php';
?>

<script>
</script>

</body>

</html>