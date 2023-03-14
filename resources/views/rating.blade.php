@extends('layouts.main')
@section('content')
    <h3 style="text-align: center;">Input Rating</h3>
    <form action="" method="post" class="row g-3">
        <div>
            <label for="keyword" class="visually-hidden">Book Author</label>
            <input type="text" name="keyword" class="form-control" placeholder="Book Author" autocomplete="off">
        </div>
    </form>
    <br>
    <form action="" method="post" class="row g-3">
        <div>
            <label for="keyword" class="visually-hidden">Book Name</label>
            <input type="text" name="keyword" class="form-control" placeholder="Book Name" autocomplete="off">
        </div>
    </form>
    <br>
    <form action="" method="post" class="row g-3">
        <div>
            <label for="keyword" class="visually-hidden">Rating</label>
            <input type="text" name="keyword" class="form-control" placeholder="Rating" autocomplete="off">
        </div>
    </form>
    <br>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" name="search">search</button>
    </div>
@endsection