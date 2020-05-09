@extends('layouts.app')
@section('title','School Timing')
@section('bs')
<style>

</style>
@endsection
@section('content')
<div class="container-fluid pt-sm-5 pt-0">
    <div class="row pt-sm-5 pt-0">
        <div class="col-md-10 mx-auto text-center p-5">
            <h2>School Academic year April to march</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h1 class="mb-0 text-center">School Timing</h1>
                </div>
                <div class="card-body p-0 table-reponsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="w-25">Class Name</th>
                                <th>Summer Timing</th>
                                <th>Winter Timing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-bottom-0">NUR. to UKG.</td>
                                <td class="border-bottom-0">8.00 AM <strong>TO</strong> 1.30 PM</td>
                                <td class="border-bottom-0">9.00 AM <strong>TO</strong> 2.00 PM</td>
                            </tr>
                            <tr>
                                <td class="border-bottom-0">1st Std. on ward</td>
                                <td class="border-bottom-0">8.00 AM <strong>TO</strong> 2.00 PM</td>
                                <td class="border-bottom-0">9.00 AM <strong>TO</strong> 3.00 PM</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="p-3">
                        <h4>Note:-</h4>
                        <ol class="pl-3">
                            <li>The school insists on high standerd of punctuality and regularity.</li>
                            <li>Students must reach school atleast fivr minutes before the assembly starts.</li>
                            <li>No late comers will be allowed to attend the class.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection