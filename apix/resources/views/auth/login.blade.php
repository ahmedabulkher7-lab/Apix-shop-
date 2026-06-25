
@extends('layouts.Auth')
  @section("form")
   <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Don\'t have an account?') }}
            </a>
            <!-- Remember -->
            <div class="mb-3">
              <input type="checkbox" name="remember">
              <label>Remember me</label>
            </div>

            <button type="submit" class="btn-apex-primary w-100 justify-content-center btn-lg py-3 mb-4">
              SIGN IN
            </button>

          </form>
@endsection