@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <!-- TODO Afficher le nom du contact -->
            <h3>Modification du contact <b>{{$contact->name}}</b></h3>
            <form action="{{route('contacts.update', $contact->id)}}" method="post">
                <!-- TODO mise en place de la form pour modifier un contact -->

                @csrf
                @method("put")
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Modifier le nom" value="{{$contact->name}}">
                    </div>

                    <div class="form-group">
                        <label for="text">Telephone</label>
                        <input name="tel" type="text" class="form-control" id="tel" placeholder="Modifier le numéro de téléphone" value="{{$contact->tel}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Modifier l'email" value="{{$contact->email}}">
                    </div>

                    <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
@endsection