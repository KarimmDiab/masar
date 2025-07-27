<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Form For edit User') }}
        </flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>



        <a href="{{ route('users.index') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Back</a>

        <div class="w-150  mt-10">
            <form wire:submit="editUser" action="" enctype="multipart/form-data" class="mt-6 space-y-6">

                <flux:input type="text" wire:model="name" label="Name" />
                <flux:input type="email" wire:model="email" label="Email" />
                <flux:input type="password" wire:model="password" label="Password" />
                <flux:input type="password" wire:model="password_confirm" label="Confirm Password" />
                <flux:select wire:model="branch" label="Branch">
                    <option value="">اختر الفرع</option>
                    <option value="6">المندرة</option>
                    <option value="4">الرمل</option>
                    <option value="11">ابوقير</option>
                    <option value="5">سيدي بشر</option>
                    <option value="17">السيوف</option>
                </flux:select>
                <flux:select wire:model="role" label="Role">
                    <option value="">اختر الدور</option>
                    <option value="admin">مسؤول</option>
                    <option value="user">مستخدم</option>
                    <option value="manager">مدير</option>
                </flux:select>

                <flux:button type="submit" variant="primary">Save</flux:button>

            </form>
        </div>
    </div>
</div>
