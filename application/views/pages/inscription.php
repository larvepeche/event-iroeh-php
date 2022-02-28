<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <?php $v = $cssVersion ?>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/form.css?v=<?= $v ?>">
    <title>Inscription</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/global.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/thankyou.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/footer.css?v=<?=$v?>">
    <script src="https://kit.fontawesome.com/e0cd5a3dfc.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="left-part">
        <header>
            <a class="text-white text-decoration-none h5 retour" href="<?= base_url()?>"><i class="fa-solid fa-angle-left"></i> <strong>Retour</strong></a><br/>
            <img class="logo pt-4 " src="<?= base_url() ?>assets/image/logo-white.png" />
            <h1>
                Devenez <br /> une Personne <br />Influente.
            </h1>
        </header>
        <div class="razoky">
            <!-- <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_mfxcee5x.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player> -->
            <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_y4a3ixuv.json"  background="transparent"  speed="1"  style="width: 100%;"  loop  autoplay></lottie-player>
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