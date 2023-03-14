@extends('layouts.main')
@section('content')
    <h3 style="text-align: center;">List of Books</h3>
    {{-- <form action="" method="post" class="row g-3">
        <div class="col-auto">
            <label for="keyword" class="visually-hidden">List Shown</label>
            <input type="text" name="keyword" class="form-control" placeholder="entries">
        </div>
    </form> --}}
    <br>
    <form action="" class="row g-3">
        <div class="col-auto">
            <input type="text" name="search" class="form-control" placeholder="enter keyword">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">search</button>
        </div>
    </form>
    <table border="1" cellpadding="10" cellspacing="0" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Book Name</th>
                <th>Category Name</th>
                <th>Author Name</th>
                <th>Average Rating</th>
                <th>Voter</th>
            </tr>
        </thead>

        <?php $i = 1; ?>
        @foreach ($books as $book)
        <tbody class="table-group-divider">
            <tr>
                <td><?php echo $i; ?></td>
                <td>{{ $book->bookName }}</td>
                <td>{{ $book->category->category }}</td>
                <td>{{ $book->author->author }}</td>
                <td>{{ $book->rating }}</td>
                <td>{{ $book->voters }}</td>
            </tr>
        </tbody>
        <?php $i++; ?>
        @endforeach
    </table>
@endsection