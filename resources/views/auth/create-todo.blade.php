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
                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                        role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form method="POST" action="{{ route('store') }}">

                    @csrf
                    <div class="p-6">
                        <x-input-label class="form-label"> {{ 'Titulo' }}
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" />
                        </x-input-label>
                    </div>
                    <div class="p-6">

                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sua
                            Mensagem</label>
                        <textarea id="message" name="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Sua anotação..."></textarea>

                    </div>
                    <div class="flex justify-end mt-4">

                        <x-primary-button>

                            {{ __('Salvar') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
</x-app-layout>
