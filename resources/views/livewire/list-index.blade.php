<div class="row mt-4">
    @foreach($news as $new)
        <div class="col-md-12 col-lg-6">
            <div class="card border-0" style="width: 100%;">
                <div class="container">
                    <a href="{{ route('article.show', $new->slug) }}">
                        <img src="{{asset($new->image)}}" alt="avatar"
                            class="card-img-top img-avatar img-fluid" style="height: 15rem">
                    </a>
                </div>
                <div class="card-body" style="height: 15rem">
                    <p class="card-text">{{$new->created_at}}</p>
                    <h5 class="card-title">{{$new->title}}</h5>
{{--                    <p>{{$new->slug}}</p>--}}
                    <p class="card-text">{!! Str::limit(strip_tags($new->content, '<p>'),100) !!}
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-12 text-center">
        {{ $news->links() }}
    </div>
</div>
