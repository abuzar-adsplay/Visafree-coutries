<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>

<body>
    <?php
    echo view('header');
    ?>
    <div class="container">
        <div class="row mt-5">
            <p class="top-intro">Things to do in</p>
            <h1 class="main-heading"><?= $countryName ?></h1>
            <p class="description">From double-decker buses to pubs and musicals, the British capital has something special for all.</p>
        </div>

        <div class="row mt-5 ">
            <?php
            for ($a = 0; $a <= 5; $a++) {
            ?>
                <div class="col-lg-2 mb-4">
                    <a href="http://visafree.local/country-details/attraction/<?php echo $countryName ?>">
                        <div class="card">
                            <div class="card-img-container">
                                <img src="<?php echo base_url('img/g1.jpg'); ?>" class="card-img-top img-fluid zoomable" alt="">
                            </div>

                        </div>
                        <p class="category-title">Travelers recommend</p>
                    </a>
                </div>

            <?php
            }
            ?>
        </div>
        <div class="row mt-5 mb-5">
            <h3 class="sub-heading">Top Activities in <?= $countryName ?></h3>
            <?php
            for ($a = 0; $a <= 3; $a++) {
            ?>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="<?php echo base_url('img/g1.jpg'); ?>" class="card-img-top img-fluid zoomable" alt="">
                        </div>
                        <div class="card-body tour-details">
                            <p class="activity-type">private tour</p>
                            <h6>From London: Harry Potter Warner Bros Studio Tour</h6>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="row mt-5 mb-5">
            <h3 class="sub-heading">Top sights in <?= $countryName ?></h3>
            <?php
            for ($a = 0; $a <= 3; $a++) {
            ?>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="<?php echo base_url('img/g1.jpg'); ?>" class="card-img-top img-fluid zoomable" alt="">
                            <div class="image-text">
                                <p>the london dungeon</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="activity-type">private tour</p>
                            <h6>From London: Harry Potter Warner Bros Studio Tour</h6>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="row mt-5 mb-5">
            <h3 class="sub-heading">For you in <?= $countryName ?></h3>
            <?php
            for ($a = 0; $a <= 3; $a++) {
            ?>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="<?php echo base_url('img/g1.jpg'); ?>" class="card-img-top img-fluid zoomable" alt="">
                        </div>
                        <div class="card-body">
                            <p class="activity-type">private tour</p>
                            <h6>From London: Harry Potter Warner Bros Studio Tour</h6>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>


    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <script src="<?php echo base_url() . "js/script.js" ?>"></script>
    <script>
        $(document).ready(function() {
            <?php
            for ($a = 0; $a <= 3; $a++) {
            ?>
                $("#rating<?= $a ?>").rateYo({
                    rating: 4,
                    starWidth: "20px",
                    readOnly: false
                });
            <?php
            }
            ?>
        });
    </script>
</body>

</html>