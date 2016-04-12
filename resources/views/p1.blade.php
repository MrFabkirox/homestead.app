@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
        <h2>List of the task: </h2>

        <p>
        @foreach ($tasks as $task)
    		{{ $task->id }}, {{ $task->name }}, {{ $task->slug }}<br />
		@endforeach
		</p>

		<p>
		</p>

		<p>
		</p>

@endsection
