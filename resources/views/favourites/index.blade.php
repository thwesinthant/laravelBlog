<x-app-layout>
    <div class="favourite mt-16 ms-16">


        <div class="profile flex gap-3 ">
            <div class="user_img flex rounded h-10 w-10 border border-black">
                <img src="https://images.unsplash.com/photo-1600647993560-11a92e039466?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTJ8fGZsb3dlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
                    alt="" width="50" height="50" class="rounded">
            </div>
            <div class="user_name flex flex-col gap-1 text-white">
                <p class="text-blue-500 text-sm">User Name</p>
                <p class="text-white text-sm"> {{ $favourites->count() }} lists</p>
            </div>

        </div>

        <h1 class="mt-8 text-bolder text-3xl text-blue-500 mb-16">Favourite Lists</h1>


        {{-- post div --}}
        @foreach ($favourites as $fav_post)
            <div class="post w-fit flex gap-10 me-16  mt-5 pt-5 px-5 justify-center items-center ">
                {{-- left info --}}

                <div class="content ">
                    <div class="title mb-8 flex justify-between ">
                        <div class="left_title">
                            <p class="text-white ms-2">
                                <i class="fa-solid fa-tags text-white me-1 text-sm"></i>
                                {{ $fav_post->post->category->name }}
                            </p>
                            <span class=" text-3xl  font-bold "
                                style="font-family: 'Chewy',  cursive;
                    background: #FFFFFF;
                    background: linear-gradient(to left, #FFFFFF 0%, #FF0000 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    ">
                                {{ $fav_post->post->title }}</span>

                            <span class="whitespace-nowrap text-red-500 mx-3"> {{ $fav_post->post->updated_at }}
                            </span>
                            <span class="me-3">read time</span>
                        </div>
                        <div class="remove_btn">
                            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg  dark:text-white"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownDotsHorizontal"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="{{ route('posts.show', $fav_post->post_id) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-center">View
                                            Post</a>
                                    </li>
                                </ul>
                                <div class="py-2">
                                    <form action="{{ route('favourites.destroy', $fav_post->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                            class="block  px-4 py-2 text-sm text-red-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-white dark:hover:text-white leading-5"
                                            onclick="confirm('Are you sure want to remove from favourite list?')">Remove
                                            From Favourite</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-white  text-base font-thin leading-8 font-mono mb-6 indent-10 text-justify"
                        style="font-family: 'Quicksand', sans-serif;">
                        {{ Str::substr($fav_post->post->body, 0, 250) }}. . . . . . . . <a
                            href="{{ route('posts.show', $fav_post->post_id) }}"
                            class="text-blue-400 hover:text-blue-600 text-sm ">read
                            More</a></p>
                </div>

                {{-- right info --}}
                <div class="photo flex justify-center items-center bg-red-400
            overflow-hidden h-40 ">
                    <img src="https://images.unsplash.com/photo-1600647993560-11a92e039466?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OTJ8fGZsb3dlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        class="rounded" width="600px" alt="">
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
