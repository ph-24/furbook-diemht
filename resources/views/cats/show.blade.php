@extends('layouts.master')
@section('header')
    <a href="{{ route('cat.index') }}">Back to overview</a>
    <h2>{{ $cat->name }}</h2>
    {!! Form::open(['url' => route('cat.edit', $cat->id), 'method' => 'get']) !!}
        {!! Form::submit('Edit') !!}
    {!! Form::close() !!}
    {!! Form::open(['url' => route('cat.destroy', $cat->id), 'method' => 'DELETE']) !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}
    {{--<form action="/cats/{{ $cat->id }}" method="post" id="form_delete">--}}
    {{--<input type="hidden" name="_method" value="DELETE">--}}
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    {{--<a href="javascript:document.getElementById('form_delete').submit()"><span class="glyphicon glyphicon-edit"></span>Delete</a>--}}
    {{--</form>--}}
    <p>Last edited: {{ $cat->updated_at }}</p>
@stop
@section('content')
    <p>Date of Birth: {{ $cat->date_of_birth }}</p>
    <p>
        @if($cat->breed)
            Breed:
            {{ link_to('cats/breeds/'.$cat->breed->name, $cat->breed->name) }}
        @endif
    </p>
@stop
