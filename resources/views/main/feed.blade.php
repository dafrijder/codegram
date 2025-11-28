<x-base-layout>

    <div class="min-h-screen bg-[#0d1117] text-gray-200 font-mono 
                p-4 md:ml-64 pb-24 md:pb-0">

        <h1 class="text-xl font-bold mb-6 text-green-400">feed()</h1>

        <div class="max-w-xl mx-auto space-y-6">

            @foreach ($posts as $post)
                <div class="bg-[#161b22] border border-[#30363d] rounded-xl">

                    <div class="flex items-center gap-3 p-4">
                        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
                        <div class="flex flex-col">
                            <span class="font-bold text-green-400">

                                <a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a>
                            </span>
                            <span class="text-xs text-gray-500">
                                {{ $post->created_at->diffForHumans() }}
                            </span>
                        </div>
                    </div>

                    <img src="{{ asset('storage/' . $post->photo) }}" class="w-full object-cover max-h-[550px]"
                        alt="post image">

                    <div class="p-4 space-y-2">
                        <p class="font-bold text-green-400">
                            {{ $post->title }}
                        </p>

                        <p class="text-gray-300">
                            {{ $post->description }}
                        </p>
                    </div>

                </div>
            @endforeach

        </div>

    </div>

</x-base-layout>