<x-base-layout>

    <div class="min-h-screen bg-[#0d1117] text-gray-200 font-mono 
                p-4 md:ml-64 pb-24 md:pb-0">

        <div class="max-w-3xl mx-auto">

            <!-- HEADER -->
            <div class="flex items-center gap-6 mb-8">

                <!-- AVATAR -->
                <div class="w-24 h-24 rounded-full bg-gray-500"></div>

                <!-- USER INFO -->
                <div>
                    <h1 class="text-2xl font-bold text-green-400">
                        {{ $user->username }}
                    </h1>

                    <div class="flex gap-6 mt-3 text-sm">

                        <div>
                            <span class="font-bold">{{ $posts->count() }}</span> posts
                        </div>

                        <div>
                            <span class="font-bold">{{ $user->followers }}</span> followers
                        </div>

                        <div>
                            <span class="font-bold">
                                {{ is_array($user->following) ? count($user->following) : 0 }}
                            </span> following
                        </div>
                    </div>
                </div>

            </div>

            <!-- BIO -->
            <div class="mb-6">
                <p class="text-gray-300">
                    {{ $user->bio ?? 'No bio yet...' }}
                </p>
            </div>

            <hr class="border-[#30363d] mb-6">

            <!-- POSTS GRID -->
            <div class="grid grid-cols-3 gap-1">
                @foreach($posts as $post)
                    <a href="/post/{{ $post->id }}">
                        <img src="{{ asset('storage/' . $post->photo) }}" class="w-full aspect-square object-cover">
                    </a>
                @endforeach
            </div>

        </div>

    </div>

</x-base-layout>