@if (session()->has('message'))
    <div class="alert alert-info">{{ session('message') }}</div>
@endif