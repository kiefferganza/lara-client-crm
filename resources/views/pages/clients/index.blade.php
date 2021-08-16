<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="container mx-auto p-6 font-mono">
                        <div class="pb-3">
                            <a href="{{ route('client.create') }}" class="p-3 text-white rounded-lg bg-green-400 shadow-lg block md:inline-block">Add Client</a>
                        </div>

                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Company</th>
                                        <th class="px-4 py-3">VAT</th>
                                        <th class="px-4 py-3">Address</th>
                                        <th class="px-4 py-3"></th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                    @foreach($clients as $client)
                                        <tr class="text-gray-700">

                                            <td class="px-4 py-3 border">
                                                {{ $client->name }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $client->vat }}</td>
                                            <td class="px-4 py-3 text-xs border">
                                                {{ $client->address }}
                                            </td>
                                            <td class="px-4 py-3 text-xs border">
                                                <div class="pt-2">
                                                    <a href="{{ route('client.edit',[$client->id]) }}" class="p-3 text-white rounded-lg bg-blue-400 shadow-lg block md:inline-block">Edit</a>
                                                </div>
                                                <div class="pt-2">
                                                    <form action="{{ route('client.destroy',$client) }}" method="POST" onsubmit="return confirm('Are your sure?');">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"  class="p-3 text-white rounded-lg bg-red-600 shadow-lg block md:inline-block">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
