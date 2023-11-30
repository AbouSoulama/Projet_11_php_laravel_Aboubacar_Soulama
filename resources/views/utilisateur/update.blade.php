<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet 10 php </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
     <div class="container">
     
    <div class="row">
    
    <div class="col s12">
        <h1>Modifier un utilisateur</h1>
        <hr>
        @if (session('status'))
        <div class="alert alert-success">
        {{session('status')}}
        </div>
        @endif
        
        <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger"> {{$error}} </li>
        @endforeach
        </ul>
        
        <form action="/update/traitement" method="POST" class="form-group">
        @csrf
        
                        <input type="text" name="id" style="display:none;" value="{{ $utilisateurs->id }}">
                        
                        <div class="form-group">
                            <label for="Nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="Nom" name="nom" value="{{ $utilisateurs->nom }}">
                        </div>
                        <div class="form-group">
                            <label for="Prenom" class="form-label">Prenom</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $utilisateurs->prenom }}">
                        </div>

                        <div class="form-group">
                            <label for="Email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="email" value="{{ $utilisateurs->email }}">
                        </div>
                        <div class="form-group">
                            <label for="ville" class="form-label">Ville</label><br>
                            <select name="ville" id="Ville" class="form-select">
                              @foreach($villes as $ville)
                            <option  value="{{$ville->id}} " {{$utilisateurs->ville_id == $ville->id ? 'selected':''}}>{{$ville->nom}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nationalite" class="form-label">Nationalite</label><br>
                            <select name="nationalite" id="Nationalite" class="form-select">
                              @foreach($nationalites as $nationalite)
                            <option value="{{$nationalite->id}}"  {{$utilisateurs->nationalite_id == $nationalite->id ? 'selected':''}}>{{$nationalite->nom}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="groupe_sanguin" class="form-label">Groupe_sanguin</label><br>
                            <select name="groupe_sanguin" id="Groupe_sanguin"  class="form-select">
                              @foreach($groupe_sanguins as $groupe_sanguin)
                            <option value="{{$groupe_sanguin->id}}"  {{$utilisateurs->groupe_sanguin_id == $groupe_sanguin->id ? 'selected':''}}>{{$groupe_sanguin->nom}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Path" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="Path" name="path" value="{{ $utilisateurs->path }}">
                        </div>
                        <div class="form-group">
                            <label for="tuteur" class="form-label">Tuteur</label><br>
                            <select name="tuteur" id="Tuteur"  class="form-select">
                              @foreach($tuteurs as $tuteur)
                            <option value="{{$tuteur->id}}" {{$utilisateurs->tuteur_id == $tuteur->id ? 'selected':''}}>{{$tuteur->nom}}</option>
                            @endforeach
                            </select>
                        </div>
                       <br><br>
                        <button type="submit" class="btn btn-primary">Modifier un utilisateur</button>
                        <br><br>
                        <a href="/utilisateur" class="btn btn-danger"> Revenir a la liste des utilisateurs</a>
                        <br>
                </form>
       
      
      
      
      
    </div>
   
    </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>