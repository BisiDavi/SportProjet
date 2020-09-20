@component('mail::message')
  #Welcome to De Skyballers

  <p>Thanks {{ $data['surname'] }} {{ $data['other_name'] }} for showing interest in joining De Skyballers Academy</p>

  <p>We shall get back to you shortly.</p>

  {{-- @component('mail::button', ['url' => ''])
  Button Text
  @endcomponent --}}

  Thanks,<br>
  <strong>De Skyballers</strong>
@endcomponent
