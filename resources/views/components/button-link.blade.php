<a href="{{$href}}" {{$attributes->merge(['class' => 'btn button-link border-0 px-5 py-3 d-flex justify-content-center
    align-items-center'])}}
    style='background: linear-gradient({{$angle}},
    {{$colorFrom}}, {{$colorTo}}); backdrop-filter: blur({{$checkIsBlur()}})' target='{{$checkIsExternalLink()}}'>
    {{$slot}}
</a>