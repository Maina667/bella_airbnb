<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- calender --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
    <!-- ALPHINE JS-->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- font --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white h-screen shadow-md">
        <div class="p-5 border-b">
            <img src="{{ asset('assets/4.png') }}" alt="Airbnb Logo" class="h-32 w-32">
            <h1 class="text-xl font-bold text-gray-700"> ADMIN</h1>
        </div>
        <nav class="mt-5">
            <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200"><i
                    class="fa-solid fa-gauge mr-1"></i> Dashboard</a>
            <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200"><i class="fa-solid fa-house"></i> Properties</a>
            <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200"><i class="fa-solid fa-calendar-days mr-1"></i> Bookings</a>
            <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200"><i class="fa-solid fa-user mr-1"></i> Users</a>
            <a href="#" class="block py-2.5 px-4 text-gray-700 hover:bg-gray-200"><i class="fa-solid fa-gear mr-1"></i>Settings</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">

        <!-- Top Navbar -->
        <header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
            <h2 class="text-lg font-semibold text-gray-700">Dashboard</h2>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Admin</span>
                <button class="bg-red-500 text-white px-3 py-1 rounded">Logout</button>
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="p-6">
            <div class="grid grid-cols-4 gap-6">
                <!-- Card -->
                <div class="bg-white p-5 shadow rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Total Properties</h3>
                    <p class="text-2xl font-bold text-blue-600">125</p>
                </div>
                <div class="bg-white p-5 shadow rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Total Bookings</h3>
                    <p class="text-2xl font-bold text-green-600">1,024</p>
                </div>
                <div class="bg-white p-5 shadow rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Total Users</h3>
                    <p class="text-2xl font-bold text-purple-600">5,672</p>
                </div>
                <div class="bg-white p-5 shadow rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Revenue</h3>
                    <p class="text-2xl font-bold text-red-600">$82,300</p>
                </div>
            </div>

            <!-- Property Management Table -->
            <div class="mt-6 bg-white shadow rounded-lg p-5">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Manage Properties</h3>
                <table class="w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-200 px-4 py-2 text-left">#</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Property Name</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Location</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Status</th>
                            <th class="border border-gray-200 px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-200 px-4 py-2">1</td>
                            <td class="border border-gray-200 px-4 py-2">Luxury Beach House</td>
                            <td class="border border-gray-200 px-4 py-2">Miami, FL</td>
                            <td class="border border-gray-200 px-4 py-2">
                                <span class="bg-green-200 text-green-700 px-2 py-1 text-sm rounded">Active</span>
                            </td>
                            <td class="border border-gray-200 px-4 py-2">
                                <button class="text-blue-500">Edit</button> |
                                <button class="text-red-500">Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-200 px-4 py-2">2</td>
                            <td class="border border-gray-200 px-4 py-2">Cozy Mountain Cabin</td>
                            <td class="border border-gray-200 px-4 py-2">Aspen, CO</td>
                            <td class="border border-gray-200 px-4 py-2">
                                <span class="bg-yellow-200 text-yellow-700 px-2 py-1 text-sm rounded">Pending</span>
                            </td>
                            <td class="border border-gray-200 px-4 py-2">
                                <button class="text-blue-500">Edit</button> |
                                <button class="text-red-500">Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="border border-gray-200 px-4 py-2">3</td>
                            <td class="border border-gray-200 px-4 py-2">Downtown Apartment</td>
                            <td class="border border-gray-200 px-4 py-2">New York, NY</td>
                            <td class="border border-gray-200 px-4 py-2">
                                <span class="bg-red-200 text-red-700 px-2 py-1 text-sm rounded">Inactive</span>
                            </td>
                            <td class="border border-gray-200 px-4 py-2">
                                <button class="text-blue-500">Edit</button> |
                                <button class="text-red-500">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>

</html>
