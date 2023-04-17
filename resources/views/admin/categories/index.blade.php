<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Categories Index</title>
</head>
<body>
  <h1>Categories Index</h1>
  <a href="{{ route('admin.categories.create') }}">Create</a>
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{ $category->title }}</td>
          <td>{{ $category->content }}</td>
          <td>
            <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}">Edit</a>
            <a href="{{ route('admin.categories.delete', ['id' => $category->id]) }}">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>