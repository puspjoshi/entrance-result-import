<x-main>
    <section class="p-4 w-4/5 m-auto">
        <h2 class="border-b-2 border-blue-600 py-4 mb-4 font-semibold font-14">Create Result</h2>
        <form method="post" action="/admin/marks">
            @csrf
            <ul class="space-y-8">
                <li>
                    <x-input name="name" type="text"></x-input>
                </li>
                <li>
                    <x-input name="rank" type="text"></x-input>
                </li>
                <li>
                    <x-input name="rollno" type="text"></x-input>
                </li>
                <li>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Category</label>
                        <select name="category_id" id="code" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach(App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}"> {{ ucwords($category->name) }}</option>
                            @endforeach


                        </select>

                        @error('code')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </li>
                <li>
                    <x-input name="remark" type="text"></x-input>
                </li>

                <li><x-button>Create</x-button></li>
            </ul>
        </form>
    </section>
</x-main>
