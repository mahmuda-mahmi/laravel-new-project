<header class="w-full">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-7 lg:px-8">

        <!-- Logo -->
        <!-- <a href="/" class="flex items-center gap-2 text-base font-bold">
            <span class="text-xl">✦</span>
            <span>Idea Hub</span>
        </a> -->

        
        <!-- nav menu -->

        <div class="navbar bg-base-100 shadow-sm">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg aria-label="Menu" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
                    </div>
                    <ul
                        tabindex="-1"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a href="/" class="btn btn-ghost">Home</a></li>
                        <li><a href="/ideas" class="btn btn-ghost">Ideas</a></li>
                        <li><a href="/admin" class="btn btn-ghost">Admin</a></li>
                    </ul>
                </div>
                <a href="/" class="flex items-center gap-2 text-base font-bold">
                    <span class="text-xl">✦</span>
                    <span>Idea Hub</span>
                </a>
            </div>
            
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                <li><a href="/" class="btn btn-ghost">Home</a></li>
                <li><a href="/ideas" class="btn btn-ghost">Ideas</a></li>
                <li><a href="/admin" class="btn btn-ghost">Admin</a></li>
                </ul>
            </div>
            <div class="navbar-end space-x-2">
                @guest
                <a href="/register" class="btn btn-soft btn-primary">Register</a>
                <a href="/login" class="btn btn-soft btn-success">Login</a>
                @endguest

                @auth
                <form action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-ghost">Logout</button>
                </form>
                @endauth

                <label class="toggle text-base-content">
                <input type="checkbox" value="coffee" class="theme-controller" />
                
                <svg aria-label="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></g></svg>

                <svg aria-label="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2"></path><path d="M12 20v2"></path><path d="m4.93 4.93 1.41 1.41"></path><path d="m17.66 17.66 1.41 1.41"></path><path d="M2 12h2"></path><path d="M20 12h2"></path><path d="m6.34 17.66-1.41 1.41"></path><path d="m19.07 4.93-1.41 1.41"></path></g></svg>
            </label>
            </div>
        </div>

        

        <!-- Navigation -->


        <!-- Mobile menu button -->
        <!-- <button
            id="mobileMenuButton"
            class="text-2xl md:hidden"
            type="button"
        >
            ☰
        </button> -->

    </nav>

    <!-- Mobile Navigation -->
    <!-- <div id="mobileMenu" class="hidden border-t border-gray-200 px-6 py-5 dark:border-gray-800 md:hidden">

        <div class="flex flex-col gap-5">

            <a href="/">
                Home
            </a>
            <a href="/ideas">
                Ideas
            </a>
            <a href="/register" class="btn btn-primary">
                Register
            </a>
            
            <label class="toggle text-base-content">
                <input type="checkbox" value="coffee" class="theme-controller" />
                
                <svg aria-label="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path></g></svg>

                <svg aria-label="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2"></path><path d="M12 20v2"></path><path d="m4.93 4.93 1.41 1.41"></path><path d="m17.66 17.66 1.41 1.41"></path><path d="M2 12h2"></path><path d="M20 12h2"></path><path d="m6.34 17.66-1.41 1.41"></path><path d="m19.07 4.93-1.41 1.41"></path></g></svg>
            </label>

        </div>

    </div> -->
</header>