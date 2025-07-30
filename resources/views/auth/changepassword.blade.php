@extends('layouts.auth')

@section('title', 'تغییر رمز عبور')

@section('content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <div class="card p-2">

                <div class="card-body mt-2">
                    <h4 class="mb-2 fw-semibold">خوش آمدید! 👋</h4>
                    <p class="mb-4">لطفاً وارد حساب خود شوید</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('changepassword.form') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="رمز عبور" required>
                                        <label for="password">رمز عبور</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="رمز عبور" required>
                                        <label for="password">رمز عبور</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">ثبت تغییرات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
