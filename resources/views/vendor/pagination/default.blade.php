@if ($paginator->hasPages())
    <div class="pagination__blk">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @if ($paginator->onFirstPage())
                    {{-- nothing --}}
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                            <i class="far fa-angle-left"></i> Vorige
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true">
                            <a class="page-link" href="#">...</a>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item">
                                    <a class="page-link active" href="#">{{ $page }}</a>
                                </li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                                Volgende <i class="far fa-angle-right"></i>
                            </a>
                        </li>
                    @endif

                @endforeach

            </ul>
        </nav>
    </div>
@endif