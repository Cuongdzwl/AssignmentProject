        <!-- Navigation Links -->
        @role('admin')
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('products')">
                    {{ __('Our Products') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('homes')">
                    {{ __('About us') }}
                </x-nav-link>
            </div>
        @endrole
