@extends('main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="post">
            <h3>Post title</h3>
            <p>Vasario 5 dieną Europos Sąjungos Tarybai pirmininkaujanti Bulgarija sukvietė ES šalių narių ir ES šalių kandidačių atstovybių vadovus į susitikimą su Lietuvos užsienio reikalų ministru Linu Linkevičiumi aptarti svarbiausius 2018 metų pirmo pusmečio ES ir užsienio politikos prioritetus.</p>
        </div>
    </div>
    <div class="col-md-12">
        <h3>Leave a comment</h3>
        <form>
            <div class="form-group">
                <textarea id="message" name="message" class="form-control">Type your comment here</textarea>
                <br>
                <input type="submit" value="Post" class="btn btn-success">
            </div>
        </form>

    </div>

</div>

@endsection