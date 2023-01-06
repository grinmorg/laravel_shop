<div id="modal-login" class="modal">
    <div class="modal__inner">
        <div class="modal__center">
            <div class="modal__center-header">
                <header class="modal-header">
                    <p class="modal-header__title">{{ __('base.authorization') }}</p>
                    <button class="js-modal-close btn-close btn-close--size-md modal-header__btn-close" type="button">
                        <svg class="icon btn-close__icon">
                            <use xlink:href="images/sprite.svg#close"></use>
                        </svg>
                    </button>
                </header>
                <x-base.error-alert class="js-error hidden">
                    {{ __('auth.failed') }}
                </x-base.error-alert>
            </div>
            <div class="modal__center-body">
                <form class="modal__form" id="loginForm" action="{{ route('signIn') }}" method="POST">
                    @csrf
                    <div class="input-area-el modal__form-line">
                        <input
                            class="js-input-label input-el input-el--type-input input-el--size-xl input-el--theme-light input-area-el__input"
                            type="text" name="email" value="" id="login-email" />
                        <label class="input-area-el__label" for="login-email">{{ __('base.email') }}</label>


                    </div>
                    <div class="input-area-el modal__form-line">
                        <input
                            class="js-input-label input-el input-el--type-input input-el--size-xl input-el--theme-light input-area-el__input"
                            type="password" name="password" value="" id="login-password" />
                        <label class="input-area-el__label" for="login-password">{{ __('base.password') }}</label>
                    </div>
                    <div class="modal__form-info">
                        <label class="checkbox-el modal__form-remember">
                            <input class="checkbox-el__control" type="checkbox" name="loginRemember"
                                value="remember" /><span class="checkbox-el__inner"><span
                                    class="checkbox-el__icon"></span><span
                                    class="checkbox-el__title">{{ __('base.remember') }}</span></span>
                        </label><a class="modal__form-forgot js-modal-init js-modal-close"
                            href="#modal-forgot-password">{{ __('base.forgot') }}</a>
                    </div>
                    <button class="btn btn--size-md btn--theme-accent modal__form-btn" type="submit"><span
                            class="btn__inner"><span class="btn__title">{{ __('base.login') }}</span></span></button>
                    <a href="#modal-registration"
                        class="js-modal-init js-modal-close btn btn--size-md btn--theme-dark modal__form-btn"
                        type="button"><span class="btn__inner"><span
                                class="btn__title">{{ __('base.registration') }}</span></span></a>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#loginForm').submit(function(e) {
            e.preventDefault();
            let formData = $(this).serializeArray();

            $('#modal-login').find('.js-error').addClass('hidden');
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ route('signIn') }}",
                data: formData,
                success: () => window.location.assign("{{ route('home') }}"),
                error: (response) => {
                    if (response.status === 422) {
                        $('#modal-login').find('.js-error').removeClass('hidden');
                    }
                }
            })
        });
    });
</script>

<div id="modal-registration" class="modal">
    <div class="modal__inner">
        <div class="modal__center">
            <div class="modal__center-header">
                <header class="modal-header">
                    <p class="modal-header__title">{{ __('base.registration') }}</p>
                    <button class="js-modal-close btn-close btn-close--size-md modal-header__btn-close" type="button">
                        <svg class="icon btn-close__icon">
                            <use xlink:href="images/sprite.svg#close"></use>
                        </svg>
                    </button>
                </header>
            </div>
            <div class="modal__center-body">
                <form class="modal__form" action="#" method="POST">
                    <div class="input-area-el modal__form-line">
                        <input
                            class="js-input-label input-el input-el--type-input input-el--size-xl input-el--theme-light input-area-el__input"
                            type="text" name="email" value="" id="login-email" />
                        <label class="input-area-el__label" for="login-email">{{ __('base.email') }}</label>
                    </div>
                    <div class="input-area-el modal__form-line">
                        <input
                            class="js-input-label input-el input-el--type-input input-el--size-xl input-el--theme-light input-area-el__input"
                            type="password" name="password" value="" id="login-password" />
                        <label class="input-area-el__label" for="login-password">{{ __('base.password') }}</label>
                    </div>
                    <div class="input-area-el modal__form-line">
                        <input
                            class="js-input-label input-el input-el--type-input input-el--size-xl input-el--theme-light input-area-el__input"
                            type="password" name="repeatPassword" value="" id="login-password" />
                        <label class="input-area-el__label"
                            for="login-password">{{ __('base.password_confirm') }}</label>
                    </div>
                    <button class="btn btn--size-md btn--theme-accent modal__form-btn" type="submit"><span
                            class="btn__inner"><span
                                class="btn__title">{{ __('base.registration') }}</span></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="modal-forgot-password" class="modal">
    <div class="modal__inner">
        <div class="modal__center">
            <div class="modal__center-header">
                <header class="modal-header">
                    <p class="modal-header__title">{{ __('base.forgot') }}</p>
                    <button class="js-modal-close btn-close btn-close--size-md modal-header__btn-close"
                        type="button">
                        <svg class="icon btn-close__icon">
                            <use xlink:href="images/sprite.svg#close"></use>
                        </svg>
                    </button>
                </header>
            </div>
            <div class="modal__center-body">
                <form class="modal__form" action="#" method="POST">
                    <div class="input-area-el modal__form-line">
                        <input
                            class="js-input-label input-el input-el--type-input input-el--size-xl input-el--theme-light input-area-el__input"
                            type="text" name="email" value="" id="login-email" />
                        <label class="input-area-el__label" for="login-email">{{ __('base.email') }}</label>
                    </div>
                    <button class="btn btn--size-md btn--theme-accent modal__form-btn" type="submit"><span
                            class="btn__inner"><span
                                class="btn__title">{{ __('base.restore_password') }}</span></span></button>
                </form>
            </div>
        </div>
    </div>
</div>
