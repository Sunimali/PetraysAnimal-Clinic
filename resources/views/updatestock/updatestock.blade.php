@extends('layouts.layouts')


@section('title', 'Client List')



@section('style')


<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" id="theme" rel="stylesheet">

@endsection


@section('content')

<div class="container">
<div class="row">
        <div class="col-md-12">
            <br />
                <h3 align="center">EDIT RECORD</h3>
            <br />

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
        
            @endif

            <form method="post" action="{{action('addstockController@update',$id )}}">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH" />

                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="text" name="name" class="form-control" value="{{$addstock->name}}" placeholder="Enter Medicine Name " />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="text" name="quantity" class="form-control" value="{{$addstock->quantity}}" placeholder="Enter Quantity " />
                        </div>
                    </div>

                    <div class="form-group">
                         <div class="col-md-6">
                        <input type="text" name="unit_price" class="form-control" value="{{$addstock->unit_price}}" placeholder="Enter Unit Prize " />
                         </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="text" name="expire_date" class="form-control" value="{{$addstock->expire_date}}" placeholder="Enter Expire Date " />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="text" name="relevent_species" class="form-control" value=" {{$addstock->relevent_species }}" placeholder="Enter Relevent Species " />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                        <input type="submit"  class="btn btn-primary" value="Edit" />
                        </div>
                    </div>

            </form>
        </div>
</div>

</div>
@endsection


