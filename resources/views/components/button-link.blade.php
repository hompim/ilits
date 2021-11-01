<a href="{{ $href }}"
  {{ $attributes->merge([
    'class' => "btn button-link border-0 px-5 py-3 d-flex justify-content-center
    align-items-center",
]) }}
  target="{{ $checkIsExternalLink() }}">
  {{ $slot }}
</a>
