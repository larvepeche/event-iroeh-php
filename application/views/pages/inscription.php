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
            <?php echo $state; ?>
            <form action="<?= base_url(); ?>/participate" method="POST">

                <h2>Veuillez vous inscrire <br />pour acceder à l'évènement.</h2>
                <h4>Proposé par <span><strong>Iroeh</strong></span>.</h4>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="firstName">Prénom</label>
                        <input required="required" id="firstName" type="text" name="firstName">
                    </div>
                    <div class="form-field">
                        <label for="lastName">Nom</label>
                        <input required="required" id="lastName" type="text" name="lastName">
                    </div>
                </div>
                <div class="form-field">
                    <label for="email">Email</label>
                    <input required="required" id="email" type="email" name="email">
                </div>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="age">Age</label>
                        <input required="required" id="phone" type="number" min="4" name="age">
                    </div>
                    <div class="form-field">
                        <label for="phone">Téléphone</label>
                        <input required="required" id="lasttName" type="text" name="phone" placeholder="Ex : 032 89 899 98">
                    </div>
                </div>
                <div class="form-field">
                    <label for="genre">Genre</label>
                    <select name="genre" id="genre">
                        <option value="m">Homme</option>
                        <option value="f">Femme</option>
                    </select>
                </div>
                <input type="submit" name="signup" value="Envoyer !" />
            </form>
        </main>
    </div>
    </div>
</body>

</html>