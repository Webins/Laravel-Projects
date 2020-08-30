@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="container mt-2">
            <div class="alert alert-danger text-center">
                {{$error}}
            </div>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="container mt-2">
        <div class="alert alert-success text-center">
            {{session('success')}}
        </div>
</div>
@endif