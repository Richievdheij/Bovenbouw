<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ $playlist->name }} - {{ $duration }} 
        </h2>
    </x-slot>

    @foreach ($playlist->songs as $song)
        <div onclick="window.location.href='/liedjes/{{ $song->id }}'" class="pt-4">
            <div class="">
                <div class="">
                    <div class="">
                        {{ $song->name }}
                    </div>
                </div>
            </div>
        </div>         
    @endforeach

    
</x-app-layout>
