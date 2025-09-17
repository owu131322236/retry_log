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
            <Button class="p-5  h-full whitespace-nowrap rounded-2xl bg-white text-red-700 shadow-lg hover:bg-white/90 hover:scale-105 transition-all">
                ＋つぶやきを投稿する
            </Button>

        </div>
    </div>
    <div class="flex justify-around p-4 my-5">
        <x-profile-card />
        <div class="layout-content-container flex flex-col w-2/3">
            <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[50px]"></div>

            <h2 class="text-[#0d0d1c] tracking-light text-[28px] font-bold leading-tight text-left py-3">タイムライン</h2>
            <!-- post-1 -->
            <div id="content" class="flex flex-col m-5">
                @for($i = 0; $i
                < 10; $i++)
                    <x-post />
                @endfor
            </div>
            <!--
                <div class="rounded-3xl border-2 my-2 hover:border-primary/50 transition-all">
                    <div class="flex w-full flex-row items-start justify-start gap-3 p-4">
                        <div
                            class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBAxMgbId6INdLYXkhZSnsqyfuMq0DDm1Bafz73fKap4iupTbaC3AzkknkMbteMcZzks9qHO23fZy5owmIzhL3pCRFrItUAR3AflWUO_GrDMwAycH2qKvt9s8QpMsUNeShDrqWC2ZMdIOwWsoW35tH7HorHHCccXgWu--Up1SsODrdV3f2dHFdjeXwxmWvXT7mkJsA6kPrYtuSByrBzgeij1xFj_HBzhyetfifyKDmBOvAJNv-T5T5HxWmJTwuULottKL6A13-lEhg");'></div>
                        <div class="flex h-full flex-1 flex-col items-start justify-start">
                            <div class="flex w-full flex-row items-start justify-start gap-x-3">
                                <p class="text-[#0d0d1c] text-sm font-bold leading-normal tracking-[0.015em]">Sophia Green</p>
                                <p class="text-[#49499c] text-sm font-normal leading-normal">2h ago</p>
                            </div>
                            <p class="text-[#0d0d1c] text-sm font-normal leading-normal">Just finished my morning exercise! Feeling energized and ready to tackle the day. #MorningExercise</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4 px-4 py-2 py-2">
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="Heart" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">23</p>
                        </div>
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">5</p>
                        </div>
                    </div>
                </div> -->
            <!-- post-2 -->
            <!-- <div class="rounded-3xl border-2 my-2 hover:border-primary/50 transition-all">
                    <div class="flex w-full flex-row items-start justify-start gap-3 p-4">
                        <div
                            class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBSbe7lf7VUEcztDg4bpTxGbq0bO8BWXWfdR2_veFlMFhfMRQn3jqqJqC-glF4kdq9x4CxL9ZbXo41tS8XaYO-J_kO1j58iFB2RpGcnKQw_snRQUDqPF1RLiGK_h5q90GkWIyXyyksVQfcPJAx26Dw_xHbG1S4o7wxbPtv4dCPgJeACkQlaqufMypTdJJodWYHCD6UMId6Fh9Br2ro5qIhvdcko6gsJDkDByFdFqMMN--QI7m6u4L3h0bdbA8BV0DRhGPJTlvg5mSw");'></div>
                        <div class="flex h-full flex-1 flex-col items-start justify-start">
                            <div class="flex w-full flex-row items-start justify-start gap-x-3">
                                <p class="text-[#0d0d1c] text-sm font-bold leading-normal tracking-[0.015em]">Ethan Clark</p>
                                <p class="text-[#49499c] text-sm font-normal leading-normal">4h ago</p>
                            </div>
                            <p class="text-[#0d0d1c] text-sm font-normal leading-normal">Completed my reading goal for today. Another step closer to finishing this book! #Reading</p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4 px-4 py-2 py-2">
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="Heart" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">18</p>
                        </div>
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">3</p>
                        </div>
                    </div>
                </div> -->
            <!-- post-3 -->
            <!-- <div class="rounded-3xl border-2 my-2 hover:border-primary/50 transition-all">
                    <div class="flex w-full flex-row items-start justify-start gap-3 p-4">
                        <div
                            class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCKZS_WEnpFEjPE5zOX4qN27VKdVIVnmYg667RwXbsEghVpnxweJZFiJ7PTtC78QKX9Qs8XW63-1bnDhaOu1Zg9LnBAmaFtlfOxj0M7fhUi_OkxaB6yIjju-fttAXiweHcXcwxoKMLlxG4eICa3NgfLWswiDXRLOBEZZvZcn3qoz7vm2_7kTUQjRF2-vMwrhhJ5hqjnU1R3ls92UqX903x3Wimk7eUpNSQYDNFo3-llMAa2RoQXsFOfxoUkGDe4iMQQoHC9oP4yTbk");'></div>
                        <div class="flex h-full flex-1 flex-col items-start justify-start">
                            <div class="flex w-full flex-row items-start justify-start gap-x-3">
                                <p class="text-[#0d0d1c] text-sm font-bold leading-normal tracking-[0.015em]">Olivia Hayes</p>
                                <p class="text-[#49499c] text-sm font-normal leading-normal">6h ago</p>
                            </div>
                            <p class="text-[#0d0d1c] text-sm font-normal leading-normal">Had a great meditation session this evening. Feeling calm and centered. #Meditation</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4 px-4 py-2 py-2">
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="Heart" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">12</p>
                        </div>
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">2</p>
                        </div>
                    </div>
                </div> -->
            <!-- post-4 -->
            <!-- <div class="rounded-3xl border-2 my-2 hover:border-primary/50 transition-all">
                    <div class="flex w-full flex-row items-start justify-start gap-3 p-4">
                        <div
                            class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC6I9_liaOJ64T7s0VGbhVt8-N2rWyofPDWieujbu9jYMyuthCbp6tnKOIpg4vrTd2adMMgM76YLbsmenTNKq3y159BxSKR8aQ09FMsjDMSL8vVyRfy7xENz-cJKi-QYeqkvLtBeuSQIjCXfGVlDTQ9pc9O5ZomegClzGGkPl4bzWdk70iQX8z3WNKoI5J0gPaHDYO0jRb1-gd_mOJciqrcT9GXm9F7vklAYtau1q2PesDucn9nDKUXKylTAgQt37aYSI33UnaPRYE");'></div>
                        <div class="flex h-full flex-1 flex-col items-start justify-start">
                            <div class="flex w-full flex-row items-start justify-start gap-x-3">
                                <p class="text-[#0d0d1c] text-sm font-bold leading-normal tracking-[0.015em]">Oliver Baker</p>
                                <p class="text-[#49499c] text-sm font-normal leading-normal">8h ago</p>
                            </div>
                            <p class="text-[#0d0d1c] text-sm font-normal leading-normal">Practiced my Spanish for an hour today. Slowly but surely making progress! #LearningSpanish</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4 px-4 py-2 py-2">
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="Heart" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M178,32c-20.65,0-38.73,8.88-50,23.89C116.73,40.88,98.65,32,78,32A62.07,62.07,0,0,0,16,94c0,70,103.79,126.66,108.21,129a8,8,0,0,0,7.58,0C136.21,220.66,240,164,240,94A62.07,62.07,0,0,0,178,32ZM128,206.8C109.74,196.16,32,147.69,32,94A46.06,46.06,0,0,1,78,48c19.45,0,35.78,10.36,42.6,27a8,8,0,0,0,14.8,0c6.82-16.67,23.15-27,42.6-27a46.06,46.06,0,0,1,46,46C224,147.61,146.24,196.15,128,206.8Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">8</p>
                        </div>
                        <div class="flex items-center justify-center gap-2 px-3 py-2">
                            <div class="text-[#49499c]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                                </svg>
                            </div>
                            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">1</p>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
    </div>
</x-app-layout>