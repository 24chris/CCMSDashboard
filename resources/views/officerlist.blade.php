@extends('layouts.app');
<style>
    .button{
        color:#fff !important;
        display: flex !important;
        flex-direction: column;

        background:rgb(158, 219, 16) !important;
        border-radius:999px !important;


    }
</style>
@section('content')
@include('layouts.headers.cards')
<button class="button">
    <a href="{{route('registerofficer')}}" class="">
        Add Health Officer
      </a>
</button>
<div class="container ">
    <div class="row ">
      <div class="col-md-12-text-center d-flex flex-column">

      </div>
          @if ($total)
            <h1 style="color:#fff;">Total Officers Registered:  {{$total}}</h1>
          @endif
          @if ($totalOfficers)
          <table class="table  m-5 table-dark">
            <thead>
              <tr>
                <th scope="col">Officer Name</th>
                <th scope="col">Officer UserName</th>
                <th scope="col">Hospital Category</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($totalOfficers as $totals)
              <tr>

                <td>{{$totals->OfficerName}}</td>
                <td>{{$totals->OfficerUserName}}</td>
                <td>
                    {{$totals->HospitalCategory}}</td>
              </tr>

              @endforeach


            </tbody>
          </table>
          @else
          <h2 class="text-center">There are no Officers yet</h2>


          @endif

           </div>
</div>


@endsection
