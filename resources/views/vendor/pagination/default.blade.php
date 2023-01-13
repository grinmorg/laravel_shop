@if ($paginator->hasPages())
    <nav class="pagination">
        <ul class="pagination__list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled pagination__item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="pagination__btn pagination__btn--prev" aria-hidden="true">
                        <svg
                            class="icon pagination__btn-icon">
                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                        </svg>
                    </span>
                </li>
            @else
                <li class="pagination__item">
                    <a class="pagination__btn pagination__btn--prev" href="{{ $paginator->previousPageUrl() }}"
                        rel="prev" aria-label="@lang('pagination.previous')">
                        <svg class="icon pagination__btn-icon">
                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                        </svg>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled pagination__item" aria-disabled="true"><span
                            class="pagination__link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination__item" aria-current="page"><span
                                    class="pagination__link is-active">{{ $page }}</span></li>
                        @else
                            <li class="pagination__item"><a href="{{ $url }}"
                                    class="pagination__link">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__item">
                    <a href="{{ $paginator->nextPageUrl() }}" class="pagination__btn pagination__btn--next"
                        rel="next" aria-label="@lang('pagination.next')">
                        <svg class="icon pagination__btn-icon">
                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                        </svg>
                    </a>
                </li>
            @else
                <li class="disabled pagination__item" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="pagination__btn pagination__btn--next" aria-hidden="true">
                        <svg class="icon pagination__btn-icon">
                            <use xlink:href="images/sprite.svg#arrow-type-1"></use>
                        </svg>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
