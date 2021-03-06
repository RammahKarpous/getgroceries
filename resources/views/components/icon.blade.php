<svg
    width="{{ $size }}"
    height="{{ $size }}"
    viewBox="0 0 {{ $size }} {{ $size }}"
    fill="none"
    xmlns="http://www.w3.org/2000/svg"
>
    @includeIf('icons.' . $icon, ['colour' => $colour])
</svg>