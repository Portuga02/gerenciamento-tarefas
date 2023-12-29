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
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        e-mail
                                    </th>

                                    <th scope="col" class="px-6 py-4 text-center">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b   hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        {{ Auth::user()->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ Auth::user()->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ Auth::user()->email }}
                                    </td>

                                    <td class="px-6 py-4 text-center">
                                        <x-danger-button>
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                {{ __(' Editar') }}
                                            </a>
                                        </x-danger-button>
                                        {{-- <x-primary-button>
                                            <a href="{{ route('todoShow') }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                {{ __(' Visualizar') }}
                                            </a>
                                        </x-primary-button> --}}
                                        <x-secondary-button>
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                EXCLUIR </a>
                                        </x-secondary-button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
</x-app-layout>
