<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (session('status'))
                        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <div class="mb-4 font-medium text-sm ">
                        <b class="font-large"> {{ 'Titulo da tarefa:' }} </b> {{ $todo->title }} <br>

                        <b> {{ 'Descrição da tarefa: ' }}</b> {{ $todo->description }}
                    </div>

                    <x-primary-button class="block mt-4 ">
                        <a href="{{ route('todo') }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            {{ __(' Retornar ') }}
                        </a>
                    </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
