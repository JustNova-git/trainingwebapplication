<?php
include "include/connect.php";

use app\controllers\mainPageController;


?>

<body id="page-top">
    <div class="wrapper">
        <div class="wrapper__header">

            <?php include "modal_reg.php" ?>
            <?php include "modal_aut.php" ?>

            <?php include "navbar.php" ?>
            <?php include "header.php" ?>
        </div>
    </div>

    <section class="main-demos" id="features">

        <div class="row">
            <div class="">
                <div class="section_title">
                    <h2>Технологии</h2>
                </div>
            </div>
            <div class="">
                <div class="feature-item">
                    <div class="feature_icon">
                        <i></i>
                    </div>
                    <h4>HTML 5</h4>
                </div>
            </div>
            <div class="">
                <div class="feature-item">
                    <div class="feature_icon">
                        <i></i>
                    </div>
                    <h4>CSS 3</h4>
                </div>
            </div>

        </div>
        </div>
    </section>

    <?php
    include 'footer.php';
    ?>
    </div>



</body>

</html>