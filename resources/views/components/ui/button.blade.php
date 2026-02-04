@props(['href' => null])

@php
    // VARIANTS
    $defaultVariantClasses = implode(' ', [
        'focus-visible:border-(--ring)',
        'focus-visible:ring-(--ring)/50',
        'bg-(--primary)',
        'text-(--primary-foreground)',
        $href ? 'hover:bg-(--primary)/80' : '',
    ]);

    $outlineVariantClasses = implode(' ', [
        'data-[variant="outline"]:focus-visible:border-(--ring)',
        'data-[variant="outline"]:focus-visible:ring-(--ring)/50',
        'data-[variant="outline"]:border',
        'data-[variant="outline"]:border-(--border)',
        'data-[variant="outline"]:bg-(--background)',
        'data-[variant="outline"]:text-(--foreground)',
        'data-[variant="outline"]:hover:bg-(--muted)',
        'data-[variant="outline"]:hover:text-(--foreground)',
        'data-[variant="outline"]:dark:bg-(--input)/30',
        'data-[variant="outline"]:dark:border-(--input)',
        'data-[variant="outline"]:dark:hover:bg-(--input)/50',
        'data-[variant="outline"]:aria-expanded:bg-(--muted)',
        'data-[variant="outline"]:aria-expanded:text-(--foreground)',
    ]);

    $secondaryVariantClasses = implode(' ', [
        'data-[variant="secondary"]:focus-visible:border-(--ring)',
        'data-[variant="secondary"]:focus-visible:ring-(--ring)/50',
        'data-[variant="secondary"]:bg-(--secondary)',
        'data-[variant="secondary"]:text-(--secondary-foreground)',
        'data-[variant="secondary"]:hover:bg-(--secondary)/80',
        'data-[variant="secondary"]:aria-expanded:bg-(--secondary)',
        'data-[variant="secondary"]:aria-expanded:text-(--secondary-foreground)',
    ]);

    $ghostVariantClasses = implode(' ', [
        'data-[variant="ghost"]:focus-visible:border-(--ring)',
        'data-[variant="ghost"]:focus-visible:ring-(--ring)/50',
        'data-[variant="ghost"]:hover:bg-(--muted)',
        'data-[variant="ghost"]:bg-transparent',
        'data-[variant="ghost"]:text-(--foreground)',
        'data-[variant="ghost"]:hover:text-(--foreground)',
        'data-[variant="ghost"]:dark:hover:bg-(--muted)/50',
        'data-[variant="ghost"]:aria-expanded:bg-(--muted)',
        'data-[variant="ghost"]:aria-expanded:text-(--foreground)',
    ]);

    $destructiveVariantClasses = implode(' ', [
        'data-[variant="destructive"]:bg-(--destructive)/10',
        'data-[variant="destructive"]:hover:bg-(--destructive)/20',
        'data-[variant="destructive"]:focus-visible:ring-(--destructive)/20',
        'data-[variant="destructive"]:dark:focus-visible:ring-(--destructive)/40',
        'data-[variant="destructive"]:dark:bg-(--destructive)/20',
        'data-[variant="destructive"]:text-(--destructive)',
        'data-[variant="destructive"]:focus-visible:border-(--destructive)/40',
        'data-[variant="destructive"]:dark:hover:bg-(--destructive)/30',
    ]);

    $linkVariantClasses = implode(' ', [
        'data-[variant="link"]:focus-visible:border-(--ring)',
        'data-[variant="link"]:focus-visible:ring-(--ring)/50',
        'data-[variant="link"]:text-(--primary)',
        'data-[variant="link"]:bg-transparent',
        'data-[variant="link"]:underline-offset-4',
        'data-[variant="link"]:hover:underline',
    ]);

    // SIZE

    $defaultSizeClasses = implode(' ', [
        'h-8',
        'gap-1.5',
        'px-2.5',
        'rounded-lg',
        'has-data-[icon=inline-end]:pr-2',
        'has-data-[icon=inline-start]:pl-2',
        '[&_svg:not([class*="size-"])]:size-4',
    ]);

    $extraSmallSizeClasses = implode(' ', [
        'data-[size="xs"]:h-6',
        'data-[size="xs"]:gap-1',
        'data-[size="xs"]:rounded-[min(var(--radius-md),10px)]',
        'data-[size="xs"]:px-2',
        'data-[size="xs"]:text-xs',
        'data-[size="xs"]:in-data-[slot=button-group]:rounded-lg',
        'data-[size="xs"]:has-data-[icon=inline-end]:pr-1.5',
        'data-[size="xs"]:has-data-[icon=inline-start]:pl-1.5',
        'data-[size="xs"]:[&_svg:not([class*="size-"])]:size-3',
    ]);

    $extraSmallIconSizeClasses = implode(' ', [
        'data-[size="icon-xs"]:size-6',
        'data-[size="icon-xs"]:rounded-[min(var(--radius-md),10px)]',
        'data-[size="icon-xs"]:in-data-[slot=button-group]:rounded-lg',
        'data-[size="icon-xs"]:[&_svg:not([class*="size-"])]:size-3',
    ]);

    $smallSizeClasses = implode(' ', [
        'data-[size="sm"]:h-7',
        'data-[size="sm"]:gap-1',
        'data-[size="sm"]:rounded-[min(var(--radius-md),12px)]',
        'data-[size="sm"]:px-2.5',
        'data-[size="sm"]:text-[0.8rem]',
        'data-[size="sm"]:in-data-[slot=button-group]:rounded-lg',
        'data-[size="sm"]:has-data-[icon=inline-end]:pr-1.5',
        'data-[size="sm"]:has-data-[icon=inline-start]:pl-1.5',
        'data-[size="sm"]:[&_svg:not([class*="size-"])]:size-3.5',
    ]);

    $smallIconSizeClasses = implode(' ', [
        'data-[size="icon-sm"]:size-7',
        'data-[size="icon-sm"]:rounded-[min(var(--radius-md),12px)]',
        'data-[size="icon-sm"]:in-data-[slot=button-group]:rounded-lg',
        'data-[size="icon-sm"]:[&_svg:not([class*="size-"])]:size-4',
    ]);

    $iconSizeClasses = implode(' ', [
        'data-[size="icon"]:size-8',
        'data-[size="icon"]:rounded-lg',
        'data-[size="icon"]:[&_svg:not([class*="size-"])]:size-4',
    ]);

    $largeSizeClasses = implode(' ', [
        'data-[size="lg"]:h-9',
        'data-[size="lg"]:gap-1.5',
        'data-[size="lg"]:px-2.5',
        'data-[size="lg"]:rounded-lg',
        'data-[size="lg"]:has-data-[icon=inline-end]:pr-3',
        'data-[size="lg"]:has-data-[icon=inline-start]:pl-3',
        'data-[size="lg"]:[&_svg:not([class*="size-"])]:size-4',
    ]);

    $largeIconSizeClasses = implode(' ', [
        'data-[size="icon-lg"]:size-9',
        'data-[size="icon-lg"]:rounded-lg',
        'data-[size="icon-lg"]:[&_svg:not([class*="size-"])]:size-4',
    ]);

    $variantClasses = implode(' ', [
        $defaultVariantClasses,
        $outlineVariantClasses,
        $secondaryVariantClasses,
        $ghostVariantClasses,
        $destructiveVariantClasses,
        $linkVariantClasses,
    ]);

    $sizeClasses = implode(' ', [
        $defaultSizeClasses,
        $extraSmallSizeClasses,
        $extraSmallIconSizeClasses,
        $smallSizeClasses,
        $smallIconSizeClasses,
        $iconSizeClasses,
        $largeSizeClasses,
        $largeIconSizeClasses,
    ]);

    $baseClasses = implode(' ', [
        'aria-invalid:ring-(--destructive)/20',
        'dark:aria-invalid:ring-(--destructive)/40',
        'aria-invalid:border-(--destructive)',
        'dark:aria-invalid:border-(--destructive)/50',
        'bg-clip-padding',
        'text-sm',
        'font-medium',
        'focus-visible:ring-[3px]',
        'aria-invalid:ring-[3px]',
        'inline-flex',
        'items-center',
        'justify-center',
        'whitespace-nowrap',
        'transition-all',
        'disabled:pointer-events-none',
        'disabled:opacity-50',
        '[&_svg]:pointer-events-none',
        'shrink-0',
        '[&_svg]:shrink-0',
        'outline-none',
        'group/button',
        'select-none',
    ]);

    $classes = implode(' ', [$baseClasses, $variantClasses, $sizeClasses, $href ? 'cursor-pointer' : '']);
@endphp

@if ($href)
    <a href="{{ $href }}" style="display: contents;">
@endif
<button {{ $attributes->merge(['type' => 'button', 'data-slot' => 'button', 'class' => $classes]) }}>
    {{ $slot }}
</button>
@if ($href)
    </a>
@endif
