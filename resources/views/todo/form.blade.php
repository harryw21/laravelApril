{{Form::text('title',null,['placeholder'=>'Todo Title'])}}
<br>
<br>

{{Form::select('Category',[1=>'Urgent',2=>'Normal',3=>'Slow'],null)}}
<br>



{{Form::textarea('description',null)}}
