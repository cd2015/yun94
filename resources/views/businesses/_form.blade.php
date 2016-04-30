{{-- Yuunga Forms Partial (Edit and Create) --}}

<div class="form-group {{$errors->has('name')?'has-error':''}}">
    {!! Form::label('name', 'Name', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::text('name', null, ['class' =>'form-control']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-group {{$errors->has('reference')?'has-error':''}}">
    {!! Form::label('reference', 'Slug', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::text('reference', null, ['class' =>'form-control']) !!}
        {!! $errors->first('reference', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('logo', 'Logo', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::text('logo', null, ['class' =>'form-control']) !!}
    </div>
</div>
<div class="form-group {{$errors->has('category')?'has-error':''}}">
    {!! Form::label('category', 'Category', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::text('category', null,  ['class' =>'form-control']) !!}
        {!! $errors->first('category', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-group {{$errors->has('tel_no')?'has-error':''}}">
    {!! Form::label('tel_no', 'Mobile', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::number('tel_no', null,  ['class' =>'form-control']) !!}
        {!! $errors->first('tel_no', '<span class="help-block">:message</span>') !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('location', 'Location', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::text('location', null,  ['class' =>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('about', 'About', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::textarea('about', null,  ['class' =>'form-control'])  !!}
    </div>
</div>
@section('update-button')
    <div class="form-group">
        {!! Form::submit('Update Business', ['class' =>'btn btn-primary'])  !!}
    </div>
@stop
@section('add-button')
    <div class="form-group">
        {!! Form::submit('Add Business', ['class' =>'btn btn-info'])  !!}
    </div>
@stop