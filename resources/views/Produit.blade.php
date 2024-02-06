<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>produit.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <a class="btn btn-danger" href="{{route('login')}}" style=" position: absolute;
    top: 20px; 
    right: 10px;">déconnexion</a>
    <h1>Liste des produit</h1>

    
        
    

    <table  class="table">
    <thead>
<tr>
    <th scope="col">Réference</th>
    <th scope="col">libellé</th>
    <th scope="col">Prix</th>
    <th scope="col">Quantité</th>
    <th scope="col">Description</th>
    <th scope="col">Type</th>
    <th scope="col">Photo produit</th>
    <th scope="col">Actions</th>
</tr>    
    </thead>
    @foreach($modules as $m)
    <tbody>
  <tr>
<td>{{$m->id}}</td>
<td>{{$m->libPdt}}</td>
<td>{{$m->prixVente}}</td>
<td>{{$m->Qte}}</td>
<td>{{$m->description}}</td>
<td>{{$m->type}}</td>
<td> <img src="{{ asset('storage/'.$m->image) }} " alt="image" width="50"></td>

<td>
    <a href="/supprimer/{{$m->id}}" class="btn btn-danger">supprimer</a>
    <a href="{{ route('produits.show', ['id' => $m->id]) }}" class="btn btn-primary">Voir les détails</a>
</td>
    


  </tr>


    </tbody>
@endforeach
    
    
    </table>
    <a class="btn btn-primary" href="{{route('ajouter.form')}}">ajouter un produit</a>
</body>
</html>