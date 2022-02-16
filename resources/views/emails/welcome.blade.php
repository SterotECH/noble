@component('mail::message')
    # Welcome to my Point of Sales Application

    I would like to thank you for using our product,
    be if you have any bug report it to us at agyeisterogh@gmail.com
    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
