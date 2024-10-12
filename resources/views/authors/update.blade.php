<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full text-left">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">{{ __('Name') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Author') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Publisher') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Created at') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Updated at') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $book->id }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $book->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $book->publisher->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $book->publisher->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $book->created_at->format('m/d/Y H:i') }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $book->updated_at->format('m/d/Y H:i') ?? '-' }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-4">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex" data-tooltip-target="tooltip-default">
                                            <a href="{{ route('books.read', $book) }}">
                                                {{ __('View') }}
                                            </a>
                                        </button>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex" data-tooltip-target="tooltip-default">
                                            <a href="{{ route('books.update', $book) }}">
                                                {{ __('Edit') }}
                                            </a>
                                        </button>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex" data-tooltip-target="tooltip-default">
                                            <a href="{{ route('books.delete', $book) }}">
                                                {{ __('Remove') }}
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
