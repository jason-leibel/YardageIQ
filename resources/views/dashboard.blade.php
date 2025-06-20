@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">YardageIQ – Club Stats Overview</h1>

    <table class="w-full border-collapse">
        <thead>
        <tr class="bg-gray-100 text-left">
            <th class="p-2 border">Club</th>
            <th class="p-2 border">Pro Launch</th>
            <th class="p-2 border">Amateur Launch</th>
            <th class="p-2 border">Regular Launch</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($stats as $row)
            <tr class="border-t">
                <td class="p-2 border">{{ $row['club'] }}</td>
                <td class="p-2 border">{{ $row['pro']['launch'] }}°</td>
                <td class="p-2 border">{{ $row['amateur']['launch'] }}°</td>
                <td class="p-2 border">{{ $row['regular']['launch'] }}°</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
