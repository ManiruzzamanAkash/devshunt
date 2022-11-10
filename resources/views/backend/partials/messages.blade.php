@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{-- <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
        </svg> --}}
        @foreach ($errors->all() as $error)
            <span>{{ $error }}. </span>
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- if has any session with key success show it. --}}
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{-- <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg> --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div>
            {{ session()->get('success') }}
        </div>
    </div>
@endif

{{-- If has any error --}}
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{-- <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg> --}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <div>
            {{ session()->get('error') }}
        </div>
    </div>
@endif