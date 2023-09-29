<x-app-layout>
    <form enctype="multipart/form-data" method="post" action="{{ route('categories.update', $category->id) }}"
        class="w-[350px] m-auto mt-10 pb-10">
        @method('patch')
        @csrf
        <h1 class="text-2xl text-white  text-center mb-6">Edit Category</h1>

        <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name
            </label>
            <input type="text" name="name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                placeholder="" required value="{{ $category->name }}">
        </div>

        <div class="update-btn w-full text-right">
            <form action="{{ route('categories.update', $category->id) }}" method="post">
                @method('patch')
                @csrf
                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    Update
                    Category
                </button>
            </form>
        </div>
    </form>
    </form>
</x-app-layout>
