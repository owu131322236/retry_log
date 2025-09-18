<x-app-layout>
    <div class="h-48 fixed">
        <img class="w-full h-48 object-cover" src="https://kenblo.com/wp-content/uploads/2018/03/twitter-header-nature006.jpg" alt="Banner Image">>
        <div class="absolute bottom-0 w-full h-48 bg-gradient-to-b from-transparent to-gray-100"></div>
    </div>

    <div class="mt-7 p-4 flex justify-around z-10 relative">
        <x-profile-card />
        <div class="flex flex-col w-2/3">
            <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[50px]"></div>
            <h2 class="text-[#0d0d1c] tracking-light text-[28px] font-bold leading-tight text-left pb-3 pt-5 ">{{ Auth::user()->name }}のProfile</h2>
            <div id="timeSelector" class="relative bg-gray-900/5 shadow-lg border border border-gray-300/30 backdrop-blur-lg rounded-full h-[50px] w-fit m-5 p-2 flex gap-2">
                <div id="indicator" class="absolute top-[5px] left-1 h-[40px] w-24 rounded-full shadow-lg bg-gray-900 backdrop-blur-lg transition-all duration-300"></div>
                <!-- z軸の方向に手前に動かす -->
                <!-- <button data-template="1w" class="relative z-10 px-6 py-2 rounded-full text-gray-900 bg-white">1週間</button>-->
                <button data-target="posts" class="relative z-10 px-6 py-2 rounded-full text-gray-800">投稿</button>
                <button data-target="likes" class="relative z-10 px-6 py-2 rounded-full text-gray-800">いいね</button>
                <button data-target="challenges" class="relative z-10 px-6 py-2 rounded-full text-gray-800">チャレンジ</button>
            </div>
            <div class="flex flex-col m-5">
                <h2 class="text-2xl font-bold text-gray-800 w-fit">進行中のチャレンジ</h2>
                <div class="flex items-center space-x-2 my-3">   
                    <div class="bg-blue-600 rounded-full h-3 w-3"></div>
                    <p class="text-sm text-blue-600 w-fit">7 challenges</p>
                </div>
            </div>
            <div id="content" class="flex flex-wrap gap-5 w-full mx-5">
                @for($i=0; $i<5; $i++)
                    <x-challenge-public-card />
            @endfor
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
        buttons[0].classList.add('text-white');
        // content.innerHTML = document.getElementById(buttons[0].dataset.template).innerHTML;

        buttons.forEach(button => {
            button.addEventListener('click', async () => {
                //buttonUIの挙動
                modeIndicator(button);
                buttons.forEach(button => {
                    button.classList.remove('bg-white', 'text-white');
                    button.classList.add('text-gray-800');
                });
                button.classList.remove('text-gray-800');
                button.classList.add('text-white');
                if (target == 'posts') {

                }
                //content
                // let target = this.dataset.target;

                // fetch(`/mypage/${target}`)
                //     .then(response => response.json())
                //     .then(data => {
                //         let html = '';

                //         if (target === 'posts') {
                //             data.forEach(post => {
                //                 html += `<div class="p-2 border-b">${post.title}</div>`;
                //             });
                //         }

                //         if (target === 'likes') {
                //             data.forEach(like => {
                //                 html += `<div class="p-2 border-b">いいね: ${like.post.title}</div>`;
                //             });
                //         }

                //         if (target === 'challenges') {
                //             data.forEach(challenge => {
                //                 html += `<div class="p-2 border-b">${challenge.name}</div>`;
                //             });
                //         };
                //         document.getElementById('content').innerHTML = html;
                //     });
            });
        });
    </script>
</x-app-layout>