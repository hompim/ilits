<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">
            <div class="mb-3 small text-muted">
                {{ __('Sebelum menggunakan dashboard Try Out ILITS! 2021, harap memverifikasi email anda terlebih dahulu. Kami <strong>sudah mengirimkan</strong> link verifikasi melalui email. Apabila anda tidak menerima email, anda bisa meminta ulang email konfirmasi.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                    {{ __('Email verifikasi berhasil dikirim') }}
                </div>
            @endif

            <div class="mt-4 d-flex justify-content-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-jet-button type="submit">
                            {{ __('Kirim Email Verifikasi') }}
                        </x-jet-button>
                    </div>
                </form>

                <form method="POST" action="/logout">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        {{ __('Keluar') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
