@extends('layouts.app')
@section('css')
    <style>
        .images {
        background : #eee;
    }
    </style>
@endsection
@section('content')
<div class="container">
    <section id="image-form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 div offset-md-1">
                        <div class="card">
                            <div class="card-header">
                                File Manager
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Upload</button>
                                    </div>
                                </form>
                             </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="images mt-5">
        <div class="row">
            <col-md-4>
                <img src="http://via.placeholder.com/300X350" alt="..." class="img-thumbnail">
            </col-md-4>
            <col-md-4>
                <img src="http://via.placeholder.com/300X350" alt="..." class="img-thumbnail">
            </col-md-4>
            <col-md-4>
                <img src="http://via.placeholder.com/300X350" alt="..." class="img-thumbnail">
            </col-md-4>
        </div>
    </section>
</div>
@endsection
