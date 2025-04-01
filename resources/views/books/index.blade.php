@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">ISBN</th>
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Author</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Published Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td class="border px-4 py-2">{{ $book->id }}</td>
                        <td class="border px-4 py-2">{{ $book->isbn }}</td>
                        <td class="border px-4 py-2">{{ $book->title }}</td>
                        <td class="border px-4 py-2">{{ $book->author }}</td>
                        <td class="border px-4 py-2">{{ $book->description }}</td>
                        <td class="border px-4 py-2">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection