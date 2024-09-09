<?php

$pageTitlePrefix = "Open a Store";

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
                        <h1 class="breadcrumb__content--title text-white mb-25">Open a Store</h1>
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
                <h2 class="section__heading--maintitle">Sell on Alefba</h2>
            </div>
            <div class="text-center">
                <h3>Hi,</h3>
                <p>Since our launch in 2023, We support small businesses around the world and provide them with an
                    online space to sell vintage and independent fashion with access to ALEFBA A customer base. Thank
                    you for your interest in selling on ALEFBA, We are not currently accepting applications. We will
                    soon share more details about the application process. Please stay tuned!</p>
                <p>
                    Regards, <br /> <strong>ALEFBA TECH TEAM</strong></p>
            </div>
        </div>
    </section>
    <!-- End Message section -->

    <?php  ?>


    <!-- Display Partners, Benefits & CTA Section -->
    <?php 
        include ROOT . '/includes/partners.php';
        include ROOT . '/includes/benefits.php';
        include ROOT . '/includes/any_questions.php';
    ?>

</main>

<!-- Include Footer -->
<?php include ROOT . '/includes/footer.php'; ?>

</body>

</html>