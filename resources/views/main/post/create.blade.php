<x-base-layout>

    <div class="min-h-screen bg-[#0d1117] text-gray-200 font-mono 
                p-4 md:ml-64 pb-24 md:pb-0 flex justify-center">

        <div class="w-full max-w-lg bg-[#161b22] border border-[#30363d] 
                    p-6 rounded-xl">

            <h1 class="text-xl font-bold text-green-400 mb-6">new_post()</h1>

            <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm text-gray-400 mb-1">title</label>
                    <input type="text" name="title" class="w-full bg-[#0d1117] border border-[#30363d] 
                                  rounded-lg px-4 py-2 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm text-gray-400 mb-1">description</label>
                    <textarea name="description" class="w-full bg-[#0d1117] border border-[#30363d] 
                                     rounded-lg px-4 py-2 h-28 focus:outline-none"></textarea>
                </div>

                <div>
                    <label class="block text-sm text-gray-400 mb-1">photo</label>
                    <input type="file" name="photo" class="w-full text-sm text-gray-400" accept="image/*">
                </div>

                <button class="w-full bg-green-600 hover:bg-green-500 transition px-4 py-2 rounded-lg font-bold">
                    upload_post()
                </button>

            </form>

        </div>

    </div>

</x-base-layout>