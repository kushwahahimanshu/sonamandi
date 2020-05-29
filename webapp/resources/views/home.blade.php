@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <div class="card">
                    <div class="card-header">Chat with Jewellers across India</div>
                    <div class="">
                        <div id="app">
                            <chat-app :user="{{ Auth::user() }}"></chat-app>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
