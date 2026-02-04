@php
    $checkboxCls = implode(' ', [
        'dark:bg-(--input)/30',
        'peer-checked:text-(--primary-foreground)',
        'border-(--input)',
        'peer-checked:border-(--primary)',
        'peer-checked:bg-(--primary) dark:peer-checked:bg-(--primary)',
        'peer-focus-visible:ring-[3px]',
        'peer-focus-visible:border-(--ring)',
        'peer-focus-visible:ring-(--ring)/50',
        'peer-focus-visible:peer-checked:border-(--primary)',
        'aria-invalid:ring-(--destructive)/20 dark:aria-invalid:ring-(--destructive)/40 aria-invalid:border-(--destructive)',
        'size-4 shrink-0 rounded-sm border shadow-xs',
        'transition-shadow outline-none',
        'disabled:cursor-not-allowed disabled:opacity-50',

        '[&>.checkbox-indicator]:hidden',
        'peer-checked:[&>.checkbox-indicator]:grid',
        'peer-checked:[&>.checkbox-indicator]:place-content-center',
    ]);
@endphp

<label class="relative inline-flex items-center">
    <input type="checkbox" role="checkbox" {{ $attributes->merge(['class' => 'peer sr-only']) }} />

    <div class="{{ $checkboxCls }}">
        <span class="checkbox-indicator text-current transition-none" style="pointer-events: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-3.5">
                <path d="M20 6 9 17l-5-5"></path>
            </svg>
        </span>
    </div>
</label>
