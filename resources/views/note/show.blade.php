<x-app-layout>
    <div class="w-full py-3 px-14">
        <div class="text-lg font-medium flex justify-between w-full">
            <span><a href="{{route('note.index')}}"><i class="fa-solid fa-angle-left pr-2" style="color: #000000;"></i></a>Note Preview</span>
            <span>Created At : {{$note->created_at}}</span>
        </div>
        <div class="w-full pt-3">
            <div class="w-full text-justify bg-[#fff] p-2 rounded-t-lg">
                {{$note->note}}
            </div>
            <div class="w-full flex items-center justify-end rounded-lg bg-[#f8f8f8] gap-4 p-2">
                <a href="{{route('note.edit',$note)}}">
                    <i class="fa-regular fa-pen-to-square text-xl cursor-pointer" style="color: #777777;"></i>
                </a>
                <form action="{{route('note.destroy',$note)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button><i class="fa-solid fa-trash text-xl cursor-pointer" style="color: #777777;"></i></button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
