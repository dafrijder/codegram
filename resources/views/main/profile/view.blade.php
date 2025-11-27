<x-base-layout>

<div class="flex">

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- MAIN CONTENT --}}
    <div class="ml-64 w-full min-h-screen bg-[#0d1117] text-gray-200 font-mono">

        {{-- CENTERED WRAPPER --}}
        <div class="max-w-4xl mx-auto px-6 pt-12">

            {{-- PROFILE HEADER --}}
            <div class="flex gap-12 items-center mb-12">

                {{-- Profile Image --}}
                <img src="{{ $user->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . $user->username }}"
                     class="w-32 h-32 rounded-full border border-[#30363d] object-cover">

                <div>
                    <h1 class="text-3xl font-bold text-green-400">
                        {{ $user->username }}
                    </h1>

                    <div class="flex gap-8 mt-4 text-gray-300 text-md">
                        <p><span class="font-bold text-white">{{ $user->posts->count() }}</span> posts</p>
                        <p><span class="font-bold text-white">{{ $user->followers }}</span> followers</p>
                        <p><span class="font-bold text-white">{{ count($user->following ?? []) }}</span> following</p>
                    </div>

                    {{-- Edit button only for own profile --}}
                    @if(Auth::id() === $user->id)
                        <a href="/settings"
                           class="inline-block mt-4 px-4 py-2 bg-[#161b22] border border-[#30363d] rounded-lg hover:bg-[#1d2430] transition">
                            edit_profile()
                        </a>
                    @else
                        <form action="/follow/{{ $user->id }}" method="POST" class="mt-4">
                            @csrf
                            <button class="px-4 py-2 bg-green-600 hover:bg-green-500 text-white rounded-lg transition">
                                follow()
                            </button>
                        </form>
                    @endif

                </div>
            </div>

            {{-- BIO --}}
            <div class="mb-12 text-gray-300">
                <p class="whitespace-pre-line">
                    {{ $user->bio ?? 'This user has not written a bio yet...' }}
                </p>
            </div>

            {{-- POSTS GRID --}}
            <h2 class="text-xl font-bold text-white mb-4">posts()</h2>

            @if ($user->posts->count() === 0)
                <p class="text-gray-500">No posts yet...</p>
            @endif

            <div class="grid grid-cols-3 gap-4">

                @foreach($user->posts as $post)
                    <a href="{{ route('post.show', $post->id) }}">
                        <div class="group border border-[#30363d] rounded-lg overflow-hidden bg-[#161b22] hover:bg-[#1d2430] transition">

                            <img src="{{ asset('storage/' . $post->photo) }}"
                                 class="w-full h-64 object-cover group-hover:opacity-80 transition">

                        </div>
                    </a>
                @endforeach

            </div>

        </div>

    </div>

</div>

</x-base-layout>
