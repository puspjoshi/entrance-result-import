<x-main>
    <section class="p-4 w-4/5 m-auto">
        <h2 class="border-b-2 border-blue-600 py-4 mb-4 font-semibold font-14">Import Result</h2>
        <h3 class="float-right text-blue-600"> Before Import <a href="{{asset('csv/sample_file.csv')}}" class="hover:text-black-600">Download sample file</a> </h3>
        <form method="post" action="/admin/marks/import" enctype="multipart/form-data">
            @csrf
            <ul class="space-y-8">
                <li>
                    <x-input name="markImport" type="file"></x-input>
                </li>


                <li><x-button>Import</x-button></li>
            </ul>
        </form>
        <h2 class="border-b-2 border-blue-600 py-4 mb-4 font-semibold font-14">Import Guidelines</h2>
        <p>Please prepare xlsx or csv file in following way. and try to import.</p>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead
                            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                        <tr>

                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Rollno</th>
                            <th scope="col" class="px-6 py-4">Rank</th>
                            <th scope="col" class="px-6 py-4">Remark</th>
                            <th scope="col" class="px-6 py-4">Code</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">

                                <td class="whitespace-nowrap px-6 py-4">Jhon Doe</td>
                                <td class="whitespace-nowrap px-6 py-4">12</td>
                                <td class="whitespace-nowrap px-6 py-4"> 3</td>
                                <td class="whitespace-nowrap px-6 py-4"> Passed</td>
                                <td class="whitespace-nowrap px-6 py-4">1</td>


                            </tr>



                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <h2 class="border-b-2 border-blue-600 py-4 mb-4 font-semibold font-14">Code Guidelines</h2>
        <p>Followings is the code guideline.</p>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead
                            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                        <tr>

                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Description</th>
                            <th scope="col" class="px-6 py-4">Remark</th>
                            <th scope="col" class="px-6 py-4">ID (code in xlsx file)</th>


                        </tr>
                        </thead>
                        <tbody>

                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">COM</td>
                            <td class="whitespace-nowrap px-6 py-4">Computer Engineering</td>
                            <td class="whitespace-nowrap px-6 py-4"> Passed</td>
                            <td class="whitespace-nowrap px-6 py-4">1</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">CIVIL</td>
                            <td class="whitespace-nowrap px-6 py-4">Civil Engineering</td>
                            <td class="whitespace-nowrap px-6 py-4"> Passed</td>
                            <td class="whitespace-nowrap px-6 py-4">2</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">BCA</td>
                            <td class="whitespace-nowrap px-6 py-4">Bachelor of Computer Application</td>
                            <td class="whitespace-nowrap px-6 py-4"> Passed</td>
                            <td class="whitespace-nowrap px-6 py-4">4</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">BBA</td>
                            <td class="whitespace-nowrap px-6 py-4">Bachelor of Business Administration</td>
                            <td class="whitespace-nowrap px-6 py-4"> Passed</td>
                            <td class="whitespace-nowrap px-6 py-4">3</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">WCOM</td>
                            <td class="whitespace-nowrap px-6 py-4">Waiting Computer Engineering</td>
                            <td class="whitespace-nowrap px-6 py-4"> Waiting List</td>
                            <td class="whitespace-nowrap px-6 py-4">5</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">WCIVIL</td>
                            <td class="whitespace-nowrap px-6 py-4">Waiting CIVIL Engineering</td>
                            <td class="whitespace-nowrap px-6 py-4"> Waiting List</td>
                            <td class="whitespace-nowrap px-6 py-4">6</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">WBBA</td>
                            <td class="whitespace-nowrap px-6 py-4">Waiting Bachelor of Business Adminstration</td>
                            <td class="whitespace-nowrap px-6 py-4"> Waiting List</td>
                            <td class="whitespace-nowrap px-6 py-4">7</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">WBCA</td>
                            <td class="whitespace-nowrap px-6 py-4">Waiting Computer Application</td>
                            <td class="whitespace-nowrap px-6 py-4"> Waiting List</td>
                            <td class="whitespace-nowrap px-6 py-4">8</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">WITHHELD</td>
                            <td class="whitespace-nowrap px-6 py-4">With Held</td>
                            <td class="whitespace-nowrap px-6 py-4"> WithHeld</td>
                            <td class="whitespace-nowrap px-6 py-4">9</td>
                        </tr>
                        <tr class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4">SCOM</td>
                            <td class="whitespace-nowrap px-6 py-4">Suggested to Computer Engineering</td>
                            <td class="whitespace-nowrap px-6 py-4"> Withheld</td>
                            <td class="whitespace-nowrap px-6 py-4">10</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
</x-main>
