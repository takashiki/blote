@extends('tools::layouts.master')

@section('content')
    <h1>工具集</h1>
    <div id="app">
        <router-view></router-view>
        <router-link :to="{path: '/index'}">返回</router-link>
    </div>
@stop
