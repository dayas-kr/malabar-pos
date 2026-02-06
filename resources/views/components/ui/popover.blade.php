<div x-data="popover" @keydown.escape.window="closePopover"
    @toggle-popover.window="handleDispatch($event, 'toggle')" @open-popover.window="handleDispatch($event, 'open')"
    @close-popover.window="handleDispatch($event, 'close')" {{ $attributes }}>
    {{ $slot }}
</div>
