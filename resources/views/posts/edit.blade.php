<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <!-- Name -->
                        <div class="mt-4">
                            <label for="title_{{ app()->getLocale() }}">Title ({{ strtoupper(app()->getLocale()) }})</label>

                            <input type="text" name="title_{{ app()->getLocale() }}" id="title_{{ app()->getLocale() }}"
                                   value="{{ $post->{'title_'.app()->getLocale()} }}"
                                   class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="full_text_{{ app()->getLocale() }}">Full Text ({{ strtoupper(app()->getLocale()) }})</label>

                            <textarea name="full_text_{{ app()->getLocale() }}" id="full_text_{{ app()->getLocale() }}" rows="5"
                                      class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $post->{'full_text_'.app()->getLocale()} }}</textarea>
                        </div>

                        <div class="flex items-center mt-4">
                            <x-button>
                                {{ __('Save Post') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
