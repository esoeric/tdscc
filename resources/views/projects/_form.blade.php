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
            {!! Form::date('start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-3">
            {!! Form::label('sale_price', 'Estimated Sale Price:') !!} <span id="sale_price_display"></span>
             
             <div class="tds-slider" id="slider"></div>
        
    </div>
   <div class="col-md-3">
            {!! Form::label('duration', 'Duration:') !!} <span id="duration-display"></span>
             
             <div class="tds-slider" id="slider-duration"></div>
        
    </div>

    <div class="col-md-12">
    <br>
    <hr>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">{{$submitButtonText}}</button>
        </div>

    </div>
   
</div>
<script type="text/javascript">
  $(function() {
    $( "#slider" ).slider({
      range: true,
      min: 0,
      max: 1000,
      step: 5,
      values: [ 100, 150 ],
      slide: function( event, ui ) {
        $( "#sale_price_display" ).text( "$" + ui.values[ 0 ] + "K - $" + ui.values[ 1 ] +"K" );
      }
    });
    $( "#sale_price_display" ).text( "$" + $( "#slider" ).slider( "values", 0 ) +
      "K - $" + $( "#slider" ).slider( "values", 1 ) + "K");


        $( "#slider-duration" ).slider({
      range: true,
      min: 0,
      max: 52,
      step: 1,
      values: [ 10, 12 ],
      slide: function( event, ui ) {
        $( "#duration-display" ).text( ui.values[ 0 ] + " - " + ui.values[ 1 ] +" Weeks" );
      }
    });
    $( "#duration-display" ).text( $( "#slider-duration" ).slider( "values", 0 ) +
      " - " + $( "#slider-duration" ).slider( "values", 1 ) + " Weeks");
  });
      
</script>
