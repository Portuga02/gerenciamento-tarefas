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
                    <form method="POST" action="{{ route('todoUpdate') }} ">
                        @method('PUT')
                        @csrf
                        <input class="block mt-1 w-full" type="hidden" name="todo_id" value="{{ $todo->id }}" />

                        <div class="p-6">
                            <x-input-label class="form-label"> {{ 'Titulo' }}</x-input-label>
                            <x-text-input class="block mt-1 w-full" type="text" name="title" required
                                autocomplete="title" value="{{ $todo->title }}" />
                        </div>
                        <div class="p-6">
                            <textarea name="description" rows="5"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                                {{ $todo->description }}
                            </textarea>
                        </div>
                        <div class="block mt-4">
                            <x-input-label> {{ __('Status') }}</x-input-label>
                            <select name="is_completed"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 ">
                                <option disabled selected> {{ __('Selecione uma opção') }}</option>
                                <option value="0"> {{ __('Completo') }}</option>
                                <option value="1"> {{ __('Pendente') }}</option>
                            </select>
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

</x-app-layout>
