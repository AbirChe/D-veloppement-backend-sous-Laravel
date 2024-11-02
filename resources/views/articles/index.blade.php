
@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Articles</h1>
            <a href="{{ route('articles.create') }}" class="px-6 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Create New Article</a>
        </div>

        @if($articles->isEmpty())
            <p class="text-gray-600">No articles found.</p>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-lg">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="py-3 px-6 text-left font-medium text-gray-700">Title</th>
                            <th class="py-3 px-6 text-left font-medium text-gray-700">Content</th>
                            <th class="py-3 px-6 text-left font-medium text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr class="border-t border-gray-200 hover:bg-gray-100">
                                <td class="py-4 px-6">{{ $article->title }}</td>
                                <td class="py-4 px-6">{{ Str::limit($article->content, 50) }}</td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <a href="{{ route('articles.edit', $article->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Edit</a>
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="ml-4 inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
