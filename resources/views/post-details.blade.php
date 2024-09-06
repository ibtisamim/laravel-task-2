@extends('layout.main')
@section('title', 'Login')
@section('content')

<section class="css-19s00cp">
<div class="container">
    <div class="row">
       @if($post->thumb)
       <div> <div class="css-5hkbtq">
                <div class="css-z6nl">
                        <div class="gatsby-image-wrapper gatsby-image-wrapper-constrained">
                            <img width="360" height="270" data-main-image="" sizes="(min-width: 360px) 360px, 100vw"  src="{{$post->thumb?url($post->thumb):''}}"  alt="{{$post->title}}" style="object-fit: cover; opacity: 1;">

                        </div>
                </div>
        </div></div>
       @endif
        <h3>{{$post->title}}</h3>
        <div>{!! $post->content !!}</div>
    </div>
    <hr/>
    <div class="row">
        
        <h4>Comments</h4>
        <ul>
            @foreach($post->comment as $comment)
            <li>{{$comment->content}}</li>
            @endforeach
        </ul>
     @if(Auth::user())   
     @if(Auth::user()->hasRole('user'))   
    <form id="edit-categories" action="/administrator/posts/update/{{$post->id}}" enctype='multipart/form-data' class="px-4 pt-3" method="POST">
                    @csrf

        <h6>Add Comment </h6>
        <div class="row">
            <div class="col-sm-6 input-wrapper ">
                  <label class="form-label" for="name_en">Your Comment</label>
                  <div class="input-group input-group-merge">
                        <textarea class="form-control" id="content" rows="3" name="content" required>
                        </textarea>
                  </div>
              </div>
        </div>

        <button class="btn btn-success btn-submit" type="submit">Add</button>
    </form>
     @endif
    @endif
    </div>
</div>
</section>

<br/><br/><br/><br/><br/>
@endsection