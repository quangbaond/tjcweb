@if (count($breadcrumbs))

    <nav class="flex justify-between max-w-screen-xl mx-auto my-2 p-3" aria-label="Breadcrumb">
        <ol class="inline-flex items-center mb-3 sm:mb-0">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}" class="text-gray-400 hover:text-gray-500">{{ $breadcrumb->title }}</a>
                    </li>
                    <span class="mx-2 text-gray-400">/</span>
                @else
                    <li class="text-gray-500" aria-current="page">{{ $breadcrumb->title }}</li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif


