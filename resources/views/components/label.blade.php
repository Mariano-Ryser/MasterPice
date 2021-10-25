@props(['value'])

<label style="font-size: 27px">
    {{ $value ?? $slot }}
</label>
