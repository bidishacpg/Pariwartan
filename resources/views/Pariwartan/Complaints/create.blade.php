@extends('layouts.app')

@section('content')
<main class="py-10">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white p-8 shadow rounded-xl">
      <h2 class="text-2xl font-bold mb-6 text-gray-800">🛠️ File a Complaint</h2>

      <form class="space-y-6">

        <!-- Contact Info -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Contact Number</label>
          <input type="tel" placeholder="e.g. 98XXXXXXXX"
            class="mt-1 w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Woda Number -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Woda Number</label>
          <select class="mt-1 w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option value="">-- Select Woda --</option>
            <option>Woda 1</option>
            <option>Woda 2</option>
            <option>Woda 3</option>
            <!-- Add more woda if needed -->
          </select>
        </div>

        <!-- Exact Location -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Exact Location</label>
          <input type="text" placeholder="e.g. Near Shiva Mandir, Ward-5"
            class="mt-1 w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Complaint Title -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Complaint Title</label>
          <input type="text" placeholder="e.g. Drainage Blockage in Ward-5"
            class="mt-1 w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Complaint Description -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Complaint Description</label>
          <textarea rows="5" placeholder="Write details about the problem..."
            class="mt-1 w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <!-- Complaint Type -->
        <div>
          <label class="block text-sm font-medium text-gray-700">Type of Complaint</label>
          <select class="mt-1 w-full p-2 border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            <option value="">-- Select Type --</option>
            <option>Water Supply</option>
            <option>Electricity</option>
            <option>Road Condition</option>
            <option>Garbage Collection</option>
            <option>Other</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Upload Image</label>
          <input type="file" accept="image/*"
            class="block w-full text-sm text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-100 file:text-blue-700 hover:file:bg-blue-200">
          <p class="text-sm text-gray-500 mt-1">📸 Upload a photo of the issue (JPG, PNG, etc.)</p>
        </div>


        <!-- Submit Button -->
        <div>
          <button type="submit"
            class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg transition">
            Submit Complaint
          </button>
        </div>
      </form>
    </div>
  </div>
</main>

@endsection
