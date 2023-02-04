<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create a new Fault') }}
        </h2>
        <form method="POST" action="{{ route('faults.store') }}">
            @csrf
            <input name="title" placeholder={{ __('Title') }}
                class="my-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
            <textarea rows="6" name="description" placeholder="{{ __('Describe your fault') }}"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            <label for="status" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Select an status</label>
            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="open" selected>Open</option>
              <option value="in_progress">In Progress</option>
              <option value="todo">Todo</option>
              <option value="closed">Closed</option>
              <option value="resolved">Resolved</option>
              <option value="abandoned">Abandoned</option>
              <option value="backlog">Backlog</option>
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
            <label for="priority" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Select a priority</label>
            <select id="priority" name="priority" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option value="lowest" selected>Lowest</option>
              <option value="low">Low</option>
              <option value="medium">Medium</option>
              <option value="high">High</option>
              <option value="highest">Highest</option>
            </select>
            <x-input-error :messages="$errors->get('priority')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a class="text-gray-900 dark:text-gray-100 hover:text-red-500"
                    href="{{ route('faults.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
