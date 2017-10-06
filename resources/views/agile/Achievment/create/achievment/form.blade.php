<div class="form-group {{ $errors->has('Employee') ? 'has-error' : ''}}">
    {!! Form::label('Employee', 'Employee', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Employee', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('Employee', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Forward Application To') ? 'has-error' : ''}}">
    {!! Form::label('Forward Application To', 'Forward Application To', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Forward Application To', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('Forward Application To', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Achievement Title') ? 'has-error' : ''}}">
    {!! Form::label('Achievement Title', 'Achievement Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('Achievement Title', null, ['class' => 'form-control']) !!}
        {!! $errors->first('Achievement Title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
