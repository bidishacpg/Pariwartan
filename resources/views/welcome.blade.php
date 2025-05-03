<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pariwartan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC]">
    <header class="border-b border-[#19140035] dark:border-[#3E3E3A]">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-semibold text-primary dark:text-primary-light">Pariwartan</a>
            <nav class="flex gap-4">
                <a href="{{ route('login') }}"
                    class="px-3 py-1.5 rounded-md hover:bg-primary/10 dark:hover:bg-primary-light/10 transition-colors">Login</a>
                <a href="{{ route('register') }}"
                    class="px-3 py-1.5 rounded-md bg-primary dark:bg-primary-light text-white hover:bg-primary/90 dark:hover:bg-primary-light/90 transition-colors">Register</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero Section -->

        <section class="relative py-12 md:py-20">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('storage/pariwartann.jpg') }}" alt="Pariwartann"
                    class="w-full h-full object-cover opacity-70">
            </div>

            <!-- Content on top of the image -->
            <div class="relative container mx-auto px-4 text-center max-w-2xl z-10">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Digital Society News Management</h1>
                <p class="text-lg text-white/90 dark:text-white/80 mb-8">
                    Bridging the gap between local governance and citizens through transparent information sharing.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="{{ route('register') }}"
                        class="px-6 py-2.5 bg-primary dark:bg-primary-light text-white rounded-full hover:shadow-md transition-all">
                        Get Started
                    </a>
                    <a href="{{ route('login') }}"
                        class="px-6 py-2.5 border border-white text-white rounded-full hover:bg-white/10 transition-colors">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Optional: Overlay for better text contrast -->
            <div class="absolute inset-0 bg-black/40"></div>
        </section>


        <!-- Events Section -->
        <section class="py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-2xl font-bold mb-8 text-center">Upcoming Events</h2>

                <div class="flex overflow-x-auto pb-6 -mx-4 px-4 gap-4 scroll-smooth snap-x snap-mandatory">
                    <!-- Event 1 -->
                    <div class="flex-shrink-0 w-72 snap-start">
                        <div
                            class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow">
                            <img src="https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Tech Conference" class="w-full h-48 object-cover">
                            <div class="p-5">
                                <div class="flex items-center text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Nov 15, 2023
                                </div>
                                <h3 class="font-semibold mb-2">Tech Conference</h3>
                                <p class="text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-4">Join industry leaders
                                    for the biggest tech event.</p>
                                <a href="#"
                                    class="text-sm text-primary dark:text-primary-light hover:underline flex items-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="flex-shrink-0 w-72 snap-start">
                        <div
                            class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow">
                            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Music Festival" class="w-full h-48 object-cover">
                            <div class="p-5">
                                <div class="flex items-center text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Dec 5-7, 2023
                                </div>
                                <h3 class="font-semibold mb-2">Music Festival</h3>
                                <p class="text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-4">Experience live music
                                    from top artists worldwide.</p>
                                <a href="#"
                                    class="text-sm text-primary dark:text-primary-light hover:underline flex items-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="flex-shrink-0 w-72 snap-start">
                        <div
                            class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow">
                            <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Art Exhibition" class="w-full h-48 object-cover">
                            <div class="p-5">
                                <div class="flex items-center text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Jan 10-30, 2024
                                </div>
                                <h3 class="font-semibold mb-2">Art Exhibition</h3>
                                <p class="text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-4">Discover contemporary
                                    art from emerging artists.</p>
                                <a href="#"
                                    class="text-sm text-primary dark:text-primary-light hover:underline flex items-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-72 snap-start">
                        <div
                            class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow">
                            <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Art Exhibition" class="w-full h-48 object-cover">
                            <div class="p-5">
                                <div class="flex items-center text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Jan 10-30, 2024
                                </div>
                                <h3 class="font-semibold mb-2">Art Exhibition</h3>
                                <p class="text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-4">Discover contemporary
                                    art from emerging artists.</p>
                                <a href="#"
                                    class="text-sm text-primary dark:text-primary-light hover:underline flex items-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-72 snap-start">
                        <div
                            class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow">
                            <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Art Exhibition" class="w-full h-48 object-cover">
                            <div class="p-5">
                                <div class="flex items-center text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Jan 10-30, 2024
                                </div>
                                <h3 class="font-semibold mb-2">Art Exhibition</h3>
                                <p class="text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-4">Discover contemporary
                                    art from emerging artists.</p>
                                <a href="#"
                                    class="text-sm text-primary dark:text-primary-light hover:underline flex items-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-72 snap-start">
                        <div
                            class="bg-white dark:bg-[#1a1a1a] rounded-lg overflow-hidden border border-[#19140035] dark:border-[#3E3E3A] hover:shadow-md transition-shadow">
                            <img src="https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80"
                                alt="Art Exhibition" class="w-full h-48 object-cover">
                            <div class="p-5">
                                <div class="flex items-center text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-2">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Jan 10-30, 2024
                                </div>
                                <h3 class="font-semibold mb-2">Art Exhibition</h3>
                                <p class="text-sm text-[#1b1b18]/70 dark:text-[#EDEDEC]/70 mb-4">Discover contemporary
                                    art from emerging artists.</p>
                                <a href="#"
                                    class="text-sm text-primary dark:text-primary-light hover:underline flex items-center">
                                    View Details
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action -->
        <section class="bg-primary dark:bg-primary-light py-16 mb-16">
            <div class="max-w-4xl mx-auto px-4 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">Ready to Join Pariwartan?</h2>
                <p class="text-lg mb-8 max-w-2xl mx-auto">Be part of our digital platform that bridges the gap
                    between local governance and citizens, fostering transparency, trust, and active participation
                    in Nepali society.</p>
                <a href="{{ route('register') }}"
                    class="inline-block bg-white text-primary dark:text-primary-light hover:bg-gray-100 px-8 py-3 rounded-full text-sm font-semibold transition-colors duration-300">
                    Register Now
                </a>
            </div>
        </section>
    </main>

    <footer class="border-t border-[#19140035] dark:border-[#3E3E3A] py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p class="text-[#1b1b18]/70 dark:text-[#EDEDEC]/70">&copy; 2023 Pariwartan. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
