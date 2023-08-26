<x-main>
    <section class="p-4 w-4/5 m-auto">
        <h2 class="border-b-2 border-blue-600 py-4 mb-4 font-semibold font-14">List Result</h2>
        <form method="get" action="/admin/marks/search" enctype="multipart/form-data">
        <div class="flex pb-10">
            <div class="flex-1">
                <x-input name="search" value="{{ request()->search }}" type="text"></x-input>
            </div>

            <div class="flex-1 ...">
                <label> Search</label>
                <x-button>Filter</x-button>
            </div>
        </div>
        </form>

            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead
                                class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                            <tr>

                                <th scope="col" class="px-6 py-4">Title</th>
                                <th scope="col" class="px-6 py-4">Date</th>
                                <th scope="col" class="px-6 py-4">Roll Number</th>
                                <th scope="col" class="px-6 py-4">Result</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                                <th scope="col" class="px-6 py-4"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($marks as $mark)
                                <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">

                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="">
                                            {{ $mark->name }}
                                        </a>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $mark->created_at->diffForHumans() }}</td>
                                    <td class="whitespace-nowrap px-6 py-4"> {{ $mark->rollno }}</td>
                                    <td class="whitespace-nowrap px-6 py-4"> {{ ($mark->category->remark == 1 ) ? 'Passed' : 'Check Result' }}</td>
                                    <td class="whitespace-nowrap px-6 py-4"><a href="/admin/marks/{{ $mark->id }}/edit">Edit</a></td>

                                    <td class="whitespace-nowrap px-6 py-4">
                                        <form method="POST" action="/admin/marks/{{ $mark->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-xs text-gray-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        {{$marks->links()}}
                    </div>
                </div>
            </div>


    </section>
</x-main>
