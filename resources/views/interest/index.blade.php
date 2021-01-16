@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All the interests</div>

                <div class="card-body">
                   <ul class="list-group">
                        @foreach ($interests as $interest)
                            <li class="list-group-item">
                                {{ $interest->name }}
                            </li>
                        @endforeach
                   </ul>
                </div>
            </div>

            <div class="mt-2">
                <a class="btn btn-success btn-sm" href="/interest/create"><i class="fas fa-plus-circle"></i> Create New Interest</a>
            </div>
        </div>
    </div>
</div>
@endsection
