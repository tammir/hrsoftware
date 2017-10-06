<div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
    {!! Form::label('company', 'Company', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company', null, ['class' => 'form-control']) !!}
        {!! $errors->first('company', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
    {!! Form::label('employee_id', 'Employee Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('employee_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('employee_type') ? 'has-error' : ''}}">
    {!! Form::label('employee_type', 'Employee Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('employee_type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('employee_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('work_shift') ? 'has-error' : ''}}">
    {!! Form::label('work_shift', 'Work Shift', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('work_shift', null, ['class' => 'form-control']) !!}
        {!! $errors->first('work_shift', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
    {!! Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
    {!! Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dob') ? 'has-error' : ''}}">
    {!! Form::label('dob', 'Dob', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dob', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dob', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    {!! Form::label('gender', 'Gender', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('gender', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('home_district') ? 'has-error' : ''}}">
    {!! Form::label('home_district', 'Home District', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('home_district', null, ['class' => 'form-control']) !!}
        {!! $errors->first('home_district', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
    {!! Form::label('city', 'City', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
        {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    {!! Form::label('country', 'Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('country', null, ['class' => 'form-control']) !!}
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('contact_number') ? 'has-error' : ''}}">
    {!! Form::label('contact_number', 'Contact Number', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('contact_number', null, ['class' => 'form-control']) !!}
        {!! $errors->first('contact_number', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('emergency_contact') ? 'has-error' : ''}}">
    {!! Form::label('emergency_contact', 'Emergency Contact', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('emergency_contact', null, ['class' => 'form-control']) !!}
        {!! $errors->first('emergency_contact', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
