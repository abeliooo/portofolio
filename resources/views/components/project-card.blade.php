@props(['project'])

<div class="project-card bg-white dark:bg-navy-light rounded-lg overflow-hidden shadow-md dark:shadow-2xl border border-gray-200 dark:border-navy-lightest transform hover:-translate-y-2 transition-all duration-300 cursor-pointer"
    data-title="{{ $project->title }}"
    data-description="{{ $project->long_description }}"
    data-image="{{ $project->image_url ?? 'https://placehold.co/600x400/0A192F/CCD6F6?text=Project' }}"
    data-project-url="{{ $project->project_url }}"
    data-source-url="{{ $project->source_code_url }}"
    data-notion-url="{{ $project->notion_url }}">

    <img src="{{ $project->image_url ?? 'https://placehold.co/600x400/0A192F/CCD6F6?text=Project' }}"
        alt="{{ $project->title }}"
        class="w-full h-48 object-cover bg-gray-200 dark:bg-navy-lightest">

    <div class="p-6 relative min-h-[160px]">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-slate-light mb-2">
            {{ $project->title }}
        </h3>
        <p class="text-gray-600 dark:text-slate mb-4">
            {{ $project->short_description }}
        </p>

        <div class="absolute bottom-4 left-6 flex flex-wrap gap-2">
            @foreach($project->technologies->take(5) as $tech)
            <div class="w-6 h-6" title="{{ $tech->name }}">
                <img src="{{ asset(ltrim($tech->svg_icon, '/')) }}" alt="{{ $tech->name }}" class="w-full h-full object-contain">
            </div>
            @endforeach
        </div>
    </div>

    <div class="project-technologies-data hidden">
        @foreach($project->technologies as $tech)
        <div class="flex items-center gap-2 bg-gray-100 dark:bg-navy rounded-full px-3 py-1" title="{{ $tech->name }}">
            <div class="w-5 h-5">
                <img src="{{ asset(ltrim($tech->svg_icon, '/')) }}" alt="{{ $tech->name }}" class="w-full h-full object-contain">
            </div>
            <span class="text-sm font-medium text-gray-700 dark:text-slate">{{ $tech->name }}</span>
        </div>
        @endforeach
    </div>
</div>