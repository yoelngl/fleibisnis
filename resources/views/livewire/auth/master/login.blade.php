@section('title')
    Portal Login
@endsection

<div class="app-content content ">
    <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                    <div class="content-body"><div class="auth-wrapper auth-v1 px-2">
                        <div class="auth-inner py-2">
                        <!-- Login v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                            <a href="javascript:void(0);" class="brand-logo">
                                <h2 class="brand-text text-primary ml-1"><img src="{{ asset('images/logo-fleibisnis.png') }}" alt="fleibisnis-logo" width="160px;"></h2>
                            </a>

                            <h4 class="card-title mb-1">Welcome to Fleibisnis Admin! 👋</h4>
                            <p class="card-text mb-2">Please sign-in to your account.</p>

                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    <div class="alert-body">
                                        <strong>Failed!</strong> {{ session('error') }}
                                    </div>
                                </div>
                            @endif
                            <form class="auth-login-form mt-2" wire:submit.prevent="login">
                                <div class="form-group">
                                <label for="login-email" class="form-label">Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="login-email"
                                    wire:model="email"
                                    placeholder="john@fleibisnis.com"
                                    aria-describedby="login-email"
                                    tabindex="1"
                                    autofocus
                                />
                                @error('email')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                                </div>

                                <div class="form-group">
                                <div class="d-flex justify-content-between">
                                    <label for="login-password">Password</label>
                                </div>
                                <div class="input-group input-group-merge form-password-toggle">
                                    <input
                                    type="password"
                                    class="form-control form-control-merge"
                                    id="login-password"
                                    wire:model="password"
                                    tabindex="2"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="login-password"
                                    />

                                    <div class="input-group-append" wire:ignore>
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>

                                </div>
                                @error('password')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                                    <label class="custom-control-label" for="remember-me"> Remember Me </label>
                                </div>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit" tabindex="4">Sign in</button>
                            </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    @include('vendor.helpers')
@endpush
