 <section id="about" class="min-h-screen flex items-center fade-in-section bg-white py-12">
     <div class="container mx-auto px-6">
         <div class="grid md:grid-cols-3 gap-8 items-center">
             <div class="md:col-span-2">
                 <div>
                     <h2 class="text-4xl font-bold my-6 ">
                         About Me<span class="text-orange-500">.</span>
                     </h2>
                     <div class="text-gray-600 mb-4 leading-relaxed text-lg text-justify">
                         <p>
                             Hello! I'm a data and web enthusiast with a passion for turning complex data into simple, yet insightful information. I enjoy working in web development, data engineering, and database management.
                         </p>
                         <p>
                             When I'm not coding, I love exploring new skills, building useful applications with emerging technologies, and enjoying a good cup of coffee.
                         </p>
                     </div>
                 </div>

                 <div class="mt-6">
                     <div class="mt-8">
                         {{-- Education --}}
                         <h3 class="text-2xl font-bold text-gray-800 mb-6">
                             Education<span class="text-orange-500">.</span>
                         </h3>
                         <div class="relative border-l-2 border-gray-200 ml-4">
                             @forelse($educations as $education)
                             <div class="mb-8 ml-6">
                                 <div class="absolute -left-[6.5px] mt-1 w-3 h-3 bg-orange-500 rounded-full border-2 border-white"></div>
                                 <p class="font-semibold text-gray-800">{{ $education->institution_name }}</p>
                                 <p class="text-gray-600">{{ $education->degree }}</p>
                                 <p class="text-gray-500 text-sm">{{ $education->start_year }} - {{ $education->end_year }}</p>
                                 <p class="text-gray-600 mt-1 text-sm">{!! nl2br(e($education->description)) !!}</p>
                             </div>
                             @empty
                             <p class="pl-6 text-gray-500">No education history available yet.</p>
                             @endforelse
                         </div>

                         {{-- Experience --}}
                         <h3 class="text-2xl font-bold text-gray-800 mt-10 mb-6">
                             Experience<span class="text-orange-500">.</span>
                         </h3>
                         <div class="relative border-l-2 border-gray-200 ml-4">
                             @forelse($groupedExperiences as $organizationName => $organizationExperiences)
                             <div class="mb-8 ml-6">
                                 <div class="absolute -left-[6.5px] mt-1 w-3 h-3 bg-orange-500 rounded-full border-2 border-white"></div>
                                 <h4 class="font-semibold text-gray-800">{{ $organizationName }}</h4>
                                 <div class="ml-4 mt-2 space-y-3">
                                     @foreach($organizationExperiences as $experience)
                                     <div class="relative pl-3 border-l border-gray-300">
                                         <div class="absolute -left-[4px] top-1 w-2 h-2 bg-gray-400 rounded-full border"></div>
                                         <p class="text-gray-700 font-medium">{{ $experience->event_name }}</p>
                                         <p class="text-gray-500 text-sm">{{ $experience->start_year }} - {{ $experience->end_year }}</p>
                                     </div>
                                     @endforeach
                                 </div>
                             </div>
                             @empty
                             <p class="pl-6 text-gray-500">No experience history available yet.</p>
                             @endforelse
                         </div>
                     </div>

                 </div>
             </div>

             <div class="md:col-span-1">
                 <div class="relative w-full mx-auto bg-gray-200 rounded-lg shadow-lg aspect-square">
                     {{-- <img src="{{ asset('images/my-photo.jpg') }}" alt="Foto Abell" class="rounded-lg object-cover w-full h-full"> --}}
                     <div class="w-full h-full flex items-center justify-center rounded-lg border-2 border-dashed border-gray-400">
                         <p class="text-gray-500 text-center p-4">(1:1 ratio)</p>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>