<x-app-layout>
    <div class="flex flex-col justify-center items-center py-5">
        <div
            class="px-8 max-w-[1100px] mx-auto my-8 shadow-lg bg-center bg-no-repeat bg-cover flex justify-between items-center overflow-hidden bg-gradient-to-r from-green-600 from- via-emerald-600 via- to-teal-600 to- rounded-2xl @[480px]:rounded-xl min-h-[218px]">
            <div class="flex flex-col items-start justify-center">
                <p class="text-white text-2xl font-bold tracking-wide leading-tight tracking-[-0.015em] px-6 pb-6">Keep Track of Your Progress</p>
                <p class="text-white text-sm font-normal leading-normal tracking-[0.015em] px-6 pb-6">続かなかった日も、再び始めた日も、すべてが大切な記録です。何度でも挑戦するあなたの積み重ねが、確かな形でここに残っています。変化は一歩ずつ、ゆっくりで大丈夫です。</p>
            </div>
        </div>
        <div class="gap-1 px-6 flex flex-1 justify-center w-full my-10">
            <div class="layout-content-container flex flex-col rounded-xl border border-xl bg-white w-fit h-fit p-5 min-w-[300px]">
                <h2 class="text-[#0d0d1c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">最近のチャレンジ</h2>
                <h3 class="text-[#0d0d1c] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">進行中</h3>
                <div class="flex items-center border-b border-gray-200 gap-4 px-4 min-h-[72px] py-2 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-[#0d0d1c] flex items-center justify-center rounded-lg bg-[#e7e7f4] shrink-0 size-12" data-icon="Footprints" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M208.06,184H152a8,8,0,0,0-8,8v12a36,36,0,0,0,72.05,0V192A8,8,0,0,0,208.06,184Zm-8,20a20,20,0,0,1-40,0v-4h40ZM104,160h-56a8,8,0,0,0-8,8v12A36,36,0,0,0,112,180V168A8,8,0,0,0,104,160Zm-8,20a20,20,0,0,1-40,0v-4H96ZM76,16C64.36,16,53.07,26.31,44.2,45c-13.93,29.38-18.56,73,.29,96a8,8,0,0,0,6.2,2.93h50.55a8,8,0,0,0,6.2-2.93c18.85-23,14.22-66.65.29-96C98.85,26.31,87.57,16,76,16ZM97.15,128H54.78c-11.4-18.1-7.21-52.7,3.89-76.11C65.14,38.22,72.17,32,76,32s10.82,6.22,17.3,19.89C104.36,75.3,108.55,109.9,97.15,128Zm57.61,40h50.55a8,8,0,0,0,6.2-2.93c18.85-23,14.22-66.65.29-96C202.93,50.31,191.64,40,180,40s-22.89,10.31-31.77,29c-13.93,29.38-18.56,73,.29,96A8.05,8.05,0,0,0,154.76,168Zm8-92.11C169.22,62.22,176.25,56,180,56s10.82,6.22,17.29,19.89c11.1,23.41,15.29,58,3.9,76.11H158.85C147.45,133.9,151.64,99.3,162.74,75.89Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal line-clamp-1">朝のランニング</p>
                            <p class="text-[#49499c] text-sm font-normal leading-normal line-clamp-2">Progress: 80%</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center border-b border-gray-200 gap-4 px-4 min-h-[72px] py-2 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-[#0d0d1c] flex items-center justify-center rounded-lg bg-[#e7e7f4] shrink-0 size-12" data-icon="BookOpen" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M224,48H160a40,40,0,0,0-32,16A40,40,0,0,0,96,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H96a24,24,0,0,1,24,24,8,8,0,0,0,16,0,24,24,0,0,1,24-24h64a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM96,192H32V64H96a24,24,0,0,1,24,24V200A39.81,39.81,0,0,0,96,192Zm128,0H160a39.81,39.81,0,0,0-24,8V88a24,24,0,0,1,24-24h64Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal line-clamp-1">読書</p>
                            <p class="text-[#49499c] text-sm font-normal leading-normal line-clamp-2">Progress: 50%</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center border-b border-gray-200 gap-4 px-4 min-h-[72px] py-2 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-[#0d0d1c] flex items-center justify-center rounded-lg bg-[#e7e7f4] shrink-0 size-12" data-icon="Globe" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM101.63,168h52.74C149,186.34,140,202.87,128,215.89,116,202.87,107,186.34,101.63,168ZM98,152a145.72,145.72,0,0,1,0-48h60a145.72,145.72,0,0,1,0,48ZM40,128a87.61,87.61,0,0,1,3.33-24H81.79a161.79,161.79,0,0,0,0,48H43.33A87.61,87.61,0,0,1,40,128ZM154.37,88H101.63C107,69.66,116,53.13,128,40.11,140,53.13,149,69.66,154.37,88Zm19.84,16h38.46a88.15,88.15,0,0,1,0,48H174.21a161.79,161.79,0,0,0,0-48Zm32.16-16H170.94a142.39,142.39,0,0,0-20.26-45A88.37,88.37,0,0,1,206.37,88ZM105.32,43A142.39,142.39,0,0,0,85.06,88H49.63A88.37,88.37,0,0,1,105.32,43ZM49.63,168H85.06a142.39,142.39,0,0,0,20.26,45A88.37,88.37,0,0,1,49.63,168Zm101.05,45a142.39,142.39,0,0,0,20.26-45h35.43A88.37,88.37,0,0,1,150.68,213Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal line-clamp-1">語学学習</p>
                            <p class="text-[#be123c] text-sm font-normal leading-normal line-clamp-2">Paused</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center border-b border-gray-200 gap-4 px-4 min-h-[72px] py-2 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-[#0d0d1c] flex items-center justify-center rounded-lg bg-[#e7e7f4] shrink-0 size-12" data-icon="Code" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M69.12,94.15,28.5,128l40.62,33.85a8,8,0,1,1-10.24,12.29l-48-40a8,8,0,0,1,0-12.29l48-40a8,8,0,0,1,10.24,12.3Zm176,27.7-48-40a8,8,0,1,0-10.24,12.3L227.5,128l-40.62,33.85a8,8,0,1,0,10.24,12.29l48-40a8,8,0,0,0,0-12.29ZM162.73,32.48a8,8,0,0,0-10.25,4.79l-64,176a8,8,0,0,0,4.79,10.26A8.14,8.14,0,0,0,96,224a8,8,0,0,0,7.52-5.27l64-176A8,8,0,0,0,162.73,32.48Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal line-clamp-1">コーディング練習</p>
                            <p class="text-[#be123c] text-sm font-normal leading-normal line-clamp-2">Progress: 20%</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center border-b border-gray-200 gap-4 px-4 min-h-[72px] py-2 justify-between">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-[#0d0d1c] flex items-center justify-center rounded-lg bg-[#e7e7f4] shrink-0 size-12"
                            data-icon="PencilSimple"
                            data-size="24px"
                            data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal line-clamp-1">ジャーナリング</p>
                            <p class="text-[#be123c] text-sm font-normal leading-normal line-clamp-2">Paused</p>
                        </div>
                    </div>
                </div>
                <h3 class="text-[#0d0d1c] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">達成済み</h3>
                <div class="flex items-center border-b border-gray-200 gap-4 px-4 min-h-[72px] py-2 justify-between">
                    <div class="flex items-center gap-4">
                        <div
                            class="text-[#0d0d1c] flex items-center justify-center rounded-lg bg-[#e7e7f4] shrink-0 size-12"
                            data-icon="HandsPraying"
                            data-size="24px"
                            data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M235.32,180l-36.24-36.25L162.62,23.46A21.76,21.76,0,0,0,128,12.93,21.76,21.76,0,0,0,93.38,23.46L56.92,143.76,20.68,180a16,16,0,0,0,0,22.62l32.69,32.69a16,16,0,0,0,22.63,0L124.28,187a40.68,40.68,0,0,0,3.72-4.29,40.68,40.68,0,0,0,3.72,4.29L180,235.32a16,16,0,0,0,22.63,0l32.69-32.69A16,16,0,0,0,235.32,180ZM64.68,224,32,191.32l12.69-12.69,32.69,32.69ZM120,158.75a23.85,23.85,0,0,1-7,17L88.68,200,56,167.32l13.65-13.66a8,8,0,0,0,2-3.34l37-122.22A5.78,5.78,0,0,1,120,29.78Zm23,17a23.85,23.85,0,0,1-7-17v-129a5.78,5.78,0,0,1,11.31-1.68l37,122.22a8,8,0,0,0,2,3.34l14.49,14.49-33.4,32ZM191.32,224l-12.56-12.57,33.39-32L224,191.32Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal line-clamp-1">毎日の瞑想</p>
                            <p class="text-[#078841] text-sm font-normal leading-normal line-clamp-2">Completed</p>
                        </div>
                    </div>
                    <div class="shrink-0">
                        <div class="flex size-7 items-center justify-center">
                            <div class="size-3 rounded-full bg-[#078841]"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-4 bg-[#f8f8fc] px-4 min-h-[72px] py-2 justify-between">
                    <div class="flex items-center gap-4">
                        <div class="text-[#0d0d1c] flex items-center justify-center rounded-lg bg-[#e7e7f4] shrink-0 size-12" data-icon="Carrot" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M232,64H203.31l26.35-26.34a8,8,0,0,0-11.32-11.32L192,52.69V24a8,8,0,0,0-16,0V56.57a64,64,0,0,0-77.2,10.12l0,0,0,0,0,0c-40.1,39.39-70.25,133.08-73.19,142.45a16,16,0,0,0,21.26,21.26c9.37-2.94,103.18-33.13,142.47-73.21A64,64,0,0,0,199.43,80H232a8,8,0,0,0,0-16Zm-54.12,82c-8.94,9.12-21.25,17.8-34.85,25.73l-25.38-25.39a8,8,0,0,0-11.32,11.32l22.09,22.09c-40.87,21.19-86.32,35.42-87,35.63A7.93,7.93,0,0,0,40,216a7.93,7.93,0,0,0,.59-1.41c.29-.93,28-89.58,64-130.67l33.77,33.77a8,8,0,0,0,11.32-11.32L116.18,72.88A48,48,0,0,1,177.88,146Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal line-clamp-1">ダイエット</p>
                            <p class="text-[#078841] text-sm font-normal leading-normal line-clamp-2">Completed</p>
                        </div>
                    </div>
                    <div class="shrink-0">
                        <div class="flex size-7 items-center justify-center">
                            <div class="size-3 rounded-full bg-[#078841]"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1 mx-10">
                <div class="flex flex-col justify-between gap-3 w-full p-4">
                    <p class="text-[#0d0d1c] tracking-light text-[32px] font-bold leading-tight min-w-72">進捗チェックボード</p>
                    <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[100px]"></div>
                </div>
                @php
                $timeOptions = ['1w', '1m', '6m', '1y'];
                @endphp
                <div id="timeSelector" class="relative bg-gray-200 rounded-full p-2 flex w-fit space-x-2">
                    <div id="indicator" class="absolute top-2 left-2 h-10 w-24 rounded-full bg-white transition-all duration-300"></div>
                    <!-- z軸の方向に手前に動かす -->
                    <button data-template="1w" class="relative z-10 px-6 py-2 rounded-full text-gray-900 bg-white">1週間</button>
                    <button data-template="1m" class="relative z-10 px-6 py-2 rounded-full text-gray-500">1ヶ月</button>
                    <button data-template="6m" class="relative z-10 px-6 py-2 rounded-full text-gray-500">6ヶ月</button>
                    <button data-template="1y" class="relative z-10 px-6 py-2 rounded-full text-gray-500">1年</button>
                </div>
                <div id="content" class="my-5">
                </div>
                @foreach ($timeOptions as $time)
                <template id={{ $time }}>
                    <div class="flex flex-wrap gap-4 p-4 mb-5">
                        <div class="flex min-w-[158px] flex-1 flex-col bg-white shadow-lg gap-2 rounded-xl p-6">
                            <p class="text-green-600 text-base font-medium leading-normal">挑戦中のチャレンジ</p>
                            <p class="text-[#0d0d1c] tracking-light text-4xl font-bold leading-tight">5</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col bg-white shadow-lg gap-2 rounded-xl p-6">
                            <p class="text-green-600 text-base font-medium leading-normal">達成率</p>
                            <p class="text-[#0d0d1c] tracking-light text-4xl font-bold leading-tight">75%</p>
                        </div>
                        <div class="flex min-w-[158px] flex-1 flex-col bg-white shadow-lg gap-2 rounded-xl p-6">
                            <p class="text-green-600 text-base font-medium leading-normal">Persistence Rate</p>
                            <p class="text-[#0d0d1c] tracking-light text-4xl font-bold leading-tight">80%</p>
                        </div>
                    </div>
                    <div class="flex flex_col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                            <path fill="#77bb41" d="m2.75 19.25l5.325-5.325q.575-.575 1.425-.575t1.425.575L13.5 16.5l6.4-7.225q.275-.325.713-.325t.737.3q.275.275.287.663t-.262.687L14.9 17.9q-.575.65-1.425.688T12 18l-2.5-2.5l-5.25 5.25q-.325.325-.75.325t-.75-.325t-.325-.75t.325-.75m0-6l5.325-5.325Q8.65 7.35 9.5 7.35t1.425.575L13.5 10.5l6.4-7.225q.275-.325.713-.325t.737.3q.275.275.287.662t-.262.688L14.9 11.9q-.575.65-1.425.688T12 12L9.5 9.5l-5.25 5.25q-.325.325-.75.325t-.75-.325t-.325-.75t.325-.75" />
                        </svg>
                        <h2 class="text-[#0d0d1c] text-[22px] font-bold leading-tight tracking-[-0.015em] my-auto px-5">成長グラフ</h2>
                    </div>
                    <div class="flex flex-wrap gap-4 px-4 py-6">
                        <div class="flex min-w-72 flex-1 flex-col bg-white gap-2 rounded-xl border border-[#cecee8] p-6">
                            <p class="text-[#0d0d1c] text-base font-medium leading-normal">{{ $time }}のチャレンジ</p>
                            <p class="text-[#0d0d1c] tracking-light text-[32px] font-bold leading-tight truncate">15件</p>
                            <div class="flex gap-1">
                                <p class="text-[#49499c] text-base font-normal leading-normal">前週より</p>
                                <p class="text-[#4A90E2] text-base font-medium leading-normal">+10%</p>
                            </div>
                            <div class="flex">
                                <!-- グラフの数値 -->
                                <div class="flex flex-col justify-between text-gray-500 pr-4 text-right h-[176px]">
                                    <span>100</span>
                                    <span>75</span>
                                    <span>50</span>
                                    <span>25</span>
                                    <span>0</span>
                                </div>
                                <div class="relative flex-1">
                                    <div class="absolute w-full h-full top-0 left-0">
                                        <svg class="w-full h-full" viewBox="0 0 700 176" preserveAspectRatio="xMidYMid meet">
                                            <path d="M0 100 C 50 80, 100 60, 150 70 S 250 110, 300 90 S 400 50, 450 80 S 550 120, 600 100, 650 150 700 80" fill="none" stroke="#4A90E2" stroke-width="3"></path>
                                        </svg>
                                    </div>
                                    <!-- グラフの背景 -->
                                    <div class="space-y-8 pb-4 h-[176px]">
                                        <div class="border-b border-dashed border-gray-300 h-1/4"></div>
                                        <div class="border-b border-dashed border-gray-300 h-1/4"></div>
                                        <div class="border-b border-dashed border-gray-300 h-1/4"></div>
                                        <div class="border-b border-dashed border-gray-300 h-1/4"></div>
                                        <div class="h-1/4"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between text-gray-500 mt-2 pt-2 border-t border-gray-200 ml-[44px]">
                                <span>Sun</span>
                                <span>Mon</span>
                                <span>Tue</span>
                                <span>Wed</span>
                                <span>Thu</span>
                                <span>Fri</span>
                                <span>Sat</span>
                            </div>
                        </div>
                    </div>
                </template>
                @endforeach

                <div class="flex flex_col items-center my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Material Design Icons by Pictogrammers - https://github.com/Templarian/MaterialDesign/blob/master/LICENSE -->
                        <path fill="#77bb41" d="M12 4.21c1.24.51 2.65.79 4 .79c1.05 0 2.1-.16 3.08-.46C18.5 5.5 18 6.71 18 8c0 1.32.54 2.93 1.1 4.63c.4 1.2.9 2.7.9 3.37c0 1.03-3.53 3-8 3.96C7.54 19 4 17.03 4 16c0-.67.5-2.17.9-3.37C5.46 10.93 6 9.32 6 8c0-1.29-.5-2.5-1.08-3.46C5.9 4.84 6.96 5 8 5c1.35 0 2.76-.28 4-.79M20 2c-1.15.64-2.6 1-4 1s-2.86-.37-4-1c-1.14.63-2.6 1-4 1s-2.85-.36-4-1L2 4s2 2 2 4s-2 6-2 8c0 4 10 6 10 6s10-2 10-6c0-2-2-6-2-8s2-4 2-4zm-4.95 14.45l-3.08-1.86l-3.07 1.86l.82-3.5L7 10.61l3.58-.31L11.97 7l1.4 3.29l3.58.31l-2.72 2.34z" />
                    </svg>
                    <h2 class="text-[#0d0d1c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4">獲得バッジ</h2>
                </div>
                <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
                    <div class="flex flex-1 gap-3 rounded-lg border bg-white shadow-lg  p-4 flex-col">
                        <div class="text-[#0d0d1c]" data-icon="Calendar" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h2 class="text-[#0d0d1c] text-base font-bold leading-tight">3-Day Streak</h2>
                            <p class="text-[#49499c] text-sm font-normal leading-normal">Achieved a 3-day posting streak</p>
                        </div>
                    </div>
                    <div class="flex flex-1 gap-3 rounded-lg bg-white shadow-lg  p-4 flex-col">
                        <div class="text-[#0d0d1c]" data-icon="ArrowCounterClockwise" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M224,128a96,96,0,0,1-94.71,96H128A95.38,95.38,0,0,1,62.1,197.8a8,8,0,0,1,11-11.63A80,80,0,1,0,71.43,71.39a3.07,3.07,0,0,1-.26.25L44.59,96H72a8,8,0,0,1,0,16H24a8,8,0,0,1-8-8V56a8,8,0,0,1,16,0V85.8L60.25,60A96,96,0,0,1,224,128Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h2 class="text-[#0d0d1c] text-base font-bold leading-tight">5 Re-Challenges</h2>
                            <p class="text-[#49499c] text-sm font-normal leading-normal">Re-challenged 5 times</p>
                        </div>
                    </div>
                    <div class="flex flex-1 gap-3 rounded-lg bg-white shadow-lg  p-4 flex-col">
                        <div class="text-[#0d0d1c]" data-icon="Trophy" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M232,64H208V56a16,16,0,0,0-16-16H64A16,16,0,0,0,48,56v8H24A16,16,0,0,0,8,80V96a40,40,0,0,0,40,40h3.65A80.13,80.13,0,0,0,120,191.61V216H96a8,8,0,0,0,0,16h64a8,8,0,0,0,0-16H136V191.58c31.94-3.23,58.44-25.64,68.08-55.58H208a40,40,0,0,0,40-40V80A16,16,0,0,0,232,64ZM48,120A24,24,0,0,1,24,96V80H48v32q0,4,.39,8Zm144-8.9c0,35.52-28.49,64.64-63.51,64.9H128a64,64,0,0,1-64-64V56H192ZM232,96a24,24,0,0,1-24,24h-.5a81.81,81.81,0,0,0,.5-8.9V80h24Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h2 class="text-[#0d0d1c] text-base font-bold leading-tight">10 Challenges Completed</h2>
                            <p class="text-[#49499c] text-sm font-normal leading-normal">Completed 10 challenges</p>
                        </div>
                    </div>
                    <div class="flex flex-1 gap-3 rounded-lg bg-white shadow-lg  p-4 flex-col">
                        <div class="text-[#0d0d1c]" data-icon="Clock" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" fill="currentColor" viewBox="0 0 256 256">
                                <path
                                    d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm64-88a8,8,0,0,1-8,8H128a8,8,0,0,1-8-8V72a8,8,0,0,1,16,0v48h48A8,8,0,0,1,192,128Z"></path>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h2 class="text-[#0d0d1c] text-base font-bold leading-tight">Consistent Contributor</h2>
                            <p class="text-[#49499c] text-sm font-normal leading-normal">Contributed consistently for a month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const buttons = document.querySelectorAll('#timeSelector button');
        const indicator = document.getElementById('indicator');
        const content = document.getElementById('content');

        function modeIndicator(btn) {
            const offsetLeft = btn.offsetLeft;
            const offsetWidth = btn.offsetWidth;
            indicator.style.left = offsetLeft + 'px';
            indicator.style.width = offsetWidth + 'px';
        }

        modeIndicator(buttons[0]);
        content.innerHTML = document.getElementById(buttons[0].dataset.template).innerHTML;

        buttons.forEach(button => {
            button.addEventListener('click', async () => {
                modeIndicator(button);
                buttons.forEach(button => {
                    button.classList.remove('bg-white', 'text-gray-900');
                    button.classList.add('text-gray-500');
                });
                button.classList.remove('text-gray-500');
                button.classList.add('text-gray-900');
                // 表示内容の切り替え
                const template = document.getElementById(button.dataset.template);
                content.innerHTML = template.innerHTML;
                window.history.pushState({}, "", button.dataset.url);
                // const url = button.getAttribute('data-url');
                // fetch(url)
                //     .then(response => response.text())
                //     .then(data => {
                //         content.innerHTML = data;
                //     })
                //     .catch(error => {
                //         console.error('Error fetching data:', error);
                //         content.innerHTML = '<p class="text-red-500">データの取得中にエラーが発生しました。</p>';
                //     });
            });
        });
    </script>
</x-app-layout>