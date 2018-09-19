@extends('layouts.app')
@section('content')

<div class="text-center mt-4 mb-5">
    <h1>Edit donnée</h1>
</div>


<form class="text-center" action="/update/{{$post->id}}" method="post">

    @csrf
    <input name="leName" id="editTitre" type="text" value="{{$post->name}}">
    <input name="leFirstName" id="editTitre" type="text" value="{{$post->firstname}}">
    <textarea name="laDescription" id="editDescription">{{$post->description}}</textarea>
    <div class="mt-4"><button type="submit" id="btnEdit">Envoyer</button></div>

</form>

@endsection