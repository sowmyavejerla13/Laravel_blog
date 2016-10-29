@extends('layout')
@section('content')

@foreach($cards as $mycards)

<div>{{$mycards->title}}</div>

@endforeach

@stop