<template>
    <div>
        <nav class="bg-[#290E11] py-4 text-white">
            <div
                class="container mx-auto grid grid-cols-12 gap-4 items-center md:px-0 px-5"
            >
                <!-- Logo -->
                <div class="md:col-span-2 col-span-6 order-1 md:order-none">
                    <a href="#" class="text-xl font-bold">Scentagory</a>
                </div>
                <!-- Search Box -->
                <div class="md:col-span-6 col-span-12 order-3 md:order-none">
                    <div class="flex">
                        <input
                            type="text"
                            placeholder="Search..."
                            class="p-2 rounded-l border border-gray-300 w-full max-w-lg focus:outline-none text-black"
                        />
                        <button
                            class="bg-[#483133] text-black p-2 rounded-r hover:bg-[#483133] focus:outline-none"
                        >
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- Social Links -->
                <div
                    class="md:col-span-4 col-span-6 order-2 md:order-none text-right"
                >
                    <a href="#" class="hover:underline px-2"
                        ><i class="fa-brands fa-facebook"></i
                    ></a>
                    <a href="#" class="hover:underline px-2"
                        ><i class="fa-brands fa-twitter"></i
                    ></a>
                    <a href="#" class="hover:underline px-2"
                        ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a href="#" class="hover:underline px-2"
                        ><i class="fa-solid fa-location-dot"></i
                    ></a>
                </div>
            </div>
        </nav>

        <nav class="bg-[#290E11] p-4 md:block hidden">
            <div class="container mx-auto flex items-center justify-center">
                <ul class="flex justify-center space-x-4">
                    <li>
                        <a href="#" class="hover:underline px-5 text-white"
                            >Home</a
                        >
                    </li>
                    <li>
                        <a href="#" class="hover:underline px-5 text-white"
                            >About</a
                        >
                    </li>
                    <li>
                        <a href="#" class="hover:underline px-5 text-white"
                            >Products</a
                        >
                    </li>
                    <li>
                        <a href="#" class="hover:underline px-5 text-white"
                            >Contact</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <main>
            <slot></slot>
        </main>
    </div>
</template>
