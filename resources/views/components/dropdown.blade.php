@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'dropdown-content'])

@php
$alignmentClasses = match ($align) {
    'left' => 'dropdown-left',
    'top' => 'dropdown-top',
    default => 'dropdown-right',
};

$width = match ($width) {
    '48' => 'dropdown-width-48',
    default => $width,
};
@endphp

<div class="dropdown" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div class="dropdown-trigger" @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
         class="dropdown-menu {{ $width }} {{ $alignmentClasses }}"
         style="display: none;"
         @click="open = false">
        <div class="{{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
