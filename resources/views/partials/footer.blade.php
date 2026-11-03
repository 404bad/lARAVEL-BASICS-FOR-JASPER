<footer class="border-t border-slate-800 bg-slate-950 text-slate-300">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-4 px-5 py-7 text-sm">
        <p>&copy; {{ now()->year }} {{ config('app.name') }}</p>
        <nav aria-label="Footer navigation" class="flex gap-6">
            <a href="{{ url('/about') }}" class="transition-colors hover:text-white">About</a>
            <a href="{{ url('/contact') }}" class="transition-colors hover:text-white">Contact</a>
        </nav>
    </div>
</footer>