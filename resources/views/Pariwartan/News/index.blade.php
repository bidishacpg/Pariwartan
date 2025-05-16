@extends('layouts.app')

@section('content')
    <main class="py-10">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">📢 Society News Updates</h2>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @forelse($news as $item)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden">
                        @if ($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="News Image"
                                class="w-full h-48 object-cover">
                        @else
                            <img src="https://via.placeholder.com/600x200?text=No+Image" alt="No Image"
                                class="w-full h-48 object-cover">
                        @endif

                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->title }}</h3>
                            <p class="text-gray-600 text-sm mb-3">{{ Str::limit($item->description, 100) }}</p>
                            <p class="text-xs text-gray-500">🗓️ Posted on {{ $item->created_at->format('F j, Y') }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-700">No news has been posted yet.</p>
                @endforelse
            </div>
        </div>
    </main>
@endsection
