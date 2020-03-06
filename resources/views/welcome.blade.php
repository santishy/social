@extends('layouts.app')
  @section('content')
    <form  action="{{route('statuses.store')}}" method="post">
      @csrf
      <textarea name="body" rows="8" cols="80"></textarea>
      <button id="create-status" name="button">Publicar estado</button>
    </form>
  @endsection
