<x-app-layout>
    <div class="create-btn flex">
        <div class="create-btn mt-10 ms-8 ">
            <a href="{{ route('posts.create') }}"
                class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center  ">Create
                Post</a>
        </div>
        <div class="create-btn mt-10 ms-8 ">
            <a href=""
                class=" text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center  ">Create
                Category</a>
        </div>
    </div>
    <h1 class="center mt-10 text-white text-2xl text-center">Category List</h1>

    @if (session('success'))
        <div class="alert alert-success ms-10 text-base text-white mt-8">
            {{ session('success') }}
        </div>
    @endif
    <div class="relative overflow-x-auto m-24 mb-0 pb-10 ">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Category Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created_date
                    </th>

                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                            name="category_id">
                            {{ $cat->id }}
                        </th>
                        <td class="px-6 py-4" name="name">
                            {{ $cat->name }}

                        </td>
                        <td class="px-6 py-4" name="created_at">
                            {{ $cat->created_at->diffForHumans() }}

                        </td>

                        <td class="px-6 py-4 flex items-center justify-center mt-3" name="updated_at">
                            <form action="{{ route('categories.edit', $cat->id) }}" method="get">
                                @method('get')
                                @csrf
                                <button type="submit" name="edit"
                                    class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2.5 py-1.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Edit</button>
                            </form>
                            <form action="{{ route('categories.destroy', $cat->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2.5 py-1.5  text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
                                    onclick="confirm('Are you sure want to delete?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-app-layout>
