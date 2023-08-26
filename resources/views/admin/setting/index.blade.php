<x-main>
    <section class="p-4 w-4/5 m-auto">
        <h2 class="border-b-2 border-blue-600 py-4 mb-4 font-semibold font-14">Settings page</h2>
        <form method="post" action="/admin/settings">
            @csrf
            <ul class="space-y-8">
                <li>
                    <label>Pass Message</label>
                    <textarea name="pass_message" cols="10" rows="10" class="w-full">{{ old('pass_message', $setting['pass_message']) }}</textarea>
                    @error('pass_message')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </li>
                <li>
                    <label>Waiting Message</label>
                    <textarea name="waiting_message" cols="10" rows="10" class="w-full">{{ old('waiting_message',$setting['waiting_message']) }}</textarea>
                    @error('waiting_message')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </li>
                <li>
                    <label>Fail Message</label>
                    <textarea name="fail_message" cols="10" rows="10" class="w-full">{{ old('fail_message', $setting['fail_message']) }}</textarea>
                    @error('fail_message')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </li>
                <li>
                    <label>Withheld Message</label>
                    <textarea name="withheld_message" cols="10" rows="10" class="w-full">{{ old('withheld_message',$setting['withheld_message']) }}</textarea>
                    @error('withheld_message')
                        <div class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </li>

                <li>
                    <label>Withheld Message</label>
                    <input type="text" name="pagination_limit"  class="w-full" value="{{ old('pagination_limit',$setting['pagination_limit']) }}" />
                    @error('pagination_limit')
                    <div class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </li>

                <li><x-button>Save</x-button></li>
            </ul>
        </form>
    </section>
</x-main>
