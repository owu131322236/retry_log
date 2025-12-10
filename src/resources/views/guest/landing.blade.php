<!DOCTYPE html>
<html lang="ja" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>RetryLog</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#7f13ec",
                        "background-light": "#f7f6f8",
                        "background-dark": "#191022",
                        "neutral": {
                            800: "#171717",
                            700: "#404040",
                            500: "#737373",
                            400: "#a3a3a3",
                            200: "#e5e5e5",
                            100: "#f5f5f5"
                        }
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body class="relative font-display bg-background-light antialiased">
    <div class="layout-container relative flex h-full grow flex-col z-10">
        <header class="fixed flex items-center justify-between whitespace-nowrap bg-background-light border-b border-solid border-neutral-200 w-full px-6 sm:px-10 py-4">
            <div class="flex items-center gap-4 text-[#0d0d1c]">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16"><!-- Icon from Gitlab SVGs by GitLab B.V. - https://gitlab.com/gitlab-org/gitlab-svgs/-/blob/main/LICENSE -->
                    <path fill="#be38f3" fill-rule="evenodd" d="M7.32.029a8 8 0 0 1 7.18 3.307V1.75a.75.75 0 0 1 1.5 0V6h-4.25a.75.75 0 0 1 0-1.5h1.727A6.5 6.5 0 0 0 1.694 6.424A.75.75 0 1 1 .239 6.06A8 8 0 0 1 7.319.03Zm-3.4 14.852A8 8 0 0 0 15.76 9.94a.75.75 0 0 0-1.455-.364A6.5 6.5 0 0 1 2.523 11.5H4.25a.75.75 0 0 0 0-1.5H0v4.25a.75.75 0 0 0 1.5 0v-1.586a8 8 0 0 0 2.42 2.217" clip-rule="evenodd" />
                </svg>
                <div class="flex">
                    <h2 class="text-[#0d0d1c] text-lg font-bold leading-tight tracking-wide">Retry</h2>
                    <h2 class="text-gray-500 text-lg font-bold leading-tight tracking-wide">Log</h2>
                </div>
            </div>
            <div class="hidden md:flex flex-1 justify-end gap-8">
                <div class="flex items-center gap-9">
                    <a class="text-neutral-500 hover:text-neutral-800 transition-colors text-sm font-medium leading-normal" href="#app-detail">特徴</a>
                    <a class="text-neutral-500 hover:text-neutral-800 transition-colors text-sm font-medium leading-normal" href="#price">料金プラン</a>
                    <a class="flex min-w-[84px] max-w-[480px] cursor-pointer overflow-hidden rounded-full text-primary text-sm font-bold leading-normal tracking-[0.015em] hover:bg-purple-50 transition-colors" href="{{ route('login') }}">
                        ログイン
                    </a>
                </div>
                <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-gradient-to-r from-[#6A0DAD] to-[#E6007E] text-white text-sm font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
                    <a href="{{ route('register') }}">Sign Up</a>
                </button>
            </div>
            <div class="md:hidden">
                <span class="material-symbols-outlined text-neutral-800">menu</span>
            </div>
        </header>
        <main class="flex-1">
            <div class="text-center px-4 pt-[200px] pb-[100px] @container">
                <div class="flex flex-col items-center gap-6">
                    <div class="flex flex-col gap-10 text-center">
                        <h1 class="text-neutral-800 text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[720px]:text-6xl">
                            挑戦は、何度だって始められる。
                        </h1>
                        <p class="text-neutral-500 text-base font-normal leading-normal @[480px]:text-lg max-w-2xl mx-auto">
                            挑戦を続けたい人のためのSNS<br>仲間と一緒に、失敗も成長の一部として楽しもう。
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row flex-wrap gap-4 justify-center">
                        <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-gradient-to-r from-[#6A0DAD] to-[#E6007E] text-white text-base font-bold leading-normal tracking-[0.015em] hover:opacity-90 transition-opacity">
                            <a href="{{ route('register') }}">Sign Up Now</a>
                        </button>
                        <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-12 px-6 bg-neutral-100 text-neutral-700 border border-neutral-200 text-base font-bold leading-normal tracking-[0.015em] hover:bg-neutral-200 transition-colors">
                            <a href="#app-detail" class="truncate">Learn More</a>
                        </button>
                    </div>
                </div>
            </div>
            <div id="app-detail" class="flex flex-col items-center gap-10 px-4 py-10 @container">
                <div class="flex flex-col gap-4 text-center">
                    <h2 class="text-neutral-800 tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl max-w-[720px] mx-auto">
                        挑戦を支え合うコミュニティ
                    </h2>
                    <p class="text-neutral-500 text-base font-normal leading-normal max-w-[720px] mx-auto">
                        RetryLogは、挑戦を「共有」することで続ける力を育てるSNSアプリです。<br>仲間の応援がモチベーションになり、失敗も「次の一歩」へと変わります。<br>学生でも社会人でも、オンラインであなたの挑戦を応援してくれる仲間に出会えます。
                    </p>
                </div>
                <div class="flex flex-col items-start gap-12 my-5 md:gap-24 py-16">
                    <div class="flex flex-row gap-4 items-start">
                        <div class="p-3 rounded-full bg-gradient-to-br from-[#6A0DAD] to-[#E6007E] w-fit">
                            <span class="material-symbols-outlined !text-3xl text-white">forum</span>
                        </div>
                        <div class="flex flex-col gap-4 items-start">
                            <h3 class="text-neutral-800 text-2xl font-bold leading-tight">習慣や挑戦を記録・共有</h3>
                            <p class="text-neutral-500 text-base font-normal leading-relaxed">
                                毎日の積み重ねを投稿し、進捗を可視化。他のユーザーと励まし合いながら、モチベーションを維持できます。
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4 items-start">
                        <div class="p-3 rounded-full bg-gradient-to-br from-[#6A0DAD] to-[#E6007E] w-fit">
                            <span class="material-symbols-outlined !text-3xl text-white">add_a_photo</span>
                        </div>
                        <div class="flex flex-col gap-4 items-start">
                            <h3 class="text-neutral-800 text-2xl font-bold leading-tight">失敗してもOKな環境</h3>
                            <p class="text-neutral-500 text-base font-normal leading-relaxed">
                                「続かなかった」も大切な経験。RetryLogでは、失敗もポジティブに共有でき、再挑戦のきっかけに変わります。
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-4 items-start">
                        <div class="p-3 rounded-full bg-gradient-to-br from-[#6A0DAD] to-[#E6007E] w-fit">
                            <span class="material-symbols-outlined !text-3xl text-white">auto_awesome</span>
                        </div>
                        <div class="flex flex-col gap-4 items-start">
                            <h3 class="text-neutral-800 text-2xl font-bold leading-tight">仲間とつながるタイムライン機能</h3>
                            <p class="text-neutral-500 text-base font-normal leading-relaxed">
                                同じ目標や趣味を持つ仲間を見つけて交流。マニアックな挑戦も、理解してくれる仲間がいます。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div id="price" class="flex flex-col gap-10 text-center items-center my-5">
                <h2 class="text-neutral-800 tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl max-w-[720px] mx-auto">
                    料金プラン
                </h2>
                <p class="text-neutral-500 text-base font-normal leading-normal max-w-[720px] mx-auto">
                    RetryLogは基本機能を全て無料で提供しています。挑戦を始めるのに、料金は一切かかりません。
                </p>
                <div class="w-full max-w-2xl bg-white border border-neutral-200 rounded-lg p-8">
                    <div class="flex flex-col md:flex-row md:items-center gap-8">
                        <div class="flex-1">
                            <p class="mt-2 text-4xl font-bold text-neutral-800">¥0</p>
                            <p class="mt-4 text-neutral-500">すべての機能を最大限に活用して、最高の挑戦体験をしよう。</p>
                            <ul class="mt-6 space-y-4">
                                <li class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-purple-600">check_circle</span>
                                    <span class="text-neutral-700">挑戦の振り返り機能</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-purple-600">check_circle</span>
                                    <span class="text-neutral-700">チャレンジの作成と記録</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-purple-600">check_circle</span>
                                    <span class="text-neutral-700">日々の投稿と気持ちのシェア</span>
                                </li>
                                <li class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-purple-600">check_circle</span>
                                    <span class="text-neutral-700">無制限のプロフィールカスタマイズ</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-16 sm:py-24">
                <div class="flex flex-col items-center gap-8 text-center my-5 px-4">
                    <h2 class="text-neutral-800 text-3xl font-bold leading-tight tracking-[-0.015em] sm:text-4xl">よくある質問</h2>
                    <div class="qanda w-full max-w-3xl flex flex-col gap-4">
                        <div class="border-b border-neutral-200 pb-4">
                            <div class="question flex cursor-pointer items-center justify-between py-2 text-left text-lg font-medium text-neutral-800 list-none">
                                <span>RetryLogとはどんなアプリですか？</span>
                                <span class="material-symbols-outlined plus-icon transition-transform duration-300">add</span>
                            </div>
                            <div class="answer overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                                <p class="text-neutral-500 p-5">
                                    RetryLogは、習慣づくりや新しい挑戦をサポートするSNSアプリです。<br>
                                    成功や失敗を記録しながら、同じ目標を持つ仲間と励まし合うことで、続ける力を育てます。
                                </p>
                            </div>
                        </div>

                        <div class="border-b border-neutral-200 pb-4">
                            <div class="question flex cursor-pointer items-center justify-between py-2 text-left text-lg font-medium text-neutral-800 list-none">
                                <span>利用料金はかかりますか？</span>
                                <span class="material-symbols-outlined plus-icon transition-transform duration-300">add</span>
                            </div>
                            <div class="answer overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                                <p class="text-neutral-500 p-5">
                                    基本機能はすべて無料でご利用いただけます。<br>
                                </p>
                            </div>
                        </div>

                        <div class="border-b border-neutral-200 pb-4">
                            <div class="question flex cursor-pointer items-center justify-between py-2 text-left text-lg font-medium text-neutral-800 list-none">
                                <span>どのデバイスで使えますか？</span>
                                <span class="material-symbols-outlined plus-icon transition-transform duration-300">add</span>
                            </div>
                            <div class="answer overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                                <p class="text-neutral-500 p-5">
                                    スマートフォン、タブレット、PCなどのブラウザからもアクセスできます。<br>
                                    いつでもどこでも、あなたの挑戦を記録できます。
                                </p>
                            </div>
                        </div>

                        <div class="border-b border-neutral-200 pb-4">
                            <div class="question flex cursor-pointer items-center justify-between py-2 text-left text-lg font-medium text-neutral-800 list-none">
                                <span>失敗しても投稿して大丈夫ですか？</span>
                                <span class="material-symbols-outlined plus-icon transition-transform duration-300">add</span>
                            </div>
                            <div class="answer overflow-hidden max-h-0 opacity-0 transition-all duration-300 ease-in-out">
                                <p class="text-neutral-500 p-5">
                                    もちろん大丈夫です。RetryLogでは「失敗」も挑戦の一部として歓迎しています。<br>
                                    失敗を共有することで、同じように頑張る仲間から共感や励ましをもらえます。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="flex flex-col gap-8 px-5 py-10 text-center @container mt-16 border-t border-neutral-200">
            <!-- <div class="flex flex-col sm:flex-row flex-wrap items-center justify-center gap-x-8 gap-y-4">
                    <a class="text-neutral-500 hover:text-neutral-800 transition-colors text-sm font-normal leading-normal" href="#">About Us</a>
                    <a class="text-neutral-500 hover:text-neutral-800 transition-colors text-sm font-normal leading-normal" href="#">Contact</a>
                    <a class="text-neutral-500 hover:text-neutral-800 transition-colors text-sm font-normal leading-normal" href="#">Privacy Policy</a>
                </div>
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#">
                        <svg aria-hidden="true" class="w-6 h-6 text-neutral-400 hover:text-neutral-800 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                    <a href="#">
                        <svg aria-hidden="true" class="w-6 h-6 text-neutral-400 hover:text-neutral-800 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.237 2.636 7.855 6.356 9.312-.062-.329-.034-.7.09-1.022.128-.344.796-3.375.796-3.375s-.2-.4-.2-.988c0-.926.54-1.622 1.212-1.622.572 0 .848.428.848.944 0 .575-.368 1.438-.558 2.234-.16.68.34 1.24.986 1.24.78 0 1.382-1.026 1.382-2.512 0-2.09-1.484-3.562-4.148-3.562-2.76 0-4.542 2.064-4.542 4.34 0 .524.195.99.478 1.268.05.047.06.086.04.14-.047.146-.16.6-.188.72-.03.104-.13.123-.23.076-1.002-.48-1.62-1.92-1.62-3.138 0-2.502 1.8-4.706 5.292-4.706 2.78 0 4.956 1.983 4.956 4.17 0 2.88-1.683 5.12-4.008 5.12-1.12 0-2.18-.588-2.536-1.272 0 0-.582 2.274-.708 2.74-.24.92-.882 1.704-1.34 2.23C7.96 21.6 9.91 22 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2z" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#">
                        <svg aria-hidden="true" class="w-6 h-6 text-neutral-400 hover:text-neutral-800 transition-colors" fill="currentColor" viewBox="0 0 24 24">
                            <path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path>
                        </svg>
                    </a>
                </div> -->
            <p class="text-neutral-400 text-sm font-normal leading-normal">© 2024 ConnectApp. All rights reserved.</p>
        </footer>
    </div>
    <!-- 縞々重いので中止！
    <div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#e9d5ff_1px,transparent_1px),linear-gradient(to_bottom,#e9d5ff_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_10%,transparent_100%)] z-0"></div>
    <div class="absolute top-0 -left-96 w-[60rem] h-[60rem] bg-purple-500/5 rounded-full blur-3xl opacity-20 z-0"></div>
    <div class="absolute bottom-0 -right-96 w-[60rem] h-[60rem] bg-purple-500/5 rounded-full blur-3xl opacity-20 z-0"></div> -->
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const qandaItems = document.querySelectorAll('.qanda > div');
        let openItem = null;

        qandaItems.forEach((item) => {
            const question = item.querySelector('.question');
            const answer = item.querySelector('.answer');
            const icon = item.querySelector('.plus-icon');

            question.addEventListener('click', () => {
                const isOpen = item === openItem;

                if (openItem) {
                    const prevAnswer = openItem.querySelector('.answer');
                    const prevIcon = openItem.querySelector('.plus-icon');
                    prevAnswer.style.maxHeight = '0px';
                    prevAnswer.style.opacity = '0';
                    prevIcon.classList.remove('rotate-45');
                    openItem = null;
                }

                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    answer.style.opacity = '1';
                    icon.classList.add('rotate-45');
                    openItem = item;
                }
            });
        });
    });
</script>

</html>