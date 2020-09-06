@if ($paginator->hasPages())
    <div class="row pt-5">
        <div class="col-md-6">
        <p class="font-weight-bold">Result - ({{ $paginator->count() }} out of {{ $paginator->total() }})</p>
        </div>
        <div class="col-md-6">
            <nav aria-label="Page navigation example">
                <ul class="pagination float-right ">
                
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
        
                    @else
                    <li class="page-item ">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">Previous</a>
                    </li>
                    @endif
                    @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                    @endif
        
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            
                                <li class="page-item active"><a class="page-link" >{{ $page }}</a></li>
                            @else
                                
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
        
                {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
                    </li>
                    @endif
                </ul>
            </nav>

        
        </div>
    </div>   
@endif
