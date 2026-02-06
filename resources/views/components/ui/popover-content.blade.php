@php
    $classes = implode(' ', [
        'bg-(--popover) text-(--popover-foreground) z-50 flex flex-col gap-2.5 rounded-lg p-2.5 text-sm shadow-md ring-1 ring-(--border) outline-hidden',
    ]);
@endphp

<div x-show="open" x-trap="open" @click.outside="closePopover" x-transition tabindex="-1" role="dialog"
    data-slot="popover-content" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
