@if (count($breadcrumbs))
    <div class="c-breadcrumb1__url">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$loop->last)
                <a href="{{ $breadcrumb->url }}" class="c-breadcrumb1__link">{{ $breadcrumb->title }}</a>
            @else
                <span class="c-breadcrumb1__current"> / {{ $breadcrumb->title }}</span>
            @endif
        @endforeach
    </div>
@endif
