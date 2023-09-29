<x-app-layout>
    {{-- nav cat bar --}}
    <div class="cat-nav bg-red-500   shadow-md  shadow-black-800 w-full py-2.5 px-5 flex gap-2">
        @foreach ($categories as $cat)
            <button type="button"
                class="text-red-700 hover:text-red-500 border border-red-700 bg-pink-100 hover:bg-white
            font-medium rounded-xl text-bae px-3 py-1 text-center mr-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 active:bg-red-600   whitespace-nowrap "
                style="font-family: 'Chewy',  cursive;"> {{ $cat->name }}</button>
        @endforeach
    </div>
    {{-- profile section --}}
    <section class="profile bg-red-500 flex gap-8 px-24 pt-16">
        <div class="photo flex-initial">
            <img src="https://images.unsplash.com/photo-1694595437436-2ccf5a95591f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                alt="" width="100px" class="h-auto rounded">
        </div>
        <div class="about flex-1">
            <h2 class="text-white text-lg ">Author</h2>
            <h1 class="text-white text-lg">{{ $user->name }}</h1>
            <p class="text-white mt-6 leading-7 text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Quaerat
                sapiente sequi
                voluptatibus rerum, delectus dolore fugiat ex ipsam facere Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Vitae, nam ad optio unde officiis cum nulla deserunt a doloribus harum rem ex eum,
                repellendus eligendi qui laboriosam id fuga doloremque, quas dolore totam nihil voluptates. Obcaecati
                beatae voluptates vero, quaerat tempore facere quibusdam, praesentium explicabo rerum harum sed natus
                veniam accusamus optio neque suscipit nostrum sit, numquam cupiditate? Incidunt omnis, dicta dignissimos
                obcaecati ipsum magni ea, veritatis reprehenderit autem praesentium quas adipisci? Numquam magnam
                suscipit ratione nesciunt vero corporis mollitia architecto facere nobis, laboriosam sunt deserunt
                aspernatur dolorum illo praesentium sapiente saepe nam! Explicabo adipisci nemo earum qui voluptatibus
                quidem quia aut veniam placeat, similique, rem nisi a fugit cumque doloribus error assumenda suscipit
                delectus aliquid eaque ex? Possimus excepturi labore facilis molestiae veniam. Animi dignissimos
                inventore qui id dolore, harum cupiditate suscipit veritatis ipsa veniam recusandae quidem quibusdam
                libero debitis architecto autem reprehenderit modi tenetur nisi rem nesciunt minima accusantium.
                Eligendi earum fugit accusamus maiores iste quaerat quo dolores. Ex eligendi, culpa laborum delectus
                voluptatum amet beatae quas. Quibusdam provident quis voluptatum at tenetur neque illo earum unde aut
                nesciunt sint nostrum assumenda laborum, quisquam obcaecati a quam officiis eveniet aperiam corporis
                iste ratione? Velit ipsum a doloremque in.</p>
        </div>
    </section>

    @foreach ($user->posts as $uu)
        {{-- author's all posts section --}}
        <div class="post w-fit flex gap-7 mx-32  mt-16 pt-5 px-5 py-16">
            {{-- left info --}}
            <div class="photo">
                <img src="" {{-- {{ asset("postPhoto/$user->post->photo") }} --}} class="rounded  border-4 border-white-500 hover:scale-100 "
                    width="250px" height="auto" alt="" @style('transform: scale(.84) translateX(10%) rotateZ(calc(-1 * (11 * 1deg)));transform-origin: 0 100%;transition: transform .2s ease-out;')>
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
                        {{ $uu->title }}</span>

                    <span class="text-red-500 ms-2"><i class="fa-solid fa-tags text-white me-1"></i>
                        {{ $uu->category->name }}</span>
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
                    <p class="whitespace-nowrap text-red-500">Post by <a href="{{ route('users.show', $uu->id) }}"
                            class="me-2 underline text-white text-lg">
                            {{ $uu->user->name }}</a> | {{ Str::substr($uu->updated_at, 0, 11) }}
                    </p>
                    <form action="" method="get">
                        <a href="{{ route('posts.show', $uu->id) }}" class="text-white  text-base underline ">Read
                            More...</a>
                    </form>
                </div>
            </div>

            {{-- right info --}}
            <div class="info text-white flex flex-col justify-start mt-20 gap-3 w-fit items-center">
                <p><a href="#" class="text-white underline"><i
                            class="fa-solid fa-feather-pointed me-2 text-red-500""></i>Comments</a>
                </p>
                <button type="submit"
                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium text-sm rounded-2xl px-2.5 pt-0 pb-1 ms-4 mt-3 whitespace-nowrap">Add
                    to Read Later<span class="material-symbols-outlined ms-1 text-white text-base">
                        bookmark_add
                    </span></button>
            </div>
        </div>
    @endforeach
</x-app-layout>
