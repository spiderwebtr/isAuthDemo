@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Demo for Laravel isAuth package.</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Hello
                        <ol>
                            <li><a href="{{route("logout")}}" target="_blank">Click here</a> to logout in new tab.</li>
                           <li>Type something input below and click save button.</li>
                           <li>You'll see a modal to login and after login your form will be sent.</li>
                       </ol>
                    <form action="{{route('save')}}" method="POST" class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <input name="input" class="form-control but"/>
                            <button type="submit" class="btn btn-outline-info">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@isAuthAssets([
"user"=>auth()->user()
])
@endsection
