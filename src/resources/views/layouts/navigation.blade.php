<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="fixed flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7e7f4] bg-[#f8f8fc] w-full h-20 z-50 px-10 py-3">
        <div class="flex items-center gap-4 text-[#0d0d1c]">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16"><!-- Icon from Gitlab SVGs by GitLab B.V. - https://gitlab.com/gitlab-org/gitlab-svgs/-/blob/main/LICENSE -->
                <path fill="#be38f3" fill-rule="evenodd" d="M7.32.029a8 8 0 0 1 7.18 3.307V1.75a.75.75 0 0 1 1.5 0V6h-4.25a.75.75 0 0 1 0-1.5h1.727A6.5 6.5 0 0 0 1.694 6.424A.75.75 0 1 1 .239 6.06A8 8 0 0 1 7.319.03Zm-3.4 14.852A8 8 0 0 0 15.76 9.94a.75.75 0 0 0-1.455-.364A6.5 6.5 0 0 1 2.523 11.5H4.25a.75.75 0 0 0 0-1.5H0v4.25a.75.75 0 0 0 1.5 0v-1.586a8 8 0 0 0 2.42 2.217" clip-rule="evenodd" />
            </svg>

            <h2 class="text-[#0d0d1c] text-lg font-bold leading-tight tracking-wide">RetryLog</h2>
        </div>

        <div class="flex flex-1 justify-end gap-8">
            <div class="flex items-center gap-9">
                <a class="text-[#0d0d1c] text-sm font-medium leading-normal" href="{{ route('home') }}">Home</a>
                <a class="text-[#0d0d1c] text-sm font-medium leading-normal" href="{{ route('challenges') }}">Challenges</a>
                <a class="text-[#0d0d1c] text-sm font-medium leading-normal" href="{{ route('progress') }}">Progress</a>
                <a class="text-[#0d0d1c] text-sm font-medium leading-normal" href="{{ route('mypage') }}">Profile</a>
                <input
                    type="text"
                    placeholder="Search"
                    class="flex max-w-[480px] h-10 rounded-xl border border-gray-300 bg-white px-3.5 py-2 text-sm leading-normal text-gray-900 placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500 w-full" />
                <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10  text-gray-500 gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 32 32"><!-- Icon from Line Awesome by Icons8 - https://www.apache.org/licenses/LICENSE-2.0 -->
                        <path fill="currentColor" d="M16 3a2 2 0 0 0-2 2c0 .086.02.168.031.25C10.574 6.133 8 9.273 8 13v9c0 .566-.434 1-1 1H6v2h7.188A3 3 0 0 0 13 26c0 1.645 1.355 3 3 3s3-1.355 3-3a3 3 0 0 0-.188-1H26v-2h-1c-.566 0-1-.434-1-1v-8.719c0-3.758-2.512-7.11-6.031-8.031c.011-.082.031-.164.031-.25a2 2 0 0 0-2-2m-.438 4c.145-.012.29 0 .438 0h.188C19.453 7.098 22 9.96 22 13.281V22c0 .352.074.684.188 1H9.813A3 3 0 0 0 10 22v-9a6.005 6.005 0 0 1 5.563-6zM16 25c.563 0 1 .438 1 1s-.438 1-1 1s-1-.438-1-1s.438-1 1-1" />
                    </svg>
                </button>

            </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div
                                class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAWzKYh2h01GiOYDR5c1ikD7m9E_XhsZLkqZuPq9Cq4R7S5GrPQCxP13PN2VVDCKcJ_iQjB30M5FwmqfUXSAcmz4yqKqC9iw1eApQAkwGPotl0V4xnYBPFkmV_YskkH5NB3EAN1-7mm67HZ1X7OQqrkEmeEdyAHkqj_i-n1sGORviEtMyelKJFKgdoC2hVuEeSXvYktIFK4fXNvYmV1OpEROjVkEhBZNS6EX3pbeQxVeWVctmH55NzjIpnPTcxJv5EwNTxnfSzSaqY");'></div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Edit profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>



    <!-- </div>
    </div> -->

    <!-- Responsive Navigation Menu -->
    <!-- <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div> -->

    <!-- Responsive Settings Options -->
    <!-- <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link> -->

    <!-- Authentication -->
    <!-- <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div> -->
</nav>