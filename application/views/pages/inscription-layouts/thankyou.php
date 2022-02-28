<section class="p-4 mt-5 thankyou">
    <?php 
        $member = $this->session->userdata('member');
        if(isset($member)){ ?>
            <lottie-player class="ok" src="https://assets10.lottiefiles.com/packages/lf20_uk52xbuq.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;" hover   autoplay></lottie-player>
            <h3>Merci <span class="text-blue"><?=$member->getLastName()." ".$member->getFirstName()?></span> <br/>pour votre inscription !</h3>
            <h5>Veuillez valider votre inscription en payant la somme prévue. </h5>
            <h5>Tarif : <strong>250.000 MGA</strong></h5>
            <hr/>
            <p>Paiement par Mvola : <br/>
                Numéro : <strong>034 51 035 40</strong> ( Tsihoarana Fabrice )
                <br/>
                Motif : <strong>DPI<?=$member->getId()?></strong>
                <br/>
                <span class="text-muted">Veuillez inclure remplir le motif mvola par le code ci-dessus (DPI<?=$member->getId()?>)</span>
            </p>
            <p>26 & 27 Mars 2022 | God's love Ambohitrimanjaka</p>
        <?php }
        else{ ?>
            <h2>pas encore inscris</h2>
    <?php } ?>
</section>
<p class="mb-0 cpy py-4 ctitle">COPYRIGHT © 2022, DESIGNED BY IROEH. All Rights reserved</p>