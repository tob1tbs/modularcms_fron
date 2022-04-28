@if ($paginator->hasPages())
<ul class="pagination toolbox-item">
    @if ($paginator->onFirstPage())
    <li class="page-item disabled">
        <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
    </li>
    @else
    <li class="page-item">
        <a class="page-link page-link-btn" href="{{ $paginator->previousPageUrl() }}"><i class="icon-angle-left"></i></a>
    </li>
    @endif

    @foreach($elements as $element)
        @if (is_string($element))
        <li class="page-item"><span class="page-link">{{ $element }}</span></li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active">
                        <a class="page-link" href="javascript:;">{{ $page }} <span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
    <li class="page-item">
        <a class="page-link page-link-btn" href="{{ $paginator->nextPageUrl() }}"><i class="icon-angle-right"></i></a>
    </li>
    @else
    <li class="page-item disabled">
        <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
    </li>
    @endif
</ul>
@endif