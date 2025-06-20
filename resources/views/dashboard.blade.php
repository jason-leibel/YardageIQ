@extends('layouts.app')

@section('content')
    <h2 class="page-title">Club Stats – {{ $selectedGroup }} Golfer</h2>

    @foreach (['Wood', 'Iron', 'Wedge'] as $category)
        @if(isset($stats[$category]) && count($stats[$category]))
            <h3 class="text-xl font-bold mt-8" style="margin-top: 2rem; font-size: 1.25rem; color: #1E293B;">{{ $category }}s</h3>

            <div class="table-container" style="margin-bottom: 2rem;">
                <table class="stats-table">
                    <thead>
                    <tr>
                        <th>Club</th>
                        <th class="text-center">Distance</th>
                        <th class="text-center">Swing Speed</th>
                        <th class="text-center">Clubhead Speed</th>
                        <th class="text-center">Smash Factor</th>
                        <th class="text-center">Launch</th>
                        <th class="text-center">Ball Speed</th>
                        <th class="text-center">Group</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($stats[$category] as $club => $groupedRows)
                        @foreach ($groupedRows as $row)
                            <tr>
                                <td class="font-medium">{{ $club }}</td>
                                <td class="text-center">{{ $row->distance }}</td>
                                <td class="text-center">{{ $row->swing_speed }}</td>
                                <td class="text-center">{{ $row->clubhead_speed }}</td>
                                <td class="text-center">{{ $row->smash_factor }}</td>
                                <td class="text-center">{{ $row->launch }}°</td>
                                <td class="text-center">{{ $row->ball_speed }}</td>
                                <td class="text-center">{{ $row->group }}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endforeach
@endsection
