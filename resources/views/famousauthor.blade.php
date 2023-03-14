@extends('layouts.main')
@section('content')
    <h3 style="text-align: center;">Top 10 Famous Author</h3>
    <table border="1" cellpadding="10" cellspacing="0" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Author Name</th>
                <th>Voter</th>
            </tr>
        </thead>

        <?php 
        $r = 0;
        $i = 1; ?>
        @foreach ($authors as $author)
        <?php $r++; ?>
        <tbody class="table-group-divider">
            <tr>
                <td><?php echo $i; ?></td>
                <td>{{ $author->author }}</td>
                <td>{{ $author->voters }}</td>
            </tr>
        </tbody>
        <?php $i++; 
        if($r == 10){
            break;
        }?>
        @endforeach

    </table>
@endsection