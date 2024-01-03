<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="box-border md:box-content ...">
                        <div class="mb-8 font-medium text-sm ">
                            <b class="font-large"> {{ 'Titulo da tarefa:' }} </b>
                            <p class="text-gray-700 text-base">{{ $todo->title }} </p><br>

                            <b> {{ 'Descrição da tarefa: ' }}</b>
                            <p class="text-gray-700 text-base">{{ $todo->description }}</p>
                        </div>
                    </div>
                    <button class="bg-blue-500  text-white font-bold py-2 px-4 rounded">
                        <a href="{{ route('todo') }}" class="bg-blue-500  text-white font-bold py-2 px-4 rounded">
                            <i class="fa-solid fa-arrow-rotate-left fa-lg"></i> {{ __(' Retornar ') }}
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
