<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Sectors') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form For Create New Sector') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>



        <a href="{{ route('sectors.index') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Back</a>

        <div class="w-150  mt-10">
            <form wire:submit="addSector" action="" enctype="multipart/form-data" class="mt-6 space-y-6">

                <flux:input type="text" wire:model="name" label="Name" />
                <flux:button type="submit" variant="primary">Save</flux:button>



            </form>
        </div>
    </div>
</div>
