<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form For Create New User') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <a href="{{ route('users.index') }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Back</a>

    <form action="" enctype="multipart/form-data">
        <div class="mb-6 m-8">
            <flux:input type="text" label="Name" class="mb-5"/>
            <flux:input type="email" label="Email" class="mb-5"/>
            <flux:input type="password" label="Password" class="mb-5"/>
            <flux:input type="password" label="Confirm Password" class="mb-5"/>
            <flux:input type="text" label="Branch" class="mb-5"/>
            <flux:input type="file" label="Picture" class="mb-5"/>
        </div>
    </form>
</div>