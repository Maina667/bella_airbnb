<x-layout>
    
        
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Listing 1 -->
        <div x-data="{ currentIndex: 0 }" class="relative max-w-lg mx-auto rounded-lg overflow-hidden hover:shadow-lg">
            <!-- Carousel Wrapper -->
            <div class="relative">
                <!-- Images -->
                <div class="flex transition-transform duration-500 ease-in-out"
                    :style="`transform: translateX(-${currentIndex * 100}%)`">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/1.jpeg') }}" alt="Image 1"
                            class="w-full h-72 object-cover rounded-lg">
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/2.jpeg') }}" alt="Image 2"
                            class="w-full h-72 object-cover rounded-lg">
                    </div>
                    <!-- Slide 3 -->
                    <div class="w-full flex-shrink-0">
                        <img src="{{ asset('assets/3.jpeg') }}" alt="Image 3"
                            class="w-full h-72 object-cover rounded-lg">
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button @click="currentIndex = (currentIndex > 0) ? currentIndex - 1 : 2"
                    class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
                    <i class="fa-solid fa-angle-left"></i>
                </button>
                <button @click="currentIndex = (currentIndex < 2) ? currentIndex + 1 : 0"
                    class="absolute top-1/2 right-4 transform -translate-y-1/2 p-2 rounded-full bg-white shadow-lg hover:bg-gray-100">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>

            <!-- Pagination Dots -->
            <div class="flex justify-center space-x-2 mt-4">
                <button @click="currentIndex = 0" :class="currentIndex === 0 ? 'bg-blue-500' : 'bg-gray-300'"
                    class="w-3 h-3 rounded-full"></button>
                <button @click="currentIndex = 1" :class="currentIndex === 1 ? 'bg-blue-500' : 'bg-gray-300'"
                    class="w-3 h-3 rounded-full"></button>
                <button @click="currentIndex = 2" :class="currentIndex === 2 ? 'bg-blue-500' : 'bg-gray-300'"
                    class="w-3 h-3 rounded-full"></button>
            </div>

            <!-- Content Section -->
            <a href="hello">
                <div class="p-4 bg-white">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg text-slate-900 font-bold">Royal Apartments</h3>
                        <div class="flex items-center text-yellow-500">
                            ⭐ 4.5
                        </div>
                    </div>
                    <p class="text-gray-500">Mombasa, Nyali</p>
                    <p class="text-gray-500">3 bedroom</p>
                    <p class="text-green-500 font-bold">Vacant</p>
                    <p class="text-gray-800 mt-2">Ksh.150/night</p>
                </div>
            </a>
        </div>
    </div>
</section>
</x-layout>
 <!-- Footer --