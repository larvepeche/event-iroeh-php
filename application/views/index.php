<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devenez une personne d'influence | IROEH</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/e0cd5a3dfc.js" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <?php $v = $cssVersion ?>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/common.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/global.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/nav.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jumbotron.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/vocation.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/goal.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/seminaire.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/result.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/about.css?v=<?= $v ?>">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/footer.css?v=<?= $v ?>">

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
                    de nous ?</p>
                <p data-aos="fade-down" data-aos-delay="150" class="lancement">Le 26 & 27 Mars 2022 </p>
                <a href="inscription"><button data-aos="fade-down" data-aos-delay="150" class="cbtn fill semi-rounded-left b-white participe">Participer</button></a>
            </div>
        </div>
    </div>
    <main>
        <section class="vocation py-5">
            <div class="container-fluid">
                <div class="row p-3 box align-items-sm-center align-items-xl-stretch justify-content-center">
                    <div data-aos="fade-up" data-aos-delay="150" class="px-5 py-4 osez col-sm-10 col-md-9 col-lg-10 col-xl-7 ">
                        <h3 class="">Osez dire oui!</h3>
                        <div class="">
                            <p data-aos="fade-up" data-aos-delay="150">Quelle qu'elle soit votre vocation <br />ou votre
                                aspiration, vous <strong>pouvez <br />augmenter votre impact</strong> sur les autres
                                <br /> en devenant une personne d'influence.
                            </p>
                        </div>
                    </div>
                    <div class="position-relative promo-container col-sm-10 col-md-9 col-lg-10 col-xl-4 mt-3 mt-xl-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="promo card">
                            <div class="promo-img"></div>
                            <div class="card-body px-4 py-5" data-aos="fade-up" data-aos-delay="200">
                                <p class="card-title promo-title">Obtenez une remise de <span>20%</span></p>
                                <p class="promo-date">Inscrivez-vous avant le <span>05 mars 2022</span></p>
                                <p class="promo-price">
                                    <span>250.000 MGA</span>
                                    <span>200.000 MGA</span>
                                </p>
                                <a href="inscription" class="promo-btn">s'inscrire <i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" forbg container-fluid pb-5">
            <div class="row goal-section justify-content-center">
                <div class="col-sm-10 col-md-9 col-lg-10 col-xl-7 goal-list">
                    <div class="goal-item" data-aos="fade-up" data-aos-delay="150"><span><strong>Les managers</strong> <br /> verront leurs employés répondre avec plus
                            d'enthousiasme</span></div>
                    <div class="goal-item" data-aos="fade-up" data-aos-delay="150"><span><strong>Les parents</strong><br /> se connecteront
                            avec leurs enfants à un niveau plus
                            profond</span></div>
                    <div class="goal-item" data-aos="fade-up" data-aos-delay="200"><span><strong>Les coachs</strong><br /> verront leur clients
                            s'épanouir</span></div>
                    <div class="goal-item" data-aos="fade-up" data-aos-delay="200"><span><strong>Les conférenciers</strong> <br />verront leur
                            audience augmenter</span></div>
                    <div class="goal-item" data-aos="fade-up" data-aos-delay="250"><span><strong>Les commerciaux</strong> <br />atteindront de
                            nouveaux records de ventes</span></div>
                </div>
                <div class="col-sm-10 col-md-9 col-lg-10 col-xl-4 overflow-hidden">
                    <h3 class="goal-title" data-aos="fade-left" data-aos-delay="150">Apprendre</h3>
                    <p class="" data-aos="fade-left" data-aos-delay="200">
                        Apprenez des façons <strong>simples</strong> mais <strong>puissantes</strong> d'interagir de façon plus positive avec les autres,
                        et
                        voyez votre <strong>succès</strong> personnel et professionnel atteindre des sommets.
                    </p>
                    <a href="inscription"><button data-aos="fade-left" data-aos-delay="250" class="cbtn fill semi-rounded-left b-white hover-black">Je participe !</button></a>
                </div>
            </div>
        </section>
        <?php $this->load->view('components/event/seminaire.php'); ?>
        <section class="container-fluid px5" id="about-fabrice">
            <div class="row">
                <div class="col-md-6 image-container">
                    <div class="squares col-lg-12 mb-5">
                        <div data-aos="fade-up" data-aos-delay="150" class="img-container">
                            <img src="<?= base_url() ?>assets/image/fabrice.png" alt="Fabrice">
                        </div>
                        <div data-aos="fade-down" data-aos-delay="250" class="black-square">
                        </div>
                        <div data-aos="fade-left" data-aos-delay="250" class="yellow-square">
                        </div>
                        <div data-aos="fade-right" data-aos-delay="250" class="blue-square">
                        </div>
                    </div>
                </div>
                <div class="content-container col-sm-12 col-lg-5 col-xl-4">
                    <div class="separator"></div>
                    <div>
                        <div class="separator"></div>
                        <div data-aos="fade-up" data-aos-delay="250" class="name">Fabrice Rabeson</div>
                        <p data-aos="fade-up" data-aos-delay="250">Avec un Master en Comptabilité Finances issu de l'ISCAM et un parcours en entrepreneuriat à son actif, notre cher Tsihoarana Fabrice Rabeson a pris une toute autre direction pour sa carrière professionnelle en se penchant sur le développement personnel et le leadership.</p>
                        <p data-aos="fade-up" data-aos-delay="250">
                            <strong>Certifié par la John Maxwell TEAM</strong>, Fabrice est convaincu que se centrer sur l'Humain est impératif pour que celui-ci développe au mieux ses compétences techniques et ainsi l'entité où elle se trouve.
                            Un des messages qui a marqué notre CEO <strong>"Soyez meilleur dans ce que vous faîtes et excellent dans ce que vous êtes"</strong>Et tout cela pour une <strong>VISION</strong>, c'est de permettre à chaque individu de construire une bonne fondation pour être meilleur dans ce qu’il fait et être <strong>EXCELLENT</strong> dans ce qu’il <strong>EST</strong>.
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('components/event/result.php'); ?>
    </main>
    <?php $this->load->view('layouts/footer.php'); ?>
</body>
<script>
    window.addEventListener('load',
        function() {
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