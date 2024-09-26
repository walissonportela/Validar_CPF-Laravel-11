@if(session('success'))
    <p style="color: #086;">{{ session('success')}}</p>
@endif

@if(session('error'))
    <p style="color: #f00;">{{ session  ('error')}}</p>
@endif

@if($errors->any())
    <p style="color: #f00;">
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </p>
@endif