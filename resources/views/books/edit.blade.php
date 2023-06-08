<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
      <form action="/books/update/{{$books['id']}}" method="post">
        @csrf
        @method('patch')
        <legend class="text-center mb-3">UPDATE DATA BUKU <br>{{$books ['name_book']}}</legend>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
            <input type="number" class="form-control" name="book_code" value="{{$books['book_code']}}" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Buku</label>
            <input type="text" class="form-control" name="name_book" value="{{$books['name_book']}}" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Penulis</label>
            <input type="text" class="form-control" name="penulis" value="{{$books['penulis']}}" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="text" class="form-control" name="image" value="{{$books['image']}}" id="exampleInputPassword1"><br>
            <input type="file" class="form-control" name="image" value="{{$books['image']}}" id="exampleInputPassword1">
        </div>
        <a href="/book" class="btn btn-warning">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>