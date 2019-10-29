@extends('layouts.app')
@section('css')
    <style>
        .images {
        background : #eee;
    }
    </style>
@endsection
@section('content')
<div id="id">
    <div class="container" >
    <section id="image-form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 div offset-md-1">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                        <div class="card">
                            <div class="card-header">
                                File Manager
                            </div>
                            <div class="card-body">

                                @if($errors->any())
                                    @foreach($errors->all() as $error)
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $error }}</strong>
                                    </div>
                                    @endforeach
                                    
                                @endif
                                <form-component></form-component>
                             </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="images mt-5">
        <div class="row">
            @foreach($images as $image)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img src="{{ $image->src }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center">{{ $image->title }}</p>
                    </div>
                </div>
            </div >
            @endforeach


            
            
        </div>
    </section>
</div>
</div>
@endsection
