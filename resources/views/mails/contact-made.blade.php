@component('mail::message')
# Dear {{config('app.name')}}
#### You have a new chat from {{$contact->full_name}} <{{$contact->email}}>

<b>Phone</b>: {{$contact->phone_number}}<br/>

@component('mail::button', ['url' => 'mailto:'.$contact->email])
    Reply
@endcomponent
Thanks,<br/>
{{config('app.name')}}
@endcomponent