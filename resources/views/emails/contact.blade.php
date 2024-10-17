<x-mail::message>
# Contact from {{$name}}

{{$contact}}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
