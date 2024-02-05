<!doctype html>
<html data-theme="light" class="scroll-smooth">

<head>
    @include('postfree-theme::components.postfree-header')
</head>

<body>
    <div class="bg-slate-300 h-full" x-data="fetchAuthenticated()" x-init="userAuth()">
        {{-- navbar --}}
        @include('postfree-theme::components.postfree-navbar')

        <div class="container mx-auto max-w-[1280px] w-full">
            <div class="flex flex-col pt-5 items-center">
                 @yield('mainContent')

                @include('postfree-theme::components.postfree-modal-login')
                @include('postfree-theme::components.postfree-modal-register')
                @include('postfree-theme::components.postfree-modal-close')
                @include('postfree-theme::components.postfree-modal-verify')

                {{-- footer --}}
                @include('postfree-theme::components.postfree-footer')

            </div>
        </div>


    </div>

</body>

</html>
