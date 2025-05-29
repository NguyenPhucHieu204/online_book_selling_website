<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Xóa tài khoản') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Vui lòng nhập mật khẩu của bạn để xác nhận hành động.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
        @csrf
        @method('delete')

        <div class="mt-6">
            <x-input-label for="password" value="{{ __('Mật khẩu') }}" class="sr-only" />

            <x-text-input
                id="password"
                name="password"
                type="password"
                class="mt-1 block w-3/4"
                placeholder="{{ __('Mật khẩu') }}"
            />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button>
                {{ __('Xóa') }}
            </x-secondary-button>
        </div>
    </form>
</section>
