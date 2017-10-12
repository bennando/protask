@extends('layouts.app')

@section('title', 'Project')

@section('content')
<div class="container col-md-10 col-md-offset-1">
   <div class="well well bs-component">
      <h3 class="text-center bg-primary">Available Project</h3>
      @if($project->isEmpty())
         <p>There is no Project</p>
      @else
         <table class="table table-condensed table-striped table-bordered container">
            <thead>
               <tr>
                  <th>Project Title</th>
                  <th>Description</th>
                  <th>Type</th>
                  <th>Client</th>
                  <th>Due Date</th>
                  <th>Cost</th>
                  <th>Software Developer</th>
                  <!-- <th>Staus</th> -->
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach($project as $pro)
               <tr>
                  <td>{!!$pro->title!!}</td>
                  <td>{!!$pro->description!!}</td>
                  <td>{!!$pro->type!!}</td>
                  <td>{!!$pro->client!!}</td>
                  <td>{!!$pro->due_date!!}</td>
                  <td>{!!$pro->cost!!}</td>
                  <td>{!!$pro->user_id!!}</td>
                  <!-- <td>{!!$pro->staus?'incomplete':'completed'!!}</td> -->
                  <td>
                     <a href="{!! action('ProjectController@edit', $pro->id) !!}" class="btn btn-sm "><span class="glyphicon glyphicon-edit"></span></a>
                     <a href="{!! action('ProjectController@destroy', $pro->id) !!}" class="btn btn-sm "><span class="glyphicon glyphicon-remove-sign"></span></a>
               </tr>
               @endforeach
            </tbody>
         </table>

         </div>
      @endif
   </div>
</div>
@endsection
