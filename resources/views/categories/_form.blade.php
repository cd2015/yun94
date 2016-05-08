{{-- Yuunga Forms Partial (Edit and Create) Category --}}

<div class="form-group {{$errors->has('name')?'has-error':''}}">
    {!! Form::label('name', 'Name', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::text('name', null, ['class' =>'form-control']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-group">
    {!! Form::submit($SubmitButtonText, ['class' =>'btn '. $SubmitButtonClass])  !!}
</div>