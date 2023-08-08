<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container ">
        <div class="row">
          <div class="col s-12">
            <h1 class="text-center">Ajouter un Etudiant</h1>
            <hr>
            <ul>
              @foreach ($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
              @endforeach
            </ul>
            <form action="/ajouter/traitement" method="POST">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Prénom</label>
                  <input type="text" name="prenom" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Classe</label>
                    <input type="text" name="classe" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="my-5 d-flex justify-content-evenly">
                    <input type="submit" class="btn btn-outline-dark" value="Ajouter un étudiant">
                    <a href="/" class="btn btn-outline-danger">Revenir sur la liste des étudiants</a>
                </div>
              </form>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>