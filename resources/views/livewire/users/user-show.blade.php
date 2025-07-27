<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show All Info About User') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>



        <a href="{{ route('users.index') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Back</a>

        <div class="w-150  mt-10">
            <P class="mb-5"><STRONG>Name : </STRONG> {{ $user->name }}</P>
            <P class="mb-5"><STRONG>Email : </STRONG> {{ $user->email }}</P>

            <P class="mb-5"><STRONG>Branch : </STRONG> {{ $user->branch_id }}</P>

            <P class="mb-5"><STRONG>Role : </STRONG> {{ $user->role }}</P>


        </div>
    </div>
</div>
