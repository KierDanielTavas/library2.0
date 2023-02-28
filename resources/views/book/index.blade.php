<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Customers</title>
    <br>
</head>
<body>

    <div class="container-fluid">

    <h2> <center> BOOK RECORDS </center> </h2>
    <table class="table table-striped table-dark">

<table class="table">
  <thead class="table table-striped table-dark">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Title</th>
      <th scope="col">Total Pages</th>
      <th scope="col">Rating</th>
      <th scope="col">ISBN</th>
      <th scope="col">Publish Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($books as $book)
    <tr>

      <td>{{$book->id}}</td>
      <td>{{$book->title}}</td>
      <td>{{$book->totalPages}}</td>
      <td>{{$book->rating}}</td>
      <td>{{$book->isbn}}</td>
      <td>{{$book->publishDate}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</html>