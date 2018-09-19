@extends('layouts.app')
@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="text-center" action="/create" method="post">

    @csrf
    <input name="leName" id="editTitre" type="text" placeholder="name" value="">

    <input name="leFirstName" id="editTitre" type="text" placeholder="firstname" value="">

    <textarea name="laDescription" id="editDescription" placeholder="description"></textarea>

    <div class="mt-4"><button type="submit" id="btnEdit">Envoyer</button></div>

</form>

@foreach($post as $key => $value)

<form action="/delete/{{$value->id}}" method="post">

    @csrf
    <div>
        <div class="card mt-5" id="card">
            <img id="img" class="card-img-top" src="images/IMG-20170812-WA0022.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title"><strong>{{$value->id}}</strong></h5>
                <p class="card-text">{{$value->name}}</p>
                <p class="card-text">{{$value->firstname}}</p>
                <p class="card-text">{{$value->description}}</p>
            </div>
            <div class="card-footer text-center">
                <a class="btn btn-warning ml-3" role="button" href="posts/edit/{{$value->id}}">Edit</a>
                <button type="submit" class='btn btn-danger ml-3'>Delete</button>
            </div>
        </div>
    </div>


</form>
@endforeach
@endsection
