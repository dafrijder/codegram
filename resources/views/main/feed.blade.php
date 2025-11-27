<x-base-layout>
    <div class="min-h-screen bg-[#0d1117] text-gray-200 px-4 py-8 font-mono">

        <div class="max-w-2xl mx-auto">

            <!-- HEADER -->
            <div class="mb-8 text-center">
                <h1 class="text-3xl font-bold text-green-400">// CodeGram Feed</h1>
                <p class="text-gray-500 text-sm">latest posts from the coding community</p>
            </div>

            <!-- POSTS LIST -->
            @foreach($posts as $post)
                <div class="bg-[#161b22] border border-[#30363d] rounded-xl p-5 mb-6 shadow-xl">

                    <!-- USER INFO -->
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#0d1117] border border-[#30363d] rounded-full flex items-center justify-center text-green-400">
                            {{ strtoupper(substr($post->user->username, 0, 1)) }}
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-green-400">
                                {{ $post->user->username }}
                            </h3>
                            <p class="text-xs text-gray-500">
                                {{ $post->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>

                    <!-- TITLE -->
                    <h2 class="text-xl font-bold text-purple-400 mb-2">
                        {{ $post->title }}
                    </h2>

                    <!-- IMAGE -->
                    @if ($post->photo)
                        <img
                            src="{{ asset('storage/' . $post->photo) }}"
                            class="w-full rounded-md border border-[#30363d] mb-4"
                            alt="Post Image"
                        >
                    @endif

                    <!-- DESCRIPTION -->
                    <p class="text-gray-300 mb-4 whitespace-pre-line">
                        {{ $post->description }}
                    </p>

                    <!-- ACTION BUTTONS -->
                    <div class="flex items-center gap-4 text-sm">

                        <button class="flex items-center gap-1 text-green-400 hover:opacity-80">
                            <span class="text-lg">//</span>comment
                        </button>

                        <button class="flex items-center gap-1 text-purple-400 hover:opacity-80">
                            <span class="text-lg">⭐</span> star
                        </button>

                    </div>

                </div>
            @endforeach

            <!-- If no posts -->
            @if($posts->count() === 0)
                <p class="text-center text-gray-500 text-sm">no posts yet. create something awesome :)</p>
            @endif

        </div>
    </div>
</x-base-layout>
