@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(isset($listings))
                        <div class="list-group">
                            @foreach($listings as $listing)
                                <div class="list-group-item">
                                    <h3>
                                        {{$listing->name}}
                                    </h3>
                                    <p>
                                        {{$listing->address}}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection