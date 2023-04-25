<nav x-data="{ open: false }" class="border-b border-gray-100 bg-white">
  <!-- Primary Navigation Menu -->
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 justify-between">
      {{-- Left section --}}
      <div class="flex">
        <!-- Logo -->
        <div class="flex shrink-0 items-center">
          <a href="{{ route('home') }}">
            <i class="fa-brands fa-pagelines fa-2xl" style="color: #636363;"></i>
          </a>
        </div>

        @include('layouts.components.navigation-links')
      </div>

      {{-- Middle section --}}
      <form class="m-auto flex" action="{{ url('search') }}" method="get">
        {{-- Search --}}
        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="keyword"
          id="search">
        <div id="results">
          
        </div>
        <button class="bg-black py-1.5 px-3" type="submit"><i class="fa-solid fa-magnifying-glass"
            style="color: white;"></i></button>
      </form>

      <!-- Right section / Settings Dropdown -->
      <div class="hidden sm:ml-6 sm:flex sm:items-center">
        @if (Auth::check())
          {{-- Cart --}}
          <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link class="cart-link" href="{{ url('cart') }}">
              <i class="fa-solid fa-cart-shopping"></i>Cart
            </x-nav-link>
          </div>

          <x-dropdown align="right" width="48">
            <x-slot name="trigger">
              <button
                class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none">
                <div>{{ Auth::user()->name }}</div>

                <div class="ml-1">
                  <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd" />
                  </svg>
                </div>
              </button>
            </x-slot>

            <x-slot name="content">
              <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
              </x-dropdown-link>
              <x-dropdown-link :href="route('home')">
                {{ __('My Orders') }}
              </x-dropdown-link>
              @role('admin')
                <x-dropdown-link :href="route('admin')">
                  {{ __('Admin Settings') }}
                </x-dropdown-link>
              @endrole
              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                                                this.closest('form').submit();">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
            </x-slot>
          </x-dropdown>
        @else
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link text-black" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link bg-black text-white" href="{{ route('register') }}">Register</a>
            </li>
          </ul>
        @endif
      </div>

      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
    <div class="space-y-1 pt-2 pb-3">
      <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
        {{ __('Home') }}
      </x-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="border-t border-gray-200 pt-4 pb-1">
      <div class="px-4">
        @if (Auth::check())
          <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
          <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
        @endif
      </div>

      <div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('home')">
          {{ __('My Orders') }}
        </x-responsive-nav-link>
        @role('admin')
          <x-responsive-nav-link :href="route('admin')">
            {{ __('Admin Settings') }}
          </x-responsive-nav-link>
        @endrole
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>
