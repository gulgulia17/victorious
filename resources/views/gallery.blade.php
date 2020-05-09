@extends('layouts.app')
@section('title','Gallery')
@section('bs')
<style>
  .modal-content {
    box-shadow: unset!important;
    border: none!important;
    box-shadow: none!important;
    background-color: transparent;
  }
  
  .modal-header>button:focus {
    outline: unset;
    }
 /* .row
  {
      margin-top: .5rem;
  } */
        @media (max-width: 1000px) and (min-width: 575px)
        {
            .akhsar
            {
            font-size: 15pt!important;
            }
            .pad
            {
            padding: 1rem!important;
            }
        }
         
        @media (max-width:650px){
            img{
                width:  100% !important;
            }
            div{
              
                text-align: center;
            }           
        }
</style>
@endsection
@section('content')
<div class="container-fluid pt-sm-5 pt-0">
<div class="row pt-sm-5 pt-0">
@foreach ($gallery as $item)
    <div class="col-lg-3 col-md-4 col-6 my-1 px-1">
      <img src="/{{$item->mediaName}}" alt="{{$item->description}}" class="w-100 img-thumbnail" data-toggle="modal" data-target="#myModal{{$item->id}}"> 
    </div>
<div class="modal fade" id="myModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$item->id}}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
      </div>
      <div class="modal-body">
        <img class="w-100" src="/{{$item->mediaName}}" alt="{{$item->description}}">
        <div id="caption{{$item->id}}" class="text-center text-white h3 p-3">{{$item->description}}</div>
      </div>
    </div>
  </div>
</div>
@endforeach

</div>
</div>
@endsection
@section('js')
@endsection