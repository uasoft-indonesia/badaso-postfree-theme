  <div class="sticky top-0 z-30 bg-white shadow-lg" id="topnavbar">
      <div class="container mx-auto max-w-[900px] w-full">
          <div class="navbar" x-data="fetchData()" x-init="postfreeConfiguration()">
              <div class="flex-1 items-center mx-10 font-bold text-lg">
                  <div class="max-w-[150px] lg:w-[184px]">
                      <a href="https://badaso-docs.uatech.co.id/"><img :src="navbarLogo"
                              class="w-full h-[39px] object-cover" alt=""></a>
                  </div>
              </div>
              <div class="flex-none">
                  <div class="dropdown dropdown-end">
                      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                          <div class="w-10 rounded-full">
                              <img alt="Tailwind CSS Navbar component"
                                  src="/storage/photos/1/default-user.png" />
                          </div>
                      </div>
                      <ul tabindex="0"
                          class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded w-52"  x-data="fetchAuthenticated()">
                          <li>
                              <label for="modal_login" id="login_desktop"
                                  x-on:click="loginActive()">Login</label>
                          </li>
                          <li><label for="modal_register" id="register_desktop" x-on:click="registerActive()">Create Account</label></li>
                          <li><label for="modal_close" id="logout_desktop" x-on:click="logOut()">Logout</label></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
