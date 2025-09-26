@props(['technology'])
<div title="{{ $technology->name }}"
    class="group flex flex-col items-center justify-center gap-3 text-center transition-all duration-300 transform hover:-translate-y-1.5">

    <div class="w-20 h-20 p-4 bg-white dark:bg-navy-light rounded-full shadow-md dark:shadow-lg border-2 border-gray-200 dark:border-navy-lightest flex items-center justify-center transition-all duration-300 group-hover:shadow-xl group-hover:border-sky-500 dark:group-hover:border-sky-400">
        @php
            $iconPath = public_path($technology->svg_icon);
        @endphp

        @if(file_exists($iconPath))
            {!! file_get_contents($iconPath) !!}
        @else
            <span class="text-red-500 font-bold text-2xl">?</span>
        @endif
    </div>

    <span class="text-md font-semibold text-gray-700 dark:text-slate transition-colors duration-300 group-hover:text-sky-500 dark:group-hover:text-sky-400">
        {{ $technology->name }}
    </span>
</div>
