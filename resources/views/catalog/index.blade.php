@extends('layouts.app')

@section('title', 'Catalog')

@section('content')
    <main class="main" role="main">
        <div class="page-poster">
            <picture class="img-cover page-poster__media"><img src="/images/page-poster-1.png" alt="Earrings" /></picture>
        </div>
        <div class="layout">
            <div class="container layout__container">
                <div class="layout__breadcrumbs">
                    <ol class="breadcrumbs-list" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><a
                                href="{{ route('home') }}" itemprop="item"><span itemprop="name">Главная</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            @if ($category->exists)
                                <a href="{{ route('catalog') }}" itemprop="item">
                                    <span itemprop="name">Каталог</span>
                                </a>
                            @else
                                <span itemprop="item">
                                    <span itemprop="name">Каталог</span>
                                </span>
                            @endif
                            <meta itemprop="position" content="2" />
                        </li>
                        @if ($category->exists)
                            <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                <span itemprop="item">
                                    <span itemprop="name">{{ $category->title }}</span>
                                </span>
                                <meta itemprop="position" content="3" />
                            </li>
                        @endif
                    </ol>
                </div>
                <div class="row layout__catalog">
                    <div class="row__col--12 layout__catalog-col--header">

                        <header class="layout__catalog-header">
                            <h1 class="title-size-1 layout__catalog-header-title">
                                Каталог
                                @if ($products->total())
                                    <span> - {{ $products->total() }} товаров</span>
                                @endif
                            </h1>
                            <button
                                class="js-filter-dropdown-main-init d-lg-block filter-btn layout__catalog-header-filter-btn"
                                type="button"><span class="filter-btn__inner"><span class="filter-btn__icon-wrap">
                                        <svg class="icon filter-btn__icon">
                                            <use xlink:href="images/sprite.svg#filter-type-1"></use>
                                        </svg></span><span class="filter-btn__text"><span
                                            class="filter-btn__title">Фильтр</span></span></span></button>
                            <div x-data="{}" class="layout__catalog-header-sort">
                                <form x-ref="sortForm" action="{{ route('catalog', $category) }}">
                                    <select name="sort" x-on:change="$refs.sortForm.submit()"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-3xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option value="">По умолчанию</option>
                                        <option @selected(request('sort') == 'price') value="price">От дешевых к дорогим</option>
                                        <option @selected(request('sort') == '-price') value="-price">От дорогих к дешевым</option>
                                        <option @selected(request('sort') == 'title') value="title">По наименованию</option>
                                    </select>
                                </form>
                            </div>
                        </header>

                        @if (!empty($categories))
                            <div class="w-full mb-8">
                                <nav class="p-2 space-x-4 bg-opacity-75 flex flex-wrap gap-4" aria-label="Tabs">
                                    @foreach ($categories as $item)
                                        <a href="{{ route('catalog', $item->slug ) }}"
                                            class="px-3 py-2 text-3xl font-medium rounded-md hover:no-underline transition-all
                                            @if ($category->title == $item->title)
                                            text-gray-800 bg-gray-300
                                            @else
                                            text-gray-600 hover:text-gray-900 bg-gray-100 hover:bg-gray-200
                                            @endif
                                            "
                                            aria-current="page">
                                            {{ $item->title }}
                                        </a>
                                    @endforeach

                                </nav>
                            </div>
                        @endif
                    </div>
                    <div class="row__col--3 layout__catalog-col--aside">
                        <aside class="layout__catalog-aside">
                            <div class="filter-dropdown--main filter-dropdown layout__catalog-aside-filter">
                                <div class="filter-dropdown__inner">
                                    <header class="d-lg-block modal-header filter-dropdown__header">
                                        <p class="modal-header__title">Filter</p>
                                        <button
                                            class="js-filter-dropdown-close btn-close btn-close--size-md modal-header__btn-close"
                                            type="button">
                                            <svg class="icon btn-close__icon">
                                                <use xlink:href="images/sprite.svg#close"></use>
                                            </svg>
                                        </button>
                                    </header>
                                    <div class="filter-dropdown__body">
                                        <form class="filter-dropdown__form" action="{{ route('catalog', $category) }}">
                                            <div class="filter-dropdown__price">
                                                <p class="layout__catalog-aside-subtitle">Цена</p>
                                                <div class="slider-el filter-dropdown__price-slider">
                                                    <div class="js-range-init slider-el__body" data-price-max="100000">
                                                    </div>
                                                </div>
                                                <div class="filter-dropdown__price-footer">
                                                    <input
                                                        class="js-input-amount-min input-amount filter-dropdown__price-input"
                                                        type="text" name="filters[price][from]"
                                                        value="{{ request('filters.price.from', 0) }}" />
                                                    <input
                                                        class="js-input-amount-max input-amount filter-dropdown__price-input"
                                                        type="text" name="filters[price][to]"
                                                        value="{{ request('filters.price.to', 100000) }}" />
                                                </div>
                                            </div>
                                            <div class="filter-dropdown__group">
                                                {{-- brands --}}
                                                <div class="filter-dropdown__group-item">
                                                    <p class="layout__catalog-aside-subtitle">Бренд</p>
                                                    <div class="checkbox-list filter-dropdown__checkbox-list">
                                                        @foreach ($brands as $brand)
                                                            <label class="checkbox-el filter-dropdown__checkbox-item">
                                                                <input class="checkbox-el__control" type="checkbox"
                                                                    name="filters[brands][{{ $brand->id }}]"
                                                                    value="{{ $brand->id }}"
                                                                    @checked(request('filters.brands.' . $brand->id))
                                                                    id="filters-brands-{{ $brand->id }}" />
                                                                <span class="checkbox-el__inner"><span
                                                                        class="checkbox-el__icon"></span><span
                                                                        class="checkbox-el__title">{{ $brand->title }}</span></span>
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                {{-- </> brands --}}

                                                {{-- <div class="filter-dropdown__group-item">
                                                    <p class="layout__catalog-aside-subtitle">Size</p>
                                                    <div class="checkbox-list filter-dropdown__checkbox-list">
                                                        <label class="checkbox-el filter-dropdown__checkbox-item">
                                                            <input class="checkbox-el__control" type="checkbox"
                                                                name="filterSize[]" checked="checked"
                                                                value="15.5" /><span class="checkbox-el__inner"><span
                                                                    class="checkbox-el__icon"></span><span
                                                                    class="checkbox-el__title">15.5</span></span>
                                                        </label>
                                                        <label class="checkbox-el filter-dropdown__checkbox-item">
                                                            <input class="checkbox-el__control" type="checkbox"
                                                                name="filterSize[]" value="16" /><span
                                                                class="checkbox-el__inner"><span
                                                                    class="checkbox-el__icon"></span><span
                                                                    class="checkbox-el__title">16</span></span>
                                                        </label>
                                                        <label class="checkbox-el filter-dropdown__checkbox-item">
                                                            <input class="checkbox-el__control" type="checkbox"
                                                                name="filterSize[]" value="16.5" /><span
                                                                class="checkbox-el__inner"><span
                                                                    class="checkbox-el__icon"></span><span
                                                                    class="checkbox-el__title">16.5</span></span>
                                                        </label>
                                                        <label class="checkbox-el filter-dropdown__checkbox-item">
                                                            <input class="checkbox-el__control" type="checkbox"
                                                                name="filterSize[]" value="17" /><span
                                                                class="checkbox-el__inner"><span
                                                                    class="checkbox-el__icon"></span><span
                                                                    class="checkbox-el__title">17</span></span>
                                                        </label>
                                                        <label class="checkbox-el filter-dropdown__checkbox-item">
                                                            <input class="checkbox-el__control" type="checkbox"
                                                                name="filterSize[]" value="17.5" /><span
                                                                class="checkbox-el__inner"><span
                                                                    class="checkbox-el__icon"></span><span
                                                                    class="checkbox-el__title">17.5</span></span>
                                                        </label>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <button type="submit" class="btn btn--size-md btn--theme-dark mt-4"
                                                tabindex="-1"><span class="btn__inner"><span
                                                        class="btn__title">Применить</span>
                                                    <svg class="icon btn__icon btn__icon--ltr">
                                                        <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                                                    </svg>
                                                </span>
                                                </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="row__col--9 layout__catalog-col--main">
                        <div class="layout__catalog-main">
                            <div class="goods-grid layout__catalog-main-goods-list">
                                <div class="goods-grid__inner">
                                    @foreach ($products as $idx => $product)
                                        <div
                                            class="
                                            goods-grid__col
                                        @if ($idx == 4) goods-grid__col--size-lg
                                        @else
                                        goods-grid__col--size-4 @endif
                                        ">
                                            <article class="good-card goods-grid__card">
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
                                                    @if ($idx == 4)
                                                        <img src="{{ $product->makeThumbnail('400x400') }}"
                                                            alt="{{ $product->title }}" />
                                                    @else
                                                        <img src="{{ $product->makeThumbnail('350x350') }}"
                                                            alt="{{ $product->title }}" />
                                                    @endif
                                                </picture>
                                                <div class="good-card__content">
                                                    <h3 class="title-size-5 good-card__title"><a class="good-card__link"
                                                            href="{{ route('product', $product->slug) }}">{{ $product->title }}</a></h3>
                                                    <div class="good-card__price">
                                                        <div class="good-card__price-new">{{ $product->price }} руб</div>
                                                        {{-- <div class="good-card__price-old">8764 грн</div> --}}
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="layout__catalog-main-pagination">
                                {{-- withQueryString нужен чтобы в пагинцию попадал GET запрос --}}
                                {{ $products->withQueryString()->links('pagination::default') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="promotions-section">
        <div class="container promotions-section__container">
            <h2 class="visually-hidden promotions-section__title">Promotions and discounts</h2>
            <div class="js-promotions-slider-init promotions-section__slider">
                <div class="promotions-section__slider-slide"><a
                        class="promotions-card promotions-card--banner promotions-section__slider-card" href="#">
                        <picture class="promotions-card__banner"><img src="/images/promotions-card-1.jpg"
                                alt="Gift certificates" /></picture>
                    </a></div>
                <div class="promotions-section__slider-slide"><a
                        class="promotions-card promotions-card--banner promotions-section__slider-card" href="#">
                        <picture class="promotions-card__banner"><img src="/images/promotions-card-2.jpg"
                                alt="Rings engagement" />
                        </picture>
                    </a></div>
                <div class="promotions-section__slider-slide"><a
                        class="promotions-card promotions-card--banner promotions-section__slider-card" href="#">
                        <picture class="promotions-card__banner"><img src="/images/promotions-card-1.jpg"
                                alt="Gift certificates" /></picture>
                    </a></div>
                <div class="promotions-section__slider-slide"><a
                        class="promotions-card promotions-card--banner promotions-section__slider-card" href="#">
                        <picture class="promotions-card__banner"><img src="/images/promotions-card-2.jpg"
                                alt="Rings engagement" />
                        </picture>
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
                    earrings,
                    pendants, necklaces made in the style of fashionable classics. In order for us to be closer to you at
                    every
                    moment and in every part of the world, the Luxury Life invites you to visit our online store. Luxury
                    Life
                    offers a wide selection of silver products with unique collections of diamond rings, earrings, pendants,
                    necklaces made in the style of fashionable classics. In order for us to be closer to you at every moment
                    and
                    in every part of the world, the Luxury Life invites you to visit our online store. Luxury Life offers a
                    wide
                    selection of silver products with unique collections of diamond rings, earrings, pendants, necklaces
                    made in
                    the style of fashionable classics. In order for us to be closer to you at every moment and in every part
                    of
                    the world, the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of
                    silver products with unique collections of diamond rings, earrings, pendants, necklaces made in the
                    style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store. Luxury Life offers a wide selection of silver
                    products with unique collections of diamond rings, earrings, pendants, necklaces made in the style of
                    fashionable classics. In order for us to be closer to you at every moment and in every part of the
                    world,
                    the Luxury Life invites you to visit our online store.</p>
            </div>
        </div>
    </div>
@endsection
