@extends('layouts.master')

@section('content')
<div class="row">
     <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
         <div class="panel panel-primary">
           <div class="panel-heading">Example of Bootstrap Typeahead Autocomplete Search Textbox</div>
          <div class="panel-body">
         <div class="form-group">
             {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!}
         </div>
     </div>
 </div>
</div>
</div>
   <script>
   $(document).ready(function() {
    src = "{{ route('searchajax') }}";
     $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);

                }
            });
        },
        minLength: 3,

    });
});
</script>
@endsection
