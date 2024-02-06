<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('ajouter.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
        <div data-mdb-input-init class="form-outline mb-4">
        <label>Libellé:</label>
        <input type="text" name="libPdt" class="form-control"/> <!-- Corrected field name -->
        @error('libelle')
            <span class='text-danger'>{{$message}}</span>
        @enderror
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
        <label>Prix:</label>
        <input type="text"  name="prixVente" class="form-control"/>
        @error('prix')
            <span class='text-danger'>{{$message}}</span>
        @enderror
        </div>

        <div data-mdb-input-init class="form-outline mb-4">
        <label>Quantité:</label>
        <input type="text" name="Qte" class="form-control"/> <!-- Corrected field name -->
        @error('quantite') <!-- Corrected error message key -->
            <span class='text-danger'>{{$message}}</span>
        @enderror
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
        <label>Description:</label>
        <input type="text" name="description" class="form-control"/>
        @error('description')
            <span class='text-danger'>{{$message}}</span>
        @enderror
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
        <label>Type:</label>
        <input type="text" name="type" class="form-control"/>
        @error('type')
            <span class='text-danger'>{{$message}}</span>
        @enderror
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
        <label>Photo produit:</label>
        <input type="file" name="image"/>
        @error('photo')
            <span class='text-danger'>{{$message}}</span>
        @enderror
        </div>
        
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
    
</body>
</html>