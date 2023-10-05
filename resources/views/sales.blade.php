@extends('layout.master') ;

@section('content')

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Jan</th>
                    <th scope="col">Feb</th>
                    <th scope="col">March</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale => $target)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $sale }}</td>
                        @foreach ($target as $targ => $value)
                            <td>{{ $value }}</td>
                            @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
