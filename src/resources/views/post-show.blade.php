<x-app-layout>
    <div class=" flex flex-wrap justify-center gap-x-10 my-10">
        <div class="flex flex-col max-w-2x1">
            <!-- メイン投稿 -->
            <x-posts.post-detail />
            <!-- 返信ポスト -->
            <div class="pl-4 border-l-2 border-gray-300 m-8">
                    <div class="flex flex-col gap-3 mx-5">
                    @for ($i = 0; $i < 3; $i++)
                        <x-posts.post-reply />
                    @endfor
                    </div>
            </div>
            
            
            <div class="sticky bottom-0 bg-gray-100/90 z-10">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-start space-x-4 py-4">
                        <img alt="Your avatar" class="h-10 w-10 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9ErrWNM5ugtw74BrG6aMF1l2xi2XiOR8-4OP6xWHGGbo8oPtC60_2IzWvwWjTDGQJbNnxg8eollBS0URKCbDv33PYkAFq4d4_XPvVp2Npf9cxBMwJzJ9BD5oluKG4ie7gVOGzWqbRL70c_24Vr342WiZURbnN16uYK1gwt1RG-Ufbp_K1GIQxjUHyKhApsI1TXLqGFQtSxMbH1VXnUA314qk0VZjD6Rtu3f2r6FOuRfWyEbbEE2HBqdvMNAL5R4X7y9Q6iihmYaw" />
                        <div class="flex-1 flex items-center space-x-2">
                            <input class="w-full bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-text-light dark:text-text-dark" placeholder="Post your reply" type="text" />
                            <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-full hover:opacity-90 transition-opacity">
                                Reply
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="flex flex-col justify-start gap-5">
            <div>
                <div class="bg-gradient-to-r from-pink-600 from- via-rose-600 via- to-red-500 to- rounded-full h-2 w-[50px]"></div>
                <h2 class="ext-[#0d0d1c] tracking-light text-[28px] font-bold leading-tight text-left py-3">投稿者のプロフィール</h2>
            </div>
            <x-profile-card />
        </div>
    </div>
</x-app-layout>