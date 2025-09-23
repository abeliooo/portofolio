@props(['project'])
<div class="project-card bg-white dark:bg-navy-light rounded-lg overflow-hidden shadow-md dark:shadow-2xl border border-gray-200 dark:border-navy-lightest transform hover:-translate-y-2 transition-all duration-300 cursor-pointer"
     data-title="{{ $project->title }}"
     data-description="{{ $project->long_description }}"
     data-image="{{ $project->image_url ?? 'https://placehold.co/600x400/0A192F/CCD6F6?text=Project' }}"
     data-project-url="{{ $project->project_url }}"
     data-source-url="{{ $project->source_code_url }}">
    <img src="{{ $project->image_url ?? 'https://placehold.co/600x400/0A192F/CCD6F6?text=Project' }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-slate-light mb-2">{{ $project->title }}</h3>
        <p class="text-gray-600 dark:text-slate">{{ $project->short_description }}</p>
    </div>
</div>