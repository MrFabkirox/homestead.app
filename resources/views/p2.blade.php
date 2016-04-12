@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>Add task.</p>
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
				<input type="textfield" placeholder="enter id"><br />
			</form>
		</p>
<br />----------------------------------------------------------------------------<br />
		<p>
			{{ Form::open(array('url' => 'save', 'method' => 'POST')) }}

				{{ Form::label('name', 'name') }}<br />
				{{ Form::text('name', 'name') }}<br />

				{{ Form::label('grub', 'grub') }}<br />
				{{ Form::text('grub', 'grub') }}<br />

    			{{ Form::submit('Save') }}<br />

			{{ Form::close() }}
		</p>

@endsection
