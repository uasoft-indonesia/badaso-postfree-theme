<input type="checkbox" class="modal-toggle" />
<div class="modal" role="dialog" id="modal_close">
    <div class="modal-box">
        <div class="flex justify-center" x-data="fetchData()" x-init="postfreeConfiguration()">
            <div class="max-w-[150px] lg:w-[184px]">
                <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                        class="w-full h-[39px] object-cover" alt=""></a>
            </div>
        </div>

        <div class="flex justify-center mt-4">
            <span class="text-base text-center">Are you sure?</span>
        </div>
        <div class="flex justify-between w-full max-w-xs ml-[70px] mr-[70px] justify-between  mt-4">
            <div>
                <button class="btn btn-error btn-sm rounded w-full max-w-xs text-white" x-data="fetchAuthenticated()" x-on:click="userLogOut()">Yes</button>
            </div>
            <div>
                <button class="btn btn-warning btn-sm rounded w-full max-w-xs text-white"  x-on:click="modalActionClose()">Cancel</button>
            </div>
        </div>
    </div>

</div>
