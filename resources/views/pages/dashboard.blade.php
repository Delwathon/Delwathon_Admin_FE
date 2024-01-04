@extends('layouts.app')
@section('content')
<div class="bg-[#F3F4F6] w-full min-h-screen">
    @include('layouts.sidebar')
    @include('boards.dashboard_board')
</div>
@endsection