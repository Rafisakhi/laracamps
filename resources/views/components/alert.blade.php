@if ($messeage = session()->get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ $messeage }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($messeage = session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $messeage }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif