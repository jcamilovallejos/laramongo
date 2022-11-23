@extends('dashboard.master')
@section('content')
   <div class="table-responsive">
       <table class="table">
            <thead>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descripcion</th>
            </thead>
           <tbody>
                 @foreach($books as $book)
                     <tr>
                        <td>{{$book->_id}}</td>
                        <td>{{$book->name}}</td>
                        <td>{{$book->description}}</td>
                     </tr>
                 @endforeach
           </tbody>
       </table>
       {!! $books->links() !!}
   </div>

@endsection
