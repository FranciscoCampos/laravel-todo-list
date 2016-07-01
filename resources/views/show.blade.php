@extends('layouts.layout')



@section('content')

     
  <h1 class="center-align">{{$lista->name}}</h1>
 
  <div class="row">
     <div class="col s2 push-s5">
     	
	    <a href="{{ route('list.edit', $lista )}}" class="btn-floating btn-large waves-effect teal lighten-2 left">
	      <i class="material-icons">mode_edit</i>
	    </a>  

	    {!! Form::open(['route' => ['list.destroy' , $lista] , 'method' =>'PUT'] )!!}
	       {{ csrf_field() }}
	       {{ method_field('DELETE') }} 
	      <button class="btn-floating btn-large waves-effect  red lighten-2 right" type="submit" name="action">
	        <i class="material-icons">delete</i>
	      </button>
	   {!! Form::close()!!}

     </div>        
  </div>
 
@endsection