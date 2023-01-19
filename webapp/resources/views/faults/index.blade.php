<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Faults') }}
        </h2>
    </x-slot>

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
            <x-primary-button class="mt-4">{{ __('Submit') }}</x-primary-button>
        </form>

        <div class="mt-6 bg-white dark:bg-gray-800 shadow-sm rounded-lg divide-y divide-gray-100 dark:divide-gray-900">
            @foreach ($faults as $fault)
                <div class="p-6 flex space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-gray-600 dark:text-gray-300 -scale-x-100" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                {{ $fault->title }}
                            </h2>
                            <div>
                                <small class="ml-2 text-xs text-gray-500 dark:text-gray-400">{{ $fault->user->name }}
                                    {{ __(' posted ') }} {{ $fault->created_at->format('j M Y, g:i a') }}</small>
                            </div>
                        </div>
                        <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">{{ $fault->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
