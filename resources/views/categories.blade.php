<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      Categories
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
      <div class="bg-white p-4 shadow sm:rounded-lg sm:p-8">
        <div class="max-w-xl">
          <table class="table-striped table">
            <thead>
              <tr>
                <th>Category Id</th>
                <th>Category Name</th>
                <th>Category Slug</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->category_name }}</td>
                  <td>{{ $item->category_slug }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->updated_at }}</td>
                  <td>
                    <a href="{{ route('category.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('category.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          {{ $categories->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
