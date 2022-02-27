<form action="<?= base_url(); ?>participate" method="POST">

                <h2>Veuillez vous inscrire <br />pour acceder à l'évènement.</h2>
                <h4>Proposé par <span><strong>Iroeh</strong></span>.</h4>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="firstName">Prénom *</label>
                        <input required="required" id="firstName" type="text" name="firstName" value="<?php echo set_value('firstName'); ?>">
                        <span class="text-danger"><?php echo form_error('firstName'); ?></span>
                    </div>
                    <div class="form-field">
                        <label for="lastName">Nom *</label>
                        <input required="required" id="lastName" type="text" name="lastName" value="<?php echo set_value('lastName'); ?>">
                        <span class="text-danger"><?php echo form_error('lastName'); ?></span>
                    </div>
                </div>
                <div class="form-field">
                    <label for="email">Email *</label>
                    <input required="required" id="email" type="email" name="email" value="<?php echo set_value('email'); ?>">
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-field-group">
                    <div class="form-field">
                        <label for="age">Age *</label>
                        <input required="required" id="age" type="number" name="age" value="<?php echo set_value('age'); ?>">
                        <span class="text-danger"><?php echo form_error('age'); ?></span>
                    </div>
                    <div class="form-field">
                        <label for="phone">Téléphone</label>
                        <input id="phone" type="text" name="phone" placeholder="Ex : +261 34 51 035 40" value="<?php echo set_value('phone'); ?>">
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