@component('mail::message')
# Dear {{config('app.name')}}
#### You have a new chat from {{$contact->full_name}}<br/> 
<{{$contact->email}}>

<b>Phone</b>: {{$contact->phone_number}}<br/>
<b>Message</b>: {{$contact->message}}<br/>

@component('mail::button', ['url' => 'mailto:'.$contact->email])
    Reply
@endcomponent
Thanks,<br/>
{{config('app.name')}}
@endcomponent