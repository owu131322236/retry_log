@props(['challenge'])
<div class="bg-white rounded-2xl shadow-lg min-w-[300px] h-fit p-6 hover:scale-105 transition-all">
    @if ($challenge->is_completed==true)
    <div class="flex justify-between items-center mb-4">
    @else
    <div class="flex justify-between items-center mb-4 opacity-60">
    @endif
        <div class="flex space-x-3 items-center ">
            <div class="w-12 h-12 rounded-2xl bg-gray-100 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><!-- Icon from Fluent Emoji High Contrast by Microsoft Corporation - https://github.com/microsoft/fluentui-emoji/blob/main/LICENSE -->
                    <path fill="#008cb4" d="M29.435 2.565a4 4 0 0 0-5.657 0l-.034.034a1 1 0 0 0-1.353 1.353l-8.516 8.516l-.146-.146a.5.5 0 0 0-.707 0l-.708.707a.5.5 0 0 0 0 .707l.147.146l-6.714 6.714a1.5 1.5 0 0 0 0 2.122L4.45 24.014a3 3 0 0 0-.7 1.098L2.269 29.2a.417.417 0 0 0 .534.534l4.087-1.486a3 3 0 0 0 1.096-.698l1.297-1.297a1.5 1.5 0 0 0 2.122 0l6.714-6.714l.08.08a.5.5 0 0 0 .706 0l.707-.708a.5.5 0 0 0 0-.707l-.079-.08l4.004-4.003a1 1 0 0 0 1.611 1.134l4.95-4.95a1 1 0 0 0 0-1.414l-.666-.666l.004-.003a4 4 0 0 0 0-5.657m-1.418 4.246L25.19 3.983l.003-.004a2 2 0 1 1 2.829 2.829zm-4.242-1.414l2.828 2.828l-8.485 8.486l-2.829-2.829zm-16.26 16.26l6.36-6.36l2.829 2.828l-6.36 6.36zm-.707 4.95a1 1 0 1 1-1.415-1.415a1 1 0 0 1 1.415 1.415" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900">毎日の瞑想</h3>
        </div>
        @if($challenge->is_completed==true)
        <span class="bg-teal-100 text-teal-800 text-sm font-medium px-3 py-1 rounded-full">達成済み</span>
        @else
        <span class="bg-rose-100 text-rose-800 text-sm font-medium px-3 py-1 rounded-full">中断</span>
        @endif
    </div>
    <div class="mb-4 opacity-60">
        <div class="flex justify-between text-gray-600 mb-1">
            <span>進捗</span>
            <span>15/30日</span>
        </div>
        @if($challenge->is_completed==true)
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-teal-500 h-2.5 rounded-full" style="width: 100%"></div>
        </div>
        @else
        <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-rose-500 h-2.5 rounded-full" style="width: 50%"></div>
        </div>
        @endif
    </div>
    <div class="flex items-center text-sm text-gray-500 space-x-4 mb-6 opacity-60">
        <div class="flex items-center">

            <span>現在: 0日</span>
        </div>
        <div class="flex items-center">

            <span>最高: 15日</span>
        </div>
        @if ($challenge->is_completed==true)
        <div class="flex items-center">
            <span>達成: 2025年7月15日</span>
        </div>
        @else
        <div class="flex items-center">
            <span>中断: 2025年6月20日</span>
        </div>
        @endif

    </div>
    @if ($challenge->is_completed==false)
    <button class="w-full bg-indigo-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-teal-600 transition duration-300 flex items-center justify-center">
        もう一度挑戦する
    </button>
    @endif

</div>