

@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Create New Article</h1>
        
        <form action="{{ route('articles.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" id="content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" rows="5" required></textarea>
            </div>
            
            <div class="flex justify-end mt-6">
                <a href="{{ route('articles.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600" style="margin-right: 1rem;">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Save</button>
            </div>
        </form>
    </div>
@endsection
