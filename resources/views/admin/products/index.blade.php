<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index</title>
</head>
<body>
  <h1>Index</h1>
  <a href="{{ route('admin.create') }}">Create</a>
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>{{ $product->title }}</td>
          <td>{{ $product->content }}</td>
          <td>
            <a href="{{ route('admin.edit', ['id' => $product->id]) }}">Edit</a>
            <a href="{{ route('admin.delete', ['id' => $product->id]) }}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>