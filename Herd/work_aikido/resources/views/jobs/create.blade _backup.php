@extends('layout')

@section('title')
    Create a Job
@endsection

@section('content')
    <h1>Create new Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="description" placeholder="description">
        <button type="submit">Submit</button>
    </form>
@endsection
