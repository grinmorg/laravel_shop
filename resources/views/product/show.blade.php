@extends('layouts.app')

@section('title', 'Product - ' . $product->title)

@section('content')
    <main class="main" role="main">
        <div class="layout">
            <div class="container layout__container">
                <header class="layout__header">
                    <div class="layout__breadcrumbs">
                        <ol class="breadcrumbs-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a
                                    href="{{ route('home') }}" itemprop="item"><span itemprop="name">Главная</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                <a href="{{ route('catalog') }}" itemprop="item">
                                    <span itemprop="name">Каталог</span>
                                </a>
                                <meta itemprop="position" content="2" />
                            </li>

                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                <span itemprop="item">
                                    <span itemprop="name">{{ $product->title }}</span>
                                </span>
                                <meta itemprop="position" content="3" />
                            </li>

                        </ol>
                    </div>
                    <h1 class="title-size-1 layout__title">{{ $product->title }}</h1>
                </header>
                <div class="card-el layout__card-page">
                    <div class="row layout__card-page-row">
                        <div class="row__col--7 layout__card-page-row-col--slider">
                            <div class="card-el__slider-wrap">
                                <div class="card-el__slider-mini">
                                    <div class="card-slider-mini">
                                        <div class="js-card-slider-mini-init card-slider-mini__el">
                                            <div class="card-slider-mini__slide">
                                                <picture class="card-slider-mini__picture"><img
                                                        class="card-slider-mini__img"
                                                        src="{{ $product->makeThumbnail('70x70') }}"
                                                        alt="{{ $product->title }}" />
                                                </picture>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-el__slider-main">
                                    <div class="card-slider-main">
                                        <div class="js-card-slider-main-init card-slider-main__el">
                                            <div class="card-slider-main__slide">
                                                <picture class="card-slider-main__picture"><img
                                                        class="card-slider-main__img"
                                                        src="{{ $product->makeThumbnail('700x700') }}"
                                                        alt="{{ $product->title }}" />
                                                </picture>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row__col--5 layout__card-page-row-col--content">
                            <div class="card-el__content">
                                <p class="card-el__good-code">артикул::{{ $product->id }}</p>
                                <table class="card-el__characteristics">
                                    <tbody>
                                        @foreach ($product->properties as $property)
                                            <tr>
                                                <td>{{ $property->title }}:</td>
                                                <td>{{ $property->pivot->value }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button class="js-btn-detail btn-detail card-el__detail" type="button"
                                    data-title-active="Скрыть обратно">Показать описание<span class="btn-detail__dropdown">
                                        <span class="btn-detail__dropdown-inner">
                                            {{ $product->text }}
                                        </span></span></button>
                                @foreach ($options as $option => $values)
                                    <div class="card-el__item">
                                        <div class="card-el__subtitle">{{ $option }}:</div>
                                        <div class="size-label-list card-el__size-label-list">
                                            <div class="size-label-list__inner">
                                                @foreach ($values as $idx => $value)
                                                    <div class="size-label-list__inner-item">
                                                        <label
                                                            class="size-label size-label--size-md size-label--theme-dark">
                                                            <input class="size-label__control" @checked($idx == 0)
                                                                type="radio" name="{{ $option }}[]"
                                                                value="{{ $value->id }}" /><span
                                                                class="size-label__inner"><span
                                                                    class="size-label__title">{{ $value->title }}</span></span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="card-el__item">
                                    <div class="card-el__subtitle">Количество:</div>
                                    <div class="card-el__count">
                                        <button
                                            class="js-order-good-card-btn-count-minus btn-count btn-count--size-lg btn-count--theme-black card-el__count-btn card-el__count-btn--minus"
                                            type="button">
                                            <svg class="icon btn-count__icon">
                                                <use xlink:href="/images/sprite.svg#icon-minus-big"></use>
                                            </svg>
                                        </button><span class="card-el__count-amount">1</span>
                                        <button
                                            class="js-order-good-card-btn-count-plus btn-count btn-count--size-lg btn-count--theme-black card-el__count-btn card-el__count-btn--plus"
                                            type="button">
                                            <svg class="icon btn-count__icon">
                                                <use xlink:href="/images/sprite.svg#icon-plus-big"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-el__price">
                                    <div class="card-el__price-inner">
                                        <p class="card-el__price-new">{{ $product->price }} руб</p>
                                        {{-- <p class="card-el__price-old">456$</p> --}}
                                    </div>
                                </div>
                                <div class="btn-group card-el__btns-action">
                                    <div class="btn-group__list">
                                        <div class="btn-group__list-item">
                                            <button class="btn btn--size-md btn--theme-dark" type="button"><span
                                                    class="btn__inner">
                                                    <svg class="icon btn__icon btn__icon--rtl">
                                                        <use xlink:href="/images/sprite.svg#basket"></use>
                                                    </svg><span class="btn__title">В корзину</span></span></button>
                                        </div>
                                        <div class="btn-group__list-item">
                                            <button
                                                class="js-card-page-favorites btn btn--size-md btn--theme-gray btn--type-action"
                                                type="button"><span class="btn__inner">
                                                    <svg class="icon btn__icon">
                                                        <use xlink:href="/images/sprite.svg#like-outline"></use>
                                                    </svg>
                                                    <svg class="icon btn__icon">
                                                        <use xlink:href="/images/sprite.svg#like-fill"></use>
                                                    </svg></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-el__benefits">
                                    <div class="card-el__benefits-item">
                                        <svg class="icon card-el__benefits-item-icon">
                                            <use xlink:href="/images/sprite.svg#checked"></use>
                                        </svg>
                                        <div class="card-el__benefits-item-text">Free delivery</div>
                                    </div>
                                    <div class="card-el__benefits-item">
                                        <svg class="icon card-el__benefits-item-icon">
                                            <use xlink:href="/images/sprite.svg#checked"></use>
                                        </svg>
                                        <div class="card-el__benefits-item-text">30 days return</div>
                                    </div>
                                    <div class="card-el__benefits-item">
                                        <svg class="icon card-el__benefits-item-icon">
                                            <use xlink:href="/images/sprite.svg#checked"></use>
                                        </svg>
                                        <div class="card-el__benefits-item-text">Free delivery</div>
                                    </div>
                                </div>
                                <div class="card-el__social">
                                    <p class="card-el__social-title">Share this item</p>
                                    <div class="sc-block sc-block--theme-dark sc-block--size-md card-el__social-list">
                                        <ul class="sc-block__list">
                                            <li class="sc-block__item"><a class="sc-block__link" href="#">
                                                    <svg class="icon sc-block__icon">
                                                        <use xlink:href="/images/sprite.svg#sc-telegram"></use>
                                                    </svg></a></li>
                                            <li class="sc-block__item"><a class="sc-block__link" href="#">
                                                    <svg class="icon sc-block__icon">
                                                        <use xlink:href="/images/sprite.svg#sc-facebook"></use>
                                                    </svg></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row__col--12 layout__card-page-row-col--cheaper">
                            <section class="layout__card-page-cheaper">
                                <h2 class="title-size-2 layout__card-page-cheaper-title">It's cheaper together</h2>
                                <div class="cheaper-block layout__card-page-cheaper-block">
                                    <div class="row cheaper-block__row">
                                        <div class="row__col--9 cheaper-block__col--content">
                                            <div class="cheaper-block__list">
                                                <article class="cheaper-card cheaper-block__list-card">
                                                    <div class="cheaper-card__media">
                                                        <picture class="cheaper-card__picture"><img
                                                                src="/images/good-card-1.jpg" alt="" /></picture>
                                                    </div>
                                                    <div class="cheaper-card__content">
                                                        <h3 class="cheaper-card__title"><a class="cheaper-card__link"
                                                                href="#">Silver earrings with cubic zirconia</a></h3>
                                                        <div class="cheaper-card__price">
                                                            <div class="cheaper-card__price-new">6264 руб</div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <article class="cheaper-card cheaper-block__list-card">
                                                    <div class="cheaper-card__media">
                                                        <picture class="cheaper-card__picture"><img
                                                                src="/images/good-card-1.jpg" alt="" /></picture>
                                                    </div>
                                                    <div class="cheaper-card__content">
                                                        <h3 class="cheaper-card__title"><a class="cheaper-card__link"
                                                                href="#">Silver earrings with cubic zirconia</a></h3>
                                                        <div class="cheaper-card__price">
                                                            <div class="cheaper-card__price-new">6264 руб</div>
                                                            <div class="cheaper-card__price-old">8764 руб</div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <div class="row__col--3 cheaper-block__col--aside">
                                            <div class="cheaper-block__aside">
                                                <div class="cheaper-block__aside-price">
                                                    <div class="cheaper-block__aside-price-new">6264$</div>
                                                    <div class="cheaper-block__aside-price-old">6264$</div>
                                                </div>
                                                <button class="btn btn--size-md btn--theme-light cheaper-block__aside-btn"
                                                    type="button"><span class="btn__inner">
                                                        <svg class="icon btn__icon btn__icon--rtl">
                                                            <use xlink:href="/images/sprite.svg#basket"></use>
                                                        </svg><span class="btn__title">Add cart</span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (!empty($also_products))
            <section class="screen">
                <div class="container screen__container">
                    <h2 class="title-size-2 screen__title">Просмотренные товары</h2>
                    <div class="goods-list screen__goods-list">
                        <div class="js-goods-slider-mobile-init goods-list__row">
                            @foreach ($also_products as $also_product)
                            <div class="goods-list__col goods-list__col--slider">
                                <article class="good-card goods-list__card">
                                    <button
                                        class="js-good-card-favorites action-btn action-btn--size-md good-card__btn-favorites"
                                        type="button">
                                        <svg class="icon action-btn__icon">
                                            <use xlink:href="/images/sprite.svg#like-outline"></use>
                                        </svg>
                                        <svg class="icon action-btn__icon">
                                            <use xlink:href="/images/sprite.svg#like-fill"></use>
                                        </svg>
                                    </button>
                                    <picture class="good-card__picture"><img src="{{ $product->makeThumbnail('400x400') }}"
                                            alt="{{ $also_product->title }}" /></picture>
                                    <div class="good-card__content">
                                        <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                                href="{{ route('product', $also_product->slug) }}">{{ $also_product->title }}</a></h3>
                                        <div class="good-card__price">
                                            <div class="good-card__price-new">{{ $also_product->price }} руб</div>
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
                            <picture class="promotions-card__banner"><img src="/images/promotions-card-1.jpg"
                                    alt="Gift certificates" /></picture>
                        </a></div>
                    <div class="promotions-section__slider-slide"><a
                            class="promotions-card promotions-card--banner promotions-section__slider-card"
                            href="#">
                            <picture class="promotions-card__banner"><img src="/images/promotions-card-2.jpg"
                                    alt="Rings engagement" /></picture>
                        </a></div>
                    <div class="promotions-section__slider-slide"><a
                            class="promotions-card promotions-card--banner promotions-section__slider-card"
                            href="#">
                            <picture class="promotions-card__banner"><img src="/images/promotions-card-1.jpg"
                                    alt="Gift certificates" /></picture>
                        </a></div>
                    <div class="promotions-section__slider-slide"><a
                            class="promotions-card promotions-card--banner promotions-section__slider-card"
                            href="#">
                            <picture class="promotions-card__banner"><img src="/images/promotions-card-2.jpg"
                                    alt="Rings engagement" /></picture>
                        </a></div>
                </div>
            </div>
        </section>
        <section class="info-screen">
            <div class="container info-screen__container">
                <div class="info-screen__list-wrap">
                    <div class="info-screen__list">
                        <div class="info-screen__col">
                            <article class="info-card info-screen__card">
                                <picture class="info-card__picture"><img src="/images/info-card-1.svg"
                                        alt="Доставка в течении 3-х дней" /></picture>
                                <div class="info-card__content">
                                    <h3 class="title-size-5 info-card__title">Доставка в течении 3-х дней</h3>
                                </div>
                            </article>
                        </div>
                        <div class="info-screen__col">
                            <article class="info-card info-screen__card">
                                <picture class="info-card__picture"><img src="/images/info-card-2.svg"
                                        alt="30 дней на возврат" /></picture>
                                <div class="info-card__content">
                                    <h3 class="title-size-5 info-card__title font-normal">30 дней на возврат</h3>
                                </div>
                            </article>
                        </div>
                        <div class="info-screen__col">
                            <article class="info-card info-screen__card">
                                <picture class="info-card__picture"><img src="/images/info-card-3.svg"
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
                    <p>Luxury Life offers a wide selection of silver products with unique collections of diamond rings,
                        earrings, pendants, necklaces made in the style of fashionable classics. In order for us to be
                        closer to you at every moment and in every part of the world, the Luxury Life invites you to visit
                        our online store. Luxury Life offers a wide selection of silver products with unique collections of
                        diamond rings, earrings, pendants, necklaces made in the style of fashionable classics. In order for
                        us to be closer to you at every moment and in every part of the world, the Luxury Life invites you
                        to visit our online store. Luxury Life offers a wide selection of silver products with unique
                        collections of diamond rings, earrings, pendants, necklaces made in the style of fashionable
                        classics. In order for us to be closer to you at every moment and in every part of the world, the
                        Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                        products with unique collections of diamond rings, earrings, pendants, necklaces made in the style
                        of fashionable classics. In order for us to be closer to you at every moment and in every part of
                        the world, the Luxury Life invites you to visit our online store. Luxury Life offers a wide
                        selection of silver products with unique collections of diamond rings, earrings, pendants, necklaces
                        made in the style of fashionable classics. In order for us to be closer to you at every moment and
                        in every part of the world, the Luxury Life invites you to visit our online store. Luxury Life
                        offers a wide selection of silver products with unique collections of diamond rings, earrings,
                        pendants, necklaces made in the style of fashionable classics. In order for us to be closer to you
                        at every moment and in every part of the world, the Luxury Life invites you to visit our online
                        store. Luxury Life offers a wide selection of silver products with unique collections of diamond
                        rings, earrings, pendants, necklaces made in the style of fashionable classics. In order for us to
                        be closer to you at every moment and in every part of the world, the Luxury Life invites you to
                        visit our online store. Luxury Life offers a wide selection of silver products with unique
                        collections of diamond rings, earrings, pendants, necklaces made in the style of fashionable
                        classics. In order for us to be closer to you at every moment and in every part of the world, the
                        Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                        products with unique collections of diamond rings, earrings, pendants, necklaces made in the style
                        of fashionable classics. In order for us to be closer to you at every moment and in every part of
                        the world, the Luxury Life invites you to visit our online store. Luxury Life offers a wide
                        selection of silver products with unique collections of diamond rings, earrings, pendants, necklaces
                        made in the style of fashionable classics. In order for us to be closer to you at every moment and
                        in every part of the world, the Luxury Life invites you to visit our online store. Luxury Life
                        offers a wide selection of silver products with unique collections of diamond rings, earrings,
                        pendants, necklaces made in the style of fashionable classics. In order for us to be closer to you
                        at every moment and in every part of the world, the Luxury Life invites you to visit our online
                        store. Luxury Life offers a wide selection of silver products with unique collections of diamond
                        rings, earrings, pendants, necklaces made in the style of fashionable classics. In order for us to
                        be closer to you at every moment and in every part of the world, the Luxury Life invites you to
                        visit our online store. Luxury Life offers a wide selection of silver products with unique
                        collections of diamond rings, earrings, pendants, necklaces made in the style of fashionable
                        classics. In order for us to be closer to you at every moment and in every part of the world, the
                        Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                        products with unique collections of diamond rings, earrings, pendants, necklaces made in the style
                        of fashionable classics. In order for us to be closer to you at every moment and in every part of
                        the world, the Luxury Life invites you to visit our online store.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
