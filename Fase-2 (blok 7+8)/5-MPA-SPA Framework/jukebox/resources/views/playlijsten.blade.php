<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Playlists') }}
        </h2>
    </x-slot>

    @foreach ($playlists as $playlist)
        <div onclick="window.location.href='/playlisten/{{ $playlist->id }}'" class="pt-4">
            <div class="">
                <div class="">
                    <div class="">
                        {{ $playlist->name }}
                    </div>
                </div>
            </div>
        </div>         
    @endforeach
    <div class="pt-4">
        <div class="">
            <div class="">
                <div class="">
                    <form method="post" action="{{ route('playlistAanmaken')}}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <input class="" type="text" name="name" placeholder="Playlist name"><br>
                        <button type="submit">Maak playlist</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
