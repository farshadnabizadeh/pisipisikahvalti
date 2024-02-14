@extends('__master')
@section('__Content')
<div class="absolute top-0 right-0 w-[80%] min-h-screen" style="overflow-y:scroll;">
    @if(session('message'))
    <div style="width: 100%;display:flex;justify-content:center;padding:10px 0px;">
        <div style="{{ session('style') }}">{{ session('message') }}</div>
    </div>
    @endif
    <div class="w-full flex justify-center">
        <div style="width: 70%;height:50px;background-color:aliceblue;margin:10px 0px;border-radius: 10px;display:flex;justify-content:center;align-items:center;">
            <div style="width: 100%;display:flex;align-items:center;">
                <div style="padding:0px 10px;width:10%;"><img width="40" src="{{ asset('public/img/searchicon.png') }}" /></div>
                <div style="width: 50%;height:100%;display:flex;align-items:center;">
                    <input placeholder="Ara . . ." class="search-input __search__key__" type="text" style="width: 100%;display:flex;height:50px;background-color:transparent;padding:0px 10px;" />
                </div>
                <div style="width: 40%;">
                    <select class="search-input __select__filtering__categories__" style="width: 90%;height:50px;text-align:center;background-color:transparent;">
                        <option value="categories">kategoriler</option>
                        <option value="lists">listeler</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div style="width:100%;border:1px solid rgba(255,255,255,0.2);"></div>
    <div id="__search__result__" class="grid-cols-3-gap-2" style="width: 100%;height:50px;padding:10px 20px;"></div>
    <div id="__search__edit__result__"></div>
</div>
@include('__menu')
@endsection
