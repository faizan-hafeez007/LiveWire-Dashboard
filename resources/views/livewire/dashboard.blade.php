{{--

<div style="display: flex; justify-content: center; align-items: center; height: 100%; background-color: #f8f8f8;">
    <h1>Welcome you are here in the dashboard and you are login as well</h1>

    <button type="button"
        class="ml-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        wire:click="logout">Logout
    </button>
</div> --}}
{{-- <div
    style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 90vh; background: linear-gradient(to right, #f8f8f8, #e0e0e0);">
    <h1 style="font-size: 3rem; font-weight: 400; color: #333; margin-bottom: 1rem;">Welcome to Your Dashboard!</h1>
    <p style="font-size: 1.2rem; color: #777; margin: 0;">You are logged in.</p>
    <button type="button"
        class="bg-gradient-to-r from-blue-500 to-blue-700 hover:bg-gradient-to-r from-blue-600 to-blue-800 text-white font-bold py-2 px-4 rounded-full shadow-md">Logout</button>
</div> --}}
<div
    style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 90vh; background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);">
    <h1 style="font-size: 2.5em; color: #0a0a0a; text-shadow: 2px 2px 4px #000000;">Welcome to the Dashboard,
        {{ Auth::user()->name }}</h1>
    <p style="font-size: 1.2em; color: #806060; text-shadow: 1px 1px 2px #000000;">You are logged in. Enjoy your stay!
    </p>
    <button type="button"
        class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        wire:click="logout">Logout</button>
</div>

{{-- <div style="display: flex; justify-content: center; align-items: center; height: 90vh; background-color: #f8f8f8;">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-4">Welcome to Your Dashboard</h1>
        <p class="text-lg text-gray-600 text-center mb-6">You are currently logged in.</p>

        <button type="button"
            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
            wire:click="logout">
            Logout
        </button>
    </div>
</div> --}}
