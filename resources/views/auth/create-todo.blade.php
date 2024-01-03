<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('alert-success'))
                    <div class="bg-indigo-900 text-center py-4 lg:px-4">
                        <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                            role="alert">
                            <span
                                class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Sucesso</span>
                            <span
                                class="font-semibold mr-2 text-left flex-auto">{{ __('Atividade Criada com sucesso') }}</span>
                            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                            </svg>
                        </div>
                    </div>
                @endif
                <div class="p-6 text-gray-900">

                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ 'Adicionar um novo Item' }}
                    </h3>
                </div>

                @if ($errors->any())
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" role="alert">

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('todoStore') }}">
                    @csrf

                    <div class="p-6">
                        <x-input-label class="form-label"> {{ 'Titulo' }}
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" />
                        </x-input-label>


                        <x-input-label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Mensagem') }}
                        </x-input-label>
                        <textarea id="message" name="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                        </textarea>
                        <div class="flex justify-end mt-4">
                            <button  class="bg-blue-500  text-white font-bold py-2 px-4 rounded">
                                
                                
                                <i class="fa-solid fa-floppy-disk fa-lg"></i>
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
