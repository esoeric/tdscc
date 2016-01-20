    {{ csrf_field() }}
    <div>
        <div class="col-md-8">
            <div class="form-group">

                {!! Form::label('name', 'Project Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'required' ]) !!}


            </div>
           
             <div class="bottom-row form-group">

                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '8' ]) !!}

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                {!! Form::label('status_id', 'Status:') !!}
                {!! Form::select('status_id', array('1' => 'Production', '2' => 'Design', '3' => 'Prospect'), null, ['class' => 'form-control']) !!}
            </div>
       
            <div class="form-group">
                {!! Form::label('pdm_id', 'Project Design Manager:') !!}
                {!! Form::select('pdm_id', array('1' => 'Ben', '2' => 'Eric', '3' => 'Nancy', '4' => 'Sam'), null, ['class' => 'form-control']) !!}

            </div>
        
        
            <div class="form-group">
                {!! Form::label('project_lead_id', 'Project Lead:') !!}
                {!! Form::select('project_lead_id', array('1' => 'Brian', '2' => 'Jason', '3' => 'Sean', '4' => 'Shawn'), null, ['class' => 'form-control']) !!}

            </div>

 
             <div class="form-group">
            {!! Form::label('project_type_id', 'Project Type:') !!}
            {!! Form::select('project_type_id', array('1' => 'Addition', '2' => 'Kitchen', '3' => 'Bath', '4' => 'Whole House', '5' => 'New House'), null, ['class' => 'form-control']) !!}            </div>

        </div>
    <div class="col-md-12">
    <hr>
    </div>    
    
        <div class="col-md-6 form-group">
                {!! Form::label('probability', 'Probability:') !!} 
                {!! Form::text('probability', null, ['class' => 'slider-control']) !!} 
                 <div class="tds-slider" id="slider-probability"></div>
            
        </div>
        <div class="col-md-6 form-group">
                {!! Form::label('start_date', 'Anticipated Start Date:') !!}
                {!! Form::date('start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-6 form-group">
                {!! Form::label('anticipated_price', 'Estimated Sale Price:') !!}
                {!! Form::text('anticipated_price', null, ['class' => 'slider-control']) !!}  
                 <div class="tds-slider" id="slider-price"></div>
            
        </div>
       <div class="col-md-6 form-group">
                {!! Form::label('duration', 'Duration:') !!}
                {!! Form::text('duration', null, ['class' => 'slider-control']) !!}  
                 <div class="tds-slider" id="slider-duration"></div>
            
        </div>

        <div class="col-md-12">
     
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{$submitButtonText}}</button>
            </div>

        </div>
   
   
</div>
<script type="text/javascript">
  $(function() {
   $( "#slider-probability" ).slider({
      value: 0,
      min: 0,
      max: 100,
      step: 5,
      
      slide: function( event, ui ) {
        $( "#probability" ).val( ui.value + "%" );
      }
    });
    //$( "#probability" ).val( $( "#slider-probability" ).slider( "value" ));

 

    $( "#slider-price" ).slider({
      range: true,
      min: 0,
      max: 1000,
      step: 5,
      values: [ 0, 0 ],
      slide: function( event, ui ) {
        $( "#anticipated_price" ).val( "$" + ui.values[ 0 ] + "K - $" + ui.values[ 1 ] +"K" );
      }
    });

    //$( "#anticipated_price" ).val( "$" + $( "#slider-price" ).slider( "values", 0 ) +
     // "K - $" + $( "#slider-price" ).slider( "values", 1 ) + "K");


        $( "#slider-duration" ).slider({
      range: true,
      min: 0,
      max: 52,
      step: 1,
      values: [ 0, 0 ],
      slide: function( event, ui ) {
        $( "#duration" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] +" Weeks" );
      }
    });
    //$( "#duration" ).val( $( "#slider-duration" ).slider( "values", 0 ) +
    //  " - " + $( "#slider-duration" ).slider( "values", 1 ) + " Weeks");
  });
  $('.ui-slider-handle').draggable();  
  
</script>
