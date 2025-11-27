<div class="h-screen w-64 bg-[#0d1117] border-r border-[#30363d] text-gray-300 font-mono flex flex-col py-6 px-4 fixed">

    <!-- LOGO -->
    <div class="mb-10 text-center">
        <h1 class="text-2xl font-bold text-green-400">CodeGram</h1>
        <p class="text-xs text-gray-500">v1.0</p>
    </div>

    <!-- NAV LINKS -->
    <nav class="space-y-4 text-sm">

        <!-- FEED -->
        <a href="/feed"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#161b22] transition">
            <span class="text-lg">🏠</span>
            <span>feed()</span>
        </a>

        <!-- EXPLORE -->
        <a href="/explore"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#161b22] transition">
            <span class="text-lg">🔍</span>
            <span>explore()</span>
        </a>

        <!-- CREATE POST -->
        <a href="/post/create"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#161b22] transition">
            <span class="text-lg">➕</span>
            <span>new_post()</span>
        </a>

        <!-- PROFILE -->
        <a href="/profile/{{ Auth::id() }}"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#161b22] transition">
            <span class="text-lg">👤</span>
            <span>profile()</span>
        </a>

        <!-- SETTINGS -->
        <a href="/settings"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-[#161b22] transition">
            <span class="text-lg">⚙️</span>
            <span>settings()</span>
        </a>
    </nav>

    <div class="flex-grow"></div>

    <!-- LOGOUT -->
    <form action="/logout" method="POST">
        @csrf
        <button
            class="w-full text-left flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-red-900/40 text-red-400 hover:text-red-300 transition">
            <span class="text-lg">🚪</span>
            <span>logout()</span>
        </button>
    </form>
</div>
