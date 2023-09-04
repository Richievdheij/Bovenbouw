<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Genres') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="">
            <div class="">
                <div class="">
                    <table style="width:100%">
                        <colgroup>
                            <col style="width:90%">
                            <col style="width:10%">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>Name</th>
                            </tr>
                            @foreach ($genres as $genre)
                                <tr onclick="window.location.href='/genre/{{ $genre->id }}'">
                                    <td >{{ $genre->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="">
            <div class="">
                <div class="">
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
