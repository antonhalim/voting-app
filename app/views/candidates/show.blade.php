@extends('layout')

@section('content')
  <h3>{{{ $candidate->name }}}</h3>

  @if($candidate->description)
	<h4>About this Candidate</h4>
  <p>{{{ $candidate->description }}}</p>
  @endif

  @if($candidate->category)
	<h4>Category</h4>
  <p>{{ link_to_route('categories.show', $candidate->category->name, [$candidate->category->slug]) }}</p>
  @endif

	<h4>Actions</h4>
  <p>{{ link_to_route('candidates.edit', 'Edit Candidate', [$candidate->slug], ['class' => 'btn secondary']) }}</p>
  <p>{{ link_to_route('candidates.index', 'Go Back') }}</p>

@stop