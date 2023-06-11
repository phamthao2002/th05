@extends('layouts.base')

<!--  Triểm khai title -->
@section('title','Home Page')



@section('main')
    <div class = "row mt-4">
        @foreach($articles as $article)
        <div class="col-md-3 mb-2">
            <div class="card" style="width: 18rem;">
                <img src="{{$article ->hinhanh}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article ->tieude}}</h5>
                    <p class="card-text">
                        {{$article->tomtat}}
                        
                    </p>
        </div>
        </div>
        @endforeach
        </div>
@endsection