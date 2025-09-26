<section id="projects" class="min-h-screen flex flex-col items-center justify-center bg-gray-100 dark:bg-navy fade-in-section py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-gray-800 dark:text-slate-light text-center mb-4">My Projects.</h2>
        <p class="text-gray-600 dark:text-slate text-center mb-12 text-xl">Here are some of the technologies I work with</p>

        <div class="mb-20">
            <div class="flex flex-wrap justify-center gap-x-10 gap-y-12">
                @foreach($technologies as $technology)
                    <x-tech-card :technology="$technology" />
                @endforeach
            </div>
        </div>

        {{-- Menampilkan grid proyek --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($projects as $project)
                {{-- Setiap proyek dirender menggunakan komponen project-card --}}
                <x-project-card :project="$project" />
            @empty
                <div class="col-span-full text-center text-gray-500 dark:text-slate">
                    No projects available yet.
                </div>
            @endforelse
        </div>
    </div>

    <div id="project-modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center p-4 z-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div id="project-modal-content" class="bg-white dark:bg-navy-light rounded-lg shadow-2xl w-full max-w-4xl max-h-[90vh] flex flex-col md:flex-row transform scale-95 transition-transform duration-300">
            <div class="w-full md:w-1/2 h-64 md:h-auto flex-shrink-0 aspect[5/4]">
                <img id="modal-image" src="" alt="Project Image" class="w-full h-full object-cover rounded-t-lg md:rounded-l-lg md:rounded-t-none">
            </div>

            <div class="w-full md:w-1/2 p-8 flex flex-col overflow-y-auto">
                <h3 id="modal-title" class="text-3xl font-bold text-gray-800 dark:text-slate-light mb-4"></h3>
                <div class="prose dark:prose-invert max-w-none flex-grow mb-6">
                    <p id="modal-description"></p>
                </div>

                <div class="mb-6">
                    <h4 class="text-lg font-semibold text-gray-700 dark:text-slate-light mb-3">Technologies Used</h4>
                    <div id="modal-technologies" class="flex flex-wrap gap-3">
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 mt-auto pt-4 border-t border-gray-200 dark:border-navy-lightest">
                    <a id="modal-project-url" href="#" target="_blank" class="modal-link hidden items-center justify-center px-4 py-2 bg-sky-500 text-white rounded-md font-semibold hover:bg-sky-600 transition-colors">View Project</a>
                    <a id="modal-source-url" href="#" target="_blank" class="modal-link hidden items-center justify-center px-4 py-2 bg-gray-700 text-white rounded-md font-semibold hover:bg-gray-800 transition-colors">Source Code</a>
                    <a id="modal-notion-url" href="#" target="_blank" class="modal-link hidden items-center justify-center px-4 py-2 bg-gray-200 text-gray-800 rounded-md font-semibold hover:bg-gray-300 transition-colors">Notion Docs</a>
                </div>
            </div>
        </div>
    </div>
</section>