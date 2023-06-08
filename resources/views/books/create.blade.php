<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Get Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
      <div class="d-flex justify-content-center align-items-center container my-5">
          <div class="card my-4">
            <div class="container">
            <form action="/book/store" method="post" style="width:450px;">
            @csrf
            <legend class="text-center mb-4 mt-2">TAMBAH DATA BUKU</legend>
          <div class="mb-3">
            <label class="form-label">Book Code</label>
            <input type="text" id=""  name="book_code" class="form-control" placeholder="Kode Buku">
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Buku</label>
            <input type="text" id="" name="name_book" class="form-control" placeholder="Nama Buku">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Penulis</label>
            <input type="text" id="" name="Penulis" class="form-control" placeholder="Nama penulis">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" id="formFile" name="image">
          </div>
          <button type="submit" class="btn btn-primary mb-3">Submit</button>
          <a href="/book" class="btn btn-primary mb-3">Back</a>
      </form>
           </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>