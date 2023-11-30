@extends('main-layouts.main')
@section('container')
    <main>
        <div class="container overflow-hidden my-5">
            <div class="row article">
                <div class="col-lg-8 overflow-hidden">
                    <img class="thumbnail" src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                    <div class="post-info my-1 py-1">
                        <span class="entry-date">
                            <i class="far fa-clock"></i>
                            {{ \Carbon\Carbon::parse($post->published_at)->format('d F Y') }}
                        </span>
                    </div>
                    <h1>{{ $post->title }}</h1>
                    <article class="my-3 fs-5">
                      {!! $post->body !!}
                    </article>
                </div>
                <div class="col-lg-4">
                    <aside class="widget widget_categories">
                        <h3 class="widget-title py-3 px-4"><span>Category</span></h3>
                        <ul>
                          @foreach ($categories as $category)
                          <li class="cat-item">
                            <a href="{{ asset('/artikel?category=') }}{{ $category->slug }}">{{ $category->name }}</a>
                            <span class="count mx-5"> ({{ $postx->where('category_id',$category->id)->count() }})</span>
                          </li>
                          @endforeach
                        </ul>
                    </aside>
                    <aside class="pb-3">
                        <h3 class="py-3 px-4"><span>Recent Post</span></h3>
                        <div class="content mx-2">
                          @foreach ($posts->take(5) as $pos)
                            <div class="cards mb-4 d-flex justify-content-between align-items-center" style="max-width: 330px; flex-wrap: nowrap;">
                                <a class="cover-link" href="/post/{{ $pos->slug }}"></a>
                                  <img src="{{ asset('storage/'. $pos->image) }}" class="rounded recent-img" alt="{{ $pos->title }}">
                                <div class="card-body ms-2">
                                    <p class="card-text img-text-10 mb-0 lh-base text-dark two-line">{{ $pos->title }}</p>
                                    <a href="{{ asset('/artikel?category=') }}{{ $pos->category->slug }}" class="badge ">{{ $pos->category->name }}</a>
                                    <span class="fs-8"> - {{ $pos->updated_at->format('d F Y') }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>

        <div class="container">
          <section>
            <div id="comment" class="my-3 py-3">
            {{-- <h4>Komentar :</h4> --}}

              <div class="row d-flex justify-content-start py-3 my-3">
              
                <div class="col-md-12 col-lg-10 col-xl-8">
                  @if (session()->has('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  @if (Cookie::has('CommentLimit'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{ Cookie::get('CommentLimit') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  <div class="card">
                    <h4 class="text-center m-3 pb-1">Recent Comments</h4>
                    
                    @foreach ($comments as $comment)
                    <div class="card-body p-4">
                      <div class="row">
                        <div class="col">
                          <div class="d-flex flex-start">
                            @if ($comment->email=="admin@kauman.sch.id")
                            <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('img/avatar.jpg') }}" alt="avatar" width="65" height="65" />
                            @else
                            <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('img/avatar.jpg') }}" alt="avatar" width="65" height="65" />
                            @endif
                            <div class="flex-grow-1 flex-shrink-1 comment">
                              <div>
                                <div class="d-flex justify-content-between align-items-center">
                                  <p class="mb-1">
                                      @if ($comment->email=="admin@kauman.sch.id") 
                                        <span class="text-primary"> {{ $comment->username }} (Admin) <i class="bi bi-patch-check"></i></span>
                                      @else
                                      {{ $comment->username }}
                                      @endif <span class="small">- {{ $comment->created_at->diffForHumans() }}</span>
                                  </p>
                                  <span class="reply" data-id="{{ $comment->id }}"><i class="bi bi-reply"></i><span class="small"> reply</span></span>
                                </div>
                                <p class="small mb-0">
                                  {{ $comment->comment }}
                                </p>
                              </div>
                              @foreach ($comment->replies as $reply)
                              <div class="d-flex flex-start mt-4">
                                <a class="me-3" href="#">
                                  @if ($comment->email=="admin@kauman.sch.id")
                                  <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('img/avatar.jpg') }}" alt="avatar" width="65" height="65" />
                                  @else
                                  <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('img/avatar.jpg') }}" alt="avatar" width="65" height="65" />
                                  @endif
                                </a>
                                <div class="flex-grow-1 flex-shrink-1">
                                  <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <p class="mb-1">
                                        @if ($reply->email=="admin@kauman.sch.id") 
                                        <span class="text-primary"> {{ $reply->username }} (Admin) <i class="bi bi-patch-check"></i></span>
                                      @else
                                      {{ $reply->username }}
                                      @endif <span class="small">- {{ $reply->created_at->diffForHumans() }}</span>
                                      </p>
                                    </div>
                                    <p class="small mb-0">
                                       {{ $reply->comment }}
                                    </p>
                                  </div>
                                </div>
                              </div>    
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    {{-- @foreach ($comments as $comment)
                    <div class="card-body">
                      <div class="d-flex flex-start align-items-center">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="{{ asset('img/1.png') }}" alt="avatar" width="60" height="60" />
                        <div>
                          <h6 class="fw-bold text-primary m-0">{{ $comment->username }}</h6>
                          <p class="text-muted small mb-0">
                           {{ $comment->created_at->format('d-m-Y') }}
                          </p>
                        </div>
                      </div>
                      <p class="m-0">
                       {{ $comment->comment }}
                      </p>
                       <div class="small d-flex justify-content-start">
                        <a href="#!" class="d-flex align-items-center me-3">
                          <i class="far fa-thumbs-up me-2"></i>
                          <p class="mb-0">Reply</p>
                        </a>
                      </div> 
                    </div>
                    <hr>
                    @endforeach --}}
                    <div class="text-center d-flex justify-content-center">{{ $comments->links() }}</div>
                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                      @if (Auth::check())
                      <form action="/dashboard/comment" method="post">
                      @else
                      <form action="/comment" method="post">
                      @endif
                      @csrf
                        <h5>Tambah Komentar :</h5>
                        <div class="d-flex flex-start w-100">
                          <img class="rounded-circle shadow-1-strong me-3"
                            src="{{ asset('img/avatar.jpg') }}" alt="avatar" width="40" height="40" />
                          <div class="form-outline w-100">
                            <div class="input-group mb-3">
                              <input name="post_id" type="hidden" value="{{ $post->id }}">
                              <input name="username" type="text" class="form-control @error('username') is-invalid @enderror " placeholder="@error('username') {{$message}} @else Username @enderror" aria-label="Username" required @if (Cookie::has('CommentLimit')) disabled @endif @if (Auth::check()) value="SDNKauman" readonly @endif >



                              @if (Auth::check())
                              <input name="email" type="email" class="form-control mx-3" placeholder="email" aria-label="email" required @if (Cookie::has('CommentLimit')) @endif value="admin@kauman.sch.id" readonly>
                              @endif
                              @if (!Auth::check())
                              <input name="email" type="email" class="form-control mx-3 @error('email') is-invalid @enderror" placeholder="@error('email') {{$message}} @else Email @enderror" aria-label="email" required @if (Cookie::has('CommentLimit')) disabled @endif>
                              @endif
                            </div>
                            {{-- <label class="form-label" for="textAreaExample">Message</label> --}}
                            <textarea placeholder="Pesan" name="comment" class="form-control @error('comment') is-invalid @enderror" id="textAreaExample" rows="4" style="background: #fff;" required @if (Cookie::has('CommentLimit')) disabled @endif ></textarea>
                          </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                          <button type="submit" class="btn btn-primary btn-sm" @if (Cookie::has('CommentLimit')) disabled @endif >Create Comment</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
    </main>
    <script>
$(document).ready(function() {
    $('.reply').on('click', function() {
        var $this = $(this);
        
        if (!$this.hasClass('disabled')) {
            // Buat elemen input
            var dataId = $this.data('id');
            console.log(dataId);
            var inputElement = `
                <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                      @if (Auth::check())
                      <form action="/dashboard/comment" method="post">
                      @else
                      <form action="/comment" method="post">
                      @endif
                      @csrf
                    <h5>Reply : </h5>
                    <div class="d-flex flex-start w-100 my-2">
                        <img class="rounded-circle shadow-1-strong me-3" src="{{ asset('img/avatar.jpg') }}" alt="avatar" width="40" height="40" />
                        <div class="form-outline w-100">
                            <div class="input-group mb-3">
                              <input name="reply_id" type="hidden" value="${dataId}">
                              <input name="post_id" type="hidden" value="{{ $post->id }}">
                              <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" required @if (Cookie::has('CommentLimit')) disabled @endif @if (Auth::check()) value="SDNKauman" readonly @endif>
                                @if (Auth::check())
                                <input name="email" type="email" class="form-control mx-3" placeholder="email" aria-label="email" required @if (Cookie::has('CommentLimit')) disabled @endif value="admin@kauman.sch.id">
                                @endif
                                @if (!Auth::check())
                                <input name="email" type="email" class="form-control mx-3" placeholder="email" aria-label="email" required @if (Cookie::has('CommentLimit')) disabled @endif>
                                @endif
                            </div>
                                <textarea placeholder="Pesan" name="comment" class="form-control" id="textAreaExample" rows="4" style="background: #fff;" required @if (Cookie::has('CommentLimit')) disabled @endif></textarea>
                          </div>
                        </div>
                          <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm" @if (Cookie::has('CommentLimit')) disabled @endif >Post comment</button>
                          </div>
                          </form>
                      </div>
                    </div>
            `;


            $this.closest('.comment').append(inputElement);


            $this.addClass('disabled');
        } else {

            $this.closest('.comment').find('.card-footer').remove();
            

            $this.removeClass('disabled');
        }
    });
});

    </script>
@endsection