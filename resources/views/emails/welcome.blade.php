{{-- component is used for getting default laravel mail template --}}
@component('mail::message') 

Welcome to Bitesoftsolution

Name: {{ $mailData['name'] }} <br>
Email: {{ $mailData['email'] }} 
<hr>
Thanks, <br>
{{ config('app.name')}}
    
