<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit</title>
</head>
<body>
  <h1>Edit</h1>
  <form action="{{ route('admin.update', ['id' => $product->id]) }}" method="POST">
    @csrf
    <input type="text" name="title" value="{{ $product->title }}">
    <input type="text" name="content" value="{{ $product->content }}">
    <button type="submit">Save</button>
  </form>
</body>
</html>