<x-app-layout>
<div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[50px] m-5"></div>
    <h2 class="text-2xl font-bold mt-10 mx-10">達成済みチャレンジ一覧</h2>
    <div class="flex justify-between items-center mt-10 mx-10">
        <div id="timeSelector" class="relative bg-gray-200 rounded-2xl max-h-[50px] p-2 flex w-fit space-x-2">
            <div id="indicator" class="absolute top-[5px] left-2 h-[40px] w-24 rounded-2xl bg-white transition-all duration-300"></div>
            <!-- z軸の方向に手前に動かす -->
            <button data-template="1w" class="relative z-10 px-6 rounded-2xl text-gray-900 bg-white">1週間</button>
            <button data-template="1m" class="relative z-10 px-6 rounded-2xl text-gray-500">1ヶ月</button>
            <button data-template="6m" class="relative z-10 px-6 rounded-2xl text-gray-500">6ヶ月</button>
            <button data-template="1y" class="relative z-10 px-6 rounded-2xl text-gray-500">1年</button>
        </div>
        <div class="flex items-center">
            <input type="text" placeholder="Search" class="max-w-[800px] max-h-[40px] ml-4 p-2 border border-gray-300 rounded-lg">
            <button class="ml-2 p-2 bg-blue-600 text-white rounded-lg">検索</button>
        </div>
    </div>
    <div class="flex justify-between items-center mt-10 mx-10">
        <p class="text-gray-600">全100件</p>
        <div class="relative inline-block text-left items-left min-w-[150px]">
            <button id="sort-button" class="hover:bg-gray-300 rounded-lg p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25"><!-- Icon from TDesign Icons by TDesign - https://github.com/Tencent/tdesign-icons/blob/main/LICENSE -->
                    <path fill="#7a7a7a" d="M19 2.586L23.414 7L22 8.414l-2-2V20h-2V6.414l-2 2L14.586 7zM2 4h11v2H2zm0 7h13v2H2zm0 7h13v2H2z" />
                </svg>
            </button>
            <div id="sort-menu" class="hidden absolute mt-2 flex flex-col bg-white rounded-lg p-3 transition-all min-w-full shadow-lg">
                <button class="w-fit text-left p-3 hover:bg-gray-300">新しい順</button>
                <button class="w-fit text-left p-3 hover:bg-gray-300">古い順</button>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap gap-4 m-10">
        @for ($i=0; $i
        < 10; $i++)
            <x-challenge-public-card />
        @endfor
    </div>
    <script>
        const sortButton = document.getElementById('sort-button');
        const sortMenu = document.getElementById('sort-menu');

        sortButton.addEventListener('click', () => {
            if (sortMenu.classList.contains('hidden')) {
                sortMenu.classList.remove('hidden');
            } else {
                sortMenu.classList.add('hidden');
            }
        });
        document.addEventListener('click', (event) => {
            if (!sortButton.contains(event.target) && !sortMenu.contains(event.target)) {
                sortMenu.classList.add('hidden');
            }
        });
    </script>
</x-app-layout>