<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/neomorphism-form.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>

<body>

    <?php
    echo view('header');
    ?>

    <!-- heroes section start -->
    <div class="heroes-section">
        <div class="hero-item">
            <h2>Adventures Await <span>Pack Now</span></h2>
            <p>Embark on a journey beyond imagination with our travel haven. From breathtaking landscapes to vibrant cultures, our website is your passport to a world of exploration.</p>
            <form action="" method="get">
                <div class="option">
                    <label for="countrySelect"></label>
                    <select class="js-example-basic-multiple" name="states[]" id="countrySelect" style="width: 100%; text-align: start;">
                        <option value="0" disabled selected>Select a country</option>
                        <?php foreach ($countries as $country) : ?>
                            <option value="<?php echo $country['name']; ?>"><?php echo $country['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="button" onclick="redirectToSelectedCountry()" class="button-2">Search</button>
                </div>
            </form>
        </div>

    </div>

    <!-- heroes section end -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        const inputs = document.querySelectorAll('input');

        inputs.forEach(el => {
            el.addEventListener('blur', e => {
                if (e.target.value) {
                    e.target.classList.add('dirty');
                } else {
                    e.target.classList.remove('dirty');
                }
            })
        })
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

        function redirectToSelectedCountry(button) {
            var selectedCountry = $('#countrySelect').val();
            if (selectedCountry) {
                selectedCountry = selectedCountry.toLowerCase().replaceAll(" ", "-");
                var url = 'http://visafree.local/' + encodeURIComponent(selectedCountry);
                window.location.href = url;
            }
        }
    </script>

</body>
</html>