 	  <div class="form-group">
		{!! Form::label('title', 'Name') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	  </div>

	  <div class="form-group">
		{!! Form::label('body', 'Description') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	  </div>	  	

	  <div class="form-group">
	  	{!! Form::label('urgency', 'Urgency') !!}
	  	{!! Form::select('urgency', array('High' => 'High', 'Medium' => 'Medium', 'Low' => 'Low'), 'Low', ['class' =>'form-control']) !!}
	  </div> 

	 <div class="form-group">
	 	{!! Form::label('created_on', 'Created on') !!}
	 	{!! Form::input('date', 'created_on', date('Y-m-d'), ['class' => 'form-control']) !!}
	 </div>
	  <div class="form-group">
	  	{!! Form::submit($submit, ['class' => 'btn btn-primary']) !!}
	  </div>
	 