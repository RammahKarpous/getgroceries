<div class="mobile-header">
    <div class="wrapper">
        @if ($type === "inSubPage")
            {{-- <a href="{{ url()->previous() }}" class="arrow-back"><x-chevron-left-icon /></a> --}}
        @endif

        <p>{{ $title }}</p>
    </div>
</div>