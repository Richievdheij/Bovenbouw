<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Songs') }}
        </h2>
    </x-slot>

    <div class="pt-4">
        <div class="">
            <div class="">
                <div class="">
                    <table style="width:100%">
                        <colgroup>
                            <col style="width:30%">
                            <col style="width:30%">
                            <col style="width:20%">
                            <col style="width:5%">
                            <col style="width:5%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>Genre</th>
                                <th>Add to playlist</th>
                                <th>Delete</th>
                                <th>Play</th>
                            </tr>
                            @foreach ($songs as $song)
                                <tr>
                                    <td onclick="window.location.href='/liedjes/{{ $song->id }}'">{{ $song->name }}</td>

                                    <td >{{ $song->genre->name }}</td>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
