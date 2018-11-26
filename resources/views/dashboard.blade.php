@extends('layouts.app')

@section('content')

	<h2 class="pt-4">{{config('app.name', 'Eliminator')}} views/dashboard blade</h2>

	@if(count($users) > 0)
			@include('includes.userstable')
			@foreach( $users as $user )
				{{-- <p>{{$user->name}}</p> --}}
		{{-- @include('includes.angular-users-table-module') --}}
		{{-- @include('includes.angular-users-table') --}}
			@endforeach
	@else
		<p>no users found</p>
	@endif

@endsection