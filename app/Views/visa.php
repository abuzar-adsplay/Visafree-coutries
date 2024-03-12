<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <!-- Main Header Start -->
    <?php
    echo view('header');
    ?>
    <!-- Main Header Ends -->

    <section id="body-container">



        <aside class="custom ">
            <div class="passport">
                <img src="<?php echo base_url('img/passport-india.png'); ?>" />
            </div>
            <div class="left-sidebar">
                <ul>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                mobility score
                            </div>
                            <div class="value"><?php echo $mobilityScore ?></div>

                        </div>
                    </li>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                Visa-Free
                            </div>
                            <div class="value">
                                <div class="value"><?php echo $visaFreeCountries ?></div>
                            </div>

                        </div>
                    </li>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                Visa On Arrival
                            </div>
                            <div class="value"> <?php echo $visaOnArrival ?></div>

                        </div>
                    </li>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                E-Visa
                            </div>
                            <div class="value"> <?php echo $evisa ?></div>
                        </div>
                    </li>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                Visa Required
                            </div>
                            <div class="value"> <?php echo $visaRequired ?></div>

                        </div>
                    </li>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                Passport Power Rank
                            </div>
                            <div class="value"> 34</div>

                        </div>
                    </li>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                World Rank
                            </div>
                            <div class="value">22</div>

                        </div>
                    </li>
                    <li>
                        <div class="sidebar-item">
                            <div>
                                Population
                            </div>
                            <div class="value">12</div>

                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <main class="responsive">
            <div class="primary ">
                <div id="svgMap"></div>
                <div class="bar">
                    <div class="color1 bg-danger">65</div>
                    <div class="color2 bg-success">15</div>
                    <div class="color3 bg-primary">20</div>
                </div>

                <?php
                if (isset($countriesListResult['visa free']) && is_array($countriesListResult['visa free'])) {
                ?>
                    <div class="container visafree-countries">
                        <h3>What Countries Issue free visa to <?php echo $countryName ?> Citizens?</h3>
                        <div class="row">
                            <?php
                            foreach ($countriesListResult['visa free'] as $k => $country) {
                            ?>
                                <div class="g-0 col-6 col-md-4 col-lg-4">
                                    <a href="http://visafree.local/country-details/<?php echo $countriesListData[$k]['name']  ?>">
                                        <div class="flag-countries">
                                            <img src="<?php echo $countriesListData[$k]['image'] ?>" />
                                            <p><?php echo $countriesListData[$k]['name'] ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                if (isset($countriesListResult['e-visa']) && is_array($countriesListResult['e-visa'])) {
                ?>
                    <div class="container visafree-countries">
                        <h3>What Countries Issue eVisa to <?php echo $countryName ?> Citizens?</h3>
                        <div class="row">
                            <?php
                            foreach ($countriesListResult['e-visa'] as $k => $country) {
                            ?>
                                <div class="g-0 col-6 col-md-4 col-lg-4">
                                    <a href="http://visafree.local/country-details/<?php echo $countryName ?>">
                                        <div class="flag-countries">
                                            <img src="<?php echo $countriesListData[$k]['image'] ?>" />
                                            <p><?php echo $countriesListData[$k]['name'] ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                if (isset($countriesListResult['e-visa']) && is_array($countriesListResult['e-visa'])) {
                ?>
                    <div class="container visafree-countries">

                        <h3>What Countries Issue Visa on Arrival to <?php echo $countryName ?> Passport Holders?</h3>
                        <div class="row">
                            <?php
                            foreach ($countriesListResult['visa on arrival'] as $k => $country) {
                            ?>
                                <div class="g-0 col-6 col-md-4 col-lg-4">
                                    <a href="http://visafree.local/country-details/<?php echo $countryName ?>">
                                        <div class="flag-countries"><img src="<?php echo $countriesListData[$k]['image'] ?>" />
                                            <p><?php echo $countriesListData[$k]['name'] ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>

                <?php
                if (isset($countriesListResult['e-visa']) && is_array($countriesListResult['e-visa'])) {
                ?>
                    <div class="container visafree-countries">
                        <h3>Countries With Visa Requirements for <?php echo $countryName ?> Citizens</h3>
                        <div class="row">
                            <?php
                            foreach ($countriesListResult['visa required'] as $k => $country) {
                            ?>
                                <div class="g-0 col-6 col-md-4 col-lg-4">
                                    <a href="http://visafree.local/country-details/<?php echo $countryName ?>">
                                        <div class="flag-countries"><img src="<?php echo $countriesListData[$k]['image'] ?>" />
                                            <p><?php echo $countriesListData[$k]['name'] ?></p>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
            </div>
        <?php
                }
        ?>


        <div class="secondary responsive ">
            <div class="search-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="search-Input" placeholder="Find a country">
                    <div class="dot-container">
                        <button class="psprt-dashboard-filters filter-vf bg-danger"></button>
                        <button class="psprt-dashboard-filters filter-voa bg-success"></button>
                        <button class="psprt-dashboard-filters filter-vr bg-primary"></button>
                    </div>
                </div>
                <div class="country-info status">

                    <div class="dot-country">
                        <span class="country-name">country</span>
                    </div>
                    <div class="visa-req">
                        <span>Action</span>
                    </div>
                </div>
                <div id="country-data">
                    <ul>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/afghanistan.png" alt="">
                                    <span class="country-name titles">Afghanistan</span>
                                </div>
                                <div class="visa-req">
                                    <button> itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters  bg-success"></button>
                                    <img src="../../assets/images/Albania.png" alt="">
                                    <span class="country-name titles">Albania</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/algeria.png" alt="">
                                    <span class="country-name titles">Algeria</span>
                                </div>
                                <div>
                                    <div class="visa-req">
                                        <button>View Itinerary</button>
                                        <button>Apply</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="../../assets/images/afghanistan.png" alt="">
                                    <span class="country-name titles">Afghanistan</span>
                                </div>
                                <div class="visa-free">
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters  bg-danger"></button>
                                    <img src="../../assets/images/angola.png" alt="">
                                    <span class="country-name titles">Angola</span>
                                </div>
                                <div class="visa-req">
                                    <button class="">View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="../../assets/images/spain.png" alt="">
                                    <span class="country-name titles">spain</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/Australia.png" alt="">
                                    <span class="country-name titles">Australia</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-success"></button>
                                    <img src="../../assets/images/israel.png" alt="">
                                    <span class="country-name titles">Israel</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="../../assets/images/nepal.png" alt="">
                                    <span class="country-name titles">Nepal</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-secondary"></button>
                                    <img src="../../assets/images/italy.png" alt="">
                                    <span class="country-name titles">Italy</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/china.png" alt="">
                                    <span class="country-name titles">China</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="../../assets/images/ireland.png" alt="">
                                    <span class="country-name titles">Ireland</span>
                                </div>
                                <div class="visa-free">
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters  bg-danger"></button>
                                    <img src="../../assets/images/japan.png" alt="">
                                    <span class="country-name titles">Japan</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/Australia.png" alt="">
                                    <span class="country-name titles">Australia</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-success"></button>
                                    <img src="../../assets/images/israel.png" alt="">
                                    <span class="country-name titles">Israel</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="../../assets/images/nepal.png" alt="">
                                    <span class="country-name titles">Nepal</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-secondary"></button>
                                    <img src="../../assets/images/italy.png" alt="">
                                    <span class="country-name titles">Italy</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/china.png" alt="">
                                    <span class="country-name titles">China</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="../../assets/images/ireland.png" alt="">
                                    <span class="country-name titles">Ireland</span>
                                </div>
                                <div class="visa-free">
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters  bg-danger"></button>
                                    <img src="../../assets/images/japan.png" alt="">
                                    <span class="country-name titles">Japan</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/Australia.png" alt="">
                                    <span class="country-name titles">Australia</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-success"></button>
                                    <img src="../../assets/images/israel.png" alt="">
                                    <span class="country-name titles">Israel</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="../../assets/images/nepal.png" alt="">
                                    <span class="country-name titles">Nepal</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-secondary"></button>
                                    <img src="../../assets/images/italy.png" alt="">
                                    <span class="country-name titles">Italy</span>
                                </div>
                                <div class="visa-free"><button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-danger"></button>
                                    <img src="../../assets/images/china.png" alt="">
                                    <span class="country-name titles">China</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters bg-primary"></button>
                                    <img src="<?php echo base_url('img/nepal.png'); ?>" />
                                    <span class="country-name titles">Ireland</span>
                                </div>
                                <div class="visa-free">
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="country-info">
                                <div class="dot-country">
                                    <button class="psprt-dashboard-filters  bg-danger"></button>
                                    <img src="<?php echo base_url('img/japan.png'); ?>" />
                                    <span class="country-name titles">Japan</span>
                                </div>
                                <div class="visa-req">
                                    <button>View Itinerary</button>
                                    <button>Apply</button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="add-section">
            <img src="<?php echo base_url('img/add.png'); ?>" />
        </div>
        </div>

        </main>
    </section>
    <script src="<?php echo base_url() . "js/script.js" ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/svg-pan-zoom@3.6.1/dist/svg-pan-zoom.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/StephanWagner/svgMap@v2.7.2/dist/svgMap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/StephanWagner/svgMap@v2.7.2/dist/svgMap.min.css" rel="stylesheet">
    <script>
        new svgMap({
            targetElementID: 'svgMap',
            initialZoom: 0.001,
            zoomScaleSensitivity: 0.1,
            initialPan: {
                x: 50,
                y: 50
            },
            // colorMax: 'D956DE',
            // colorMin: '#00ff00',
            // colorNoData: '#cccccc',



            data: {
                data: {
                    gdp: {
                        name: 'GDP per capita',
                        format: '{0} USD',
                        thousandSeparator: ',',
                        thresholdMax: 50000,
                        thresholdMin: 1000
                    },
                    change: {
                        name: 'Change to year before',
                        format: '{0} %'
                    }
                },
                applyData: 'gdp',
                values: {
                    AF: {
                        gdp: 0,
                        color: 'D956DE'
                    },
                    AL: {
                        gdp: 8000
                    },
                    DZ: {
                        gdp: 0
                    },
                    IN: {
                        gdp: 0,
                        color: 'red'
                    },
                    AU: {
                        gdp: 0,
                        color: 'green'
                    },
                    UAE: {
                        gdp: 0,
                        color: 'f9f9f9'
                    },
                }
            }
        });
    </script>

</body>

</html>