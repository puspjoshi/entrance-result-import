<x-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img src="{{asset('img/nastr.png')}}">
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-3xl xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <a href="" class="border border-gray rounded-xl p-5 ml-5 hover:bg-blue-600 hover:text-white">Back</a>
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    @if(!empty($mark))
                    @if($mark->category->remark == 1)
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            <span class="text-green-600">Congratulations {{ $mark->name }}!!</span>

                        </h1>
                            <h2 class="text-center">Entrance Roll No: {{ $mark->rollno }}</h2>
                            <p class="text-center">{{  setting('pass_message') }}</p>
                    @elseif( $mark->category->remark == 2)
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            <span class="text-red-600"> {{ $mark->name }}</span>

                        </h1>
                            <h2 class="text-center">Entrance Roll No: {{ $mark->rollno }}</h2>
                            <p class="text-center">{{ setting('waiting_message') }}</p>
                    @elseif($mark->category->remark== 3)
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            <span class="text-red-600"> {{ $mark->name }}</span>

                        </h1>
                            <h2 class="text-center">Entrance Roll No: {{ $mark->rollno }}</h2>
                            <p class="text-center">{{ setting('withheld_message') }}</p>
                    @elseif( $mark->category->remark == 4)
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            <span class="text-red-600"> {{ $mark->name }}</span>

                        </h1>
                            <h2 class="text-center">Entrance Roll No: {{ $mark->rollno }}</h2>
                            <p class="text-center">{{ setting('fail_message') }}</p>

                    @endif
                    @else
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            <span class="text-red-600">Sorry</span>

                        </h1>
                        <p class="text-center ">

                            You are failed. Please try next time.
                        </p>
                    @endif


                </div>
            </div>
        </div>
    </section>
</x-layout>
