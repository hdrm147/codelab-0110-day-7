@extends("layouts.master")

@section("content")

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <ul class="list-group">
                    @foreach($skills as $skill)
                        <li class="list-group-item">{{$skill}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                @if($smoker)
                    <h3>{{$name}} is a smoker</h3>
                @else
                    <h3>{{$name}} is not a smoker</h3>
                @endif
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                @if($vegan)
                    <h3>{{$name}} is a vegan</h3>
                @else
                    <h3>{{$name}} is not a vegan</h3>
                @endif
            </div>
        </div>
    </div>
@endsection