  <div class="flex mb-2 flex-row gap-4">
      <div>
          <span class="text-base capitalize text-gray-500 font-semibold">Leave Comments</span>
      </div>
      <div>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
              class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
          </svg>

      </div>
  </div>

  <div class="flex flex-col space-y-2 mb-2" x-data="fetchComment('{{ $slug }}')" x-init="allComment()">

      <div class="">
          <template x-for="comment in comments">
              <div>
                  <template x-if="comment.approved == 1">
                      <div class="flex flex-col">
                          <template x-if="comment.userId">
                              <div><span class="text-sm font-bold" x-text='comment.user.name'></span></div>
                          </template>
                          <template x-if="!comment.userId">
                              <div><span class="text-sm font-bold" x-text='comment.guestName'></span></div>
                          </template>
                          <div><span class="text-sm" x-text="comment.content"></span></div>
                      </div>
                  </template>

              </div>
          </template>
      </div>

  </div>

  <template x-if="status==400">
      <div>
          {{-- form --}}
          <form action="" x-data="fetchData()" @submit.prevent="newComment()">
              <div class="flex flex-col w-full max-w-xs mb-10 space-y-1">
                  <div>
                      <div class="label">
                          <span class="label-text text-sm">Name</span>
                      </div>
                      <input type="text" placeholder="Name"
                          class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formComment.guestName"
                          required />
                  </div>
                  <div>
                      <div class="label">
                          <span class="label-text text-sm">Email</span>
                      </div>
                      <input type="text" placeholder="Email"
                          class="input input-bordered input-sm w-full max-w-xs rounded" x-model="formComment.guestEmail"
                          required />
                  </div>
                  <div>
                      <div class="label">
                          <span class="label-text text-sm">Comment</span>
                      </div>
                      <textarea placeholder="Enter your comment" class="textarea textarea-bordered w-full border-solid"
                          x-model="formComment.content"></textarea>
                  </div>
                  <div class="flex justify-end">
                      <button class="btn btn-sm bg-sky-500" type="submit">
                          <span class="text-sm text-white">Post Comment</span>
                      </button>
                  </div>

              </div>
          </form>
      </div>
  </template>

  <template x-if="status==200">
      {{-- textarea comments --}}
      <div class="flex flex-col mb-10 w-full max-w-xs space-y-1">

          <div x-data="fetchAuthenticated()" x-init="fetchUser()">
              <input type="hidden" name="id_user" value="" id="userId">
          </div>
          <div>
              <textarea placeholder="Enter your comment" class="textarea textarea-bordered w-full border-solid" id="comment_text"></textarea>
          </div>
          <div class="place-self-end">
              <button class="btn btn-sm bg-sky-500 text-white" x-on:click="comments()">
                  Post Comment
              </button>
          </div>
      </div>
  </template>
