<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data API Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"  rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container my-5">
        <a href="/book/create" class="btn btn-warning mb-3">Create</a>
        <table class="table table-bordered table-warning my-4">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Book Code</th>
                    <th class="text-center">Name Book</th> 
                    <th class="text-center">Penulis</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($books as $item)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$item['book_code']}}</td>
                    <td>{{$item['name_book']}}</td>
                    <td>{{$item['penulis']}}</td>
                    <td><img src="{{ asset($item['image_path'])}}" alt="" width="100"></td>
                    <td>
                        <form action="/book/delete/{{$item ['id']}}" method="post">
                            <a href="/book/{{$item['id']}}" class="btn btn-primary bi bi-eye-slash"></a> |
                            <a href="/book/edit/{{$item['id']}}" class="btn btn-warning bi bi-clipboard-plus"></a> | 
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger bi bi-x-octagon"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>