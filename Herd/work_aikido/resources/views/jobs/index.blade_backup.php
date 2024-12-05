@extends('layout')

@section('content')
    <h1>{{ count($jobs) }} Available Jobs</h1>
    <ul>
        @forelse($jobs as $job)
            <li>{{ $job }}</li>
        @empty
            <p>No jobs available</p>
        @endforelse
    </ul>
@endsection
