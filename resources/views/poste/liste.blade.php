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
        <h1>Liste des postes</h1>
        <hr>
        <a href="/add" class="btn btn-primary">ajouter un poste</a>
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
                        <th>Contenu</th>
                        <th>Tag</th>
                        <th>Action</th> 
             </tr> 
            </thead>
            <tbody>
            @php 
            $ide = 1;
            @endphp
              @foreach($postes as $poste)
                 <tr>
                     <td>{{ $ide }}</td>
                     <td>{{ $poste->nom }}</td>
                     <td>{{ $poste->contenu }}</td>
                     <td>
                      @foreach($poste->tags as $tag)
                     {{ $tag->nom }}
                     @endforeach
                     </td>
                     <td>
                     <a href="/update-poste/{{ $poste->id }}" class="btn btn-info">Modifier</a>
                     <a href="/del-poste/{{ $poste->id }}" class="btn btn-danger">Supprimer</a>
                     </td>
                </tr>
                @php
                $ide += 1;
                @endphp
                @endforeach
            </tbody>
            </table>
        
            <a href="/utilisateur" class="btn btn-danger"> Revenir a la liste des utilisateurs</a>
    </div>
   
    </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>