@if (count($errors) > 0)
    <div class="alert -error">
        <p><strong>Whoops!</strong> There were some problems with your submission.</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
