@foreach ($phamnhans as $phamnhan)
<tr>
    {{--  <td>{{ $phamnhan -> pn_id }}</td>  --}}
    <td>{{ $phamnhan -> ten }}</td>
    <td>{{ $phamnhan -> so_cmt }}</td>
    <td>{{ $phamnhan -> created_at }}</td>
</tr>
@endforeach
