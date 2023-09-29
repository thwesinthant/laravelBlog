<x-app-layout>
    {{-- nav cat bar --}}
    <div class="cat-nav  shadow-md  shadow-black-800 w-full py-2.5 px-5 flex gap-2 overflow-x-hidden">
        @foreach ($categories as $cat)
            <button type="button"
                class="text-blue-200 hover:text-black bg-slate-800 hover:bg-blue-200 active:bg-blue-200 active:text-black
            font-medium rounded-xl text-base px-3 py-1.5 text-center mr-2  whitespace-nowrap "
                style="font-family: 'Chewy',  cursive;"> {{ $cat->name }}</button>
        @endforeach
    </div>
    {{-- header --}}
    <div class="header mt-10 px-24">
        {{-- header links --}}
        <div class="links mb-2">
            <span class="author text-red-500 underline text-lg me-1">{{ $post->user->name }} /</span>
            <span class="text-blue-200 me-1">{{ Str::substr($post->updated_at, 0, 11) }} /</span>
            <span class="underline text-blue-200">{{ $post->count() }} comments</span>
        </div>
        <div class="title mb-5">
            {{-- get bottom fex pixels of text cut of error is solve by giving min-height to that text --}}
            <h1 class="text-4xl font-bolder" @style("
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   min-height:1.6em;                                                                                                                                                           background: #ABFFB3;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background: linear-gradient(to right, #ABFFB3 0%, #DEFF85 25%, #FFB8E7 50%, #8AE4FF 75%, #ADBEFF 50%, #E2FF94 100%);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    -webkit-background-clip: text;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    -webkit-text-fill-color: transparent;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     font-family:'Chewy',  cursive;")>{{ $post->title }}</h1>
        </div>
    </div>
    {{-- intro post --}}
    <div class="intro mt-5 px-24 flex gap-8">
        <div class="summary flex-1 ">
            <strong class="text-red-500  font-thin text-lg">QUICK SUMMARY ↬</strong>
            <span class="dark:text-white text-black font-thin tracking-wide leading-8 text-lg">Running a workshop can be
                an
                effective
                alternative to
                traditional,long-standing meetings.However,if
                workshops aren't designed contributing,fearing criticism from others.To help ensure the success of a
                workshop,Ben Shih introduces the concept of an inclusive workshop.In Part 1 of the series, you discover
                the fundamentals of inclusivity ad get some solid guidance on how to plan an inclusive remote workshop.
            </span>
            <hr class="mt-8">
            {{-- post body --}}
            <div class="post_body mt-8">
                <p class="dark:text-white leading-8 text-lg font-thin">
                    {{ $post->body }}
                </p>
            </div>

        </div>

        <div class="profile  ps-10 w-80">
            {{-- author's photo --}}
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                class="rounded" width="150px" height="auto" alt="">
            <p class="text-red-500 text-lg mb-4 mt-3">ABOUT THE AUTHOR</p>
            <p class="text-white leading-7 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet deserunt
                quos
                aut
                eveniet quas reiciendis facilis sint corporis sapiente nesciunt...</p>
            <a href="" class="text-blue-700 underline">More about <span
                    class="text-red-500">{{ $post->user->name }}</span> -></a>
        </div>
    </div>

    {{-- comment section --}}
    <section class="comment mt-24  flex gap-10 px-24">

        <div class="show_comments flex-1 bg-pink-300">
            <h1 style="background: #B9FF96;
                                    background: linear-gradient(to right, #B9FF96 0%, #C5FF9E 33%, #A6FFAF 100%);
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;"
                class="font-bold text-3xl inline-block">
                - Comments
                {{-- {{ $post->comment('comment')->count() }} --}}
            </h1><span class="text-cyan-100 text-3xl ms-2 mb-1"><sup>{{ $post->comment->count() }}</sup></span>
            {{-- @if ($post->comment->ordering === 0)
                {{ 'AFD' }}
            @endif --}}
            @foreach ($post->comment as $com)
                {{-- {{ $com->ordering_secondary }} --}}
                @if ($com->ordering_secondary === 0)
                    {{-- main comment box --}}
                    <div class="comment mb-10 flex gap-5 mt-8">
                        <div class="user_image">
                            <img src="https://images.unsplash.com/photo-1693146261069-0a6f70b6d3c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMDN8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="" width="50px" height="80px" @style('border-radius:50%')
                                class=" border-2 border-red-500 ">
                        </div>
                        <div class="content">
                            <span class="text-white text-xl">{{ $com->user->name }} </span><span
                                class="text-white">wrote</span>
                            <span class="text-red-500">- {{ $com->updated_at }}</span><span
                                class="text-red-500">#</span>
                            <p class="text-white mt-3 leading-7 indent-8">{{ $com->comment }}
                            </p>
                            <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5"
                                id="bbbb" data-btn="dddd" onclick="myFunction({{ $com->id }})"
                                class="bbbb">Reply
                                -></button>
                        </div>

                        {{-- @if ($com->ordering_secondary === 1)
                            <p>hello</p>
                        @endif --}}
                    </div>
                @endif
            @endforeach



        </div>

        <div class="comment mb-10 ms-10 flex gap-5 mt-8">
            <div class="user_image">

                <img src="https://images.unsplash.com/photo-1693146261069-0a6f70b6d3c6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMDN8fHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
                    alt="" width="50px" height="50px" @style('border-radius:50%') class=" border-2 border-red-500 ">
            </div>
            <div class="content">
                <span class="text-white text-lg">{{ $com->user->name }} </span><span class="text-white">reply
                    to</span>
                <span class="text-red-500">- {{ $com->updated_at }}</span><span class="text-red-500">#</span>
                <p class="text-white mt-3 leading-7 indent-8">{{ $com->comment }}
                </p>
                <button
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5"
                    id="bbbb" data-btn="dddd" onclick="myFunction({{ $com->id }})" class="bbbb">Reply
                    -></button>
            </div>
        </div> --}}

        <div class="write_comment flex-1 ps-10">
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="mb-6">
                    <h2 class="text-white mb-3" id="comment_title">LEAVE A COMMENT</h2>
                    <label class="block mb-2 text-sm font-medium text-black dark:text-white">Your
                        message</label>
                    <x-input name="comment" placeholder="" id="input" autocomplete="off" />
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="hidden" name="reply_id" id="replyId" value="0">
                {{-- <input type="hidden" name="reply_id" id="replyId" value=""> --}}
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Post
                    Comment</button>
            </form>
        </div>
    </section>
</x-app-layout>


<script>
    let input = document.getElementById("input");
    let commentTitle = document.getElementById("comment_title");
    let replyId = document.getElementById("replyId");

    function myFunction(id) {
        input.focus();
        replyId.value = id;
        commentTitle.innerHTML = 'Reply to';
    }
</script>
