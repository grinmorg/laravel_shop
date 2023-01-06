@extends('layouts.auth')

@section('title', 'Забыли пароль')

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl dark:text-white">
                        Забыли пароль
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('password.email') }}" method="POST">
                        @csrf

                        <div>
                            <label for="email" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">
                                {{ __('base.email') }}
                                <x-forms.text-input name="email" type="text" autocomplete="off" placeholder="name@company.com"
                                    value="{{ old('email') }}">
                                </x-forms.text-input>
                            </label>
                            @error('email')
                                <x-base.error-alert>
                                    {{ $message }}
                                </x-base.error-alert>
                            @enderror
                        </div>

                        <button
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            {{ __('base.send') }}
                        </button>
                        <p class="text-xl font-light text-gray-500 dark:text-gray-400">
                            Попробовать войти снова? <a href="{{ route('login') }}"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('base.authorization') }}</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
