<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

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
                            <x-primary-button>
                                {{ __('Salvar') }}
                            </x-primary-button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
