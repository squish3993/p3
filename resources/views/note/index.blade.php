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
		The interval between {{ $note }} and {{ $noteTwo }} is a {{ $intervalName }}
	@endif 
@endsection