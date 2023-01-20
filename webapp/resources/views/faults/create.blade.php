<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a new Fault') }}
        </h2>
        <form method="POST" action="{{ route('faults.store') }}">
            @csrf
            <input name="title" placeholder={{ __('Title') }}
                class="block w-full outline-none bg-gray-100 p-2 my-2 border-gray-300 dark:border-gray-800 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <textarea name="description" placeholder="{{ __('Describe your fault') }}"
                class="block w-full bg-gray-100 border-gray-300 dark:border-gray-800 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a class="text-gray-900 dark:text-gray-100 hover:text-red-500"
                    href="{{ route('faults.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
