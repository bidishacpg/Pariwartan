@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[70vh] min-h-[500px] rounded-xl overflow-hidden mb-16">
        <div class="absolute inset-0"
            style="background-image: url('{{ asset('storage/pariwartann.jpg') }}'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent"></div>
        </div>

        <div class="relative h-full flex flex-col justify-center p-8 lg:p-16 text-white">
            <div class="max-w-4xl">
                <h1 class="text-4xl lg:text-6xl font-bold mb-4 leading-tight">Pariwartan: Digital Society News Management
                    System.</h1>
                <div class="flex flex-wrap items-center gap-6 mt-8">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>November 15-17, 2023</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Convention Center, San Francisco</span>
                    </div>
                </div>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="{{ route('login') }}"
                        class="bg-primary hover:bg-primary-light text-white px-8 py-3 rounded-full text-sm font-semibold transition-colors duration-300">
                        Get Involved
                    </a>
                    <a href="{{ route('login') }}"
                        class="border border-white hover:bg-white/10 text-white px-8 py-3 rounded-full text-sm font-semibold transition-colors duration-300">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Events -->
    <section class="max-w-6xl mx-auto px-4 mb-16">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold dark:text-[#EDEDEC]">Featured Events</h2>
            <a href="{{ route('login') }}" class="text-primary dark:text-primary-light hover:underline font-medium">View All
                Events</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Event Card 1 -->
            <div
                class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden shadow-sm border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow duration-300">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Tech Conference" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-primary text-white text-xs px-3 py-1 rounded-full">
                        Tech
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 dark:text-[#A1A09A] mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Nov 15, 2023
                    </div>
                    <h3 class="text-xl font-semibold mb-2 dark:text-[#EDEDEC]">Tech Conference 2023</h3>
                    <p class="text-gray-600 dark:text-[#A1A09A] text-sm mb-4">Join the biggest tech event of
                        the
                        year with industry leaders and innovators.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary dark:text-primary-light font-medium">$149.99</span>
                        <a href="#" class="text-sm font-medium hover:underline">Details →</a>
                    </div>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div
                class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden shadow-sm border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow duration-300">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Music Festival" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-primary text-white text-xs px-3 py-1 rounded-full">
                        Music</div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 dark:text-[#A1A09A] mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Dec 5-7, 2023
                    </div>
                    <h3 class="text-xl font-semibold mb-2 dark:text-[#EDEDEC]">Winter Music Festival</h3>
                    <p class="text-gray-600 dark:text-[#A1A09A] text-sm mb-4">Experience the best of live
                        music
                        with top artists from around the world.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary dark:text-primary-light font-medium">$79.99</span>
                        <a href="#" class="text-sm font-medium hover:underline">Details →</a>
                    </div>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div
                class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden shadow-sm border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow duration-300">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                        alt="Art Exhibition" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4 bg-primary text-white text-xs px-3 py-1 rounded-full">
                        Art
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 dark:text-[#A1A09A] mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        Jan 10-30, 2024
                    </div>
                    <h3 class="text-xl font-semibold mb-2 dark:text-[#EDEDEC]">Modern Art Exhibition</h3>
                    <p class="text-gray-600 dark:text-[#A1A09A] text-sm mb-4">Discover contemporary art
                        from
                        emerging and established artists.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-primary dark:text-primary-light font-medium">$29.99</span>
                        <a href="#" class="text-sm font-medium hover:underline">Details →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <section class="bg-primary dark:bg-primary-light py-16 mb-16">
        <div class="max-w-4xl mx-auto px-4 text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Ready to Join Pariwartan?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Be part of our digital platform that bridges the gap between local governance and citizens.
            </p>
            <a href="{{ route('register') }}"
                class="inline-block bg-white text-primary dark:text-primary-light hover:bg-gray-100 px-8 py-3 rounded-full text-sm font-semibold transition-colors duration-300">
                Register Now
            </a>
        </div>
    </section>
@endsection
