@extends('layouts.auth')

@section('title', 'Восстановление пароля')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl dark:text-white">
                        Восстановление пароля
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ request('token') }}">
                        <div>
                            <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">
                                {{ __('base.email') }}
                                <x-forms.text-input name="email" type="text" autocomplete="off" placeholder="name@company.com"
                                    value="{{ request('email') }}">
                                </x-forms.text-input>
                            </label>
                            @error('email')
                                <x-base.error-alert>
                                    {{ $message }}
                                </x-base.error-alert>
                            @enderror
                        </div>

                        <div>
                            <label for="password"
                                class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">
                                {{ __('base.new_password') }}
                                <x-forms.text-input name="password" type="password" autocomplete="off" placeholder="••••••••">
                                </x-forms.text-input>
                            </label>

                            @error('password')
                                <x-base.error-alert>
                                    {{ $message }}
                                </x-base.error-alert>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">
                                {{ __('base.password_confirm') }}
                                <x-forms.text-input name="password_confirmation" type="password" autocomplete="off" placeholder="••••••••">
                                </x-forms.text-input>
                            </label>

                            @error('password_confirmation')
                                <x-base.error-alert>
                                    {{ $message }}
                                </x-base.error-alert>
                            @enderror
                        </div>

                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            {{ __('base.restore_password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
