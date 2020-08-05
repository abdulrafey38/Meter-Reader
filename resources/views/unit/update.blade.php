@extends('layouts.admin-layout')
{{-- CSS Starts --}}
<head>
    <style>

        .user-dashboard .sales h2 {
        color: #8492af;
        float: left;
        font-size: 14px;
        font-weight: 600;
        margin: 0;
        padding: 13px 0 0;
    }
        .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
        font-size: 11px;
    }
        .user-dashboard .sales button {
        font-size: 11px;
        padding-right: 23px;
    }
        .user-dashboard .sales h2 {
        font-size: 12px;
    }
    .gutter{
        padding: 0;
    }
    }

    @media only screen and (max-device-width: 992px) {
        header .header-top li {
        padding-left: 20px !important;
        padding-right: 0;
    }
        header .logo img {
        max-width: 125px !important;
    }

    }

    @media only screen and (min-device-width: 767px) and (max-device-width: 998px){
            .user-dashboard .header-top {
            padding-top: 5px;
    }
        .user-dashboard .header-rightside {
        display: inline-block;
        float: left;
        width: 100%;
    }
        .user-dashboard .header-rightside .header-top img {
        max-width: 41px !important;
    }
        .user-dashboard .sales button {
        font-size: 10px;
    }
        .user-dashboard .btn.btn-secondary.btn-lg.dropdown-toggle > span {
        font-size: 12px;
    }
        .user-dashboard .sales h2 {
        font-size: 15px;
    }
    }

    .user-dashboard {
    padding: 0 20px;
    }

    .user-dashboard h1 {
    color: #0e1a35;
    font-size: 30px;
    font-weight: 500;
    margin: 0;
    padding: 21px 0;
}
        body{
            margin-top:20px;
            background:#FAFAFA;
        }
        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg, rgba(64, 153, 255, 0.26), #4018ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, rgba(44, 255, 250, 0.24),#59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg,#FFB64D, rgba(255, 175, 4, 0.29));
        }

        .bg-c-brown {
            background: linear-gradient(45deg,saddlebrown,#ffcb80);
        }
        .bg-c-pink {
            background: linear-gradient(45deg,#FF5370, rgba(255, 25, 102, 0.39));
        }


        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-block {
            padding: 20px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }

    </style>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Counts Section -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

</head>
{{-- Css Ends --}}

@section('content') {{-- Section Content --}}
<h1>Update UNITS</h1>


{{--====================================================================================== --}}
    {{-- Notifications Flashes --}}
    @if(Session::has('deleted_user'))

    <div class="alert alert-danger">
        <p >{{ session('deleted_user') }}</p>
    </div>
    @elseif(Session::has('create_user'))

    <div class="alert alert-success">
        <p >{{ session('create_user') }}</p>
    </div>
    @elseif(Session::has('update_user'))

    <div class="alert alert-success">
        <p >{{ session('update_user') }}</p>
    </div>
    @endif
{{--====================================================================================== --}}

{{-- Form  Starts --}}
    {!! Form::model($unit,['method'=>'PATCH','files'=>'true','action'=>['UnitController@update',$unit->id]]) !!}


    <div class="form-group">
        {!! Form::label('date','Date:') !!}
        {!! Form::date('date', null , ['class' => 'form-control alert-danger','disabled'=>'true']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('unit','Unit:') !!}
        {!! Form::text('unit', null , ['class' => 'form-control alert-success']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Units', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
{{-- Form Ends --}}

{{--====================================================================================== --}}
    @if(count($errors)>0) {{-- Error Notifications --}}
        <div class="alert alert-danger" role="atert">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                 {{  $error  }}
                </li>
             @endforeach
            </ul>
        </div>

    @endif
{{--====================================================================================== --}}
@endsection
