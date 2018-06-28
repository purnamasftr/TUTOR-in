<!DOCTYPE html>
<html>
<head>
    <title>Dependent select Dropdown box</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <style>
   #loader{
   visibility:hidden;
   }
   </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading"><h2>DEPENDENT SELECT BOX</h2></div>
<!--  -->
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group-sm">

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <select name="fakultas" class="form-control">
                                        <option value="">--Select Fakultas--</option>
                                        @foreach ($fak as $fakultas => $value)
                                        <option value="{{ $fakultas }}"> {{ $value }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <select name="departemen" class="form-control">
                                     <option>--Departemen--</option>
                                   </div>

                                 </select>
                             </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
                             <div class="col-md-12">
                               <div class="form-group">
                                 <select name="mata_kuliah" class="form-control">
                                  <option>--Mata Kuliah--</option>
                                </div>

                              </select>
                          </div><div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>

                         </div>
                     </form>
                 </div>

                 <div class="panel-footer">- By: [Your Name]</div>
             </div>
         </div>
     </div>
 </div>
 <script src="{{ asset('js/app.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
