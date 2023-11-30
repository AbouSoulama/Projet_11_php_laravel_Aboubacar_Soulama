<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet 10 php </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
     <div class="container text-center">
     
    <div class="row">
    
    <div class="col s12">
    <hr>
        <h1>Liste des utilisateurs</h1>
        <hr>
        <a href="/tuteur" class="btn btn-info" style="margin-right: 58%">Liste des tuteurs</a>
        <a href="/ajouter" class="btn btn-primary">ajouter un utilisateur</a>
        <a href="/poste" class="btn btn-info">Poste</a>
        <a href="/tag" class="btn btn-info">Tags</a>
        @if (session('status'))
             <div class="alert alert-success">
             {{session('status')}}
             </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th> 
                        <th>Ville</th> 
                        <th>Nationalité</th> 
                        <th>Groupe-S</th> 
                        <th>Photo</th> 
                        <th>Tuteur</th> 
                        <th>Action</th> 
                        <!-- <th>Mot de passe</th> 
                        <th>Nom utilisateur</th> 
                        <th>Contact</th>  -->
             </tr> 
            </thead>
            <tbody>
            @php 
            $ide = 1;
            @endphp
              @foreach($utilisateurs as $utilisateur)
                 <tr>
                     <td>{{ $ide }}</td>
                     <td>{{ $utilisateur->nom }}</td>
                     <td>{{ $utilisateur->prenom }}</td>
                     <td>{{ $utilisateur->email }}</td>
                     <td> {{ $utilisateur->ville->nom }} </td>
                     <td>{{ $utilisateur->nationalite->nom }}</td>
                     <td>{{ $utilisateur->groupe_sanguin->nom }}</td>
                     <td><img src="/image/{{ $utilisateur->path }}" alt="" style="height:40px; width:40px;border-radius:50px;"></td>
                     <td>
                     {{$utilisateur->tuteur->nom}}
                     {{$utilisateur->tuteur->prenom}}
                     
                     </td>
                     <td>
                     <a href="/update-utilisateur/{{ $utilisateur->id }}" class="btn btn-info">Modifier</a>
                     <a href="/delete-utilisateur/{{ $utilisateur->id }}" class="btn btn-danger">Supprimer</a>
                     </td>
                </tr>
                @php
                $ide += 1;
                @endphp
                @endforeach
            </tbody>
            </table>
        
            
    </div>
   
    </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>