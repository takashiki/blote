@extends('tools::layouts.master')

@section('content')
    <div id="app">
        <el-container>
            <el-header>
                <el-row type="flex" justify="center">
                    <h1>@{{ $route.meta.title }}</h1>
                </el-row>
            </el-header>
            <el-main>
                <router-view></router-view>
            </el-main>
            <el-footer v-show="$route.name != 'index'">
                <el-button type="primary" icon="el-icon-arrow-left" @click="goIndex">返回</el-button>
            </el-footer>
        </el-container>
    </div>
@stop
