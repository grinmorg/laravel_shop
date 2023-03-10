@extends('layouts.app')

@section('title', 'Main')

@section('content')
    <main class="main" role="main">

        <section class="main-slider">
            <div class="js-main-slider-init main-slider__init">
                <div class="main-slider__slide">
                    <picture class="main-slider__picture"><img src="/images/hero-poster.png"
                            alt="Gold earrings with diamant" /></picture>
                    <div class="container main-slider__container">
                        <div class="main-slider__content">
                            <h1 class="title-size-1 main-slider__title">Золотые серьги с алмазами</h1>
                            <div class="content main-slider__text font-bold">
                                <p>14 карат красного золота</p>
                            </div>
                            <div class="main-slider__price"><span class="main-slider__price-new">28 250 руб</span><span
                                    class="main-slider__price-old">75 000 руб</span></div>
                            <div class="main-slider__btn-wrap"><a class="btn btn--size-md btn--theme-dark main-slider__btn"
                                    href="#"><span class="btn__inner"><span class="btn__title">Страница товара</span>
                                        <svg class="icon btn__icon btn__icon--ltr">
                                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                                        </svg></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="main-slider__slide">
                    <picture class="main-slider__picture"><img src="/images/hero-poster.png"
                            alt="Gold earrings with diamant" /></picture>
                    <div class="container main-slider__container">
                        <div class="main-slider__content">
                            <h1 class="title-size-1 main-slider__title">Золотые серьги с алмазами</h1>
                            <div class="content main-slider__text font-bold">
                                <p>14 карат красного золота</p>
                            </div>
                            <div class="main-slider__price"><span class="main-slider__price-new">28 250 руб</span><span
                                    class="main-slider__price-old">75 000 руб</span></div>
                            <div class="main-slider__btn-wrap"><a class="btn btn--size-md btn--theme-dark main-slider__btn"
                                    href="#"><span class="btn__inner"><span class="btn__title">Страница товара</span>
                                        <svg class="icon btn__icon btn__icon--ltr">
                                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                                        </svg></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="main-slider__slide">
                    <picture class="main-slider__picture"><img src="/images/hero-poster.png"
                            alt="Gold earrings with diamant" /></picture>
                    <div class="container main-slider__container">
                        <div class="main-slider__content">
                            <h1 class="title-size-1 main-slider__title">Золотые серьги с алмазами</h1>
                            <div class="content main-slider__text font-bold">
                                <p>14 карат красного золота</p>
                            </div>
                            <div class="main-slider__price"><span class="main-slider__price-new">28 250 руб</span><span
                                    class="main-slider__price-old">75 000 руб</span></div>
                            <div class="main-slider__btn-wrap"><a class="btn btn--size-md btn--theme-dark main-slider__btn"
                                    href="#"><span class="btn__inner"><span class="btn__title">Страница товара</span>
                                        <svg class="icon btn__icon btn__icon--ltr">
                                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                                        </svg></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="main-slider__slide">
                    <picture class="main-slider__picture"><img src="/images/hero-poster.png"
                            alt="Gold earrings with diamant" /></picture>
                    <div class="container main-slider__container">
                        <div class="main-slider__content">
                            <h1 class="title-size-1 main-slider__title">Золотые серьги с алмазами</h1>
                            <div class="content main-slider__text font-bold">
                                <p>14 карат красного золота</p>
                            </div>
                            <div class="main-slider__price"><span class="main-slider__price-new">28 250 руб</span><span
                                    class="main-slider__price-old">75 000 руб</span></div>
                            <div class="main-slider__btn-wrap"><a class="btn btn--size-md btn--theme-dark main-slider__btn"
                                    href="#"><span class="btn__inner"><span class="btn__title">Страница товара</span>
                                        <svg class="icon btn__icon btn__icon--ltr">
                                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                                        </svg></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="main-slider__slide">
                    <picture class="main-slider__picture"><img src="/images/hero-poster.png"
                            alt="Gold earrings with diamant" /></picture>
                    <div class="container main-slider__container">
                        <div class="main-slider__content">
                            <h1 class="title-size-1 main-slider__title">Золотые серьги с алмазами</h1>
                            <div class="content main-slider__text font-bold">
                                <p>14 карат красного золота</p>
                            </div>
                            <div class="main-slider__price"><span class="main-slider__price-new">28 250 руб</span>
                                <span class="main-slider__price-old">75 000 руб</span>
                            </div>
                            <div class="main-slider__btn-wrap"><a class="btn btn--size-md btn--theme-dark main-slider__btn"
                                    href="#"><span class="btn__inner"><span class="btn__title">Страница товара</span>
                                        <svg class="icon btn__icon btn__icon--ltr">
                                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                                        </svg></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slider__dots"></div>
        </section>
        @if ($categories)
            <section class="screen">
                <div class="container screen__container">
                    <div class="goods-rubric screen__goods-rubric">
                        <div class="goods-rubric__row">
                            @foreach ($categories as $idx => $category)
                                <div class="goods-rubric__col">
                                    <article class="goods-rubric-card goods-rubric__card">
                                        <picture class="goods-rubric-card__picture"><img
                                                src="images/goods-rubric-{{ $idx + 1 }}.svg" alt="Engagement ring" />
                                        </picture>
                                        <h3 class="title-size-5 goods-rubric-card__title"><a
                                                class="goods-rubric-card__link" href="#">{{ $category->title }}</a>
                                        </h3>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if ($products)
            <section class="screen">
                <div class="container screen__container">
                    <h2 class="title-size-2 screen__title">Мы рекомендуем</h2>
                    <div class="goods-list screen__goods-list">
                        <div class="js-goods-slider-mobile-init goods-list__row">
                            @foreach ($products as $idx => $product)
                                <div class="goods-list__col goods-list__col--slider">
                                    <article class="good-card goods-list__card">
                                        <button
                                            class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                            type="button">
                                            <svg class="icon action-btn__icon">
                                                <use xlink:href="images/sprite.svg#like-outline"></use>
                                            </svg>
                                            <svg class="icon action-btn__icon">
                                                <use xlink:href="images/sprite.svg#like-fill"></use>
                                            </svg>
                                        </button>
                                        <picture class="good-card__picture">
                                            <img src="{{ $product->makeThumbnail('350x350') }}"
                                                alt="Silver earrings with cubic zirconia" />
                                            </picture>
                                        <div class="good-card__content">
                                            <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                                    href="#">{{ $product->title }}</a></h3>
                                            <div class="good-card__price">
                                                <div class="good-card__price-new">{{ $product->price }} руб</div>
                                                {{-- <div class="good-card__price-old">8764 руб</div> --}}
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="promotions-section">
            <div class="container promotions-section__container">
                <h2 class="visually-hidden promotions-section__title">Promotions and discounts</h2>
                <div class="js-promotions-slider-init promotions-section__slider">
                    <div class="promotions-section__slider-slide"><a
                            class="promotions-card promotions-card--banner promotions-section__slider-card"
                            href="#">
                            <picture class="promotions-card__banner"><img src="images/promotions-card-1.jpg"
                                    alt="Gift certificates" /></picture>
                        </a></div>
                    <div class="promotions-section__slider-slide"><a
                            class="promotions-card promotions-card--banner promotions-section__slider-card"
                            href="#">
                            <picture class="promotions-card__banner"><img src="images/promotions-card-2.jpg"
                                    alt="Rings engagement" /></picture>
                        </a></div>
                    <div class="promotions-section__slider-slide"><a
                            class="promotions-card promotions-card--banner promotions-section__slider-card"
                            href="#">
                            <picture class="promotions-card__banner"><img src="images/promotions-card-1.jpg"
                                    alt="Gift certificates" /></picture>
                        </a></div>
                    <div class="promotions-section__slider-slide"><a
                            class="promotions-card promotions-card--banner promotions-section__slider-card"
                            href="#">
                            <picture class="promotions-card__banner"><img src="images/promotions-card-2.jpg"
                                    alt="Rings engagement" /></picture>
                        </a></div>
                </div>
            </div>
        </section>
        <section class="engagement-section">
            <div class="container engagement-section__container">
                <div class="row engagement-section__row">
                    <div class="row__col--5 engagement-section__col--picture">
                        <picture class="d-sm-none engagement-section__picture"><img src="images/engagement-section-1.jpg"
                                alt="Advertising engagement rings and engagement rings" /></picture>
                    </div>
                    <div class="row__col--7 engagement-section__col--slider">
                        <div class="engagement-section__content">
                            <h2 class="title-size-2 engagement-section__title">10%&nbsp;Off weddings rings</h2>
                            <picture class="d-sm-block engagement-section__picture"><img
                                    src="images/engagement-section-1.jpg"
                                    alt="Advertising engagement rings and engagement rings" /></picture>
                            <div class="goods-slider engagement-section__goods-slider">
                                <div class="js-goods-slider-init goods-slider__init">
                                    <div class="goods-slider__slide">
                                        <article class="good-card goods-slider__slide-card">
                                            <button
                                                class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                                type="button">
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-outline"></use>
                                                </svg>
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-fill"></use>
                                                </svg>
                                            </button>
                                            <picture class="good-card__picture"><img src="images/good-card-1.jpg"
                                                    alt="Silver earrings with cubic zirconia" /></picture>
                                            <div class="good-card__content">
                                                <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                                        href="#">Silver earrings
                                                        with cubic zirconia</a></h3>
                                                <div class="good-card__price">
                                                    <div class="good-card__price-new">6264 руб</div>
                                                    <div class="good-card__price-old">8764 руб</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="goods-slider__slide">
                                        <article class="good-card goods-slider__slide-card">
                                            <button
                                                class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                                type="button">
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-outline"></use>
                                                </svg>
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-fill"></use>
                                                </svg>
                                            </button>
                                            <picture class="good-card__picture"><img src="images/good-card-1.jpg"
                                                    alt="Silver earrings with cubic zirconia" /></picture>
                                            <div class="good-card__content">
                                                <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                                        href="#">Silver earrings
                                                        with cubic zirconia</a></h3>
                                                <div class="good-card__price">
                                                    <div class="good-card__price-new">6264 руб</div>
                                                    <div class="good-card__price-old">8764 руб</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="goods-slider__slide">
                                        <article class="good-card goods-slider__slide-card">
                                            <button
                                                class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                                type="button">
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-outline"></use>
                                                </svg>
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-fill"></use>
                                                </svg>
                                            </button>
                                            <picture class="good-card__picture"><img src="images/good-card-1.jpg"
                                                    alt="Silver earrings with cubic zirconia" /></picture>
                                            <div class="good-card__content">
                                                <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                                        href="#">Silver earrings
                                                        with cubic zirconia</a></h3>
                                                <div class="good-card__price">
                                                    <div class="good-card__price-new">6264 руб</div>
                                                    <div class="good-card__price-old">8764 руб</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="goods-slider__slide">
                                        <article class="good-card goods-slider__slide-card">
                                            <button
                                                class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                                type="button">
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-outline"></use>
                                                </svg>
                                                <svg class="icon action-btn__icon">
                                                    <use xlink:href="images/sprite.svg#like-fill"></use>
                                                </svg>
                                            </button>
                                            <picture class="good-card__picture"><img src="images/good-card-1.jpg"
                                                    alt="Silver earrings with cubic zirconia" /></picture>
                                            <div class="good-card__content">
                                                <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                                        href="#">Silver earrings
                                                        with cubic zirconia</a></h3>
                                                <div class="good-card__price">
                                                    <div class="good-card__price-new">6264 руб</div>
                                                    <div class="good-card__price-old">8764 руб</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="screen">
            <div class="container screen__container">
                <h2 class="title-size-2 screen__title">New items</h2>
                <div class="goods-list screen__goods-list">
                    <div class="js-goods-slider-mobile-init goods-list__row">
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-1.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-2.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-3.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-1.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-2.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-3.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-1.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="goods-list__col goods-list__col--slider">
                            <article class="good-card goods-list__card">
                                <button
                                    class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                    type="button">
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-outline"></use>
                                    </svg>
                                    <svg class="icon action-btn__icon">
                                        <use xlink:href="images/sprite.svg#like-fill"></use>
                                    </svg>
                                </button>
                                <picture class="good-card__picture"><img src="images/good-card-2.jpg"
                                        alt="Silver earrings with cubic zirconia" /></picture>
                                <div class="good-card__content">
                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                            href="#">Silver earrings with cubic zirconia</a></h3>
                                    <div class="good-card__price">
                                        <div class="good-card__price-new">6264 руб</div>
                                        <div class="good-card__price-old">8764 руб</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="info-screen">
            <div class="container info-screen__container">
                <div class="info-screen__list-wrap">
                    <div class="info-screen__list">
                        <div class="info-screen__col">
                            <article class="info-card info-screen__card">
                                <picture class="info-card__picture"><img src="images/info-card-1.svg"
                                        alt="Доставка в течении 3-х дней" /></picture>
                                <div class="info-card__content">
                                    <h3 class="title-size-5 info-card__title font-normal">Доставка в течении 3-х дней</h3>
                                </div>
                            </article>
                        </div>
                        <div class="info-screen__col">
                            <article class="info-card info-screen__card">
                                <picture class="info-card__picture"><img src="images/info-card-2.svg"
                                        alt="30 дней на возврат" /></picture>
                                <div class="info-card__content">
                                    <h3 class="title-size-5 info-card__title font-normal">30 дней на возврат</h3>
                                </div>
                            </article>
                        </div>
                        <div class="info-screen__col">
                            <article class="info-card info-screen__card">
                                <picture class="info-card__picture"><img src="images/info-card-3.svg"
                                        alt="Бесплатная доставка" /></picture>
                                <div class="info-card__content">
                                    <h3 class="title-size-5 info-card__title">Бесплатная доставка</h3>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="seo-screen">
            <div class="container seo-screen__container">
                <div class="content seo-screen__text">
                    <p>Luxury Life offers a wide selection of silver products with unique collections of diamond
                        rings, earrings, pendants, necklaces made in the style of fashionable classics. In order for
                        us to be closer to you at every moment and in every part of the world, the Luxury Life
                        invites you to visit our online store. Luxury Life offers a wide selection of silver
                        products with unique collections of diamond rings, earrings, pendants, necklaces made in the
                        style of fashionable classics. In order for us to be closer to you at every moment and in
                        every part of the world, the Luxury Life invites you to visit our online store. Luxury Life
                        offers a wide selection of silver products with unique collections of diamond rings,
                        earrings, pendants, necklaces made in the style of fashionable classics. In order for us to
                        be closer to you at every moment and in every part of the world, the Luxury Life invites you
                        to visit our online store. Luxury Life offers a wide selection of silver products with
                        unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                        fashionable classics. In order for us to be closer to you at every moment and in every part
                        of the world, the Luxury Life invites you to visit our online store. Luxury Life offers a
                        wide selection of silver products with unique collections of diamond rings, earrings,
                        pendants, necklaces made in the style of fashionable classics. In order for us to be closer
                        to you at every moment and in every part of the world, the Luxury Life invites you to visit
                        our online store. Luxury Life offers a wide selection of silver products with unique
                        collections of diamond rings, earrings, pendants, necklaces made in the style of fashionable
                        classics. In order for us to be closer to you at every moment and in every part of the
                        world, the Luxury Life invites you to visit our online store. Luxury Life offers a wide
                        selection of silver products with unique collections of diamond rings, earrings, pendants,
                        necklaces made in the style of fashionable classics. In order for us to be closer to you at
                        every moment and in every part of the world, the Luxury Life invites you to visit our online
                        store. Luxury Life offers a wide selection of silver products with unique collections of
                        diamond rings, earrings, pendants, necklaces made in the style of fashionable classics. In
                        order for us to be closer to you at every moment and in every part of the world, the Luxury
                        Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                        products with unique collections of diamond rings, earrings, pendants, necklaces made in the
                        style of fashionable classics. In order for us to be closer to you at every moment and in
                        every part of the world, the Luxury Life invites you to visit our online store. Luxury Life
                        offers a wide selection of silver products with unique collections of diamond rings,
                        earrings, pendants, necklaces made in the style of fashionable classics. In order for us to
                        be closer to you at every moment and in every part of the world, the Luxury Life invites you
                        to visit our online store. Luxury Life offers a wide selection of silver products with
                        unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                        fashionable classics. In order for us to be closer to you at every moment and in every part
                        of the world, the Luxury Life invites you to visit our online store. Luxury Life offers a
                        wide selection of silver products with unique collections of diamond rings, earrings,
                        pendants, necklaces made in the style of fashionable classics. In order for us to be closer
                        to you at every moment and in every part of the world, the Luxury Life invites you to visit
                        our online store. Luxury Life offers a wide selection of silver products with unique
                        collections of diamond rings, earrings, pendants, necklaces made in the style of fashionable
                        classics. In order for us to be closer to you at every moment and in every part of the
                        world, the Luxury Life invites you to visit our online store. Luxury Life offers a wide
                        selection of silver products with unique collections of diamond rings, earrings, pendants,
                        necklaces made in the style of fashionable classics. In order for us to be closer to you at
                        every moment and in every part of the world, the Luxury Life invites you to visit our online
                        store.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
