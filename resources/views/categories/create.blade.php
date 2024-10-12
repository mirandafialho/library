<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categorias') }}
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
                                <th scope="col" class="px-6 py-4">{{ __('Nome') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Criado em') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Atualizado em') }}</th>
                                <th scope="col" class="px-6 py-4">{{ __('Ações') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $category->id }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $category->name }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $category->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        {{ $category->updated_at->format('d/m/Y H:i') ?? '-' }}
                                    </td>
                                    <td class="whitespace-nowrap px-4 py-4">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex" data-tooltip-target="tooltip-default">
                                            <a href="{{ route('categories.read', $category) }}">
                                                {{ __('Ver') }}
                                            </a>
                                        </button>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex" data-tooltip-target="tooltip-default">
                                            <a href="{{ route('categories.update', $category) }}">
                                                {{ __('Editar') }}
                                            </a>
                                        </button>
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex" data-tooltip-target="tooltip-default">
                                            <a href="{{ route('categories.delete', $category) }}">
                                                {{ __('Excluir') }}
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
