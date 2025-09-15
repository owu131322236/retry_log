<x-app-layout>
    <div class=" py-5 @[480px]:px-4 @[480px]:py-3">
        <div
            class="px-8 max-w-[950px] mx-auto my-8 bg-center bg-no-repeat bg-cover flex justify-between items-center overflow-hidden bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-2xl @[480px]:rounded-xl min-h-[218px]">
            <div class="flex flex-col items-start justify-center">
                <p class="text-white text-2xl font-bold leading-tight tracking-[-0.015em] px-6 pb-6">Start Your New Challenge</p>
                <p class="text-white text-sm font-normal leading-normal tracking-[0.015em] px-6 pb-6">何度続かなくても、また始めようとする気持ちがあるなら、それはあなたの強さです。ここは、何度でも始められる場所。今日のあなたの新しい挑戦を、静かに残していきましょう。</p>
            </div>
            <Button id="open" class="p-5  h-full whitespace-nowrap rounded-2xl bg-white text-red-700 hover:bg-white/90">
                ＋ 新しいチャレンジを始める
            </Button>
        </div>
        <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="relative layout-content-container flex flex-col items-center rounded-2xl bg-white max-w-[800px] w-full h-fit shadow-lg">
                <button id="close" class="absolute top-3 right-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                        <path fill="currentColor" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                    </svg></button>
                <p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72 p-4">New Challenge</p>

                <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal pb-2">チャレンジ名</p>
                        <input
                            placeholder="e.g., Daily Meditation"
                            class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none h-14 placeholder:text-[#617589] p-4 text-base font-normal leading-normal"
                            value="" />
                    </label>
                </div>
                <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal pb-2">詳細</p>
                        <textarea
                            placeholder="Describe your challenge goal in detail"
                            class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none min-h-36 placeholder:text-[#617589] p-4 text-base font-normal leading-normal"></textarea>
                    </label>
                </div>
                <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal pb-2">カテゴリー</p>
                        <select
                            class="form-input flex w-full min-w-[500px] flex-1 resize-none overflow-hidden rounded-xl text-[#111418] focus:outline-0 focus:ring-0 border-none bg-gray-100 focus:border-none h-14 bg-[image:--select-button-svg] placeholder:text-[#617589] p-4 text-base font-normal leading-normal">
                            <option value="one"></option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                        </select>
                    </label>
                </div>
                <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-[#111418] text-base font-medium leading-normal pb-2">目標の達成日</p>
                        <input
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
            </div>
        </div>
    </div>
    <div class="m-10">
        <h2 class="text-2xl font-bold text-gray-800 m-5">進行中のチャレンジ</h2>
        <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[100px]"></div>
        <p class="text-sm text-gray-500 m-5">続けているチャレンジがここに表示されます。ボタンを押して今日の成功を記録しましょう！</p>
    </div>
    <div class="overflow-x-auto">
        <div class="flex space-x-8 px-10">
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] p-6">
                <div class="flex space-x-3 items-center mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                            <path fill="#008cb4" d="M9.094 30.97h11.419C27.717 30.97 31 25.681 31 20.77a8.48 8.48 0 0 0-2.941-6.029a9.96 9.96 0 0 0-6.657-2.747a9.93 9.93 0 0 0-8.086 5.007c-.56-1.115-1.37-2.732-2.016-4.032h2.118A2.8 2.8 0 0 0 16 10.661a3.36 3.36 0 0 0 1.201-2.694c0-3.662-4.097-5.5-6.374-5.5c-3.11-.073-4.012 2.185-4.82 4.205l-.035.09C5.469 8.054 1.06 19.504 1.06 22.981a8.1 8.1 0 0 0 2.3 5.687a7.84 7.84 0 0 0 5.734 2.3M7.835 7.497c.873-2.185 1.357-3.029 2.906-3.029h.068c1.491 0 4.391 1.235 4.391 3.5c.027.228-.008.458-.102.668v.001l-.073-.089a2 2 0 0 0-.385-.346a.95.95 0 0 0-.51-.172h-.531c-.518-.653-2.11-1.812-3.349-1.594l1.297 1.649H13.4l.268.639c.332.79.217 1.183.11 1.355a.56.56 0 0 1-.416.26H7.08l.618.805c.271.353.631.628.984.837a1 1 0 0 0 .105.433l.277.555v.002c.587 1.175 1.945 3.897 2.676 5.349q-.038.054-.073.11l-2.893 4.701a1 1 0 1 0 1.704 1.048l2.6-4.227q.134.032.273.034q.152-.006.298-.047l2.685 4.423a1 1 0 1 0 1.71-1.038l-2.964-4.883a2 2 0 0 0-.14-.201a7.86 7.86 0 0 1 6.461-4.247c1.98.051 3.87.84 5.3 2.212A6.6 6.6 0 0 1 29 20.77c-.001 4.082-2.626 8.2-8.487 8.2H9.094a5.9 5.9 0 0 1-4.309-1.7A6.07 6.07 0 0 1 3.062 23c0-2.64 3.448-12.093 4.773-15.502" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">ああああああ</h3>

                    <!-- <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">フィットネス</span> -->
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>0/30日</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <span>現在: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>最高: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>開始: 2025年9月14日</span>
                    </div>
                </div>
                <button class="flex justify-center w-full bg-teal-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-gray-800 transition duration-300 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                        <path fill="currentColor" d="m9.55 15.15l8.475-8.475q.3-.3.7-.3t.7.3t.3.713t-.3.712l-9.175 9.2q-.3.3-.7.3t-.7-.3L4.55 13q-.3-.3-.288-.712t.313-.713t.713-.3t.712.3z" />
                    </svg>
                    記録済み
                </button>
            </div>
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] p-6">
                <div class="flex space-x-3 items-center mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                            <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">ああああああ</h3>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>0/30日</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <span>現在: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>最高: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>開始: 2025年9月14日</span>
                    </div>
                </div>
                <button id="addHabit" class="flex justify-center w-full bg-gray-900 text-white font-bold py-3 px-4 rounded-lg hover:bg-gray-800 transition duration-300">
                    今日の習慣を記録
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] p-6">
                <div class="flex space-x-3 items-center mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                            <path fill="#008cb4" d="M18.362 3.202a2.936 2.936 0 0 0-4.724 0a2.94 2.94 0 0 1-3.25 1.055a2.936 2.936 0 0 0-3.822 2.778a2.94 2.94 0 0 1-2.008 2.763a2.936 2.936 0 0 0-1.46 4.494a2.94 2.94 0 0 1 0 3.416a2.936 2.936 0 0 0 1.46 4.494a2.94 2.94 0 0 1 2.008 2.763a2.936 2.936 0 0 0 3.823 2.778a2.94 2.94 0 0 1 3.249 1.055a2.936 2.936 0 0 0 4.724 0a2.94 2.94 0 0 1 3.25-1.055a2.936 2.936 0 0 0 3.822-2.778a2.94 2.94 0 0 1 2.008-2.763a2.936 2.936 0 0 0 1.46-4.494a2.94 2.94 0 0 1 0-3.416a2.936 2.936 0 0 0-1.46-4.494a2.94 2.94 0 0 1-2.008-2.763a2.936 2.936 0 0 0-3.823-2.778a2.94 2.94 0 0 1-3.249-1.055m-7.594 21.86c-5.005-2.89-6.72-9.29-3.83-14.294s9.29-6.72 14.294-3.83s6.72 9.29 3.83 14.294s-9.29 6.72-14.294 3.83" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">ああああああ</h3>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>0/30日</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <span>現在: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>最高: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>開始: 2025年9月14日</span>
                    </div>
                </div>
                <button id="addHabit" class="flex justify-center w-full bg-gray-900 text-white font-bold py-3 px-4 rounded-lg hover:bg-gray-800 transition duration-300">
                    今日の習慣を記録
                </button>
            </div>
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] p-6">
                <div class="flex space-x-3 items-center mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                            <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">ああああああ</h3>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>0/30日</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <span>現在: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>最高: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>開始: 2025年9月14日</span>
                    </div>
                </div>
                <button id="addHabit" class="flex justify-center w-full bg-gray-900 text-white font-bold py-3 px-4 rounded-lg hover:bg-gray-800 transition duration-300">
                    今日の習慣を記録
                </button>
            </div>
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] p-6">
                <div class="flex space-x-3 items-center mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                            <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">ああああああ</h3>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>0/30日</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <span>現在: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>最高: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>開始: 2025年9月14日</span>
                    </div>
                </div>
                <button id="addHabit" class="flex justify-center w-full bg-gray-900 text-white font-bold py-3 px-4 rounded-lg hover:bg-gray-800 transition duration-300">
                    今日の習慣を記録
                </button>
            </div>
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] p-6">
                <div class="flex space-x-3 items-center mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                            <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">ああああああ</h3>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>0/30日</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <span>現在: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>最高: 0日</span>
                    </div>
                    <div class="flex items-center">
                        <span>開始: 2025年9月14日</span>
                    </div>
                </div>
                <button id="addHabit" class="flex justify-center w-full bg-gray-900 text-white font-bold py-3 px-4 rounded-lg hover:bg-gray-800 transition duration-300">
                    今日の習慣を記録
                </button>
            </div>
        </div>
    </div>
    <div class="flex justify-between items-center mt-10 mb-10 mx-10">
        <div>
            <h2 class="text-2xl font-bold text-gray-800 m-5">達成済みチャレンジ</h2>
            <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[100px]"></div>
            <p class="text-sm text-gray-500 m-5">過去に達成したチャレンジがここに表示されます。一度失敗しても、再挑戦して成功を収めましょう！</p>
        </div>
        <a class="text-sm font-semibold text-indigo-600 hover:text-indigo-500 transition duration-300" href="#">全て表示する</a>
    </div>
    <div class="overflow-x-auto">
        <div class="flex space-x-8 px-10">
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] h-fit p-6">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex space-x-3 items-center ">
                        <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                                <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">毎日の瞑想</h3>
                    </div>
                    <span class="bg-teal-100 text-teal-800 text-sm font-medium px-3 py-1 rounded-full">達成済み</span>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>30/30日</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-teal-500 h-2.5 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">
                        <span>現在: 30日</span>
                    </div>
                    <div class="flex items-center">
                        <span>最高: 30日</span>
                    </div>
                    <div class="flex items-center">
                        <span>達成: 2025年8月15日</span>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] h-fit p-6">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex space-x-3 items-center ">
                        <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                                <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">毎日のジョギング</h3>
                    </div>
                    <span class="bg-teal-100 text-teal-800 text-sm font-medium px-3 py-1 rounded-full">達成済み</span>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>30/30日</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-teal-500 h-2.5 rounded-full" style="width: 100%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6">
                    <div class="flex items-center">

                        <span>現在: 30日</span>
                    </div>
                    <div class="flex items-center">

                        <span>最高: 30日</span>
                    </div>
                    <div class="flex items-center">

                        <span>達成: 2025年7月10日</span>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-lg min-w-[300px] h-fit p-6">
                <div class="flex justify-between items-center mb-4 opacity-60">
                    <div class="flex space-x-3 items-center ">
                        <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                                <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">毎日の瞑想</h3>
                    </div>
                    <span class="bg-rose-100 text-rose-800 text-sm font-medium px-3 py-1 rounded-full">中断</span>
                </div>
                <div class="mb-4 opacity-60">
                    <div class="flex justify-between text-gray-600 mb-1">
                        <span>進捗</span>
                        <span>15/30日</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-rose-500 h-2.5 rounded-full" style="width: 50%"></div>
                    </div>
                </div>
                <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6 opacity-60">
                    <div class="flex items-center">

                        <span>現在: 0日</span>
                    </div>
                    <div class="flex items-center">

                        <span>最高: 15日</span>
                    </div>
                    <div class="flex items-center">

                        <span>中断: 2025年6月20日</span>
                    </div>
                </div>
                <button class="w-full bg-indigo-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-teal-600 transition duration-300 flex items-center justify-center">
                    もう一度挑戦する
                </button>
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
        })
    </script>
</x-app-layout>