@component('mail::message')
    # You received some gifts

    Dear {{$details['person']}},

    Your friend {{$details['name']}} (Phonenumber: {{$details['phonenumber']}}) has bought {{$details['amount']}} {{$details['item']}} for you!

    @component('mail::button', ['url' => 'www.comp5703.com'])
        Visit Gift Shop
    @endcomponent

    Thanks,<br>
    Gift Shop
@endcomponent
