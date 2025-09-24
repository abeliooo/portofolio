<section id="projects" class="min-h-screen flex items-center justify-center bg-gray-100 fade-in-section">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-gray-800 text-center mb-6">My Projects.</h2>
        <div class="text-center mb-12">
            <p class="text-gray-600 mb-8 text-2xl">Here are some of the technologies I work with</p>
            <div class="flex items-center gap-6 overflow-x-auto py-6 px-4 -mx-4 justify-center">
                @foreach($technologies as $technology)
                <div title="{{ $technology->name }}" 
                     class="bg-white rounded-2xl px-6 py-4 flex items-center gap-3 
                            border-2 border-gray-800 shadow-lg
                            transition-all duration-300 hover:scale-105 hover:shadow-xl
                            hover:bg-gray-50 min-w-[140px] justify-center flex-shrink-0">
                    <div class="w-8 h-8 flex-shrink-0 flex items-center justify-center">
                        {!! $technology->svg_icon !!}
                    </div>
                    <span class="text-2xl font-semibold text-gray-800 whitespace-nowrap">
                        {{ $technology->name }}
                    </span>
                </div>
                @endforeach
            </div>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
            <x-project-card :project="$project" />
            @empty
            <div class="col-span-full text-center text-gray-500">
                No projects available yet.
            </div>
            @endforelse
        </div>
    </div>
</section>