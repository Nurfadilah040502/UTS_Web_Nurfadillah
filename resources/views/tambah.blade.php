<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Merek Otomotif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      <h2 class="text-center mt-2">Tambah Merek Otomotif</h2> 
      <div class="container mt-3">
      <form action ="/tambah" method="POST">
          @csrf
  <div class="mb-3">
    <label for="merek" class="form-label">Merek</label>
    <input type="text" class="form-control" id="merek" required name="merek">
  </div>
  <div class="mb-3">
    <label for="asal_negara" class="form-label">Asal Negara</label>
    <input type="text" class="form-control" id="asal_negara" required name="asal_negara">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>