@extends('layouts.app')

@section('content')

	@foreach( $users as $user )
		@php
			{{-- $user->organization->name --}}
		@endphp			
	@endforeach


	<h2 class="pt-4">{{config('app.name', 'Eliminator')}} users/index blade</h2>

	@if(count($users) > 0)
			@foreach( $users as $user )
				<p>$user->name;</p>
		{{-- @include('includes.angular-users-table-module') --}}
		{{-- @include('includes.angular-users-table') --}}
			@endforeach
	@else
		<p>no users found</p>
	@endif

@endsection