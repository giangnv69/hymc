@if ($paginator->hasPages())
    <?php $link_limit = 7;  ?>
    <ul class="list-inline text-right">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="list-inline-item "><a href="#">&laquo;</a></li>
        @else
            <li class="list-inline-item"><a href="{{ $paginator->url( 1 ) }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="list-inline-item"><a href="#" class="active">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                {{-- @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="list-inline-item"><a href="#" class="active">{{ $page }}</a></li>
                    @elseif($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2)
                        <li class="list-inline-item"><a href="{{ $url }}">{{ $page }}</a></li>
                    @elseif ($page == $paginator->lastPage())
                        <li class="list-inline-item disabled"><a href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                        <li class="list-inline-item"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach --}}
                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    <?php
                        $half_total_links = floor($link_limit / 2);
                        $from = $paginator->currentPage() - $half_total_links;
                        $to = $paginator->currentPage() + $half_total_links;
                    if ($paginator->currentPage() < $half_total_links) {
                       $to += $half_total_links - $paginator->currentPage();
                    }
                    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                    }
                    ?>
                    @if ($from < $i && $i < $to)
                        <li class="list-inline-item">
                            <a href="{{ $paginator->url($i) }}" class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">{{ $i }}</a>
                        </li>
                    @endif
                @endfor

               
                    


            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="list-inline-item"><a href="{{ $paginator->url( $paginator->lastPage() ) }}" rel="next">&raquo;</a></li>
        @else
            <li class="list-inline-item"><a href="#">&raquo;</a></li>
        @endif
    </ul>
@endif
