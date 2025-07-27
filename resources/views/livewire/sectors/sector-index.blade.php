<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Sectors') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage all Sectors') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>


    @session('success')
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 border border-green-300"
            role="alert">
            <svg class="w-5 h-5 mr-2 text-green-700" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <span class="sr-only">{{ $value }}</span>
            <div>{{ $value }}</div>
        </div>
    @endsession





    <div class="mb-6">
        <a href="{{ route('sectors.create') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
            Add Sector</a>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-6">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        كود القطاع
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            اسم القطاع
                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg></a>
                        </div>
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sectors as $sector)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $sector->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $sector->name }}
                        </td>

                        <td class="px-6 py-4 text-right">
                            <flux:button href="{{ route('sectors.show', $sector->id) }} " variant="primary" color="cyan">
                                Show Sector
                            </flux:button>

                            <flux:button href="{{ route('sectors.edit', $sector->id) }} " variant="primary" color="blue">
                                Edit Sector
                            </flux:button>

                            <flux:button wire:click="delete({{ $sector->id }})" variant="danger">Delete Sector
                            </flux:button>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>





</div>
