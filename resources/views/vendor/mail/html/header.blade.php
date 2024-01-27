@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
<img src="https://plexapps.blob.core.windows.net/public/logos/plexapps/color250.png"  alt="Logo plexApps" >
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{-- {{ $slot }} --}}
@endif
</a>
</td>
</tr>
