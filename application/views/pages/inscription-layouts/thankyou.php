<section class="p-4 mt-5 thankyou">
    <?php 
        $member = $this->session->userdata('member');
        if(isset($member)){ ?>
            <h2>Merci <span class="text-black"><?=$member->getLastName()." ".$member->getFirstName()?></span> <br/>pour votre inscription !</h2>
            <h3></h3>
            <p>Validez votre inscription en payant la somme prévue. </p>
            <p>Tarif : <strong>250.000 MGA</strong>  </p>
            <p>Paiement par Mvola : <br/>
                Numéro : XXXXXXX ( Tsihoarana Fabrice )
                <br/>
                Motif : DPI<?=$member->getId()?>
            </p>
            <p>26 & 27 Mars 2022 | God's love Ambohitrimanjaka</p>
        <?php }
        else{ ?>
            <h2>pas encore inscris</h2>
    <?php } ?>
</section>
<center><p class="mb-0 py-4 ctitle">COPYRIGHT © 2022, DESIGNED BY IROEH. All Rights reserved</p></center>