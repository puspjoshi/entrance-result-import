@props(['name','num'])
<div class="border border-gray-600 rounded-xl h-32 w-1/4  flex flex-col items-center justify-center m-3 bg-blue-500 text-xl text-white float-left">
    <div class="flex-col space-y-12">{{ $name }}</div>
    <div class="flex-col space-y-12 text-5xl "> {{ $num }}</div>
</div>


