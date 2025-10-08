<x-app-layout>
    <div class="flex bg-black text-center justify-center items-center tracking-widest text-white text-sm h-12">
        RetryLogはまだまだ成長中！新しい機能や改善を随時追加しています✨　ぜひ触って体験して、フィードバックも送ってください！
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdsxBtpULdzC-1T4l4MIvKiRHaWNII4NSnWUiESX8Bl8b0BMQ/viewform?usp=header" target="_blank" class="text-xs underline underline-offset-2 hover:text-gray-300 ml-2">フィードバックを送る →

        </a>
    </div>
    <!-- </header>  -->
    <div class="flex flex-col justify-center items-center py-5">

        <div
            class="px-8 max-w-[1100px] mx-auto my-5 bg-center bg-no-repeat bg-cover flex justify-between items-center overflow-hidden bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-2xl @[480px]:rounded-xl min-h-[218px]"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCyuWSbUlVXDheil_kgFnx9QFMK2U37-YCFN_Iwg-4pzFhlmbv9AvXxSuYvxITnCT_c7tGDNBxmXbQeUZMqT4McGSYs7ed_ZJjOnQhFHY7d8R7G-JfmlWTj1TdXt9rI-YNwGvo5cZLH_MAQ35sjfP1buDWK-pAF23jJwc6IIO7slzCkYyZiNURU_4ffrQx9U2gKtTPNkYMT6T0-3ApUM1zBvQfF2mDxMKjBVaZKqSTD7ryViY7o0AUdZ1wozw8vmnOgg-ggvjagTlM");'>
            <div class="flex flex-col items-start justify-center">
                <p class="text-white text-2xl font-bold leading-tight tracking-[-0.015em] px-6 pb-6">Welcome to RETRY LOG</p>
                <p class="text-white text-sm font-normal leading-normal tracking-[0.015em] px-6 pb-6">後ろを向いた日があっても、それは終わりじゃない。今日またここに来てくれたこと、それが一歩です。あなたの“続けたい”を、ここで分かち合いましょう。</p>
            </div>
            <Button id="open" class="p-5  h-full whitespace-nowrap rounded-2xl bg-white text-red-700 shadow-lg hover:bg-white/90 hover:scale-105 transition-all">
                ＋つぶやきを投稿する
            </Button>

        </div>
        <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="relative layout-content-container flex flex-col items-center justify-center rounded-2xl bg-white p-10 m-10 shadow-lg">
                <button id="close" class="absolute top-3 right-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                        <path fill="currentColor" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg></button>
                <div class="flex space-x-5 w-full h-full">
                    <div
                        class="bg-center bg-no-repeat aspect-square bg-cover rounded-full top-10 w-10 h-10 shrink-0"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCKZS_WEnpFEjPE5zOX4qN27VKdVIVnmYg667RwXbsEghVpnxweJZFiJ7PTtC78QKX9Qs8XW63-1bnDhaOu1Zg9LnBAmaFtlfOxj0M7fhUi_OkxaB6yIjju-fttAXiweHcXcwxoKMLlxG4eICa3NgfLWswiDXRLOBEZZvZcn3qoz7vm2_7kTUQjRF2-vMwrhhJ5hqjnU1R3ls92UqX903x3Wimk7eUpNSQYDNFo3-llMAa2RoQXsFOfxoUkGDe4iMQQoHC9oP4yTbk");'></div>
                    <textarea
                        rows="10" cols="50"
                        placeholder="今日のつぶやきをどうぞ..."
                        class="form-input flex flex-1 resize-none overflow-hidden rounded-xl text-[#111418] text-xl focus:outline-0 focus:ring-0 border-none bg-white focus:border-none placeholder:text-[#617589] text-base font-normal leading-normal"></textarea>
                </div>
                <div class="flex w-full items-center justify-between">
                    <p class="text-red-700">残り30文字</p>
                    <button
                        class="flex flex-none w-fit h-fit cursor-pointer items-center justify-center overflow-hidden rounded-2xl p-5 flex-1 bg-[#1380ec] text-white text-sm font-bold leading-normal tracking-widest shadow-lg hover:bg-[#0d6efd] transition-all hover:scale-95">
                        <span class="truncate">投稿する</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-around p-4 my-5">
        <x-profile-card />
        <div class="layout-content-container flex flex-col w-2/3">
            <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[50px]"></div>

            <h2 class="text-[#0d0d1c] tracking-light text-[28px] font-bold leading-tight text-left py-3">タイムライン</h2>
            <!-- post-1 -->
            <div id="content" class="flex flex-col m-5">
                @foreach ($timeline as $post)
                    <x-posts.post-card :post="$post" />
                @endforeach
            </div>
        </div>
    </div>
    </div>
    <script>
        const openBtn = document.getElementById("open");
        const modal = document.getElementById("modal");
        const closeBtn = document.getElementById("close");
        const addHabitBtn = document.getElementById("addHabit");
        openBtn.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });
        closeBtn.addEventListener("click", () => {
            modal.classList.add("hidden");
        });
        addHabitBtn.addEventListener("click", () => {
            addHabitBtn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="currentColor" d="m9.55 15.15l8.475-8.475q.3-.3.7-.3t.7.3t.3.713t-.3.712l-9.175 9.2q-.3.3-.7.3t-.7-.3L4.55 13q-.3-.3-.288-.712t.313-.713t.713-.3t.712.3z" />
            </svg>
            記録済み`;
            addHabitBtn.classList.remove("hover:bg-gray-800");
            addHabitBtn.classList.add("bg-teal-500", "cursor-not-allowed");
            addHabitBtn.disabled = true;
        });
    </script>
</x-app-layout>