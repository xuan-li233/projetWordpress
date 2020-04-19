{{--
  Template Name: Front Page Template
--}}



@extends('layouts.app')
@section('content')
<div class="accroche">
  <p>A student from iut de chambery </p>
</div>
<div class="main-content">
@if($featured_post)
@foreach($featured_post as $post)
<a class="item" href="{{$post->link}}">
  <h1>{{$post->title}}</h1>
  <img src="{{$post->image}}">
</a>
@endforeach
@endif
</div>
{{--  {{$featured_post}}--}}
<div class="voirplus">
<a href="{{get_permalink(25)}}" class="button">Voir plus</a>
</div>
@endsection

