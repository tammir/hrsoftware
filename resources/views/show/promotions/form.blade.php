<div class="form-group {{ $errors->has('Employee_Promotions') ? 'has-error' : ''}}">
    {!! Form::label('Employee_Promotions', 'Employee Promotions', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Employee_Promotions', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('Employee_Promotions', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Promotional_date') ? 'has-error' : ''}}">
    {!! Form::label('Promotional_date', 'Promotional Date', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Promotional_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('Promotional_date', '<p class="help-block">:message</p>') !!}
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
