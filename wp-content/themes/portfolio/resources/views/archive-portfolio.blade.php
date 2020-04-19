{{--
  Template Name: Archive Portfolio Template
--}}

@extends('layouts.app')
@section('content')
  @if($all_post)
    @foreach($all_post as $post)
      <a class="item" href="{{$post->link}}">
        <h1>{{$post->title}}</h1>
        <img src="{{$post->image}}">
      </a>
    @endforeach
  @endif






@endsection
