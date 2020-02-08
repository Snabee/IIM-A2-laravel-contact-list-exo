@extends('layouts.app');

@section('content');
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- TODO href de la balise <a> pour pointer vers la route de création de contact -->
                <a class="btn btn-primary" href="{{route('contact.create')}}">Ajouter un contact</a>
            </div>
        </div>
        <div>

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du contact</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- TODO : Début de la boucle -->
                    @forelse($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->tel}}</td>
                        <td>{{$contact->email}}</td>

                        <td>
                            <!-- TODO href de la balise <a> pour pointer vers la route de modification du contact -->
                            <a class="btn" href="{{route('contact.modify')}}">Modifier</a>


                            <a class="btn" onclick="document.getElementById('delete-form-{{$contact->id}}').submit()">Supprimer</a>
                            <form id="delete-form-{{$contact->id}}" method='post' action='{{route('contact.destroy')}}'>
                                @csrf
                                @method('delete')
                                
                                <!-- TODO Form pour la suppression d'un contact -->
                                <input type='hidden' value='{{$contact->id}}' name='id'>

                            </form>
                        </td>
                    </p>

                    <!-- TODO : Conditions pas de contact -->
                    @empty

                    <tr>
                        <td>Vous n'avez pas encore de contact</td>
                    </tr>
                    
                    <!-- TODO : FIN Boucle -->
                    @endforelse
                    
                </tbody>
                </table>
            
        </div>
    </div>
@endsection