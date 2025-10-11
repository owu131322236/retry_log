@props(['post'])
<div class="rounded-3xl bg-white shadow-lg h-fit w-full my-2 hover:border-primary/50 hover:scale-105 transition-all">
    <div class="flex w-full flex-row items-start justify-start gap-3 p-4">
        <div
            class="bg-center bg-no-repeat aspect-square bg-cover rounded-full w-10 shrink-0"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCKZS_WEnpFEjPE5zOX4qN27VKdVIVnmYg667RwXbsEghVpnxweJZFiJ7PTtC78QKX9Qs8XW63-1bnDhaOu1Zg9LnBAmaFtlfOxj0M7fhUi_OkxaB6yIjju-fttAXiweHcXcwxoKMLlxG4eICa3NgfLWswiDXRLOBEZZvZcn3qoz7vm2_7kTUQjRF2-vMwrhhJ5hqjnU1R3ls92UqX903x3Wimk7eUpNSQYDNFo3-llMAa2RoQXsFOfxoUkGDe4iMQQoHC9oP4yTbk");'></div>
        <div class="flex h-full flex-1 flex-col items-start justify-start">
            <div class="flex w-full flex-row items-start justify-start items-center">
                <p class="text-[#0d0d1c] text-sm font-bold leading-normal tracking-[0.015em] m-1">{{ $post->user->name }}</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE -->
                    <path fill="#0061ff" d="m12.05 19l2.85-2.825l-2.85-2.825L11 14.4l1.075 1.075q-.7.025-1.362-.225t-1.188-.775q-.5-.5-.763-1.15t-.262-1.3q0-.425.113-.85t.312-.825l-1.1-1.1q-.425.625-.625 1.325T7 12q0 .95.375 1.875t1.1 1.65t1.625 1.088t1.85.387l-.95.95zm4.125-4.25q.425-.625.625-1.325T17 12q0-.95-.363-1.888T15.55 8.45t-1.638-1.075t-1.862-.35L13 6.05L11.95 5L9.1 7.825l2.85 2.825L13 9.6l-1.1-1.1q.675 0 1.375.263t1.2.762t.763 1.15t.262 1.3q0 .425-.112.85t-.313.825zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                </svg>
                <p class="text-[#49499c] text-sm font-normal leading-normal m-4">{{ $post->created_at }}</p>
            </div>
            <p class="text-[#0d0d1c] text-sm font-normal leading-normal">{{$post->content}}</p>
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
            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">{{ $post->reactions->count() }}</p>
        </div>
        <div class="flex items-center justify-center gap-2 px-3 py-2">
            <div class="text-[#49499c]" data-icon="ChatCircleDots" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"></path>
                </svg>
            </div>
            <p class="text-[#49499c] text-[13px] font-bold leading-normal tracking-[0.015em]">{{ $post->comments->count() }}</p>
        </div>
    </div>
</div>