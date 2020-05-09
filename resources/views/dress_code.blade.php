@extends('layouts.app')
@section('title','Dress Code')
@section('bs')
<style>
    table tr,th,td{
        vertical-align: middle!important;
    }
    @media (max-width:500px)
    {
        .card-header>h1{
            font-size: 25px;
        }
        th,td{
            font-size: 12px;
        }
        th,td{
            padding: .2rem!important;
        }
        .card-footer{
            font-size: 13px;
        }
    }
</style>
@endsection
@section('content')
<div class="container pt-sm-5 pt-0">
    <div class="row">
        <div class="col-md-12 pt-sm-5 pt-0">
            <div class="card mt-1">
                <div class="card-header">
                    <h1 class="mb-0 text-center">School Uniform</h1>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Summer</th>
                                <td>White Shirt and Westes Blue Pent (Boys)</td>
                                <td>White Shirt and Westes Blue Scirt (Girls)</td>
                                <td class="text-center"> -- </td>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Winter</th>
                                <td>White Shirt and Westes Blue Pent (Boys)</td>
                                <td>White Shirt and Westes Blue Scirt (Girls)</td>
                                <td>Blue Colour Blazer</td>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Common</th>
                                <td>School Tie and Belt</td>
                                <td>Navy blue socks</td>
                                <td>Black leather shoes</td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="card-footer">All Students must wear school uniform</div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection