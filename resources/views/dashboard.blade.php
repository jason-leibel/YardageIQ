@extends('layouts.app')

@section('content')
    <h2 class="page-title">Club Stats Overview</h2>
    <div class="actions">
        <a href="#" class="button">Add Stat</a>
    </div>

    <div class="table-container">
        <table class="stats-table w-full border-collapse">
            <thead class="bg-coolgray text-left">
            <tr>
                <th class="p-2 border">Club</th>
                <th class="p-2 border text-center">Type</th>
                <th class="p-2 border text-center">Distance</th>
                <th class="p-2 border text-center">Swing Speed</th>
                <th class="p-2 border text-center">Clubhead Speed</th>
                <th class="p-2 border text-center">Smash Factor</th>
                <th class="p-2 border text-center">Launch</th>
                <th class="p-2 border text-center">Ball Speed</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($stats as $row)
                @foreach (['pro', 'amateur', 'regular'] as $type)
                    @php $data = $row[$type]; @endphp
                    @if ($data)
                        <tr class="border-t hover:bg-softblue">
                            <td class="p-2 border">{{ $row['club'] }}</td>
                            <td class="p-2 border text-center capitalize">{{ $type }}</td>
                            <td class="p-2 border text-center">{{ $data['distance'] }}</td>
                            <td class="p-2 border text-center">{{ $data['swing_speed'] }}</td>
                            <td class="p-2 border text-center">{{ $data['clubhead_speed'] }}</td>
                            <td class="p-2 border text-center">{{ $data['smash_factor'] }}</td>
                            <td class="p-2 border text-center">{{ $data['launch_angle'] }}°</td>
                            <td class="p-2 border text-center">{{ $data['ball_speed'] }}</td>
                        </tr>
                    @endif
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
