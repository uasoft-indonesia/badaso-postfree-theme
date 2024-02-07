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
            </ul>
        </div>

        <div x-data="fetchAuthenticated()">
            <form action="" @submit.prevent="userRegister()">
                <div class="flex flex-col w-full py-4 space-y-3">
                    <div class="flex justify-center">
                        <input type="text" placeholder="Name"
                            class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formRegister.name"
                            required />
                    </div>
                    <div class="flex justify-center">
                        <input type="text" placeholder="Username"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.username" required />
                    </div>
                    <div class="flex justify-center">
                        <input type="number" placeholder="Phone"
                            class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formRegister.phone"
                            required />
                    </div>
                    <div class="flex justify-center">
                        <input type="text" placeholder="Email"
                            class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formRegister.email"
                            required />
                    </div>
                    <div class="flex justify-center relative">
                        <input :type="show ? 'password' : 'text'" placeholder="Password"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.password" required />
                        <div class="absolute inset-y-0 right-[75px] pr-3 flex items-center text-sm leading-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                @click="show = !show" :class="{ 'hidden': !show, 'block': show }" class="w-5 h-5">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                <path fill-rule="evenodd"
                                    d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                @click="show = !show" :class="{ 'block': !show, 'hidden': show }" class="w-5 h-5">
                                <path fill-rule="evenodd"
                                    d="M3.28 2.22a.75.75 0 0 0-1.06 1.06l14.5 14.5a.75.75 0 1 0 1.06-1.06l-1.745-1.745a10.029 10.029 0 0 0 3.3-4.38 1.651 1.651 0 0 0 0-1.185A10.004 10.004 0 0 0 9.999 3a9.956 9.956 0 0 0-4.744 1.194L3.28 2.22ZM7.752 6.69l1.092 1.092a2.5 2.5 0 0 1 3.374 3.373l1.091 1.092a4 4 0 0 0-5.557-5.557Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="m10.748 13.93 2.523 2.523a9.987 9.987 0 0 1-3.27.547c-4.258 0-7.894-2.66-9.337-6.41a1.651 1.651 0 0 1 0-1.186A10.007 10.007 0 0 1 2.839 6.02L6.07 9.252a4 4 0 0 0 4.678 4.678Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex justify-center relative">
                        <input type="password" placeholder="Password Confirmation"
                            class="input input-bordered input-sm w-full max-w-xs rounded"
                            x-model="formRegister.passwordConfirmation" required />
                    </div>
                    <div class="flex justify-center">
                        <input type="text" placeholder="Address"
                            class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formRegister.address"
                            required />
                    </div>

                    <div class="flex justify-center">
                        <select class="select select-bordered select-sm w-full max-w-xs rounded"
                            x-model="formRegister.gender" required>
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
            <span class="text-xs">Do you have an account? <label for="" class="text-sky-400 text-xs cursor-pointer" x-on:click="loginActive()">Login</label> </span>
        </div>
    </div>
</div>
