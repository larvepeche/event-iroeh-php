<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iroeh - developpement personelle</title>
    <link rel="icon" href="img/favicon.jpg" />
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <?php $v = $cssVersion ?>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/common.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/global.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/nav.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/jumbotron.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/vocation.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/goal.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/result.css?v=<?=$v?>">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/footer.css?v=<?=$v?>">

</head>

<body>
    <div class="header d-flex flex-column">
        <?php $this->load->view('layouts/navbar.php'); ?>
        <div class="row d-flex flex-column">
            <div class="jumbotron px7">
                <h1 class="big-text">
                    <span data-aos="fade-up" data-aos-delay="150">Devenez</span>
                    <br />
                    <span data-aos="fade-up" data-aos-delay="200">une personne</span>
                    <br />
                    <span data-aos="fade-up" data-aos-delay="250">d'influence</span>
                </h1>
                <p data-aos="fade-down" data-aos-delay="150">Comment impacter positivement <br />les vies de ceux autour
                    de nous?</p>
                <a href="inscription"><button data-aos="fade-down" data-aos-delay="150" class="cbtn participe">Participer</button></a>
            </div>
        </div>
    </div>
    <main>
        <section class="vocation py-5">
            <div class="container-fluid">
                <div class="row px7 align-items-center box py-5">
                    <div class="col-lg-6">
                        <h3 class="" data-aos="fade-up" data-aos-delay="150">Osez !</h3>
                        <div class="">
                            <p data-aos="fade-up" data-aos-delay="150">Quelle qu'elle soit votre vocation <br />ou votre
                                aspiration, vous <strong>pouvez <br />augmenter votre impact</strong> sur les autres
                                <br /> en devenant une personne d'influence.</p>
                        </div>
                    </div>
                    <div class="col-6 position-relative " id="animate1">
                        <!-- <lottie-player class="animation1" src="https://assets7.lottiefiles.com/private_files/lf30_0jm6i5cj.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player> -->
                        <lottie-player id="plant" src="https://assets2.lottiefiles.com/packages/lf20_eanjkkrb.json"
                            background="transparent" speed="1" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </section>
        <section class="forbg container-fluid pb-5">
            <div class="row goal-section justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-8 col-xl-7 goal-list">
                <div class="goal-item" data-aos="fade-up" data-aos-delay="150"><span><strong>Les managers</strong> <br/> verront leurs employés répondre avec plus
                        d'enthousiasme</span></div>
                <div class="goal-item" data-aos="fade-up" data-aos-delay="150"><span><strong>Les parents</strong><br/> se connecteront
                        avec leurs enfants à un niveau plus
                        profond</span></div>
                <div class="goal-item" data-aos="fade-up" data-aos-delay="200"><span><strong>Les coachs</strong><br/> verront leur clients
                        s'épanouir</span></div>
                <div class="goal-item" data-aos="fade-up" data-aos-delay="200"><span><strong>Les conférenciers</strong> <br/>verront leur
                        audience augmenter</span></div>
                <div class="goal-item" data-aos="fade-up" data-aos-delay="250"><span><strong>Les commerciaux</strong> <br/>atteindront de
                        nouveaux records de ventes</span></div>
            </div>
            <div class="col-sm-10 col-md-9 col-lg-8 col-xl-4">
                <h3 class="goal-title">Apprendre</h3>
                <p class="">
                    Apprenez des façons <strong>simples</strong> mais <strong>puissantes</strong> d'interagir de façon plus positive avec les autres,
                    et
                    voyez votre <strong>succès</strong> personnel et professionnel atteindre des sommets.
                </p>
                <a href="inscription"><button data-aos="fade-down" data-aos-delay="150" class="cbtn semi-rounded-btn-left hover-black">Je Participe !</button></a>
            </div>
        </div>
        </section>
        <section class="result">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-sm-12 py-5 px5">
                        <h3>Avec l'influence</h3>
                        <p data-aos="fade-up" data-aos-delay="200">vous pouvez avoir du succès chez vous, <br />au
                            travail et dans tous les autres<br /> domaines de votre vie.</p>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="200">John C. Maxwell a passé sa vie à
                            développer des influenceurs. Avec humour, du cœur, et une sagesse unique, il partage avec
                            nous ce qu'il a appris pendant des décennies d'expérience dans les domaines du business et
                            des associations à but non-lucratif.</p>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-12 image px-0">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view('layouts/footer.php'); ?>
</body>
<script>
    window.addEventListener('load',
        function () {
            let host = document.getElementById("plant")
            var style = document.createElement('style');
            style.innerHTML = 'svg>g>g:last-child>g:first-child { opacity: 0; }';
            host.shadowRoot.appendChild(style);
        }, false);
</script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="assets/js/common.js"></script>

</html>