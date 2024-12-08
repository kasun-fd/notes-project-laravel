<x-app-layout>
    <div class="w-full h-full py-4 px-14">
        <div onclick="window.location.href='{{ route('note.create') }}'"
            class="cursor-pointer fixed bg-[#818CF8] bottom-[10px] right-[10px] px-3 py-2 rounded-lg cursor-pointer">
            <i class="fa-solid fa-plus text-lg" style="color: #fff;"></i>
        </div>
        <h1 class="font-medium text-xl">All Notes</h1>
        <div class="w-full grid md:grid-cols-3 sm:grid-cols-1 pt-2 gap-4">
            @foreach ($notes as $note)
                <div class="bg-[#fff] rounded-lg border-2">
                    <div class="w-full p-2 rounded-b-lg h-[110px] overflow-y-hidden">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="w-full bg-[#f8f8f8] rounded-lg flex justify-end items-center p-2 gap-3">
                        <a href="{{ route('note.show', $note) }}">
                            <i class="fa-solid fa-eye text-xl cursor-pointer" style="color: #777777;"></i>
                        </a>
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
            @endforeach
        </div>
    </div>
</x-app-layout>
