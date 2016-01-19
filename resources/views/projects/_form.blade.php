    {{ csrf_field() }}
    <div>
        <div class="col-md-8">
            <div class="form-group">

                {!! Form::label('name', 'Project Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}


            </div>
           
             <div class="form-group">

                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('status_id', 'Status:') !!}
                {!! Form::select('status_id', array('1' => 'Production', '2' => 'Design', '3' => 'Prospect'), null, ['class' => 'form-control']) !!}
            </div>
       
            <div class="form-group">
                {!! Form::label('pdm_id', 'PDM:') !!}
                {!! Form::select('pdm_id', array('1' => 'Ben', '2' => 'Eric', '3' => 'Nancy', '4' => 'Sam'), null, ['class' => 'form-control']) !!}

            </div>
        
        
            <div class="form-group">
                {!! Form::label('projectlead_id', 'Project Lead:') !!}
                {!! Form::select('projectlead_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}

            </div>
        </div>
        
    <div class="col-md-12">
    <hr>
    </div>
    <div class="col-md-3">
            {!! Form::label('leadtype_id', 'Lead Type:') !!}
            {!! Form::select('leadtype_id', array('1' => 'Addition', '2' => 'Kitchen', '3' => 'Bath', '4' => 'Whole House', '5' => 'New House'), null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
            {!! Form::label('start_date', 'Desired Start Date:') !!}
            {!! Form::date('name', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
            {!! Form::label('leadtype_id', 'Lead Type:') !!}
            <div class="selector"></div>
        
    </div>
    <div class="col-md-3">
            {!! Form::label('leadtype_id', 'Lead Type:') !!}
            {!! Form::select('leadtype_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-12">
    <br>
    <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{$submitButtonText}}</button>
        </div>

    </div>
   
</div>
