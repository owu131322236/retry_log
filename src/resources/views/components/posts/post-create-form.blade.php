<div id="header-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        @method("POST")
        <div class="relative layout-content-container flex flex-col items-center justify-center rounded-2xl bg-white p-10 m-10 shadow-lg">
            <button id="header-close" class="absolute top-3 right-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                    <path fill="currentColor" d="m12 13.4l-4.9 4.9q-.275.275-.7.275t-.7-.275t-.275-.7t.275-.7l4.9-4.9l-4.9-4.9q-.275-.275-.275-.7t.275-.7t.7-.275t.7.275l4.9 4.9l4.9-4.9q.275-.275.7-.275t.7.275t.275.7t-.275.7L13.4 12l4.9 4.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275z" />
                </svg></button>
            <div id="postFormSelector" class="relative bg-gray-200 rounded-full p-2 flex h-15 w-fit space-x-2">
                <div id="postFormIndicator" class="absolute top-1/2 left-2 h-4/5 w-1/2 rounded-full bg-white transition-all duration-300 -translate-y-1/2"></div>
                <button type="button" id="success" class="relative z-10 px-6 py-2 rounded-full text-gray-500">moon</button>
                <button type="button" id="fail" class="relative z-10 px-6 py-2 rounded-full text-gray-900">sun</button>
                <input type="hidden" id="post_type" name="post_type" value="fail">

            </div>
            <div class="flex space-x-5 w-full h-full">
                <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full top-10 w-10 h-10 shrink-0"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCKZS_WEnpFEjPE5zOX4qN27VKdVIVnmYg667RwXbsEghVpnxweJZFiJ7PTtC78QKX9Qs8XW63-1bnDhaOu1Zg9LnBAmaFtlfOxj0M7fhUi_OkxaB6yIjju-fttAXiweHcXcwxoKMLlxG4eICa3NgfLWswiDXRLOBEZZvZcn3qoz7vm2_7kTUQjRF2-vMwrhhJ5hqjnU1R3ls92UqX903x3Wimk7eUpNSQYDNFo3-llMAa2RoQXsFOfxoUkGDe4iMQQoHC9oP4yTbk");'></div>
                <textarea name="content"
                    rows="10" cols="50"
                    placeholder="今日のつぶやきをどうぞ..."
                    class="form-input flex flex-1 resize-none overflow-hidden rounded-xl text-[#111418] text-xl focus:outline-0 focus:ring-0 border-none bg-white focus:border-none placeholder:text-[#617589] text-base font-normal leading-normal"></textarea>
            </div>
            <div class="flex w-full items-center justify-end">
                <!-- <p class="text-red-700">残り30文字</p> -->
                <button
                    type="submit" class="flex flex-none w-fit h-fit cursor-pointer items-center justify-center overflow-hidden rounded-2xl p-5 flex-1 bg-[#1380ec] text-white text-sm font-bold leading-normal tracking-widest shadow-lg hover:bg-[#0d6efd] transition-all hover:scale-95">
                    <span class="truncate">投稿する</span>
                </button>
            </div>
        </div>
    </form>
</div>
<script>
</script>