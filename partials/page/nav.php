<nav class="navbar navbar-dark fixed-top navbar-expand-lg bg-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
            <img src="<?= get_template_directory_uri() . '/assets/img/logo-congresso.png' ?>" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item d-md-flex align-items-center">
                    <a class="nav-link" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item d-md-flex align-items-center">
                    <a class="nav-link" aria-current="page" href="#programacao">Programação</a>
                </li>
                <li class="nav-item d-md-flex align-items-center">
                    <a class="nav-link" aria-current="page" href="#ingressos">Ingressos</a>
                </li>
                <li class="nav-item d-md-flex align-items-center">
                    <a class="nav-link" aria-current="page" href="#palestrantes">Palestrantes</a>
                </li>
                <li class="nav-item d-md-flex align-items-center">
                    <a class="nav-link" aria-current="page" href="#congressos">Sobre</a>
                </li>
                <li class="nav-item d-md-flex align-items-center">
                    <a class="nav-link" target="_blank" aria-current="page" href="https://www.sympla.com.br/ibgc-23-congress__1648714" data-bs-toggle="tooltip" data-bs-placement="bottom" title="For foreign registration, please click here to be directed to an exclusive page to complete the registration process. If you have your CPF card, you can purchase your ticket by clicking on the 'Inscreva-se' button.">
                        <img src="<?= get_template_directory_uri() . '/assets/img/usa.png' ?>" width="32" alt="USA" />
                    </a>
                </li>
                <li class="nav-item d-md-flex align-items-center">
                    <a class="nav-link cta" aria-current="page" href="#ingressos">Inscreva-se</a>
                </li>
            </ul>
        </div>
    </div>
</nav>