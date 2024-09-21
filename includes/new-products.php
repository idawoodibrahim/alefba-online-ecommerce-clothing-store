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
                                            <a class="product__items--action__btn add__to--cart" href="javascript:void(0)"
                                                onclick="manageCart(<?php echo $row['id']; ?>, 'add', this)"
                                                style="background-color: <?php echo $in_cart ? 'red' : ''; ?>; color: <?php echo $in_cart ? 'white' : ''; ?>"
                                                <?php echo $in_cart ? 'disabled' : ''; ?>>
                                                <span
                                                    class="add__to--cart__text"><?php echo $in_cart ? 'Already Added' : 'Add to Cart'; ?></span>
                                            </a>
                                        </li>
                                        <li class="product__items--action__list">
                                            <a class="product__items--action__btn wishlist-btn" href="javascript:void(0)"
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
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End new product section -->