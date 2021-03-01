@if(session()->exists('crud'))
    <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
        <strong>{{ strtoupper(session('status')) }}:</strong> {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@php session()->forget(['crud', 'status', 'message']) @endphp