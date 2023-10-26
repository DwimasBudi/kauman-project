@extends('main-layouts.main')
@section('container')
    <main>
        <div class="container overflow-hidden my-5">
            <div class="row article">
                <div class="col-lg-8 overflow-hidden">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                    <div class="post-info my-1 py-1">
                        <span class="entry-date">
                            <i class="far fa-clock"></i>
                            September 13,2023
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
                            <li class="cat-item">
                                <a href="#">Akademik</a>
                                <span class="count mx-5">(3)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Prestasi</a> 
                                <span class="count mx-5">(3)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Berita</a>
                                <span class="count mx-5">(3)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Pengumuman</a>
                                <span class="count mx-5">(3)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Akademik</a>
                                <span class="count mx-5">(3)</span>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_post pb-3">
                        <h3 class="widget-title py-3 px-4"><span>Recent Post</span></h3>
                        <div class="content mx-2">
                          @foreach ($posts->take(4) as $post)
                            <div class="cards mb-3 d-flex justify-content-between align-items-center" style="max-width: 330px; flex-wrap: nowrap;">
                                <a class="cover-link" href="/post/{{ $post->slug }}" target="_blank"></a>
                                <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid rounded w-100 h-100" alt="...">
                                <div class="card-body ms-2">
                                    <p class="card-text img-text-10 mb-0 lh-base text-dark two-line">{{ $post->title }}</p>
                                    <a href="" class="badge ">{{ $post->category->name }}</a>
                                    <span class="fs-8"> - 7 July 2023</span>
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
            <div class="my-3 py-3">
            <h4>Komentar :</h4>
              <div class="row d-flex justify-content-start py-3 my-3">
                <div class="col-md-12 col-lg-10 col-xl-8">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-start align-items-center">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="{{ asset('img/1.png') }}" alt="avatar" width="60" height="60" />
                        <div>
                          <h6 class="fw-bold text-primary mb-1">USER 123</h6>
                          <p class="text-muted small mb-0">
                            21 Oktober 2023
                          </p>
                        </div>
                      </div>
                      <p class="mt-3 mb-1 pb-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                      </p>        
                    </div>
                    <div class="card-body">
                      <div class="d-flex flex-start align-items-center">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="{{ asset('img/1.png') }}" alt="avatar" width="60" height="60" />
                        <div>
                          <h6 class="fw-bold text-primary mb-1">USER 123</h6>
                          <p class="text-muted small mb-0">
                            21 Oktober 2023
                          </p>
                        </div>
                      </div>
                      <p class="mt-3 mb-4 pb-2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                      </p>        
                    </div>
                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                      <h5>Tambah Komentar :</h5>
                      <div class="d-flex flex-start w-100">
                        <img class="rounded-circle shadow-1-strong me-3"
                          src="{{ asset('img/1.png') }}" alt="avatar" width="40" height="40" />
                        <div class="form-outline w-100">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">

                            <input type="text" class="form-control mx-3" placeholder="email" aria-label="email">
                          </div>
                          <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                          <label class="form-label" for="textAreaExample">Message</label>
                        </div>
                      </div>
                      <div class="float-end mt-2 pt-1">
                        <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
    </main>
@endsection