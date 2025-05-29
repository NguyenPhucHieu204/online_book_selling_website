<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Thông tin hồ sơ') }}
        </h2>

    </header>

    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Tên')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" disabled />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" disabled />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Địa chỉ email của bạn chưa được xác minh.') }}
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
