@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
<style>
    .hierarchical{
        margin-left: 30px;
        margin-top: 20px;
        color:#fff;
        width: 100%;
        align-content: center;
    }
    ul{
        margin-left: 20px;
        list-style: none;
    }
    ul>ol{
        list-style: none;
    }
    .color{
        text-align:center;
        text-transform:uppercase;
        color:#fff;
        font-weight:bold;
    }
</style>
@include('layouts.headers.cards')
<div class="container-">
    <div class="row">
        <div class="hierarchical">
            <h1 class="color">Hierarchical Order</h1>
            <div class="nation">
                <h1 class="color">National Hospital</h1>
                <ol->
                    <li class="color">Director</li>
                    <li class="color">Staff Members</li>
                </li->
            </div>
            <div class="nation">
                <h1 class="color">Regional Hospital</h1>
                <ol->
                    <li class="color">Superintendent</li>
                    <li class="color">Senior Officers</li>
                </ol->
            </div>

            <div class="nation">
                <h1 class="color">General Hospital</h1>
                <ol->
                    <li class="color">Head</li>
                    <li class="color">Officers</li>
                </ol->
            </div>
        </div>
    </div>
</div>


@endsection

