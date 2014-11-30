<htm>
    <body> 
  
    {{ $name }}
 <br/>
  {{ $age }}
  <br />
  {{ $location }}
  <br />
  {{ $specialty }}
  
  {{ Form::open(array("url"=>"receive","method"=>"post")) }}
  {{ Form::label('email'); }}
  {{ Form::text('email','emai@gmail.com') }}
  {{ Form::submit('submit') }}
  {{ Form::close() }}
  
    </body>
</htm> 


