@extends('layouts.landing')

@section('content')
	<section id="add-polling">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<h2><b>Add Polling</b></h2>
            		<div class="panel panel-default">
		                <div class="panel-body">
		                     {!! Form::open(['action' => 'PageController@submitNewPolling']) !!}
		                    <div class="form-group">
		                        {!! Form::label('polling_question', 'Question') !!}
		                        {!! Form::text('question', null, ['class' => 'form-control', 'placeholder' => "Enter Question",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('option1', 'Option 1') !!}
		                        {!! Form::text('option1', null, ['class' => 'form-control', 'placeholder' => "Enter Option 1",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('option2', 'Option 2') !!}
		                        {!! Form::text('option2', null, ['class' => 'form-control', 'placeholder' => "Enter Option 2",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('option3', 'Option 3') !!}
		                        {!! Form::text('option3', null, ['class' => 'form-control', 'placeholder' => "Enter Option 3",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                       {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
		                   </div>
		                   {!! Form::close() !!}
		                   {{-- @include('errors.list') --}}
		               </div>
           			</div>
       			</div>
   			</div>
		</div>
	</section>
@endsection

@section('customjs')

@endsection