<div>
    <h1>WELL COME HOME </h1>
    <button type="button" wire:click="$route('navigateToLogin')"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
            href="/signup" wire:navigate>Sign-up</a>
    </button>
    <button type="button" wire:click="$route('navigateToSignup')"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
            href="/login" wire:navigate>Login</a>
    </button>
    <button type="button" wire:click="$route('navigateToSignup')"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
            href="/logout" wire:navigate>Log-Out</a>
    </button>
</div>
