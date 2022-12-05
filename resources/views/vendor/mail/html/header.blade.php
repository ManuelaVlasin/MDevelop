@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
{{--@if (trim($slot) === 'Laravel')--}}
<img style="height: 500px; width: 200px !important;" src="{{asset(url('images/MDevelop-BlueLogo.png'))}}" class="logo" alt="MDevelop Logo">
{{--@else--}}
{{--{{ $slot }}--}}
{{--@endif--}}
</a>
</td>
</tr>
