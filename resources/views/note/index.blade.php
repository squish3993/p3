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
	@if(($note != null) && ($noteTwo != null))
		<div class='alert alert-info text-center container'>
			The interval between {{ $note }} {{ $accidental }} and {{ $noteTwo }} {{ $accidentalTwo }} is a {{ $intervalName }}
		</div>
	@endif 
@endsection