<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ $song->name }} - {{ $duration }} 
        </h2>
    </x-slot>
    <div class="pt-4">
        <div class="">
            <div class="">
                <div class="">
                    <table style="width:100%">
                        <colgroup>
                            <col style="width:10%">
                            <col style="width:10%">
                            <col style="width:10%">
                            <col style="width:10%">
                            <col style="width:10%">
                            <col style="width:5%">
                            <col style="width:5%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Artist</th>
                                <th>Duration</th>
                                <th>Genre</th>
                                <th>Add to playlist</th>
                                <th>Delete</th>
                                <th>Play</th>
                            </tr>
                            <tr>
                                <td> {{ $song->name }}</td>
                                <td> {{ $song->artist }}</td>
                                <td> {{ $duration }}</td>
                                <td> {{ $song->genre->name }}</td>
                                <td> 
                                    <form method="post" action="/liedjes/{{ $song->id }}/add" accept-charset="UTF-8">
                                        {{ csrf_field() }}
                                        <select class="" name="playlist">
                                            @foreach ($playlists as $playlist)
                                                <option value={{ $playlist->id}}>{{ $playlist->name }}</option>
                                            @endforeach
                                        </select>

                                        <button type="submit">Add</button>
                                    </form>
                                </td>
                                <td> </td>
                                <td></td>

                            </tr>
                        </tbody>    
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
