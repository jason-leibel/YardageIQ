@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-extrabold mb-6 text-center text-primary">Club Stats Overview</h2>
    <div class="text-right mb-4">
        <a href="#" class="inline-block px-4 py-2 bg-turf text-white rounded hover:bg-green-500">Add Stat</a>
    </div>

    <div class="overflow-hidden rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-coolgray">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-slate uppercase tracking-wider">Club</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-slate uppercase tracking-wider">Pro</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-slate uppercase tracking-wider">Amateur</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-slate uppercase tracking-wider">Regular</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($stats as $row)
                <tr class="hover:bg-softblue transition">
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $row['club'] }}</td>
                    <td class="px-6 py-4 text-center">{{ $row['pro']['launch'] }}°</td>
                    <td class="px-6 py-4 text-center">{{ $row['amateur']['launch'] }}°</td>
                    <td class="px-6 py-4 text-center">{{ $row['regular']['launch'] }}°</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
