<x-app-layout>
    <form enctype="multipart/form-data" method="post" action="{{ route('posts.update', $post->id) }}"
        class="w-[350px] m-auto mt-10 pb-10">
        @method('patch')
        @csrf
        <h1 class="text-2xl text-white  text-center mb-6">Edit Post</h1>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select name="category_id"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                @foreach ($categories as $cat)
                    @if ($post->category_id === $cat->id)
                        <option value="{{ $post->category_id }}" selected>
                            {{ $post->category_id === $cat->id ? $cat->name : '' }}
                        </option>
                    @else
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post
                Title</label>
            <input type="text" name="title"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required value="{{ $post->title }}">
        </div>
        <div class="mb-6">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body
                Content</label>
            <input type="text" name="body"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                value="{{ $post->body }}" required>
        </div>

        <?php if($post->photo) :?>
        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Post
                Photo</label>
            <a href="{{ route('posts.show', $post->id) }}"><img src="{{ asset("postPhoto/$post->photo") }}"
                    alt="" width="full" height="auto" class="object-cover " name="photo"></a>
        </div>
        <?php else :?>
        <?php endif ?>

        <div class="mb-6">
            <?php if($post->photo) :?>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Change
                Photo</label>
            <?php else :?>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input"> Upload
                Photo</label>
            <?php endif ?>

            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 py-2 px-1"
                id="file_input" name="photo" type="file" value="{{ $post->photo }}">
        </div>
        <div class="update-btn w-full text-right">
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @method('patch')
                @csrf
                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Update
                    Post
                </button>
            </form>
        </div>
    </form>
    </form>
</x-app-layout>
