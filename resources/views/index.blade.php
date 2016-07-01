
@extends('layouts.layout')



@section('content')
    <br>
    <a class="waves-effect waves-light btn" href="{{url('/list/create')}}">
    <i class="material-icons left">note_add</i> 
    Add List
    </a>

<br>
   

    <ul class="collection with-header">
        <li class="collection-header"><h4>Todo Lists</h4></li>
        
         @foreach ($listas as $lista)
            
        <li class="collection-item">
           <div> {{$lista->name}} <a href="{{ route('list.show' , $lista)}}" class="secondary-content"><i class="material-icons">visibility</i></a>
           </div>
        </li>
          
        @endforeach
    {!! $listas->render() !!}
    </ul>
       

@endsection
	


              