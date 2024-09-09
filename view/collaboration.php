<?php

$pageTitlePrefix = "Collaboration";

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
                        <h1 class="breadcrumb__content--title text-white mb-25">Collaboration</h1>
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
                <h2 class="section__heading--maintitle">Collaboration with ALEFBA</h2>
            </div>
            <div class="text-center">
                <h3>Hi,</h3>
                <p>You wish to Collaborate with ALEFBA, express it clearly and openly, we will answer you soon. You can
                    make
                    your quote requests at: <span><a href="mailto:info@alefba.fr">info@alefba.fr</a></span>
                </p>
                <p> See You Soon<br /> <strong>ALEFBA TEAM</strong> </p>
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