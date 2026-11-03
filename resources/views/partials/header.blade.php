<header class="border-b border-slate-200 bg-white">
    <nav aria-label="Primary navigation" class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-5 px-5 py-4">
        <a href="{{ url('/') }}" class="flex items-center gap-3 text-lg font-semibold text-slate-950">
            <span aria-hidden="true" class="grid size-9 place-items-center rounded-sm bg-emerald-800 text-sm font-bold text-white">
                {{ strtoupper(substr(config('app.name'), 0, 1)) }}
            </span>
            <span>{{ config('app.name') }}</span>
        </a>

        <div class="flex flex-wrap items-center gap-x-7 gap-y-2 text-sm font-medium text-slate-600">
            <a href="{{ url('/') }}" class="transition-colors hover:text-emerald-800">Home</a>
            <a href="{{ url('/about') }}" class="transition-colors hover:text-emerald-800">About</a>
            <a href="{{ url('/contact') }}" class="transition-colors hover:text-emerald-800">Contact</a>
            <a href="{{ url('/login') }}" class="transition-colors hover:text-emerald-800">Log In</a>
            <a href="{{ url('/signup') }}" class="transition-colors hover:text-emerald-800">Sign Up</a>
        </div>
    </nav>
</header>