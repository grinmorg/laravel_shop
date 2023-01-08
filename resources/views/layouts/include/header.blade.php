<header class="js-header-sticky header">
    <nav class="header__menu" role="navigation">
        <ul class="header__menu-list">
            <li class="header__menu-item"><a class="header__menu-link" href="#">Earrings</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Necklace</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Chains</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Set</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Engagement ring</a></li>
        </ul>
        <ul class="header__menu-list">
            <li class="header__menu-item"><a class="header__menu-link" href="#">Contact</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">About</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Sale</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Gift certificates</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Payment and delivery</a>
            </li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Cashback</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">FAQ</a></li>
        </ul>
    </nav>
    <div class="header__top">
        <div class="container-fluid header__top-container">
            <div class="header__top-toggle-wrap">
                <button class="js-header-nav-toggle header__top-toggle"
                    type="button"><span></span><span></span><span></span></button>
            </div><a class="header__top-logo" href="/"><img src="images/logo-black.png" alt="Luxury Life" /></a>
            <div class="header__top-action">
                <form class="d-md-none search-form header__nav-action-search" action="#">
                    <input class="search-form__input" type="search" name="q" required="required"
                        placeholder="Search..." />
                    <button class="action-btn action-btn--size-md search-form__btn" type="submit">
                        <svg class="icon action-btn__icon">
                            <use xlink:href="images/sprite.svg#search"></use>
                        </svg>
                    </button>
                </form>
                <button class="d-md-none js-header-search-toggle action-btn action-btn--size-md header__top-action-item"
                    type="button">
                    <svg class="icon action-btn__icon">
                        <use xlink:href="images/sprite.svg#search"></use>
                    </svg>
                    <svg class="icon action-btn__icon">
                        <use xlink:href="images/sprite.svg#close"></use>
                    </svg>
                </button>
                <button class="d-md-none action-btn action-btn--size-md header__top-action-item" type="button">
                    <svg class="icon action-btn__icon">
                        <use xlink:href="images/sprite.svg#phone-type-1"></use>
                    </svg>
                </button>
                <button class="d-md-none action-btn action-btn--size-md header__top-action-item" type="button">
                    <svg class="icon action-btn__icon">
                        <use xlink:href="images/sprite.svg#favorites"></use>
                    </svg>
                </button>
                <button class="action-btn action-btn--size-md header__top-action-item" type="button">
                    <svg class="icon action-btn__icon">
                        <use xlink:href="images/sprite.svg#basket"></use>
                    </svg><span class="action-btn__badge">2</span>
                </button>

                @auth
                    <a href="#lk"
                        class="d-md-none action-btn action-btn--size-md rounded-full overflow-hidden header__top-action-item"
                        type="button">
                        <img src="{{ auth()->user()->avatar }}" alt="Личный кабинет">
                    </a>
                    @elseguest
                    <a href="{{ route('login') }}" class="d-md-none action-btn action-btn--size-md header__top-action-item"
                        type="button">
                        <svg class="icon action-btn__icon">
                            <use xlink:href="images/sprite.svg#user"></use>
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </div>
    <div class="header__nav">
        <div class="container header__nav-container">
            <nav class="d-md-none header-nav header__nav-el">
                <ul class="header-nav__list">
                    <li class="header-nav__item"><a class="header-nav__link" href="#">Каталог</a>
                        <div class="goods-rubric header-nav__dropdown">
                            <div class="container">
                                <div class="goods-rubric__row">
                                    <div class="goods-rubric__col">
                                        <article class="goods-rubric-card goods-rubric__card">
                                            <picture class="goods-rubric-card__picture"><img
                                                    src="images/goods-rubric-1.svg" alt="Engagement ring" />
                                            </picture>
                                            <h3 class="title-size-5 goods-rubric-card__title"><a
                                                    class="goods-rubric-card__link" href="#">Свадебные
                                                    кольца</a></h3>
                                        </article>
                                    </div>
                                    <div class="goods-rubric__col">
                                        <article class="goods-rubric-card goods-rubric__card">
                                            <picture class="goods-rubric-card__picture"><img
                                                    src="images/goods-rubric-2.svg" alt="Earrings" />
                                            </picture>
                                            <h3 class="title-size-5 goods-rubric-card__title"><a
                                                    class="goods-rubric-card__link" href="#">Серьги</a>
                                            </h3>
                                        </article>
                                    </div>
                                    <div class="goods-rubric__col">
                                        <article class="goods-rubric-card goods-rubric__card">
                                            <picture class="goods-rubric-card__picture"><img
                                                    src="images/goods-rubric-3.svg" alt="Necklace" />
                                            </picture>
                                            <h3 class="title-size-5 goods-rubric-card__title"><a
                                                    class="goods-rubric-card__link" href="#">Ожерелья</a></h3>
                                        </article>
                                    </div>
                                    <div class="goods-rubric__col">
                                        <article class="goods-rubric-card goods-rubric__card">
                                            <picture class="goods-rubric-card__picture"><img
                                                    src="images/goods-rubric-4.svg" alt="Chains" />
                                            </picture>
                                            <h3 class="title-size-5 goods-rubric-card__title"><a
                                                    class="goods-rubric-card__link" href="#">Цепи на
                                                    шею</a>
                                            </h3>
                                        </article>
                                    </div>
                                    <div class="goods-rubric__col">
                                        <article class="goods-rubric-card goods-rubric__card">
                                            <picture class="goods-rubric-card__picture"><img
                                                    src="images/goods-rubric-4.svg" alt="Chains" />
                                            </picture>
                                            <h3 class="title-size-5 goods-rubric-card__title"><a
                                                    class="goods-rubric-card__link" href="#">Цепи на
                                                    руку</a>
                                            </h3>
                                        </article>
                                    </div>
                                    <div class="goods-rubric__col">
                                        <article class="goods-rubric-card goods-rubric__card">
                                            <picture class="goods-rubric-card__picture"><img
                                                    src="images/goods-rubric-5.svg" alt="Set" />
                                            </picture>
                                            <h3 class="title-size-5 goods-rubric-card__title"><a
                                                    class="goods-rubric-card__link" href="#">Коллекции</a>
                                            </h3>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-nav__item"><a class="header-nav__link" href="#">Контакты</a></li>
                    <li class="header-nav__item"><a class="header-nav__link" href="#">О нас</a></li>
                    <li class="header-nav__item"><a class="header-nav__link" href="#">Распродажа</a>
                    </li>
                    <li class="header-nav__item"><a class="header-nav__link" href="#">Подарочные
                            сертификаты</a></li>
                </ul>
            </nav>
            <div class="header__nav-action d-md-block">
                <form class="search-form header__nav-action-item" action="#">
                    <input class="search-form__input" type="search" name="q" required="required"
                        placeholder="Search..." />
                    <button class="action-btn action-btn--size-md search-form__btn" type="submit">
                        <svg class="icon action-btn__icon">
                            <use xlink:href="images/sprite.svg#search"></use>
                        </svg>
                    </button>
                </form>
                <button class="action-btn action-btn--size-md header__nav-action-item" type="button">
                    <svg class="icon action-btn__icon">
                        <use xlink:href="images/sprite.svg#phone-type-1"></use>
                    </svg>
                </button>
                <button class="action-btn action-btn--size-md header__nav-action-item" type="button">
                    <svg class="icon action-btn__icon">
                        <use xlink:href="images/sprite.svg#favorites"></use>
                    </svg>
                </button>
                @auth
                    <a href="#lk"
                        class="action-btn action-btn--size-md header__nav-action-item rounded-full overflow-hidden">
                        <img src="{{ auth()->user()->avatar }}" alt="Личный кабинет">
                    </a>
                @elseguest
                    <a href="{{ route('login') }}" class="action-btn action-btn--size-md header__nav-action-item">
                        <svg class="icon action-btn__icon">
                            <use xlink:href="images/sprite.svg#user"></use>
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>
