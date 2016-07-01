@extends('layouts.layout')



@section('content')

     <ul class="collection with-header">

        <li class="collection-header"><h4>New List</h4></li>
        <br>

        {!! Form::open(['url' => '/list' , 'metohod'=>'POST']) !!}
    
         {{ csrf_field() }}
	      <div class="row">

		    <div class="input-field col s6  push-s3">

		      {!! Form::text('name', null , ['class' => 'validate'])!!}
		      
		      {!!Form::label('name', 'Name list', ['class' => 'active'])!!}
		      
		    </div>
		  </div>
        {!! Form::close() !!}

      </ul>

 
   
 
@endsection