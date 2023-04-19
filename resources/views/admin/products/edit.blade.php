<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Editor') }}
        </h2>
    </x-slot>
    <form action="{{ route('admin.update', ['id' => $product->id]) }}" method="POST">
        @csrf
        <input type="text" name="title" value="{{ $product->title }}">
        <input type="text" name="content" value="{{ $product->content }}">
        <button type="submit">Save</button>
    </form>
</x-app-layout>
