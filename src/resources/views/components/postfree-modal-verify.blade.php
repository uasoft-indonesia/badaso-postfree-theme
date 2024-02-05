<input type="checkbox" class="modal-toggle" />
<div class="modal" role="dialog" id="modal_verify">
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
                <li class="step step-neutral text-xs">Verify</li>
                <li class="step text-xs">Finish</li>
            </ul>
        </div>

        <form action="" x-data="fetchAuthenticated()" @submit.prevent="userVerify()">
            <div class="flex justify-center mt-4">
                <span id="email_user" class="text-base"></span>
                <input type="text" placeholder="Verification code"
                    class="input input-bordered w-full max-w-xs rounded" x-model="formVerify.token" />
            </div>
            <div class="flex justify-between w-full max-w-xs ml-[70px] mr-[70px] justify-between  mt-4">
                <div>
                    <button class="btn btn-info btn-sm rounded w-full max-w-xs text-white"
                        type="submit">Confirm</button>
                </div>
                <div>
                    <button class="btn btn-warning btn-sm rounded w-full max-w-xs text-white"
                        x-on:click="modalActionClose()">Cancel</button>
                </div>
            </div>
        </form>


    </div>

</div>
