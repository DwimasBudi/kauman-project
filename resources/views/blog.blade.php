@extends('main-layouts.main')
@section('container')
    <main>
        <div class="container overflow-hidden my-5">
            <div class="row article">
                <div class="row mb-1">
                    <div class="col-md-6">
                        <form action="/artikel">
                            <div class="input-group mt-2">
                                <input type="text" class="form-control" placeholder="search..." name="search" value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" type="submit">search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 overflow-hidden">
                  @foreach ($posts as $post)
                  <div class="cards mt-2 card-main">
                      <a class="cover-link" href="{{ asset('post/') }}{{ $post->slug }}" target="_blank"></a>
                          <div class="containers d-flex w-100 flex-wrap">
                              <img src="{{ asset('storage/'. $post->image) }}" class="card-img-top m-2 h-100" style="max-width: 250px;" alt="...">
                              <div class="card-body m-2" style="max-width: 370px;"> 
                                  <h5 class="mb-0 two-line">{{ $post->title }}</h5>
                                  <a href="{{ asset('/artikel?category=') }}{{ $post->category->name }}" class="badge" target="_blank">{{ $post->category->name }}</a><span class="fs-8"> - {{ $post->updated_at->format('d F Y') }}</span>
                                  <p class="card-text text-justify two-line" style="font-size: 13px;">{{ $post->excerpt }}</p>
                              </div>
                          </div>
                  </div>  
                  @endforeach
                    <div class="text-center d-flex justify-content-center">{{ $posts->links() }}</div>
                </div>
                <div class="col-lg-4">
                    <aside class="widget widget_categories">
                        <h3 class="widget-title py-3 px-4"><span>Category</span></h3>
                        <ul>
                          @foreach ($categories as $category)
                          <li class="cat-item">
                            <a href="{{ asset('/artikel?category=') }}{{ $category->name }}">{{ $category->name }}</a>
                            <span class="count mx-5"> ({{ $postx->where('category_id',$category->id)->count() }})</span>
                          </li>
                          @endforeach
                        </ul>
                    </aside>
                    <aside class="widget widget_post pb-3">
                        <h3 class="widget-title py-3 px-4"><span>Recent Post</span></h3>
                        <div class="content mx-2">
                          @foreach ($posts->take(4) as $pos)
                            <div class="cards mb-3 d-flex justify-content-between align-items-center" style="max-width: 330px; flex-wrap: nowrap;">
                                <a class="cover-link" href="/post/{{ $pos->slug }}" target="_blank"></a>
                                <img src="{{ asset('storage/'. $pos->image) }}" class="img-fluid rounded w-100 h-100" alt="...">
                                <div class="card-body ms-2">
                                    <p class="card-text img-text-10 mb-0 lh-base text-dark two-line">{{ $pos->title }}</p>
                                    <a href="" class="badge ">{{ $pos->category->name }}</a>
                                    <span class="fs-8"> - {{ $pos->updated_at->format('d F Y') }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </main>
@endsection