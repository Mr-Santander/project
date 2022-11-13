@props(['active'=>false])

@php
    $clases = $active
                ?'block py-2 pr-4 pl-3 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-white'
                :'block py-2 pr-4 pl-3 lg:text-white md:text-white sm:text-white  rounded hover:bg-transparent md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 dark:text-green-700 md:dark:hover:text-green-700 dark:hover:bg-gray-700 dark:hover:text-green-700 md:dark:hover:bg-withe ';
@endphp

<a {{ $attributes->merge(['class' => $clases]) }}>
    {{ $slot }}
</a>