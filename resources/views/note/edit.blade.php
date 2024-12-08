<x-app-layout>
    <div class="w-full py-2 px-14">
        <h1 class="font-medium text-xl">Edit Note</h1>
        <form action="{{route('note.update',$note)}}" method="post">
            @csrf
            @method('PUT')
            <div class="w-full pt-3">
                <textarea class="w-full rounded-lg border-[#777777] outline-none" placeholder="Type your note..." name="note" rows="10">{{$note->note}}</textarea>
            </div>
            <div class="w-full pt-3 flex justify-end items-center gap-3">
                <button class="transition-all bg-[#f2f2f2] hover:bg-[#d9d9d9] text-black py-2 w-[100px] font-medium rounded-lg">Cancel</button>
                <button type="submit" class="transition-all bg-[#000] hover:bg-[#404040] text-white py-2 w-[100px] font-medium rounded-lg">Save</button>
            </div>
        </form>
</x-app-layout>
