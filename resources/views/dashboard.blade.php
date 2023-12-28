<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table >
                        <thead>
                            <tr>
                                <th scope="col-xs-3">ID</th>
                                <th scope="col-xs-3">Nome</th>
                                <th scope="col-xs-3">E-mail</th>
                                <th scope="col-xs-3">Nascimento</th>
                                <th scope="col-xs-3">CPF</th>
                                <th scope="col-xs-3">Endereço</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                
                                <td>{{ Autif (Hash::needsRehash($hashedValue))
                                {
                                    $hashed = Hash::make($value);
                                } }}</td>
                                <td>{{ Auth::user()->email }}</td>

                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
