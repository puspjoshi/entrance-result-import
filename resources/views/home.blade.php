
<x-layout>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="{{asset('img/nastr.png')}}">
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Enter your entrance roll number
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="/result" method="get">
                            <x-input name="rollno" type="text"></x-input>
                            <x-button>Check Result</x-button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

</x-layout>
