@extends('layouts.app')

@section('content')
<main class="py-10">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-8">📋 My Complaint Status</h2>

    <div class="grid gap-6 md:grid-cols-2">
      <!-- One Complaint Card -->
      <div class="bg-white shadow rounded-xl p-5">
        <h3 class="text-xl font-semibold text-gray-800">Street Light Not Working</h3>
        <p class="text-gray-600 mt-2">The street light near my house in Woda 5 is not working since last week.</p>
        <p class="text-sm text-gray-500 mt-3">🗓️ Submitted: May 5, 2025</p>
        <div class="mt-4">
          <span class="px-3 py-1 text-sm bg-yellow-100 text-yellow-800 rounded-full">⏳ Pending</span>
        </div>
      </div>

      <!-- Another Complaint -->
      <div class="bg-white shadow rounded-xl p-5">
        <h3 class="text-xl font-semibold text-gray-800">Drain Blockage</h3>
        <p class="text-gray-600 mt-2">Drainage system is blocked in Woda 2 and water is overflowing on the road.</p>
        <p class="text-sm text-gray-500 mt-3">🗓️ Submitted: May 3, 2025</p>
        <div class="mt-4">
          <span class="px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full">🎉 Completed</span>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
