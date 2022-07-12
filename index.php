<?php
require_once './partials/header.php';
require_once './data/data.php';
?>

<main class="banner">
    <div class="innervraper">
        <div class="bannertext">
            <h1> Immersive Experiences that deliver</h1>
        </div>
    </div>
</main>

<section class="aboutSection">
    <div class="innervraper">
        <img class="aboutImage" src="images/desktop/image-interactive.jpg" alt="PanZOculusem.jpg">
        <div class="abouttext">
            <h2>The leader interactive vr</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates repellendus animi tempore expedita rerum vitae ullam natus voluptas maiores aliquid? Nostrum soluta deleniti laboriosam et aliquid ab provident! Nisi, itaque!</p>
        </div>
    </div>
</section>

<section class="portfolioSection">
    <div class="innervraper">
        <div class="portfoliotitle">
            <h2>Our Creations</h2>
            <button aria-label="Click to see all posts">SEE ALL</button>
        </div>
        <div class="portfolioGallery">
            <?php for ($i = 0; $i < count($images); $i++) { ?>
            <div>
                <img 
                src="<?php echo $images[$i]['link']; ?>"
                alt="<?php echo $images [$i]['title']; ?>"
                >
                <h3> <?php echo $images[$i]['title']; ?> </h3>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php
require_once './partials/footer.php'
?>