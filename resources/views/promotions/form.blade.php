<div class="form-group {{ $errors->has('Emplyee_name') ? 'has-error' : ''}}">
    {!! Form::label('Emplyee_name', 'Emplyee Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Emplyee_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('Emplyee_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('promotional_date') ? 'has-error' : ''}}">
    {!! Form::label('promotional_date', 'Promotional Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('promotional_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('promotional_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('promotion To') ? 'has-error' : ''}}">
    {!! Form::label('promotion To', 'Promotion To', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('promotion To', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('promotion To', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
