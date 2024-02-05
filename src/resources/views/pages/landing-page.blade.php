@extends('postfree-theme::layout.index')
@section('title')
{{$title}}
@endsection
@section('mainContent')
    {{-- title post --}}
    <div class="flex flex-col space-y-2" x-data="fetchData()" x-init="themeContent()">
        <div class="flex text-3xl capitalize" x-text="header.heading"></div>
        <div class="flex text-base justify-center text-gray-500" x-text="header.subheading"></div>
    </div>
    <div class="flex flex-col mt-10 bg-white w-[900px] shadow-md rounded px-10">
        <div class="flex flex-row justify-between mt-8 mb-8" x-data="fetchData()" x-init="postContent()">
            {{-- title content --}}
            <div class="flex flex-col">
                <div class="text-lg font-bold capitalize mb-2">
                    {!! $title !!}
                </div>
                <div class="text-sm text-gray-500" x-text='formatDateTime(publishAt,2)'>

                </div>
            </div>

            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
                </svg>
            </div>
        </div>

        {{-- content --}}
        <div class="flex w-full" x-data="fetchData()" x-init="postContent()">
            <img :src="thumbnail" class="rounded-sm object-cover w-full" alt="">
        </div>
        <div class="flex text-gray-500 pt-5 pb-10 text-base">
            {!! $content !!}
        </div>

        {{-- comment --}}
         <div class="flex flex-col">
               <div class="flex ">

               </div>
            </div>
        <div class="flex flex-row mb-10 space-x-4">

            <div class="avatar place-items-center">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component"
                        src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                </div>
            </div>
            <div>
                <textarea placeholder="Masukkan Komentar" class="textarea textarea-bordered w-full border-solid"></textarea>
            </div>
            <div class="place-self-end">
                <button class="btn btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
@endsection
