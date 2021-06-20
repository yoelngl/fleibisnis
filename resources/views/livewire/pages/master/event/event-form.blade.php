@section('title')
Event Form
@endsection

<div>
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Event Form</h2>
                        <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home
                            </li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.event') }}">Event</a>
                            </li>
                            <li class="breadcrumb-item">Form</li>
                        </ol>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Blog Edit -->
              <div class="blog-edit-wrapper">
                  <div class="row">
                  <div class="col-md-10">
                      <div class="card">
                      <div class="card-body">
                          {{-- <div class="media">
                          <div class="avatar mr-75">
                              <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" width="38" height="38" alt="Avatar" />
                          </div>
                          <div class="media-body">
                              <h6 class="mb-25">Chad Alexander</h6>
                              <p class="card-text">May 24, 2020</p>
                          </div>
                          </div> --}}
                          <!-- Form -->

                          <form class="mt-2" wire:submit.prevent="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createNews' }}" >
                          <div class="row">
                              <div class="col-md-12 col-12">
                              <div class="form-group mb-2">
                                  <label for="title">Title</label>
                                  <input
                                  type="text"
                                  id="title"
                                  class="form-control"
                                  wire:model="title"
                                  placeholder="News title"
                                  />


                              @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                              </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="form-group mb-2">
                                      <label for="tags">Tag</label>
                                      <div wire:ignore>
                                          <select id="tags" wire:model="tag" class="select2 form-control">
                                          <option value="" selected>-- Choose Tag --</option>
                                          {{-- @foreach($tags as $tag)
                                              <option value="{{ $tag->id }}" >{{ $tag->title }}</option>
                                          @endforeach --}}
                                          </select>
                                      </div>
                                      @error('tag') <small class="text-danger">{{ $message }}</small> @enderror
                                  </div>
                              </div>
                              <div class="col-md-6 col-12">
                                  <div class="form-group mb-2">
                                      <label for="url">Youtube ID</label>
                                      <input
                                      type="text"
                                      id="url"
                                      class="form-control"
                                      wire:model="url"
                                      placeholder="bTrRniT2jyk"
                                      />
                                  </div>
                              </div>
                              <div class="col-12">
                              <div class="form-group mb-2" >
                                  <label>Description</label>
                                  <div wire:ignore>
                                      <textarea id="description" wire:model="description"></textarea>
                                  </div>
                                      @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                              </div>

                              </div>

                              <div class="col-12 mb-2">
                              <div class="border rounded p-2">
                                  <h4 class="mb-1">Thumbnails</h4>
                                  <div class="media flex-column flex-md-row">
                                  <img
                                  <?php isset($edit->images) ? $data = 'storage/'.$edit->images
                                                             : $data = 'backend-assets/images/slider/03.jpg' ?>
                                      src="{{ asset($data) }}"
                                      id="blog-feature-image"
                                      class="rounded mr-2 mb-1 mb-md-0"
                                      width="170"
                                      height="110"
                                      alt="News Form Images"
                                      wire:ignore.self
                                  />
                                  <div class="media-body" >
                                      <small class="text-muted">Recommended image resolution 1366x768, image size 10mb.</small>
                                      <p class="my-50">
                                          <a href="javascript:void(0);" id="blog-image-text" hidden>C:\fakepath\banners.jpg</a>
                                      </p>
                                      <div class="d-inline-block">
                                      <div class="form-group mb-0">
                                          <div class="custom-file" wire:ignore>
                                              <input type="file" wire:model="images" class="custom-file-input" id="blogCustomFile" accept="image/*" />
                                          <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                          </div>
                                          @error('images') <small class="text-danger">{{ $message }}</small> @enderror

                                      </div>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                              </div>
                              <div class="col-12 mt-50">
                                  <img src="{{ asset('icons/loading.gif') }}" wire:loading wire:target="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createNews' }}" alt="" width="60px">
                                  <button type="submit" class="btn btn-primary mr-1" wire:loading.delay wire:loading.class="btn btn-secondary" wire:target="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createNews' }}" wire:loading.attr="hidden"> Submit</button>
                                  <a href="{{ route('admin.event') }}"  class="btn btn-danger"  wire:target="{{ isset($edit) ? 'updateNews("'.$edit->slug.'")' : 'createNews' }}" wire:loading.class="btn btn-secondary" wire:loading.attr="hidden">Back</a>
                              </div>
                          </div>
                          </form>
                          <!--/ Form -->
                          <div id="blog-editor-wrapper" hidden>
                              <div id="blog-editor-container">
                                <div class="editor">
                                </div>
                              </div>
                            </div>
                      </div>
                      </div>
                  </div>
                  </div>
              </div>
            </div>
        </div>
</div>
