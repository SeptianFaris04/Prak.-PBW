<nav class="bg-zinc-800">
<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    
    <div class="flex items-center">
      <div class="shrink-0">
        <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
      </div>
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
         <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" 
            aria-current="page 
            -->
          <x-navbar.link href="/">Home</x-navbar.nav-link>
          <x-navbar.link href="{{ route('about') }}">About</x-navbar.nav-link>
          <x-navbar.link href="/contact">Contact</x-navbar.nav-link>
          <x-navbar.link href="/gallery">Gallery</x-navbar.nav-link>

        @auth
          <x-navbar.link href="{{ route('users.index') }}">Users</x-navbar.nav-link>
        @endauth
        
          @auth

             <x-navbar.link href="#">
               {{ auth()->user()->name }}
             </x-navbar.nav-link>
             <form action=" {{ route('logout') }}" method="post">
                @csrf
                <x-button type="submit">
                  Log Out
                </x-button>
             </form>
            @else
                 <x-navbar.link href="{{ route('login') }}">Login</x-navbar.nav-link>
            @endauth
        </div>
      </div>
    </div>
   
       
        
      </div>
    </div>
    <div class="-mr-2 flex md:hidden">
      <!-- Mobile menu button -->
      <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-zinc-800 p-2 text-zinc-400 hover:bg-zinc-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
        <span class="absolute -inset-0.5"></span>
        <span class="sr-only">Open main menu</span>
        <!-- Menu open: "hidden", Menu closed: "block" -->
        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <!-- Menu open: "block", Menu closed: "hidden" -->
        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
</div>

<!-- Mobile menu, show/hide based on menu state. -->
<div class="md:hidden" id="mobile-menu">
  <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
     <x-navbar.dropdown-item href="/"> Home </x-navbar.dropdown-link>
     <x-navbar.dropdown-item href="{{ route('about') }}"> About </x-navbar.dropdown-link>
     <x-navbar.dropdown-item href="/contact"> Contact </x-navbar.dropdown-link>
     <x-navbar.dropdown-item href="/gallery"> Gallery </x-navbar.dropdown-link>
     <x-navbar.dropdown-item href="{{ route('users.index') }}"> Users </x-navbar.dropdown-link>
  </div>
  <div class="border-t border-zinc-700 pb-3 pt-4">
    <div class="flex items-center px-5">
      <div class="shrink-0">
        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      </div>
      <div class="ml-3">
        <div class="text-base/5 font-medium text-white">Tom Cook</div>
        <div class="text-sm font-medium text-zinc-400">tom@example.com</div>
      </div>
      <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
        <span class="absolute -inset-1.5"></span>
        <span class="sr-only">View notifications</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </svg>
      </button>
    </div>
    <div class="mt-3 space-y-1 px-2">
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:bg-zinc-700 hover:text-white">Your Profile</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:bg-zinc-700 hover:text-white">Settings</a>
      <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:bg-zinc-700 hover:text-white">Sign out</a>
    </div>
  </div>
</div>
</nav>

@isset($heading)
<header class="bg-white shadow">
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <h1 class="text-3xl font-bold tracking-tight text-zinc-900">{{ $heading }}</h1>
</div>
</header>
@endisset
<main>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
{{ $slot }}
</div>
</main>
</div>

</nav>