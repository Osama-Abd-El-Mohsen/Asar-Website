@extends('layouts.navigation')

@section('main-body')
    @if (auth()->user()->isAdmin())
    
    @else
        <script>
            window.location.href = "{{ route('products.index') }}";
        </script>
    @endif
@endsection()
