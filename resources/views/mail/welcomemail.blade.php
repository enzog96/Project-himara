@component('mail::message')
# Introduction

Welcome To Himara Hotel

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
