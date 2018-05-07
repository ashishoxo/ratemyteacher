@extends('layouts.main')
@section('content')
<style type="text/css">
    .rating {
              unicode-bidi: bidi-override;
              direction: rtl;
              float: left
            }
            .rating > span {
              display: inline-block;
              position: relative;
              width: 1.1em;
              font-size: 30px;

            }
            .rating > span.active:before{
                content: "\2605";
               position: absolute;
               color: #FF9800
            }
            .rating > span:hover:before,
            .rating > span:hover ~ span:before {
               content: "\2605";
               position: absolute;
               color: #FF9800
            }
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">
            teacher ratings    
        </h4>
        <p class="card-description">
            
        </p>
        @foreach($model as $key => $value)
            <div class="d-flex align-items-start pb-3 border-bottom" style="position: relative;">
                <img src="../../images/samples/profile_page/logo/01.png" alt="User img">
                <div class="wrapper pl-4">
                    <p class="font-weight-bold mb-0">
                        {{$value->user}}
                    </p>
                    <small>{{$value->comment}}</small>
                    <div style="position: absolute;right: 0;top: 0">
                        <div class="rating" data-value="">
                            <span class="{{ ($value->rating >= 5) ? 'active' : '' }}">☆</span>
                            <span class="{{ ($value->rating >= 4) ? 'active' : '' }}">☆</span>
                            <span class="{{ ($value->rating >= 3) ? 'active' : '' }}">☆</span>
                            <span class="{{ ($value->rating >= 2) ? 'active' : '' }}">☆</span>
                            <span class="{{ ($value->rating >= 1) ? 'active' : '' }}">☆</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
	
@endsection