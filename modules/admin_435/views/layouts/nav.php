<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1"
        aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-<?= "$model1" ?> col-12 col-lg-<?= "$model2" ?>" id="navbarToggler1">
    <div class="navbar-nav text-center text-lg-right">
        <a class="nav-item nav-link active" href="#">Главная</a>
        <a class="nav-item nav-link" href="#">О компании</a>
        <div class="dropdown">                                    
            <a class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" 
               aria-haspopup="true" aria-expanded="false">Услуги
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Закалка стекла</a>
                <a class="dropdown-item" href="#">Обработка кромки</a>
                <a class="dropdown-item" href="#">Технологические вырезы</a>
                <a class="dropdown-item" href="#">Сверление отверстий</a>
                <a class="dropdown-item" href="#">Резка стекла</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Доставка</a>
            </div>
        </div>
        <a class="nav-item nav-link" href="#">Вакансии</a>
        <a class="nav-item nav-link" href="#">Контакты</a>
    </div>
</div>
</nav>

