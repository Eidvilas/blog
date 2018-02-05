@extends('main')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h3>Write a post </h3>
        <form>
            <div class="form-group">
                <textarea id="message" name="message" class="form-control">Type your post here</textarea>
                <br>
                <input type="submit" value="send message" class="btn btn-success">
            </div>
        </form>

    </div>

</div>

@endsection