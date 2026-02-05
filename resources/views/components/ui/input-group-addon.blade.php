@php
    $classes = implode(' ', [
        // INLINE START
        'data-[align="inline-start"]:justify-center',
        'data-[align="inline-start"]:pl-2',
        'data-[align="inline-start"]:has-[>button]:ml-[-0.3rem]',
        'data-[align="inline-start"]:has-[>kbd]:ml-[-0.15rem]',
        'data-[align="inline-start"]:order-first',

        // INLINE END
        'data-[align="inline-end"]:justify-center',
        'data-[align="inline-end"]:pr-2',
        'data-[align="inline-end"]:has-[>button]:mr-[-0.3rem]',
        'data-[align="inline-end"]:has-[>kbd]:mr-[-0.15rem]',
        'data-[align="inline-end"]:order-last',

        // BLOCK START
        'data-[align="block-start"]:px-2.5',
        'data-[align="block-start"]:pt-2',
        'data-[align="block-start"]:group-has-[>input]/input-group:pt-2',
        'data-[align="block-start"]:[.border-b]:pb-2',
        'data-[align="block-start"]:order-first',
        'data-[align="block-start"]:w-full',
        'data-[align="block-start"]:justify-start',

        // BLOCK END
        'data-[align="block-end"]:px-2.5',
        'data-[align="block-end"]:pb-2',
        'data-[align="block-end"]:group-has-[>input]/input-group:pb-2',
        'data-[align="block-end"]:[.border-t]:pt-2',
        'data-[align="block-end"]:order-last',
        'data-[align="block-end"]:w-full',
        'data-[align="block-end"]:justify-start',

        // BASE
        'text-(--muted-foreground)',
        'h-auto',
        'gap-2',
        'py-1.5',
        'text-sm',
        'font-medium',
        'group-data-[disabled=true]/input-group:opacity-50',
        '[&>kbd]:rounded-[calc(var(--radius)-5px)]',
        '[&>svg:not([class*="size-"])]:size-4',
        'flex',
        'cursor-text',
        'items-center',
        'select-none',
    ]);
@endphp

<div role="group" data-slot="input-group-addon"
    {{ $attributes->merge(['data-align' => 'inline-start', 'class' => $classes]) }}>
    {{ $slot }}
</div>
