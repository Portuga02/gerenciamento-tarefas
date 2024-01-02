<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('status') == 'alert-success')
                        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            {{ Session::get('alert-success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            {{ Session::get('alert-danger') }}
                        </div>
                    @endif

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                @if (count($todoList) > 0)
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __('Titulo') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __(' Descrição') }}
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            {{ __(' Completo') }}
                                        </th>

                                        <th scope="col" class="px-6 py-4 text-center">
                                            {{ __('Ações') }}
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
                                                    {{ __(' Pendente') }}
                                                </x-secondary-button>
                                            @endif
                                        </td>

                                        <td class="px-6 py-4 text-center" id="outros">
                                            <x-secondary-button class="ms-3">
                                                <a href="{{ route('todoEdit', $todosLists->id) }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    {{ __(' Editar') }}
                                                </a>
                                            </x-secondary-button>

                                            <x-danger-button class="ms-3">
                                                <a href="{{ route('showTodo', $todosLists->id) }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    {{ __(' Visualizar Tarefas') }}
                                                </a>
                                            </x-primary-button>

                                            <form method="POST" action="{{ route('todoDestroy') }}" class="p-5 inline-flex items-center">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="todo_id" value="{{ $todosLists->id }}" />
                                                <x-primary-button type='submit' class="ms-2">
                                                    {{ __('Deletar') }}
                                                </x-primary-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @else
                        <h4> {{ __(' Não existem usuários com listas de tarefas') }} </h4>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
