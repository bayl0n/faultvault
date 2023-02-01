<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <a href="{{ route('projects.create') }}">
            <x-primary-button class="mt-4">
                {{ __('Create a Project') }}
            </x-primary-button>
        </a>

        <div class="mt-6 bg-white dark:bg-gray-800 shadow-sm rounded-lg divide-y divide-gray-100 dark:divide-gray-900">
            @foreach ($projects as $project)
                <div class="p-6 flex-col dark:text-gray-300">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ $project->title }}
                    </h2>
                    <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">{{ $project->description }}</p>
                    <p class="mt-4 text-lg text-gray-900 dark:text-gray-100">{{ 'Author: '.$project->user->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
