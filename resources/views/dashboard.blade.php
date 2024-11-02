<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <!-- Link to Articles Page -->
                <div class="mt-4">
                    <a href="{{ route('articles.index') }}" class="text-blue-600 hover:underline">
                        Go to Articles
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
