<x-mail::message>
{{ $data['message'] }}

**Information :**
- Prénom: {{ $data['name'] }}
- Email: {{ $data['email'] }}
<br/>
{{ config('app.name') }}
</x-mail::message>
