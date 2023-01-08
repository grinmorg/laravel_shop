<footer class="footer">
    <div class="footer__top">
        <div class="container footer__top-container">
            <div class="js-sc-contacts sc-contacts footer__top-sc-btn">
                <button class="sc-btn sc-btn--theme-accent sc-btn--size-md sc-contacts__el" type="button">
                    <svg class="icon sc-btn__icon">
                        <use xlink:href="images/sprite.svg#phone-type-2"></use>
                    </svg>
                </button>
                <div class="sc-contacts__dropdown">
                    <button class="sc-btn sc-btn--theme-accent sc-btn--size-md sc-contacts__dropdown-item"
                        type="button">
                        <svg class="icon sc-btn__icon">
                            <use xlink:href="images/sprite.svg#phone-type-2"></use>
                        </svg>
                    </button>
                    <button class="sc-btn sc-btn--theme-accent sc-btn--size-md sc-contacts__dropdown-item"
                        type="button">
                        <svg class="icon sc-btn__icon">
                            <use xlink:href="images/sprite.svg#phone-type-2"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="row footer__top-row">
                <div class="row__col--3 footer__top-col--logo">
                    <div class="footer__logo-wrap"><a class="footer__logo" href="/"><img
                                src="images/logo-white.png" alt="Luxury Life" /></a>
                        <div class="footer__payments"><img src="images/payments-method.svg"
                                alt="payments method" /></div>
                    </div>
                </div>
                <div class="row__col--2 footer__top-col--nav">
                    <div class="footer__title">Pages</div>
                    <ul class="footer__nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Payment and delivery</a></li>
                        <li><a href="#">Gift certificates</a></li>
                    </ul>
                </div>
                <div class="row__col--2 footer__top-col--nav">
                    <div class="footer__title">Category</div>
                    <ul class="footer__nav">
                        <li><a href="#">Engagement ring</a></li>
                        <li><a href="#">Earrings</a></li>
                        <li><a href="#">Necklace</a></li>
                        <li><a href="#">Chains</a></li>
                        <li><a href="#">Set</a></li>
                    </ul>
                </div>
                <div class="d-sm-none row__col--2 footer__top-col--nav">
                    <div class="footer__title">Contact us</div>
                    <ul class="footer__nav">
                        <li><a href="tel:0800200011">0 800 20-00-11</a></li>
                        <li><a href="mailto:email@gmail.com">email@gmail.com</a></li>
                        <li>Mon-Fri 9:00-18:00</li>
                    </ul>
                </div>
                <div class="row__col--3 footer__top-col--social">
                    <div class="d-sm-none footer__title">Social</div>
                    <div class="sc-block sc-block--theme-light sc-block--size-md footer__sc-block">
                        <ul class="sc-block__list">
                            <li class="sc-block__item"><a class="sc-block__link" href="#">
                                    <svg class="icon sc-block__icon">
                                        <use xlink:href="images/sprite.svg#sc-facebook"></use>
                                    </svg></a></li>
                            <li class="sc-block__item"><a class="sc-block__link" href="#">
                                    <svg class="icon sc-block__icon">
                                        <use xlink:href="images/sprite.svg#sc-instagram"></use>
                                    </svg></a></li>
                            <li class="sc-block__item"><a class="sc-block__link" href="#">
                                    <svg class="icon sc-block__icon">
                                        <use xlink:href="images/sprite.svg#sc-viber"></use>
                                    </svg></a></li>
                            <li class="sc-block__item"><a class="sc-block__link" href="#">
                                    <svg class="icon sc-block__icon">
                                        <use xlink:href="images/sprite.svg#sc-telegram"></use>
                                    </svg></a></li>
                            <li class="sc-block__item"><a class="sc-block__link" href="#">
                                    <svg class="icon sc-block__icon">
                                        <use xlink:href="images/sprite.svg#sc-whatsapp"></use>
                                    </svg></a></li>
                        </ul>
                    </div>
                    <div class="d-sm-block footer__contacts"><a class="footer__contacts-phone"
                            href="tel:0800200011">0 800 20-00-11</a>
                        <div class="footer__contacts-time">Mon-Fri 9:00-18:00</div><a
                            class="footer__contacts-email" href="mailto:email@gmail.com">email@gmail.com</a>
                    </div>
                    <div class="footer__subscribe">
                        <div class="footer__title">Subscribe</div>
                        <form class="footer__subscribe-form" action="#">
                            <div class="input-area-el footer__subscribe-form-el">
                                <input
                                    class="js-input-label input-el input-el--type-input input-el--size-md input-el--theme-dark input-area-el__input"
                                    type="email" name="email" required="required" placeholder=""
                                    id="subscribe-email" />
                                <label class="input-area-el__label input-area-el__label"
                                    for="subscribe-email">E-mail</label>
                            </div>
                            <button class="subscribe-btn subscribe-btn--size-md footer__subscribe-btn"
                                type="submit">
                                <svg class="icon subscribe-btn__icon">
                                    <use xlink:href="images/sprite.svg#send"></use>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container footer__bottom-container">
            <p class="footer__bottom-copyright">Copyright © {{ now()->year }}</p>
            <p class="footer__bottom-developer">Develop:&nbsp;<a href="https://github.com/grinmorg"
                    target="_blank">GrinMorg</a></p>
        </div>
    </div>
</footer>