@extends('admin::layouts.master')
@section('fixbottom','bottom-login')
@section('title',trans('messages.login'))
@section('content')
    <div class="nav-step">
        <div class="container">
            <h1>{{trans('messages.login')}}</h1>
        </div>
    </div>
    <div class="cont-main form-info">
        <form url="{{route('admin.postLogin')}}" method="post" class="form-horizontal">
            {!! csrf_field() !!}
            <div class="container container-login">
                {!! $messages !!}
                <div class="form-step">
                    <div class="item-form clearfix">
                        <div class="item-row">
                            <label class="col-sm-3">{{trans('messages.label.admin.username')}}<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input name="username" type="text" class="form-control" placeholder="{{trans('messages.placeholder.admin.username')}}">
                            </div>
                        </div>
                    </div>
                    <div class="item-form clearfix">
                        <div class="item-row">
                            <label class="col-sm-3">{{trans('messages.label.admin.password')}}<span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input name="password" type="password" class="form-control" placeholder="{{trans('messages.placeholder.admin.password')}}">
                            </div>
                        </div>
                    </div>

                    <div class="item-form submit clearfix">
                        <div class="button">
                            <button class="btn bg-gradient btn-submit w-full">{{trans('messages.label.admin.buttonLogin')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection