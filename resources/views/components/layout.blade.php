<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>Hello</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- calender --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
    <!-- ALPHINE JS-->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>

<body class=" ">

    <!-- Header -->
    <header class="sticky top-0 z-50 flex flex-wrap items-center justify-between px-6 py-4 shadow-xl bg-white">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/" class="flex items-center">
                <img src="{{ asset('assets/1.jpeg') }}" alt="Airbnb Logo" class="h-8">
            </a>
        </div>

        <!-- Search Bar -->

        <div class="items-end mt-4  top-20 z-50">
            <div class="hidden sm:flex items-center border rounded-full px-4 py-2 mx-auto max-w-3xl">
                <!-- Location Input -->
                <div class="flex items-center border-r pr-4">
                    <input type="text" placeholder="Where are you going?"
                        class="bg-transparent border-none px-2 text-gray-600 placeholder-gray-400 focus:outline-none">
                </div>
                <!-- Check-in Input -->
                <div class="flex items-center border-r px-4">
                    <input id="calendar" type="text"
                        class="bg-transparent border-none outline-none text-gray-600 focus:outline-none"
                        placeholder="Check-in">
                </div>
                <!-- Check-out Input -->
                <div class="flex items-center border-r px-4">
                    <input id="calendar2" type="text"
                        class="bg-transparent border-none outline-none text-gray-600 focus:outline-none"
                        placeholder="Check-out">
                </div>
                <!-- Search Button -->
                <button class="text-gray-500 px-4">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>


        <!-- User Actions -->
        <div class="flex items-center space-x-4">
            @auth
                <h5 class=" text-gray-700 hover:text-gray-900 font-bold">Hello, {{ Auth()->user()->username }}</h5>
            @endauth
            @guest
                <h5 class=" text-gray-700 hover:text-gray-900 font-bold">Hello, guest</h5>
            @endguest
            @guest
                <div x-data ="{open:false}" class="relative ">
                    <button x-on:click="open = !open" class="flex items-center border rounded-full px-4 py-2 mx-auto ">
                        <i class="fas fa-bars mr-2"></i>
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <!-- Dropdown -->
                    <div x-show="open" @click.outside = "open = false"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-20">
                        <a href="{{ Route('login') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Login</a>
                        <a href="{{ Route('register') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Register</a>
                    </div>
                </div>
            @endguest
            @auth
                <div x-data ="{open:false}" class="relative ">
                    <button x-on:click="open = !open" class="flex items-center border rounded-full px-4 py-2 mx-auto ">
                        <i class="fas fa-bars mr-2"></i>
                        <img class="inline-block size-[46px] rounded-full"
                            src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                            alt="Avatar">
                    </button>
                    <!-- Dropdown -->
                    <div x-show="open" @click.outside = "open = false"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 z-20">
                        <p class="pl-1 font-bold">{{ Auth()->user()->username }}'s Account</p>
                        <hr class="w-full border-gray-300" />
                        <a href="" class="block hover:bg-slate-100 pl-5 pr-8 py-2 mb-1">
                            <i class="fa-solid fa-gauge mr-1"></i>
                            Dashboard
                        </a>
                        <a href="" class="block hover:bg-slate-100 pl-5 pr-8 py-2 mb-1">
                            <i class="fa-solid fa-calendar-days mr-1"></i>
                            My bookings
                        </a>
                        <a href="" class="block hover:bg-slate-100 pl-5 pr-8 py-2 mb-1">
                            <i class="fa-solid fa-cart-shopping mr-1"></i>
                            Wish list
                        </a>
                        <a href="" class="block hover:bg-slate-100 pl-5 pr-8 py-2 mb-1">
                            <i class="fa-solid fa-gear mr-1"></i>
                            My Account
                        </a>
                        <form action="{{ Route('logout') }}" method="post"
                            class="block hover:bg-slate-100 pl-5 pr-8 py-2 mb-1">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </div>
                </div>
            @endauth

        </div>

        <!-- Mobile View Search (Collapsible) -->
        <div class="sm:hidden w-full mt-4">
            <div class="flex flex-col gap-3">
                <input type="text" placeholder="Where are you going?"
                    class="w-full border rounded-lg px-4 py-2 text-gray-600 placeholder-gray-400">
                <div class="flex gap-2">
                    <input type="date" class="w-1/2 border rounded-lg px-4 py-2 text-gray-600"
                        placeholder="Check-in">
                    <input type="date" class="w-1/2 border rounded-lg px-4 py-2 text-gray-600"
                        placeholder="Check-out">
                </div>
                <button class="w-full bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600">
                    Search
                </button>
            </div>
        </div>
    </header>
    {{--
    <div id="menuContainer" class=" mx-auto sticky top-20 z-50 bg-white shadow-md py-2 flex items-center rounded-lg border w-full border-4 border-transparent">
        <button class="ml-2 mr-4 px-4 py-2 border rounded-lg bg-gray-100 hover:bg-gray-200">Filter</button>

        <button id="leftBtn"
            class="absolute left-0 z-10 px-2 bg-white shadow-md rounded-full hidden md:block">❮</button>

        <div id="scrollContainer"
            class="w-full overflow-x-auto whitespace-nowrap flex space-x-6 px-4 scrollbar-hide transition-all duration-300 ease-in-out scroll-container">
            <div class="flex flex-col items-center cursor-pointer text-gray-700 hover:text-black relative group">
                <i class="fas fa-home w-6 h-6 mb-1"></i>
                <span class="text-sm">Stays</span>
                <div
                    class="absolute bottom-0 w-full h-0.5 bg-black opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="flex flex-col items-center cursor-pointer text-gray-700 hover:text-black relative group">
                <i class="fas fa-plane w-6 h-6 mb-1"></i>
                <span class="text-sm">Flights</span>
                <div
                    class="absolute bottom-0 w-full h-0.5 bg-black opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="flex flex-col items-center cursor-pointer text-gray-700 hover:text-black relative group">
                <i class="fas fa-utensils w-6 h-6 mb-1"></i>
                <span class="text-sm">Restaurants</span>
                <div
                    class="absolute bottom-0 w-full h-0.5 bg-black opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="flex flex-col items-center cursor-pointer text-gray-700 hover:text-black relative group">
                <i class="fas fa-map w-6 h-6 mb-1"></i>
                <span class="text-sm">Experiences</span>
                <div
                    class="absolute bottom-0 w-full h-0.5 bg-black opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
            <div class="flex flex-col items-center cursor-pointer text-gray-700 hover:text-black relative group">
                <i class="fas fa-bed w-6 h-6 mb-1"></i>
                <span class="text-sm">Hotels</span>
                <div
                    class="absolute bottom-0 w-full h-0.5 bg-black opacity-0 group-hover:opacity-100 transition-opacity">
                </div>
            </div>
        </div>

        <button id="rightBtn"
            class="absolute right-0 z-10 px-2 bg-white shadow-md rounded-full hidden md:block">❯</button>
    </div>

    <script>
        const scrollContainer = document.getElementById("scrollContainer");
        const leftBtn = document.getElementById("leftBtn");
        const rightBtn = document.getElementById("rightBtn");
        const menuContainer = document.getElementById("menuContainer");
        let lastScrollY = window.scrollY;

        rightBtn.addEventListener("click", () => {
            scrollContainer.scrollBy({
                left: 200,
                behavior: "smooth"
            });
        });

        leftBtn.addEventListener("click", () => {
            scrollContainer.scrollBy({
                left: -200,
                behavior: "smooth"
            });
        });

        window.addEventListener("scroll", () => {
            if (Math.abs(window.scrollY - lastScrollY) > 5) {
                menuContainer.classList.add("shake");
                setTimeout(() => menuContainer.classList.remove("shake"), 200);
            }
            lastScrollY = window.scrollY;
        });
    </script>
    --}}
    <!-- Featured Listings -->
    <section class="px-6 py-12 bg-white">
        {{ $slot }}
    </section>



    <script>
        var picker = new Pikaday({
            field: document.getElementById('calendar'),
            format: 'YYYY-MM-DD'

        });

        var picker = new Pikaday({
            field: document.getElementById('calendar2'),
            format: 'YYYY-MM-DD'

        });
    </script>

</body>

</html>
