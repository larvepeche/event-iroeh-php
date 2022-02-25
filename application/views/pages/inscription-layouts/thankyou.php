<section>
    <?php 
        $member = $this->session->userdata('member');
    
    if(isset($member)){ ?>
        <h2>Merci <?=$member->getFirstName() ?> !</h2>
   <?php }
    else{ ?>
        <h2>pas encore inscris</h2>
    <?php } ?>
</section>