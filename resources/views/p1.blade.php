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
			<form method="POST" action="">
				<input type="textfield" placeholder="enter id">
			</form>
		</p>

		<p>
			{{ Form::open(array('url' => 'showSelected', 'method' => 'POST')) }}

				{{ Form::label('name', 'Name') }}
				{{ Form::textarea('grub', 'Grub') }}

				{{ Form::label('name', 'Name') }}
				{{ Form::text('grub', 'Grub') }}

    			{{ Form::submit('Save') }}

			{{ Form::close() }}
		</p>

@endsection
