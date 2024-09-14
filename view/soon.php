<?php

// Get pageTitle from URL
$pTitle = $_GET['pTitle'] ?? null;

$pageTitlePrefix = $pTitle;

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
                        <h1 class="breadcrumb__content--title text-white mb-25"><?php echo $pTitle; ?></h1>
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
                <h2 class="section__heading--maintitle"><?php echo $pTitle; ?> is under construction</h2>
            </div>
            <div class="text-center">
                <h3>Hi,</h3>
                <p>We will implement this system into our store in the near future. Until then please stay tuned! You
                    can ask any queries at: <span><a href="mailto:info@alefba.fr">info@alefba.fr</a></span>
                </p>
                <p>
                    Regards, <br /> <strong>ALEFBA TECH TEAM</strong></p>
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