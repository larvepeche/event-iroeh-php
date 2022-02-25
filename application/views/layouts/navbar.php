<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid px7">
        <a class="navbar-brand" href="/">
            <img src="<?= base_url() ?>assets/image/logo-white.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-filter-right"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" margin-0 navbar-nav me-auto mb-lg-0">

            </ul>
            <div class="right d-flex py-4">
                <div class="d-flex flex-column date desktop py-0">
                    <span><?php
                        setlocale(LC_TIME,"fr_FR.UTF-8");
                        echo strftime("%d %B %Y");
                    ?></span>
                    <span class="lancement">Disponible le 19 Mars 2022 </span>
                    <!-- (10-12) -> 09 Avril -->
                </div>
                <a href="inscription" class="register cbtn desktop">Je m'inscris !</a>
            </div>
        </div>
    </div>
</nav>