@component('mail::message')
# Hey Louk


-{{ $msg->name }}<br>
-{{ $msg->email }}


@component('mail::panel')
   {{$msg->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
