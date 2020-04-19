{{--
  Template Name: Single Portfolio Template
--}}

@extends('layouts.app')

@section('content')
  <h1>{{$title}}</h1>
  <img src="{{$image}}"/>
  <div class="detail>">
  <h2>Author:  {{$author}}</h2>
  <h2>Date:  {{$date}}</h2>
  </div>
  <p class="description">{{$description}}</p>
  <p class="link"><a href="{{$url}}">{{$url}}</a></p>
@endsection
