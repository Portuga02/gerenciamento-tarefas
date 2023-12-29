<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (Session::has('alert-success'))
                        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                @if (count($todoList) > 0)
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Titulo
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Descrição
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Completo
                                        </th>

                                        <th scope="col" class="px-6 py-4 text-center">
                                            Ações
                                        </th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach ($todoList as $todosLists)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                        <td class="px-6 py-4 text-center">
                                            {{ $todosLists->title }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $todosLists->description }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            @if ($todosLists->is_completed == 0)
                                                <x-primary-button class="ms-3">
                                                    {{ __(' Completo') }}
                                                </x-primary-button>
                                            @else
                                                <x-secondary-button class="ms-3">
                                                    {{ __(' Incompleto') }}
                                                    </x-primary-button>
                                            @endif
                                        </td>

                                        <td class="px-6 py-4 text-center" id="outros">
                                            <x-danger-button>
                                                {{ __(' Editar') }}
                                            </x-danger-button>
                                            <x-primary-button>
                                                {{ __(' Visualizar') }}
                                            </x-primary-button>

                                            <form action="" class="inner">
                                                <input type="hidden" name="todo_id" value="{{ $todosLists->id }}" />
                                                <x-secondary-button>
                                                    {{ __(' Deletar') }}
                                                </x-secondary-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <h4>Não se tem usuários para esta lista </h4>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
