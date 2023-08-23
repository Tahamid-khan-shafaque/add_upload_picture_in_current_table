<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <a href="{{ route('display-data') }}" class="btn btn-primary" style="background-color: green; color: white; border-radius: 5px; margin: 10px; padding: 10px;">
                        {{ __('Display Users') }}
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <!-- ... (rest of your code) ... -->
        </div>
    </div>

    <!-- ... (rest of your code) ... -->
</nav>
