<nav class="bg-white/80 backdrop-blur-md border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="font-bold text-xl text-indigo-600 tracking-tight">Ruhana.</a>
        <div class="flex gap-6 text-sm font-medium text-gray-600">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">About</a>
            <a href="{{ route('education') }}" class="{{ request()->routeIs('education') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">Education</a>
            <a href="{{ route('projects.index') }}" class="{{ request()->routeIs('projects.*') ? 'text-indigo-600 font-semibold' : 'hover:text-indigo-600' }}">Projects</a>
        </div>
    </div>
</nav>