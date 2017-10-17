@extends('layouts.master')
@section('title', 'Localização do usuário')
@section('subtitle', 'Localização do usuário')
@section('content')




 <section class="content">

      <div class="row">
        <div class="col-md-12">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
             

              <h3 class="profile-username text-center">{{$users->name}}</h3>


              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Nome</b> <a class="pull-right">{{$users->name}}</a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right">{{$users->email}}</a>
                </li>
               @if($tasks != '')
                 <li class="list-group-item">
                <b>Tarefa</b> <a class="pull-right">{{$tasks->titleTask}}</a>
                </li>
              
             @endif
              </ul>

           
@if($locations != '')

     <div id="mymap"></div>
  
  <script type="text/javascript">

    var locations = <?php print_r(json_encode($locations)) ?>;

   console.log(locations);
    var mymap = new GMaps({
      el: '#mymap',
      lat: {{$locations->latitude}},
      lng: {{$locations->longitude}},
      zoom:6
    });

    $.each( locations, function( index, value ){

      mymap.addMarker({
        lat: {{$locations->latitude}},
        lng: {{$locations->longitude}},
      
      });
   });

  </script>
 
 @endif
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->

               </div>
        </div>
      </div> 
    </section>

@endsection