<x-app-layout>
    <div class=" py-5 @[480px]:px-4 @[480px]:py-3">
        <div
            class="px-8 max-w-[1100px] mx-auto my-8 bg-center bg-no-repeat bg-cover flex justify-between items-center overflow-hidden bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-2xl @[480px]:rounded-xl min-h-[218px]">
            <div class="flex flex-col items-start justify-center">
                <p class="text-white text-2xl font-bold leading-tight tracking-[-0.015em] px-6 pb-6">Start Your New Challenge</p>
                <p class="text-white text-sm font-normal leading-normal tracking-[0.015em] px-6 pb-6">何度続かなくても、また始めようとする気持ちがあるなら、それはあなたの強さです。ここは、何度でも始められる場所。今日のあなたの新しい挑戦を、静かに残していきましょう。</p>
            </div>
            <Button id="open" class="p-5  h-full whitespace-nowrap rounded-2xl bg-white text-red-700 shadow-lg hover:bg-white/90">
                ＋ 新しいチャレンジを始める
            </Button>
        </div>
        <!-- ======================フォーム ====================================================== -->
        <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="relative layout-content-container flex flex-col items-center rounded-2xl bg-white max-w-[800px] w-full h-fit shadow-lg">
                <button id="close" class="absolute top-3 right-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                        <path fill="currentColor" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg></button>
                <form method="POST" action="{{ route('challenges.store') }}">
                    @csrf
                    <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72 p-4">New Challenge</p>

                    <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                        <label for="title" class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#111418] text-base font-medium leading-normal pb-2">チャレンジ名</p>
                            <input
                                name="title"
                                id="title"
                                type="text"
                                placeholder="e.g., Daily Meditation"
                                class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none h-14 placeholder:text-[#617589] p-4 text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                        <label for="description" class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#111418] text-base font-medium leading-normal pb-2">詳細</p>
                            <textarea
                                id="description"
                                name="description"
                                type="text"
                                placeholder="Describe your challenge goal in detail"
                                class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none min-h-36 placeholder:text-[#617589] p-4 text-base font-normal leading-normal"></textarea>
                        </label>
                    </div>
                    <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                        <label class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#111418] text-base font-medium leading-normal pb-2">カテゴリー</p>
                            <select
                                name="frequency_type"
                                class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#617589] p-4 text-base font-normal leading-normal">
                                <option value="daily">毎日</option>
                                <option value="weekly">毎週</option>
                                <option value="monthly">毎月</option>
                            </select>
                        </label>
                    </div>
                    <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                        <label for="frequency_goal" class="flex flex-col min-w-40 flex-1">
                            <input type="number" id="frequency_goal" name="frequency_goal" class="rounded-xl p-2" min="1" value="1" />
                        </label>
                    </div>
                    <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                        <label for="start_date" class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#111418] text-base font-medium leading-normal pb-2">開始する日</p>
                            <input
                                id="start_date"
                                name="start_date"
                                type="date"
                                placeholder="e.g., 2026-12-31"
                                class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none h-14 placeholder:text-[#617589] p-4 text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                        <label for="end_date" class="flex flex-col min-w-40 flex-1">
                            <p class="text-[#111418] text-base font-medium leading-normal pb-2">終了する日</p>
                            <input
                                id="end_date"
                                name="end_date"
                                type="date"
                                placeholder="e.g., 2026-12-31"
                                class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none h-14 placeholder:text-[#617589] p-4 text-base font-normal leading-normal"
                                value="" />
                        </label>
                    </div>
                    <div class="flex px-4 py-3">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 flex-1 bg-[#1380ec] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">追加する</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ダミーデータ -->
    @php
    $challenges = [
    (object)['title' => '毎日ランニング', 'is_completed' => false],
    (object)['title' => '30日スクワットチャレンジ', 'is_completed' => true],
    (object)['title' => '水を1日2L飲む', 'is_completed' => false],
    (object)['title' => '毎朝の瞑想', 'is_completed' => true],
    (object)['title' => '読書30分', 'is_completed' => true],
    (object)['title' => '新しいレシピを試す', 'is_completed' => false],
    (object)['title' => '毎日感謝日記を書く', 'is_completed' => true],
    (object)['title' => '毎日英単語を覚える', 'is_completed' => false],
    ];
    @endphp

    <div class="mt-10 mx-10">
        <h2 class="text-2xl font-bold text-gray-800 m-5">進行中のチャレンジ</h2>
        <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[100px]"></div>
        <p class="text-sm text-gray-500 m-5">続けているチャレンジがここに表示されます。ボタンを押して今日の成功を記録しましょう！</p>
    </div>
    <div class="overflow-x-auto">
        <div class="flex space-x-8 px-10 py-5">
            @foreach($ongoingChallenges as $challenge)
            <x-challenge-card.challenge-ongoing-card :challenge="$challenge" />
            `@endforeach
        </div>
    </div>
    <div class="flex justify-between items-center mt-10 mx-10">
        <div>
            <h2 class="text-2xl font-bold text-gray-800 m-5">達成済みチャレンジ</h2>
            <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[100px] mb-5"></div>
            <p class="text-sm text-gray-500 m-5">過去に達成したチャレンジがここに表示されます。一度失敗しても、再挑戦して成功を収めましょう！</p>
        </div>
        <a class="text-sm font-semibold text-blue-600 hover:text-blue-800 transition duration-300" href="{{ route('challenge-all') }}">全て表示する</a>
    </div>
    <div class="overflow-x-auto">
        <div class="flex space-x-8 px-10 py-5">
            @foreach ($endedChallenges as $endedchallenge)
            <x-challenge-card.challenge-completed-card :endedchallenge="$challenge" />
            @endforeach
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
        })
        //チャレンジカードのオプションメニュー
        document.querySelectorAll('.options-button').forEach(button => {
            button.addEventListener('click', function() {
                const parent = this.parentElement;
                const menu = parent.querySelector('.options-menu');
                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden');
                    setTimeout(() => menu.classList.remove('opacity-0'), 10);
                }
                menu.addEventListener('mouseleave', function handleMouseLeave() {
                    menu.classList.add('opacity-0');
                    setTimeout(() => menu.classList.add('hidden'), 10);
                    menu.removeEventListener('mouseleave', handleMouseLeave);
                });
            });
        });
    </script>
</x-app-layout>