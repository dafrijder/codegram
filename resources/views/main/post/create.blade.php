<x-base-layout>

<div class="flex">

    {{-- Page Content --}}
    <div class="ml-64 w-full min-h-screen bg-[#0d1117] text-gray-200 p-10 font-mono">

        <div class="flex justify-center mt-10">

            <div class="w-full max-w-xl bg-[#161b22] border border-[#30363d] rounded-xl p-6 shadow-xl">

                <h1 class="text-3xl font-bold text-green-400 mb-6 text-center">new_post()</h1>

                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <!-- Title -->
                    <div>
                        <label class="block mb-1 text-sm text-gray-400">title</label>
                        <input type="text"
                            name="title"
                            class="w-full px-3 py-2 rounded-lg bg-[#0d1117] border border-[#30363d] text-gray-200 focus:outline-none focus:border-green-400"
                            placeholder="my cool project...">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block mb-1 text-sm text-gray-400">description</label>
                        <textarea
                            name="description"
                            rows="4"
                            class="w-full px-3 py-2 rounded-lg bg-[#0d1117] border border-[#30363d] text-gray-200 focus:outline-none focus:border-green-400"
                            placeholder="what did you build?"></textarea>
                    </div>

                    <!-- Photo -->
                    <div>
                        <label class="block mb-1 text-sm text-gray-400">photo</label>
                        <input type="file"
                            name="photo"
                            class="w-full text-gray-200 file:bg-green-600 file:border-none file:px-4 file:py-2 file:rounded-lg file:text-white file:cursor-pointer file:hover:bg-green-500">
                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full py-2 bg-green-600 hover:bg-green-500 text-white font-bold rounded-lg transition">
                        upload_post()
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</x-base-layout>
