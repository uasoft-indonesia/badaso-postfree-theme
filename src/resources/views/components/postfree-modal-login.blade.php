<input type="checkbox" class="modal-toggle" />
<div class="modal" id="modal_login" role="dialog">
    <div class="modal-box">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" x-on:click="modalActionClose()">✕</button>
        <div class="flex justify-center" x-data="fetchData()" x-init="postfreeConfiguration()">
            <div class="max-w-[150px] lg:w-[184px]">
                <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                        class="w-full h-[39px] object-cover" alt=""></a>
            </div>
        </div>
        <form action="" x-data="fetchAuthenticated()" @submit.prevent="userLogin()">
            <div class="flex flex-col w-full py-4">
                <div class="flex justify-center">
                    <input type="text" placeholder="Email"
                        class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formLogin.email" />
                </div>
                <div class="flex justify-center mt-3 relative">
                    <input type="text" placeholder="Password"
                        class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formLogin.password"/>
                    <div class="absolute inset-y-0 right-[75px] pr-3 flex items-center text-sm leading-5">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            <path fill-rule="evenodd"
                                d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="flex w-full max-w-xs ml-[70px] mr-[70px] justify-between mt-1">
                    <div class="form-control">
                        <label class="cursor-pointer label">
                            <input type="checkbox" checked="checked" class="checkbox checkbox-info checkbox-sm" />
                            <span class="label-text text-xs">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center ">
                        <span class="label-text"><a href="" class="text-sky-400 text-xs cursor-pointer">Forgot
                                password</a></span>
                    </div>
                </div>

                <div class="flex justify-center mt-3">
                    <button class="btn btn-info btn-sm rounded w-full max-w-xs text-white" type="submit">Login</button>
                </div>

            </div>
        </form>
        <div class="flex justify-center">
            <span class="text-xs">Don't have an account? <a href=""
                    class="text-sky-400 text-xs cursor-pointer">Create an account</a></span>
        </div>
    </div>
</div>
