<div id="projectModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center p-4 z-50 hidden">
    <div id="modalContent" class="bg-white rounded-lg shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto relative transform scale-95 transition-transform duration-300">
        <button id="closeModal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
        <img id="modalImage" src="" alt="Project Image" class="w-full h-64 object-cover rounded-t-lg">
        <div class="p-8">
            <h3 id="modalTitle" class="text-3xl font-bold text-gray-800 mb-4"></h3>
            <p id="modalDescription" class="text-gray-600 mb-6 leading-relaxed"></p>
            <div id="modalLinks" class="flex items-center space-x-4">
            </div>
        </div>
    </div>
</div>