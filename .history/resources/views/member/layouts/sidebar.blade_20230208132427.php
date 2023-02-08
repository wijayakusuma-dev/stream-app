<!-- START: Sidebar -->
<aside class="fixed z-50 w-[360px] bg-stream-dark">
    <div class="flex flex-col p-12 border-r border-softpur overflow-y-auto h-screen">
        <a href="{{ route('member.dashboard') }}">
            <img src="{{ asset('stream/assets/images/stream.svg') }}" alt="">
        </a>
        <div class="links flex flex-col mt-16 gap-2">
            <a href="{{ route('member.dashboard') }}" class="side-link active">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 17L12 22L22 17" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M2 12L12 17L22 12" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                Watch
            </a>

            <div class="flex border-t border-softpur"></div>
            <a href="{{ route('member.user_premium.index') }}" class="side-link">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21 4H3C1.89543 4 1 4.89543 1 6V18C1 19.1046 1.89543 20 3 20H21C22.1046 20 23 19.1046 23 18V6C23 4.89543 22.1046 4 21 4Z"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M1 10H23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Subscription
            </a>
            <a href="{{ route('member.logout') }}" class="side-link">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.36 6.64001C19.6184 7.8988 20.4753 9.50246 20.8223 11.2482C21.1693 12.994 20.9909 14.8034 20.3096 16.4478C19.6284 18.0921 18.4748 19.4976 16.9948 20.4864C15.5148 21.4752 13.7749 22.0029 11.995 22.0029C10.2151 22.0029 8.47515 21.4752 6.99517 20.4864C5.51519 19.4976 4.36164 18.0921 3.68036 16.4478C2.99909 14.8034 2.82069 12.994 3.16772 11.2482C3.51475 9.50246 4.37162 7.8988 5.63 6.64001"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 2V12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Log Out
            </a>
        </div>
    </div>
</aside>
<!-- END: Sidebar -->
