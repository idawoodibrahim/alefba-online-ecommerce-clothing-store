<?php

$pageTitlePrefix = "Payment Methods";

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
                        <h1 class="breadcrumb__content--title text-white mb-25">Payment Methods</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start Message section -->
    <section class="team__section section--padding">
        <div class="container">
            <div class="section__heading text-center mb-50">
                <h2 class="section__heading--maintitle">Payment Methods We Accept</h2>
            </div>
            <div class="text-center">
                <p>Currently, we accept only COD (Cash on Delivery). We will soon implement the online for our
                    users. For more information, contact us at: <span><a
                            href="mailto:info@alefba.fr">info@alefba.fr</a></span>
                </p>
                <p> Regards<br /> <strong>ALEFBA TECH TEAM</strong> </p>
            </div>

            <div class="d-flex align-content-center justify-content-center text-center pt-5">
                <img class="display-block" src="<?php echo HOST; ?>/assets/img/other/payment-visa-card.png"
                    alt="visa-card">
            </div>
        </div>
    </section>
    <!-- End Message section -->

    <?php  ?>


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