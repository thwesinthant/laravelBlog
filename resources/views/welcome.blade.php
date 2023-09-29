<x-app-layout>
    {{-- nav cat bar --}}
    <div class="cat-nav bg-red-500   shadow-md  shadow-black-800 w-full py-2.5 px-5 flex gap-2 overflow-x-hidden">
        @foreach ($categories as $cat)
            <button type="button"
                class="text-red-700 hover:text-red-500 border border-red-700 bg-pink-100 hover:bg-white
            font-medium rounded-xl text-bae px-3 py-1 text-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 active:bg-red-600   whitespace-nowrap "
                style="font-family: 'Chewy',  cursive;"> {{ $cat->name }}</button>
        @endforeach
    </div>
    <x-alert message="Welcome From home page!" class="text-red-200" hello="Hello User!">
        <p>hello</p>
    </x-alert>
    <x-alert message="Welcome From home page!" class="text-green-200" hello="Hello User!" />

    <div>
        <button type="button"
            class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                    clip-rule="evenodd" />
            </svg>
            Sign in with Github
        </button>
    </div>
    {{-- post div --}}
    @foreach ($posts as $post)
        <div class="post w-fit flex gap-7 mx-32  mt-16 pt-5 px-5">
            {{-- left info --}}
            <div class="photo">
                <img src="{{ asset("postPhoto/$post->photo") }}"
                    class="rounded  border-4 border-white-500 hover:scale-100 " width="250px" height="auto"
                    alt="" @style('transform: scale(.84) translateX(10%) rotateZ(calc(-1 * (11 * 1deg)));transform-origin: 0 100%;transition: transform .2s ease-out;')>
            </div>
            <div class="content me-16">
                <div class="title mb-8 ">
                    <span class=" text-3xl  font-bold "
                        style="font-family: 'Chewy',  cursive;
                background: #FFFFFF;
                background: linear-gradient(to left, #FFFFFF 0%, #FF0000 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                ">
                        {{ $post->title }}</span>


                    {{-- <button type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br  text-xs rounded-xl px-2.5 py-1 ms-4">Jun
                    4, 2024</button> --}}
                    <span class="text-red-500 ms-2"><i class="fa-solid fa-tags text-white me-1"></i>
                        {{ $post->category->name }}</span>
                    {{-- <button type="button"
                        class=" bg-white text-red-500  rounded-md  px-1.5 ms-2  text-center font-bold"
                        style="font-family: 'Chewy',  cursive;font-size:0.87rem;padding:2px 8px;">
                        {{ $post->category->name }}</button> --}}
                    {{-- <button type="button"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br  text-xs rounded-xl px-2.5 py-1 ms-4">Travelling</button> --}}
                    {{-- <button type="button"
                    class="text-black bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 text-xs rounded-xl px-2.5 py-1 ms-4 "><i
                        class="fa-regular fa-calendar-days me-1 "></i>Travelling</button>
                <button type="button"
                    class="text-black bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 text-xs rounded-xl px-2.5 py-1 ms-2">Travelling</button> --}}
                </div>
                <p class="text-white  text-base font-thin leading-8 font-mono mb-6 indent-10 text-justify"
                    style="font-family: 'Quicksand', sans-serif;">
                    Lorem ipsum
                    dolor
                    sit amet
                    consectetur adipisicing elit. Ea consectetur
                    blanditiis
                    quibusdam natus et, labore assumenda facilis dolore quod iste ratione officiis debitis aliquam
                    voluptatum animi dicta. Vel accusamus officia quas velit temporibus sit aperiam vero dolorum
                    veritatis
                    fugiat, voluptatibus odio porro laboriosam doloremque repudiandae explicabo. Perspiciatis error
                    praesentium excepturi.</p>
                <div class="postFooter flex justify-between ">
                    <p class="whitespace-nowrap text-red-500">Post by <a
                            href="{{ route('users.show', $post->user->id) }}" class="me-2 underline text-white text-lg">
                            {{ $post->user->name }}</a> | {{ Str::substr($post->updated_at, 0, 11) }}
                    </p>
                    <form action="" method="get">
                        <a href="{{ route('posts.show', $post->id) }}" class="text-white  text-base underline ">Read
                            More...</a>
                    </form>
                </div>
            </div>

            {{-- right info --}}
            <div class="info text-white flex flex-col justify-start mt-20 gap-3 w-fit items-center">
                <p><a href="#" class="text-white underline"><i
                            class="fa-solid fa-feather-pointed me-2 text-red-500""></i>Comments</a>
                </p>
                {{-- <div class="reaction">
                <a href="#">
                    <i class="fa-solid fa-thumbs-up"></i>
                </a>
                <span class="me-8 ms-1 text-white">1</span>

                <a>
                    <i class="fa-solid fa-thumbs-down"></i>
                </a>
                <span class="me-8 ms-1 text-white">1</span>
            </div> --}}
                <button type="submit"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium text-sm rounded-2xl px-2.5 pt-0 pb-1 ms-4 mt-3 whitespace-nowrap">Add
                    to Read Later<span class="material-symbols-outlined ms-1 text-white text-base">
                        bookmark_add
                    </span></button>
                {{-- <a href="#" class="whitespace-nowrap text-white underline mt-10"><span
                    class="material-symbols-outlined  ms-1 text-red-500 ">
                    bookmark_add
                </span>Add to Read Later</a> --}}
            </div>
        </div>
    @endforeach
    <div class=" flex-col justify-center text-white mt-24 pb-10">
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
