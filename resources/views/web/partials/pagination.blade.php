@if ($paginator->hasPages())
    <!-- Pagination -->
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-label="Previous">
                <a href="#" aria-hidden="true">
                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" data-filter="page" data-value="{{ $paginator->currentPage() - 1 }}">
                    <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="#">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}" data-filter="page" data-value="{{ $page }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next" data-filter="page" data-value="{{ $paginator->currentPage() + 1 }}">
                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
            </li>
        @else
            <li class="disabled" aria-label="Next">
                <a href="#" aria-hidden="true">
                    <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                </a>
            </li>
        @endif
    </ul>
@endif
