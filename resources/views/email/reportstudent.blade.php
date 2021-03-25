@component('mail::message')
@if ($student->gender == 'M')
Mr. {{ $student->first_name }} {{ $student->last_name }},
@else
Mrs. {{ $student->first_name }} {{ $student->last_name }},
@endif
<br>
You were absent for {{ $module->title }} classes on {{ $date }}.
<br>
Please write an email to student@service.com with valid reason for your absence. <br>

    Thanks,
    {{ config('app.name') }}
@endcomponent
