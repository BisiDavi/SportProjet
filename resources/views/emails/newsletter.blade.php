@component('mail::message')
  # Welcome to our Newsletter

  Thanks for subscribing to our newsletter. Welcome on board once again.

  @component('mail::button', ['url' => ''])
    Button Text
  @endcomponent

  Thanks,<br>
  {{ config('app.name') }}
@endcomponent
