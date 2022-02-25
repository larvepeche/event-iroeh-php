<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <?php $v = $cssVersion ?>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/form.css?v=<?= $v ?>">
    <title>Inscription</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>
    <div id="left-part">
        <header>
            <img class="logo" src="<?= base_url() ?>assets/image/logo-white.png" />
            <h1>
                Devenez <br /> une Personne <br />Influente.
            </h1>
        </header>
        <div class="razoky">
            <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_mfxcee5x.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>
        </div>
    </div>
    <div id="right-part">
        <main>    
            <?php $this->load->view($page); ?>
        </main>
    </div>
    </div>
</body>

</html>