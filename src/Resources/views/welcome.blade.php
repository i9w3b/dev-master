@extends('layouts.app')
@section('title',__('Home - Template Laravel'))

@section('css')
<style>
    /* css */
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Tema Laravel 7.x CDN Bootstrap 4

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // js
</script>
@endsection
