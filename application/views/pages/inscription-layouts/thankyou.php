<section class="p-4 mt-5 thankyou">
    <?php 
        $member = $this->session->userdata('member');
        if(isset($member)){ ?>
            <h2>Merci <?=$member->getLastName()." ".$member->getFirstName()?> !</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
            <p>votre numéro : DPI<?=$member->getId()?></p>
            <button class="cbtn hover-black"> Télécharger le PDF </button>
        <?php }
        else{ ?>
            <h2>pas encore inscris</h2>
    <?php } ?>
</section>