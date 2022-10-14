<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book</title>
</head>
<body>

    <div class="constant w-25 justify-content-center">

        <form action="/store" method="POST">

            @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Book Title</label>
        <input type="text" name="book_title" class="form-control">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Book Description</label>
        <input type="text" name="book_description" class="form-control">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Book Author</label>
        <input type="text" name="book_author" class="form-control">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Book image</label>
        <input type="text" name="book_image" class="form-control">
      </div>
      <input class="btn btn-primary" type="submit" value="Submit">

    </form>
    </div>
      
    
</body>
</html>