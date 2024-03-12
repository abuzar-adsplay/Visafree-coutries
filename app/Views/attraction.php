<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>

<body>

    <?php
    echo view('header');
    ?>
    <div class="container itinerary-container mt-3">
        <div class="itinerary-top">
            <p class="intro">Things to do in</p>
            <h1 class="country"><?= $countryName ?></h1>
            <p class="about">From double-decker buses to pubs and musicals, the British capital has something special for all.</p>
        </div>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <div class="card mb-3">
                <div class="row">
                    <div class="col-lg-3 bg-danger">
                        <div class="card-img">
                            <img src="<?= base_url('img/caption.png'); ?>" alt="Tour Image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card-body">
                            <h3 class="card-title">A Beautiful 6 Day Getaway to London & Paris</h3>
                            <div class="rating">
                                <svg class="UctUV d H0 hzzSG" viewBox="0 0 128 24" width="68" height="12" aria-label="4.5 of 5 bubbles">
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="" fill="#00aa6c"></path>
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(26 0)" fill="#00aa6c"></path>
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(52 0)" fill="#00aa6c"></path>
                                    <path d="M 12 0C5.388 0 0 5.388 0 12s5.388 12 12 12 12-5.38 12-12c0-6.612-5.38-12-12-12z" transform="translate(78 0)" fill="#00aa6c"></path>
                                    <path d="M 12 0C5.389 0 0 5.389 0 12c0 6.62 5.389 12 12 12 6.62 0 12-5.379 12-12S18.621 0 12 0zm0 2a9.984 9.984 0 0110 10 9.976 9.976 0 01-10 10z" transform="translate(104 0)" fill="#00aa6c"></path>
                                </svg>
                                <span class="rating-count">714</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p>Historical Tours</p>
                                    <p class="mt-2">6+ hours</p>
                                    <p>There’s so much to explore in rural England, but to get to all of its top attractions can be difficult without renting</p>
                                    <div class="cancel">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>Free cancellation</p>
                                    </div>
                                    <div class="recommend">
                                        <i class="fa-solid fa-check"></i>
                                        <p>Recommended by 95% of travellers</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="packages">
                                        <div class="packages-item mb-2">
                                            <p>from</p>
                                            <h5 class="card-price">₹5,407</h5>
                                            <p class="adult">per adult</p>
                                        </div>
                                        <div class="packages-btn">
                                            <button>Reserve</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>