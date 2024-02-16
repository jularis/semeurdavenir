@if ($paginator->hasPages())
    <ul class="nav pagination post-pagination justify-content-center test-pagination">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="nav-item disabled"><span class="page-numbers current" aria-current="page">Previous</span></li>
        @else
            <li class="nav-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-numbers" title="previous">Previous</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="nav-item disabled"><span class="page-numbers current" aria-current="page">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="nav-item active"><span class="page-numbers current" aria-current="page">{{ $page }}</span></li>
                    @else
                        <li class="nav-item"><a href="{{ $url }}" class="page-numbers">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="nav-item"><a href="{{ $paginator->nextPageUrl() }}" class="next-page" title="next">Next</a></li>
        @else
            <li class="nav-item disabled"><span class="next-page current" aria-current="page">Next</span></li>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="nav-item"><a href="{{ $paginator->url($paginator->lastPage()) }}" class="last-page last-page" title="last">Last</a></li>
        @else
            <li class="nav-item disabled"><span class="last-page current" aria-current="page">Last</span></li>
        @endif
    </ul>
@endif
