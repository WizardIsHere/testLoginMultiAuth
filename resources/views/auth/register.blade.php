<x-guest-layout>
    <form method="POST" action="{{ route('register') }}"  enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('First Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Middle name -->
        <div class="mt-4">
            <x-input-label for="mname" :value="__('Middle Name')" />
            <x-text-input id="mname" class="block mt-1 w-full" type="text" name="mname" :value="old('mname')"
                required autofocus />
            <x-input-error :messages="$errors->get('mname')" class="mt-2" />
        </div>

        <!-- Lastname -->
        <div class="mt-4">
            <x-input-label for="lname" :value="__('Last Name')" />
            <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
                required autofocus />
            <x-input-error :messages="$errors->get('lname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Phone number -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone No.')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                :value="old('phone')" required autofocus />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Register -->
        <div class="mt-4">
            <x-input-label for="registration" :value="__('Registration No.')" />
            <x-text-input id="registration" class="block mt-1 w-full" type="text" name="registration"
                :value="old('registration')" required autofocus />
            <x-input-error :messages="$errors->get('registration')" class="mt-2" />
        </div>

        <!-- department -->
        <div class="mt-4">
            <x-input-label for="department" :value="__('Department')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')"
                required autofocus />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>

        <!-- Semester -->
        <div class="mt-4">
            <x-input-label for="semester" :value="__('Semester')" />
            <x-text-input id="semester" class="block mt-1 w-full" type="text" name="semester" :value="old('semester')"
                required autofocus />
            <x-input-error :messages="$errors->get('semester')" class="mt-2" />
        </div>

        <!-- address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                required autofocus />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        {{-- Avatar --}}
        <div class="mt-4 ">
            {{-- col-md-4 col-form-label text-md-end --}}
            <x-input-label for="avatar" class="block mt-1 w-full">{{ __('Profile picture') }}</x-input-label>
            <div class="col-md-6">
                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">

                @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
