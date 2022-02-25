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
            <form action="<?= base_url(); ?>participate" method="POST">

                <h2>Veuillez vous inscrire <br />pour acceder à l'évènement.</h2>
                <h4>Proposé par <span><strong>Iroeh</strong></span>.</h4>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="firstName">Prénom</label>
                        <input id="firstName" type="text" name="firstName" value="<?php echo set_value('firstName'); ?>">
                        <span class="text-danger"><?php echo form_error('firstName'); ?></span>
                    </div>
                    <div class="form-field">
                        <label for="lastName">Nom</label>
                        <input id="lastName" type="text" name="lastName" value="<?php echo set_value('lastName'); ?>">
                        <span class="text-danger"><?php echo form_error('lastName'); ?></span>
                    </div>
                </div>
                <div class="form-field">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="<?php echo set_value('email'); ?>">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="age">Age</label>
                        <input id="phone" type="number" name="age" value="<?php echo set_value('age'); ?>">
                        <span class="text-danger"><?php echo form_error('age'); ?></span>
                    </div>
                    <div class="form-field">
                        <label for="phone">Téléphone</label>
                        <input id="lasttName" type="text" name="phone" placeholder="Ex : 032 89 899 98" value="<?php echo set_value('phone'); ?>">
                        <span class="text-danger"><?php echo form_error('phone'); ?></span>
                    </div>
                </div>
                <div class="form-field">
                    <label for="gender">Genre</label>
                    <select name="gender" id="gender" value="<?php echo set_value('gender'); ?>">
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