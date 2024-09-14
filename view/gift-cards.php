<?php

$pageTitlePrefix = "Gift Cards";

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
                        <h1 class="breadcrumb__content--title text-white mb-25">Gift Cards</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start Message section -->
    <section class="team__section section--padding">
        <div class="container">
            <div class="section__heading text-center">
                <h2 class="section__heading--maintitle">ALEFBA Gift Cards</h2>
            </div>
            <div class="text-center">
                <h3>Hi,</h3>
                <p>We will activate this system soon. Stay Tuned!
                </p>
                <p>
                    Regards, <br /> <strong>ALEFBA TEAM</strong></p>
            </div>
        </div>
        <!-- Start BRANDS TO FOLLOW section -->
        <div class="gift__card--section bg__white section--padding pb-2">
            <div class="container-fluid">
                <div class="row row-cols-1 mb-5">
                    <div class="col">
                        <div class="brand__logo--section__inner d-flex justify-content-center align-items-center">
                            <div class="gift__card--items">
                                <img class="gift__card--items__thumbnail--img display-block p-0"
                                    src="<?php echo APP_URL; ?>/assets/img/logo/gift-card-1.png" alt="Gift Card">
                            </div>
                            <div class="gift__card--items">
                                <img class="gift__card--items__thumbnail--img display-block p-0"
                                    src="<?php echo APP_URL; ?>/assets/img/logo/gift-card-2.png" alt="Gift Card">
                            </div>
                            <div class="gift__card--items">
                                <img class="gift__card--items__thumbnail--img display-block p-0"
                                    src="<?php echo APP_URL; ?>/assets/img/logo/gift-card-3.png" alt="Gift Card">
                            </div>
                            <div class="gift__card--items">
                                <img class="gift__card--items__thumbnail--img display-block p-0"
                                    src="<?php echo APP_URL; ?>/assets/img/logo/gift-card-4.png" alt="Gift Card">
                            </div>
                            <div class="gift__card--items">
                                <img class="gift__card--items__thumbnail--img display-block p-0"
                                    src="<?php echo APP_URL; ?>/assets/img/logo/gift-card-5.png" alt="Gift Card">
                            </div>
                            <div class="gift__card--items">
                                <img class="gift__card--items__thumbnail--img display-block p-0"
                                    src="<?php echo APP_URL; ?>/assets/img/logo/gift-card-6.png" alt="Gift Card">
                            </div>
                            <div class="gift__card--items">
                                <img class="gift__card--items__thumbnail--img display-block p-0"
                                    src="<?php echo APP_URL; ?>/assets/img/logo/gift-card-7.png" alt="Gift Card">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End BRANDS TO FOLLOW section -->
    </section>
    <!-- End Message section -->


    <!-- Display Benefits & CTA Section -->
    <?php 
        include ROOT . '/includes/benefits.php';
        include ROOT . '/includes/any_questions.php';
    ?>

</main>

<!-- Include Footer -->
<?php include ROOT . '/includes/footer.php'; ?>

</body>

</html>