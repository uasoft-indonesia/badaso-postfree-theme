<input type="checkbox" class="modal-toggle" />
<div class="modal" role="dialog" id="modal_register">
    <div class="modal-box">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" x-on:click="modalActionClose()">✕</button>
        <div class="flex justify-center" x-data="fetchData()" x-init="postfreeConfiguration()">
            <div class="max-w-[150px] lg:w-[184px]">
                <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                        class="w-full h-[39px] object-cover" alt=""></a>
            </div>
        </div>
        <div class="flex justify-center py-4">
            <ul class="steps">
                <li class="step step-neutral text-xs">Register</li>
                <li class="step text-xs">Verify</li>
                <li class="step text-xs">Finish</li>
            </ul>
        </div>

        <div x-data="fetchAuthenticated()">
            <form action="" @submit.prevent="userRegister()">
                <div class="flex flex-col w-full py-4 space-y-3">
                    <div class="flex justify-center">
                        <input type="text" placeholder="Name"
                            class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formRegister.name" />
                    </div>
                    <div class="flex justify-center">
                        <input type="text" placeholder="Username"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.username" />
                    </div>
                    <div class="flex justify-center">
                        <input type="number" placeholder="Phone"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.phone" />
                    </div>
                    <div class="flex justify-center">
                        <input type="text" placeholder="Email"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.email" />
                    </div>
                    <div class="flex justify-center relative">
                        <input type="text" placeholder="Password"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.password" />
                        <div class="absolute inset-y-0 right-[75px] pr-3 flex items-center text-sm leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                <path fill-rule="evenodd"
                                    d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center relative">
                        <input type="text" placeholder="Password Confirmation"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.passwordConfirmation" />
                        <div class="absolute inset-y-0 right-[75px] pr-3 flex items-center text-sm leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-5 h-5">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                <path fill-rule="evenodd"
                                    d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <input type="text" placeholder="Address"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.address" />
                    </div>

                    <div class="flex justify-center">
                        <select class="select select-bordered select-sm w-full max-w-xs rounded"
                            x-model="formRegister.gender">
                            <option disabled selected>Gender</option>
                            <option value="man">Male</option>
                            <option value="woman">Female</option>
                        </select>
                    </div>

                    <div class="flex justify-center">
                        <button class="btn btn-info btn-sm rounded w-full max-w-xs text-white"
                            x-text="buttonLabel">Register</button>
                    </div>

                </div>
            </form>
        </div>

        <div class="flex justify-center">
            <span class="text-xs">Do you have an account? <a href=""
                    class="text-sky-400 text-xs cursor-pointer">Login</a></span>
        </div>
    </div>
    {{-- <label class="modal-backdrop" for="modal_register">Close</label> --}}
</div>
