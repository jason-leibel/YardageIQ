@extends('layouts.app')

@section('content')
    <h2 class="page-title">Club Stats Overview</h2>
    <div class="actions">
        <a href="#" class="button">Add Stat</a>
    </div>

    <div class="table-container">
        <table class="stats-table">
            <thead>
                <tr>
                    <th>Club</th>
                    <th class="text-center">Pro</th>
                    <th class="text-center">Amateur</th>
                    <th class="text-center">Regular</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($stats as $row)
                <tr>
                    <td class="font-medium">{{ $row['club'] }}</td>
                    <td class="text-center">{{ $row['pro']['launch'] }}°</td>
                    <td class="text-center">{{ $row['amateur']['launch'] }}°</td>
                    <td class="text-center">{{ $row['regular']['launch'] }}°</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
