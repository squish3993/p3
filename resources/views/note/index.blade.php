@extends('layouts.master')

@section('jumboHeader')
   Intervals
@endsection

@section('tagline')
	A simple app for figuring out the musical interval between two notes
@endsection

@section('form')
	@include('note.form')
@endsection

@section('result')
	@if(($note != null) && ($noteTwo != null) && count($errors) == 0)
		<div class='alert alert-info text-center container'>
			The interval between {{ $note }} {{ $accidental }} and {{ $noteTwo }} {{ $accidentalTwo }} is a {{ $intervalName }}
		</div>
	@endif 

	@if(count($errors) > 0)
		<div class='alert alert-danger text-center container'
    		<ul style='list-style: none;'>
       			 @foreach ($errors->all() as $error)
            		<li>{{ $error }}</li>
        		@endforeach
   			 </ul>
   		</div>
		@endif
@endsection