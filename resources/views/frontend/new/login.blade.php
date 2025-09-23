@extends('layouts.newFront')

@section('content')

<section class="py-12 px-4 flex items-center justify-center">

  <div class="w-full max-w-md bg-white rounded-2xl p-8 animated-shadow">
      
    <!-- Title -->
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login to Your Account</h2>

    <!-- Login Form -->
    <form action="javascript:void(0)" method="POST" class="space-y-5">
      <!-- User ID -->
      <div>
        <label for="user_id" class="block text-sm font-medium text-gray-700">User ID</label>
        <input type="text" id="user_id" name="user_id" required
               class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password" required
               class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none">
      </div>

      <!-- Submit Button -->
      <button type="submit" id="payBtn" class="w-full py-2 px-4 bg-gradient-to-r from-blue-700 to-blue-500 text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition">
        Login
      </button>
    </form>

    <!-- Links -->
    <div class="mt-6 flex flex-col items-center text-sm text-gray-600 space-y-2">
      <a href="#" class="hover:text-blue-600 transition">Forgot Password?</a>
      <a href="#" class="hover:text-blue-600 transition">Go to Register</a>
    </div>
  </div>

</section>


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