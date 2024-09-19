<!-- Start header area -->
<header class="header__section">
    <div class="header__topbar bg__secondary">
        <div class="container-fluid">
            <div class="header__topbar--inner d-flex align-items-center justify-content-center">
                <div class="header__shipping">
                    <ul class="header__shipping--wrapper d-flex align-items-center justify-content-center">
                        <li class="header__shipping--text text-white d-sm-2-none">
                            FREE SHIPPING ON ORDERS OVER €90</li>
                        <li class="header__shipping--text text-white">FREE RETURNS & EXCHANGES</li>

                        <!-- <li class="header__shipping--text text-white d-sm-2-none"><img
                                class="header__shipping--text__icon" src="<?php echo APP_URL; ?>/assets/img/icon/email.png"
                                alt="email-icon">
                            <a class="header__shipping--text__link" href="mailto:info@alefba.fr">info@alefba.fr</a>
                        </li> -->
                    </ul>
                </div>
                <!-- <div class="language__currency d-none d-lg-block">
                    <ul class="d-flex align-items-center">
                        <li class="language__currency--list">
                            <a class="language__switcher text-white" href="#">
                                <img class="language__switcher--icon__img" src="<?php echo APP_URL; ?>/assets/img/icon/language-icon.png" alt="currency">
                                <span>English</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                                    <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                </svg>
                            </a>
                            <div class="dropdown__language">
                                <ul>
                                    <li class="language__items"><a class="language__text" href="#">France</a></li>
                                    <li class="language__items"><a class="language__text" href="#">Russia</a></li>
                                    <li class="language__items"><a class="language__text" href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="language__currency--list">
                            <a class="account__currency--link text-white" href="#">
                                <img src="<?php echo APP_URL; ?>/assets/img/icon/usd-icon.png" alt="currency">
                                <span>$ US Dollar</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05" viewBox="0 0 9.797 6.05">
                                    <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z" transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                </svg>
                            </a>
                            <div class="dropdown__currency">
                                <ul>
                                    <li class="currency__items"><a class="currency__text" href="#">CAD</a></li>
                                    <li class="currency__items"><a class="currency__text" href="#">CNY</a></li>
                                    <li class="currency__items"><a class="currency__text" href="#">EUR</a></li>
                                    <li class="currency__items"><a class="currency__text" href="#">GBP</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <div class="main__header header__sticky">
        <div class="container-fluid">
            <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                        </svg>
                        <span class="visually-hidden">Menu Open</span>
                    </a>
                </div>
                <div class="main__logo">
                    <h1 class="main__logo--title"><a class="main__logo--link" href="<?php echo APP_URL; ?>"><img
                                class="main__logo--img" src="<?php echo APP_URL; ?>/assets/img/logo/nav-logo.png"
                                alt="logo-img" width="75" height="60"></a></h1>
                </div>

                <!-- SEARCH BOX  -->
                <div class="header__search--widget header__sticky--none d-none d-lg-block">
                    <form class="d-flex header__search--form" action="#">
                        <div class="header__select--categories select">
                            <select class="header__select--inner">
                                <option selected value="1">All Categories</option>
                                <option value="2">Men</option>
                                <option value="3">Women</option>
                                <option value="4">Children</option>
                            </select>
                        </div>

                        <div class="header__search--box">
                            <label>
                                <input class="header__search--input" placeholder="Keyword here..." type="text">
                            </label>
                            <button class="header__search--button bg__secondary text-white" type="submit"
                                aria-label="search button">
                                <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg"
                                    width="27.51" height="26.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32">
                                    </path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="header__account header__sticky--none">
                    <ul class="d-flex">
                        <li class="header__account--items">
                            <a class="header__account--btn" href="<?php echo APP_URL; ?>/view/my-account.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                </svg>
                                <span class="header__account--btn__text">My Account</span>
                            </a>
                        </li>
                        <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn" href="<?php echo APP_URL; ?>/view/wishlist.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.51" height="23.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32"></path>
                                </svg>
                                <span class="header__account--btn__text">Wish List</span>
                                <!-- <span class="items__count wishlist">02</span> -->
                            </a>
                        </li>
                        <li class="header__account--items">
                            <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                    viewBox="0 0 48 48">
                                    <title />
                                    <path
                                        d="M12.11,44H35.89A4,4,0,0,0,40,39.6l-2.26-22A4.07,4.07,0,0,0,33.63,14H32V12a8,8,0,0,0-16,0v2H14.37a4.07,4.07,0,0,0-4.09,3.6L8,39.6A4,4,0,0,0,12.11,44ZM18,12a6,6,0,0,1,12,0v2H18Zm-5.73,5.81A2.07,2.07,0,0,1,14.37,16H16v2.89a1.5,1.5,0,1,0,2,0V16H30v2.89a1.5,1.5,0,1,0,2,0V16h1.63a2.07,2.07,0,0,1,2.1,1.81l2.26,22a1.89,1.89,0,0,1-.5,1.49,2.16,2.16,0,0,1-1.6.7H12.11a2.16,2.16,0,0,1-1.6-.7A1.93,1.93,0,0,1,10,40H34a1,1,0,0,0,0-2H10.2Z"
                                        fill="currentColor" />
                                </svg>
                                <span class="header__account--btn__text">My cart</span>
                                <!-- <span class="items__count">02</span> -->
                            </a>
                        </li>
                        <!-- <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn" href="<?php echo APP_URL; ?>/session/logout.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.51" height="23.443"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 29.5 42 C 32.519774 42 35 39.519774 35 36.5 A 1.50015 1.50015 0 1 0 32 36.5 C 32 37.898226 30.898226 39 29.5 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 11.5 C 9 10.101774 10.101774 9 11.5 9 L 29.5 9 C 30.898226 9 32 10.101774 32 11.5 A 1.50015 1.50015 0 1 0 35 11.5 C 35 8.4802259 32.519774 6 29.5 6 L 11.5 6 z M 33.484375 15.484375 A 1.50015 1.50015 0 0 0 32.439453 18.060547 L 36.878906 22.5 L 15.5 22.5 A 1.50015 1.50015 0 1 0 15.5 25.5 L 36.878906 25.5 L 32.439453 29.939453 A 1.50015 1.50015 0 1 0 34.560547 32.060547 L 41.560547 25.060547 A 1.50015 1.50015 0 0 0 41.560547 22.939453 L 34.560547 15.939453 A 1.50015 1.50015 0 0 0 33.484375 15.484375 z"
                                        fill="currentColor" stroke="none">
                                    </path>
                                </svg>
                                <span class="header__account--btn__text">logout</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <div class="header__menu d-none header__sticky--block d-lg-block">
                    <nav class="header__menu--navigation">
                        <ul class="d-flex">
                            <li class="header__menu--items style2">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop/men">Men
                                </a>
                            </li>
                            <li class="header__menu--items style2">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop/women">Women
                                </a>
                            </li>
                            <li class="header__menu--items style2">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop/children">Children
                                </a>
                            </li>
                            <li class="header__menu--items style2">
                                <a class="header__menu--link " href="#">Novelty</a>
                            </li>
                            <li class="header__menu--items style2">
                                <a class="header__menu--link" href="
                                    <?php echo APP_URL; ?>/view/collaboration.php">Collaboration
                                </a>
                            </li>
                            <li class="header__menu--items style2 d-none d-xl-block">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop">Marketplace
                                    <!-- <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                            transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                    </svg> -->
                                </a>
                                <!-- <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="<?php echo APP_URL; ?>/view/shop/men"
                                            class="header__sub--menu__link">Men</a></li>
                                    <li class="header__sub--menu__items"><a href="<?php echo APP_URL; ?>/view/shop/women"
                                            class="header__sub--menu__link">Women</a></li>
                                    <li class="header__sub--menu__items"><a
                                            href="<?php echo APP_URL; ?>/view/shop/children"
                                            class="header__sub--menu__link">Children</a></li>
                                </ul> -->
                            </li>
                            <li class="header__menu--items style2">
                                <a class="header__menu--link " href="<?php echo APP_URL; ?>/view/contact.php">Promos
                                </a>
                            </li>
                            <!-- <li class="header__menu--items style2">
                                <a class="header__menu--link " href="<?php echo APP_URL; ?>/view/contact.php">Contact </a>
                            </li> -->

                        </ul>
                    </nav>
                </div>
                <div class="header__account header__account2 header__sticky--block">
                    <ul class="d-flex">
                        <li
                            class="header__account--items header__account2--items  header__account--search__items d-none d-lg-block">
                            <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg"
                                    width="26.51" height="23.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448" />
                                </svg>
                                <span class="visually-hidden">Search</span>
                            </a>
                        </li>
                        <li class="header__account--items header__account2--items">
                            <a class="header__account--btn" href="<?php echo APP_URL; ?>/view/my-account.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32" />
                                    <path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                </svg>
                                <span class="visually-hidden">My Account</span>
                            </a>
                        </li>
                        <li class="header__account--items header__account2--items d-none d-lg-block">
                            <a class="header__account--btn" href="<?php echo APP_URL; ?>/view/wishlist.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.51" height="23.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="32"></path>
                                </svg>
                                <span class="visually-hidden">Wish list</span>
                                <!-- <span class="items__count  wishlist style2">02</span> -->
                            </a>
                        </li>
                        <li class="header__account--items header__account2--items">
                            <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                    viewBox="0 0 48 48">
                                    <title />
                                    <path
                                        d="M12.11,44H35.89A4,4,0,0,0,40,39.6l-2.26-22A4.07,4.07,0,0,0,33.63,14H32V12a8,8,0,0,0-16,0v2H14.37a4.07,4.07,0,0,0-4.09,3.6L8,39.6A4,4,0,0,0,12.11,44ZM18,12a6,6,0,0,1,12,0v2H18Zm-5.73,5.81A2.07,2.07,0,0,1,14.37,16H16v2.89a1.5,1.5,0,1,0,2,0V16H30v2.89a1.5,1.5,0,1,0,2,0V16h1.63a2.07,2.07,0,0,1,2.1,1.81l2.26,22a1.89,1.89,0,0,1-.5,1.49,2.16,2.16,0,0,1-1.6.7H12.11a2.16,2.16,0,0,1-1.6-.7A1.93,1.93,0,0,1,10,40H34a1,1,0,0,0,0-2H10.2Z"
                                        fill="currentColor" />
                                </svg>
                                <span class="visually-hidden">My cart</span>
                                <!-- <span class="items__count style2">02</span> -->
                            </a>
                        </li>
                        <!-- <li class="header__account--items header__account2--items">
                            <a class="header__account--btn" href="<?php echo APP_URL; ?>/view/logout.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.51" height="23.443"
                                    viewBox="0 0 48 48">
                                    <path
                                        d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 29.5 42 C 32.519774 42 35 39.519774 35 36.5 A 1.50015 1.50015 0 1 0 32 36.5 C 32 37.898226 30.898226 39 29.5 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 11.5 C 9 10.101774 10.101774 9 11.5 9 L 29.5 9 C 30.898226 9 32 10.101774 32 11.5 A 1.50015 1.50015 0 1 0 35 11.5 C 35 8.4802259 32.519774 6 29.5 6 L 11.5 6 z M 33.484375 15.484375 A 1.50015 1.50015 0 0 0 32.439453 18.060547 L 36.878906 22.5 L 15.5 22.5 A 1.50015 1.50015 0 1 0 15.5 25.5 L 36.878906 25.5 L 32.439453 29.939453 A 1.50015 1.50015 0 1 0 34.560547 32.060547 L 41.560547 25.060547 A 1.50015 1.50015 0 0 0 41.560547 22.939453 L 34.560547 15.939453 A 1.50015 1.50015 0 0 0 33.484375 15.484375 z"
                                        fill="currentColor" stroke="none">
                                    </path>
                                </svg>
                                <span class="visually-hidden">Logout</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container-fluid">
            <div
                class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                <div class="header__menu">
                    <nav class="header__menu--navigation">
                        <ul class="d-flex">
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop/men">Men</a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop/women">Women</a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link"
                                    href="<?php echo APP_URL; ?>/view/shop/children">Children</a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="#">Novelty</a>
                            </li>
                            <!-- <li class="header__menu--items d-none d-xl-block">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop.php">Categories <svg
                                        class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12"
                                        height="7.41" viewBox="0 0 12 7.41">
                                        <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                            transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                    </svg>
                                </a>
                                <ul class="header__sub--menu">
                                    <li class="header__sub--menu__items"><a href="<?php echo APP_URL; ?>/view/shop/men"
                                            class="header__sub--menu__link">Men</a></li>
                                    <li class="header__sub--menu__items"><a href="<?php echo APP_URL; ?>/view/shop/women"
                                            class="header__sub--menu__link">Women</a></li>
                                    <li class="header__sub--menu__items"><a
                                            href="<?php echo APP_URL; ?>/view/shop/children"
                                            class="header__sub--menu__link">Children</a></li>
                                </ul>
                            </li> -->
                            <li class="header__menu--items">
                                <a class="header__menu--link"
                                    href="<?php echo APP_URL; ?>/view/collaboration.php">Collaboration
                                </a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/shop">Marketplace
                                </a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="<?php echo APP_URL; ?>/view/contact.php">Promos </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <p class="header__discount--text"><img class="header__discount--icon__img"
                        src="<?php echo APP_URL; ?>/assets/img/icon/lamp.png" alt="lamp-img"> Special up to 40% Off all
                    item</p>
            </div>
        </div>
    </div>

    <!-- Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link" href="<?php echo APP_URL; ?>">
                    <img src="<?php echo APP_URL; ?>/assets/img/logo/nav-logo.png" alt="Grocee Logo" width="75"
                        height="60">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="<?php echo APP_URL; ?>/view/shop/men">Men</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="<?php echo APP_URL; ?>/view/shop/women">Women</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="<?php echo APP_URL; ?>/view/shop/children">Children</a>
                    </li>
                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item" href="#">Novelty</a>
                    </li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="<?php echo APP_URL; ?>/view/collaboration.php">Collaboration</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="<?php echo APP_URL; ?>/view/shop">Marketplace</a></li>
                    <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="<?php echo APP_URL; ?>/view/contact.php">Promos</a></li>
                    <!-- <li class="offcanvas__menu_li"><a class="offcanvas__menu_item"
                            href="<?php echo APP_URL; ?>/view/contact.php">Contact</a> -->
                    </li>
                </ul>
                <div class="offcanvas__account--items">
                    <a class="offcanvas__account--items__btn d-flex align-items-center"
                        href="<?php echo APP_URL; ?>/session/login.php">
                        <span class="offcanvas__account--items__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.51" height="19.443" viewBox="0 0 512 512">
                                <path
                                    d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="32" />
                                <path
                                    d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                    fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            </svg>
                        </span>
                        <span class="offcanvas__account--items__label">Login</span>
                    </a>
                </div>
                <!-- <div class="language__currency">
                    <ul class="d-flex align-items-center">
                        <li class="language__currency--list">
                            <a class="offcanvas__language--switcher" href="#">
                                <img class="language__switcher--icon__img"
                                    src="<?php echo APP_URL; ?>/assets/img/icon/language-icon.png" alt="currency">
                                <span>English</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05"
                                    viewBox="0 0 9.797 6.05">
                                    <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                        transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                </svg>
                            </a>
                            <div class="offcanvas__dropdown--language">
                                <ul>
                                    <li class="language__items"><a class="language__text" href="#">France</a></li>
                                    <li class="language__items"><a class="language__text" href="#">Russia</a></li>
                                    <li class="language__items"><a class="language__text" href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="language__currency--list">
                            <a class="offcanvas__account--currency__menu" href="#">
                                <img src="<?php echo APP_URL; ?>/assets/img/icon/usd-icon.png" alt="currency">
                                <span>$ US Dollar</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.797" height="9.05"
                                    viewBox="0 0 9.797 6.05">
                                    <path d="M14.646,8.59,10.9,12.329,7.151,8.59,6,9.741l4.9,4.9,4.9-4.9Z"
                                        transform="translate(-6 -8.59)" fill="currentColor" opacity="0.7" />
                                </svg>
                            </a>
                            <div class="offcanvas__account--currency__submenu">
                                <ul>
                                    <li class="currency__items"><a class="currency__text" href="#">CAD</a></li>
                                    <li class="currency__items"><a class="currency__text" href="#">CNY</a></li>
                                    <li class="currency__items"><a class="currency__text" href="#">EUR</a></li>
                                    <li class="currency__items"><a class="currency__text" href="#">GBP</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->

    <!-- Start Offcanvas stikcy toolbar -->
    <div class="offcanvas__stikcy--toolbar">
        <ul class="d-flex justify-content-between">
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="<?php echo APP_URL; ?>">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="21.51" height="21.443"
                            viewBox="0 0 22 17">
                            <path fill="currentColor"
                                d="M20.9141 7.93359c.1406.11719.2109.26953.2109.45703 0 .14063-.0469.25782-.1406.35157l-.3516.42187c-.1172.14063-.2578.21094-.4219.21094-.1406 0-.2578-.04688-.3515-.14062l-.9844-.77344V15c0 .3047-.1172.5625-.3516.7734-.2109.2344-.4687.3516-.7734.3516h-4.5c-.3047 0-.5742-.1172-.8086-.3516-.2109-.2109-.3164-.4687-.3164-.7734v-3.6562h-2.25V15c0 .3047-.11719.5625-.35156.7734-.21094.2344-.46875.3516-.77344.3516h-4.5c-.30469 0-.57422-.1172-.80859-.3516-.21094-.2109-.31641-.4687-.31641-.7734V8.46094l-.94922.77344c-.11719.09374-.24609.14062-.38672.14062-.16406 0-.30468-.07031-.42187-.21094l-.35157-.42187C.921875 8.625.875 8.50781.875 8.39062c0-.1875.070312-.33984.21094-.45703L9.73438.832031C10.1094.527344 10.5312.375 11 .375s.8906.152344 1.2656.457031l8.6485 7.101559zm-3.7266 6.50391V7.05469L11 1.99219l-6.1875 5.0625v7.38281h3.375v-3.6563c0-.3046.10547-.5624.31641-.7734.23437-.23436.5039-.35155.80859-.35155h3.375c.3047 0 .5625.11719.7734.35155.2344.211.3516.4688.3516.7734v3.6563h3.375z">
                            </path>
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Home</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="<?php echo APP_URL; ?>/view/shop">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18.51" height="17.443"
                            viewBox="0 0 448 512">
                            <path
                                d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z">
                            </path>
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list ">
                <a class="offcanvas__stikcy--toolbar__btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512">
                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                                stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                stroke-width="32" d="M338.29 338.29L448 448" />
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Search</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.51" height="15.443"
                            viewBox="0 0 18.51 15.443">
                            <path
                                d="M79.963,138.379l-13.358,0-.56-1.927a.871.871,0,0,0-.6-.592l-1.961-.529a.91.91,0,0,0-.226-.03.864.864,0,0,0-.226,1.7l1.491.4,3.026,10.919a1.277,1.277,0,1,0,1.844,1.144.358.358,0,0,0,0-.049h6.163c0,.017,0,.034,0,.049a1.277,1.277,0,1,0,1.434-1.267c-1.531-.247-7.783-.55-7.783-.55l-.205-.8h7.8a.9.9,0,0,0,.863-.651l1.688-5.943h.62a.936.936,0,1,0,0-1.872Zm-9.934,6.474H68.568c-.04,0-.1.008-.125-.085-.034-.118-.082-.283-.082-.283l-1.146-4.037a.061.061,0,0,1,.011-.057.064.064,0,0,1,.053-.025h1.777a.064.064,0,0,1,.063.051l.969,4.34,0,.013a.058.058,0,0,1,0,.019A.063.063,0,0,1,70.03,144.853Zm3.731-4.41-.789,4.359a.066.066,0,0,1-.063.051h-1.1a.064.064,0,0,1-.063-.051l-.789-4.357a.064.064,0,0,1,.013-.055.07.07,0,0,1,.051-.025H73.7a.06.06,0,0,1,.051.025A.064.064,0,0,1,73.76,140.443Zm3.737,0L76.26,144.8a.068.068,0,0,1-.063.049H74.684a.063.063,0,0,1-.051-.025.064.064,0,0,1-.013-.055l.973-4.357a.066.066,0,0,1,.063-.051h1.777a.071.071,0,0,1,.053.025A.076.076,0,0,1,77.5,140.448Z"
                                transform="translate(-62.393 -135.3)" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Cart</span>
                    <!-- <span class="items__count">3</span> -->
                </a>
            </li>
            <!-- <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="<?php echo APP_URL; ?>/view/wishlist.php">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.541" height="15.557"
                            viewBox="0 0 18.541 15.557">
                            <path
                                d="M71.775,135.51a5.153,5.153,0,0,1,1.267-1.524,4.986,4.986,0,0,1,6.584.358,4.728,4.728,0,0,1,1.174,4.914,10.458,10.458,0,0,1-2.132,3.808,22.591,22.591,0,0,1-5.4,4.558c-.445.282-.9.549-1.356.812a.306.306,0,0,1-.254.013,25.491,25.491,0,0,1-6.279-4.8,11.648,11.648,0,0,1-2.52-4.009,4.957,4.957,0,0,1,.028-3.787,4.629,4.629,0,0,1,3.744-2.863,4.782,4.782,0,0,1,5.086,2.447c.013.019.025.034.057.076Z"
                                transform="translate(-62.498 -132.915)" fill="currentColor" />
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                    <span class="items__count">3</span>
                </a>
            </li> -->
        </ul>
    </div>
    <!-- End Offcanvas stikcy toolbar -->

    <!-- Start offCanvas minicart -->
    <div class="offCanvas__minicart">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h2 class="minicart__title h3"> Shopping Cart</h2>
                <button class="minicart__close--btn" aria-label="minicart close button" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                    </svg>
                </button>
            </div>
            <p class="minicart__header--desc">Clothing and fashion products are limited</p>
        </div>
        <div class="minicart__product">
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="<?php echo APP_URL; ?>/view/product-details.php"><img
                            src="<?php echo APP_URL; ?>/assets/img/product/product1.png" alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h3 class="minicart__subtitle h4"><a href="<?php echo APP_URL; ?>/view/product-details.php">Oversize
                            Cotton Dress</a></h3>
                    <span class="color__variant"><b>Color:</b> Beige</span>
                    <div class="minicart__price">
                        <span class="current__price">€125.00</span>
                        <span class="old__price">€140.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                value="Decrease Value">-</button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter />
                            </label>
                            <button type="button" class="quantity__value increase" value="Increase Value">+</button>
                        </div>
                        <button class="minicart__product--remove">Remove</button>
                    </div>
                </div>
            </div>
            <div class="minicart__product--items d-flex">
                <div class="minicart__thumb">
                    <a href="<?php echo APP_URL; ?>/view/product-details.php"><img
                            src="<?php echo APP_URL; ?>/assets/img/product/product2.png" alt="prduct-img"></a>
                </div>
                <div class="minicart__text">
                    <h3 class="minicart__subtitle h4"><a href="<?php echo APP_URL; ?>/view/product-details.php">Boxy
                            Denim
                            Jacket</a></h3>
                    <span class="color__variant"><b>Color:</b> Green</span>
                    <div class="minicart__price">
                        <span class="current__price">€115.00</span>
                        <span class="old__price">€130.00</span>
                    </div>
                    <div class="minicart__text--footer d-flex align-items-center">
                        <div class="quantity__box minicart__quantity">
                            <button type="button" class="quantity__value decrease" aria-label="quantity value"
                                value="Decrease Value">-</button>
                            <label>
                                <input type="number" class="quantity__number" value="1" data-counter />
                            </label>
                            <button type="button" class="quantity__value increase" aria-label="quantity value"
                                value="Increase Value">+</button>
                        </div>
                        <button class="minicart__product--remove">Remove</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="minicart__amount">
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Sub Total:</span>
                <span><b>€240.00</b></span>
            </div>
            <div class="minicart__amount_list d-flex justify-content-between">
                <span>Total:</span>
                <span><b>€240.00</b></span>
            </div>
        </div>
        <div class="minicart__conditions text-center">
            <input class="minicart__conditions--input" id="accept" type="checkbox">
            <label class="minicart__conditions--label" for="accept">I agree with the <a
                    class="minicart__conditions--link" href="<?php echo APP_URL; ?>/view/privacy-policy.php">Privacy and
                    Policy</a></label>
        </div>
        <div class="minicart__button d-flex justify-content-center">
            <a class="primary__btn minicart__button--link" href="cart.php">View cart</a>
            <a class="primary__btn minicart__button--link" href="<?php echo APP_URL; ?>/view/checkout.php">Checkout</a>
        </div>
    </div>
    <!-- End offCanvas minicart -->

    <!-- Start serch box area -->
    <div class="predictive__search--box ">
        <div class="predictive__search--box__inner">
            <h2 class="predictive__search--title">Search Products</h2>
            <form class="predictive__search--form" action="#">
                <label>
                    <input class="predictive__search--input" placeholder="Search Here" type="text">
                </label>
                <button class="predictive__search--button" aria-label="search button" type="submit"><svg
                        class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                        height="25.443" viewBox="0 0 512 512">
                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                            stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="32" d="M338.29 338.29L448 448" />
                    </svg> </button>
            </form>
        </div>
        <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                height="30.443" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="32" d="M368 368L144 144M368 144L144 368" />
            </svg>
        </button>
    </div>
    <!-- End serch box area -->

</header>
<!-- End header area -->