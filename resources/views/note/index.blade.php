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