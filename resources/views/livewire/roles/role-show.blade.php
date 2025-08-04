<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Roles') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show All Info About Role') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>



        <a href="{{ route('roles.index') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Back</a>

        <div class="w-150  mt-10">
            <P class="mb-5"><STRONG>Name : </STRONG> {{ $role->name }}</P>
            <P class="mb-5"><STRONG>permissions : </STRONG>
                @if ($role->permissions && $role->permissions->count())
                    @foreach ($role->permissions as $permission)
                        <flux:badge class="m-2" color="lime">{{ $permission->name }}</flux:badge>
                    @endforeach
                @else
                    <flux:badge>لا يوجد اذونات</flux:badge>
                @endif
            </P>
        </div>
    </div>
</div>
