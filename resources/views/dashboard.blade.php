@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-extrabold mb-8 text-center text-green-700">Club Stats Overview</h2>

        <div class="bg-white shadow overflow-hidden rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-green-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-green-800 uppercase tracking-wider">Club</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-green-800 uppercase tracking-wider">Pro</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-green-800 uppercase tracking-wider">Amateur</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-green-800 uppercase tracking-wider">Regular</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($stats as $row)
                    <tr class="hover:bg-green-50 transition">
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $row['club'] }}</td>
                        <td class="px-6 py-4 text-center">{{ $row['pro']['launch'] }}°</td>
                        <td class="px-6 py-4 text-center">{{ $row['amateur']['launch'] }}°</td>
                        <td class="px-6 py-4 text-center">{{ $row['regular']['launch'] }}°</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
