<form action="<?= base_url(); ?>participate" method="POST">

                <h2>Veuillez vous inscrire <br />pour acceder à l'évènement.</h2>
                <h4>Proposé par <span><strong>Iroeh</strong></span>.</h4>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="firstName">Prénom</label>
                        <input id="firstName" type="text" name="firstName" value="<?php echo set_value('firstName'); ?>">
                        <?php echo form_error('firstName'); ?>
                    </div>
                    <div class="form-field">
                        <label for="lastName">Nom</label>
                        <input id="lastName" type="text" name="lastName" value="<?php echo set_value('lastName'); ?>">
                        <?php echo form_error('lastName'); ?>
                    </div>
                </div>
                <div class="form-field">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email'); ?>
                </div>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="age">Age</label>
                        <input id="phone" type="number" min="4" name="age" value="<?php echo set_value('age'); ?>">
                    </div>
                    <div class="form-field">
                        <label for="phone">Téléphone</label>
                        <input id="lasttName" type="text" name="phone" placeholder="Ex : 032 89 899 98" value="<?php echo set_value('phone'); ?>">
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