<x-base-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#0d1117] text-gray-300 px-4 font-mono">
        <div class="bg-[#161b22] border border-[#30363d] shadow-2xl rounded-2xl w-full max-w-md p-8 relative">

            <!-- ASCII HEADER -->
            <pre class="text-green-400 text-xs mb-6 leading-tight select-none">
   ____          _           ____
  / ___|___   __| | ___     / ___|_ __ ___   __ _ _ ______
 | |   / _ \ / _` |/ _ \   | |  _| '_ ` _ \ / _` | '_  `_ \
 | |__| (_) | (_| |  __/   | |_| | | | | | | (_| | | | | | |
  \____\___/ \__,_|\___|    \____|_| |_| |_|\__,_|_| |_| |_|
            </pre>

            <!-- TAB BUTTONS -->
            <div class="flex mb-6 border-b border-[#30363d]">
                <button
                    id="tabLogin"
                    class="w-1/2 py-2 text-center font-semibold border-b-2 border-green-400 text-green-400"
                    onclick="switchTab('login')">
                    // login()
                </button>

                <button
                    id="tabSignup"
                    class="w-1/2 py-2 text-center font-semibold text-gray-500 hover:text-gray-300"
                    onclick="switchTab('signup')">
                    // signup()
                </button>
            </div>

            <!-- LOGIN FORM -->
            <div id="login" class="block">
                <form action="/login" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-sm mb-1 text-gray-400">email:</label>
                        <input type="email" name="email" required
                            class="w-full px-3 py-2 bg-[#0d1117] border border-[#30363d] rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>

                    <div>
                        <label class="block text-sm mb-1 text-gray-400">password:</label>
                        <input type="password" name="password" required
                            class="w-full px-3 py-2 bg-[#0d1117] border border-[#30363d] rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400">
                    </div>

                    <button type="submit"
                        class="w-full py-2 bg-green-600 text-black font-bold rounded-md hover:bg-green-500 transition">
                        authenticate();
                    </button>
                </form>
            </div>

            <!-- SIGNUP FORM -->
            <div id="signup" class="hidden">
                <form action="/register" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-sm mb-1 text-gray-400">username:</label>
                        <input type="text" name="username" required
                            class="w-full px-3 py-2 bg-[#0d1117] border border-[#30363d] rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-400">
                    </div>

                    <div>
                        <label class="block text-sm mb-1 text-gray-400">email:</label>
                        <input type="email" name="email" required
                            class="w-full px-3 py-2 bg-[#0d1117] border border-[#30363d] rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-400">
                    </div>

                    <div>
                        <label class="block text-sm mb-1 text-gray-400">password:</label>
                        <input type="password" name="password" required
                            class="w-full px-3 py-2 bg-[#0d1117] border border-[#30363d] rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-400">
                    </div>
                    <div>
                        <label class="block text-sm mb-1 text-gray-400">comfirm password:</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full px-3 py-2 bg-[#0d1117] border border-[#30363d] rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-purple-400">
                    </div>

                    <button type="submit"
                        class="w-full py-2 bg-purple-600 text-white font-bold rounded-md hover:bg-purple-500 transition">
                        create_account();
                    </button>
                </form>
            </div>

            <!-- TERMINAL FOOTER -->
            <div class="mt-6 text-xs text-gray-500 text-center">
                <span class="text-green-400">CodeGram v1.0</span> — built for developers.
            </div>
        </div>
    </div>

    <!-- CODEGRAM TAB SWITCHER -->
    <script>
        function switchTab(tab) {
            const login = document.getElementById('login');
            const signup = document.getElementById('signup');
            const tabLogin = document.getElementById('tabLogin');
            const tabSignup = document.getElementById('tabSignup');

            if (tab === 'login') {
                login.classList.remove('hidden');
                signup.classList.add('hidden');

                tabLogin.classList.add('border-green-400', 'text-green-400');
                tabLogin.classList.remove('text-gray-500');

                tabSignup.classList.remove('border-green-400', 'text-green-400');
                tabSignup.classList.add('text-gray-500');
            } else {
                signup.classList.remove('hidden');
                login.classList.add('hidden');

                tabSignup.classList.add('border-green-400', 'text-green-400');
                tabSignup.classList.remove('text-gray-500');

                tabLogin.classList.remove('border-green-400', 'text-green-400');
                tabLogin.classList.add('text-gray-500');
            }
        }
    </script>
</x-base-layout>
