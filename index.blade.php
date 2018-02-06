@extends('main')
@section('content')


    <div class="row">

        @foreach ($posts as $post)
            <div class="col-md-12">
                @if ($loop->iteration % 2 == 0)
                    <div class="post" style="background-color: lightgray; padding: 10px 5px; margin: 10px 0px;">
                @else
                    <div class="post" style="background-color:#E9E5E4; padding: 10px 10px; margin: 10px 0px;">
                @endif

                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <h3>Post title</h3>
                                </div>
                                <div class="col-md-3" style=" margin: 25px 0px 0px 0px;">
                                    <p>{{$post->date}}<p>
                                </div>
                            </div>
                        </div>





                        <p>{{$post->content}}</p>
                    <a href="/blogpost" class="btn btn-primary"  style="margin: 0px 0px 0px 15px;">Read more</a>
                </div>
            </div>

        @endforeach

    </div>
@endsection