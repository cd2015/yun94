{{-- Yuunga Forms Partial (Edit and Create) Category --}}

<div class="form-group {{$errors->has('name')?'has-error':''}}">
    {!! Form::label('name', 'Name', ['class' =>'control-label  col-sm-2']) !!}
    <div class=" col-sm-10">
        {!! Form::text('name', null, ['class' =>'form-control']) !!}
        {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
    </div>
</div>


<div id="subcategories_fields" class="form-group {{$errors->has('subcategories')?'has-error':''}}">
    <label>Add SubCategories</label>

    <div class="entry col-sm-10">
        <div class="input-group" style="margin-bottom: 8px;">
            <input class="form-control" name="employee[0][name]" type="text" placeholder="Enter a Sub Category"/>

            <div class="input-group-btn">
                <button class="btn btn-success add-field-btn" type="button">
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::submit($SubmitButtonText, ['class' =>'btn '. $SubmitButtonClass])  !!}
</div>