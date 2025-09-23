@extends('layouts.newFront')

@section('content')
<main class="flex-grow flex items-center justify-center px-4 py-20">
  <div class="w-full max-w-lg bg-white rounded-2xl shadow-lg shadow-[var(--color1)] p-8 sm:p-10 animated-shadow">
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6 text-center">Pay Online</h1>

    <!-- Payment Form -->
    <form action="javascript:void(0)" method="POST" class="space-y-5">
        
      <div>
        <label for="user_id" class="block text-gray-700 font-medium mb-1">User ID</label>
        <input type="text" id="user_id" name="user_id" placeholder="Enter your user ID" 
          class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-100 outline-none">
      </div>

      <!-- Submit Button -->
      <button type="button" id="payBtn" class="w-full py-2 px-4 bg-gradient-to-r from-blue-600 to-blue-400 text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition">
        Pay Now
      </button>

    </form>
  </div>
</main>


<!-- Toast -->
<div id="toast" class="hidden fixed bottom-5 right-5 bg-orange-600 text-white px-4 py-2 rounded-lg shadow-lg transition-opacity duration-500">
  🚀 Coming Soon!
</div>

<script>
  const payBtn = document.getElementById("payBtn");
  const toast = document.getElementById("toast");

  payBtn.addEventListener("click", () => {
    toast.classList.remove("hidden");
    toast.classList.add("opacity-100");

    setTimeout(() => {
      toast.classList.add("opacity-0");
    }, 2500);

    setTimeout(() => {
      toast.classList.remove("opacity-100", "opacity-0");
      toast.classList.add("hidden");
    }, 3000);
  });
</script>


@endsection
