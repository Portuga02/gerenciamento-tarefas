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
                        {{ 'Editar a notação Existente' }}
                    </h3>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="p-6 text-gray-900">
                   
                    <form>
                        <div class="p-6">
                            <x-input-label class="form-label"> {{ 'Titulo' }}
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    required autocomplete="title" />
                            </x-input-label>
                        </div>
                        <div class="p-6">

                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sua
                                Mensagem</label>
                            <textarea id="message" name="description" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                placeholder="Sua anotação..."></textarea>

                        </div>
                        <div class="flex justify-end mt-4">
                            <x-primary-button>
                                {{ __('Salvar às alterações') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
