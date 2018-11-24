@if($errors->any())
<div style="height: 10px;">
</div>
<div class="notification is-danger">
    <ul style="margin-top: 5px;">
        @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif