<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-3" />

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Asal Sekolah') }}" />

                    <x-jet-input class="{{ $errors->has('asal_sekolah') ? 'is-invalid' : '' }}" type="text" name="asal_sekolah"
                                 :value="old('asal_sekolah')" required />
                    <x-jet-input-error for="asal_sekolah"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Asal Daerah') }}" />

                    <x-jet-input class="{{ $errors->has('asal_daerah') ? 'is-invalid' : '' }}" type="text" name="asal_daerah"
                                 :value="old('asal_daerah')" required />
                    <x-jet-input-error for="asal_daerah"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('No Whatsapp') }}" />

                    <x-jet-input class="{{ $errors->has('nomor_whatsapp') ? 'is-invalid' : '' }}" type="text" name="nomor_whatsapp"
                                 :value="old('nomor_whatsapp')" required />
                    <x-jet-input-error for="nomor_whatsapp"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Forda') }}" />
                    <x-jet-input class="{{ $errors->has('forda') ? 'is-invalid' : '' }}" type="number" name="forda"
                                 :value="old('forda')" required />
                    <x-jet-input-error for="forda"></x-jet-input-error>

                        {{-- <select id="forda" class="rounded-md p-2 shadow-sm block mt-1 w-full" name="forda" :value="old('forda')" required autofocus>
                            @foreach($forda as $f)
                                 @if(date('Y-m-d',strtotime('-3 days',strtotime($f->absen->date)))==date('Y-m-d')&&date('H:i:s')<=date('H:i:s',strtotime('17:00:00')))
                                <option value="{{$f->id}}">{{$f->daerah}} - {{$f->user->name}}</option>
                                @elseif(date('Y-m-d',strtotime('-3 days',strtotime($f->absen->date)))>date('Y-m-d'))
                                <option value="{{$f->id}}">{{$f->daerah}} - {{$f->user->name}}</option>
                                @endif
                            @endforeach
                        </select> --}}
                </div>
                <div class="mb-3">
                    <x-jet-label value="{{ __('Pilihan Tryout') }}" />
                    <select id="tryout" class="p-2 rounded-md shadow-sm block mt-1 w-full" name="tryout" :value="old('tryout')" required autofocus>
                            <option value="saintek">Saintek</option>
                            <option value="soshum">Soshum</option>
                        </select>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mb-3">
                        <div class="custom-control custom-checkbox">
                            <x-jet-checkbox id="terms" name="terms" />
                            <label class="custom-control-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                            </label>
                        </div>
                    </div>
                @endif

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <a class="text-muted mr-3 text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-jet-button>
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
