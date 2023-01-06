@extends('layouts.auth')

@section('title', 'Войти в личный кабинет')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl dark:text-white">
                        Вход в личный кабинет
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">
                                {{ __('base.email') }}
                                <x-forms.text-input name="email" type="text" placeholder="name@company.com"
                                    value="{{ old('email') }}">
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
                                {{ __('base.password') }}
                                <x-forms.text-input name="password" type="password" placeholder="••••••••">
                                </x-forms.text-input>
                            </label>

                            @error('password')
                                <x-base.error-alert>
                                    {{ $message }}
                                </x-base.error-alert>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-xl">
                                    <label for="remember"
                                        class="text-gray-500 dark:text-gray-300">{{ __('base.remember') }}</label>
                                </div>
                            </div>
                            <a href="{{ route('password.request') }}"
                                class="text-xl font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('base.forgot') }}</a>
                        </div>
                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            {{ __('base.login') }}
                        </button>
                        <p class="text-xl font-light text-gray-500 dark:text-gray-400">
                            Нет аккаунта? <a href="{{ route('signUp') }}"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('base.registration') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
