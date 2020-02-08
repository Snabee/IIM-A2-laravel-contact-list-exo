@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Ajouter un contact</h3>
                <form method='post' action='{{route('contact.store')}}'>
                    <!-- TODO mise en place de la form pour créer un contact -->
                    @csrf
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Entrer le nom" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <label for="text">Téléphone</label>
                            <input name="tel" type="text" class="form-control" id="tel" placeholder="Entrer le numéro de téléphone" value="{{old('tel')}}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Entrer votre email" value="{{old('email')}}">
                        </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
@endsection