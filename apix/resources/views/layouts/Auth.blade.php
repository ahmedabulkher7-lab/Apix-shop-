

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | APEX Fitness</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- APEX CSS -->
  <link rel="stylesheet" href="{{ asset('css/apex.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="apex-navbar navbar navbar-expand-lg border-bottom border-apex">
    <div class="container">
      <a class="navbar-brand mx-auto" href="#">APEX</a>
    </div>
  </nav>

  <!-- Login Content -->
  <section class="flex-grow-1 d-flex align-items-center py-5" style="background-image: linear-gradient(rgba(43, 43, 43, 0.95), rgba(43, 43, 43, 0.95)), url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=1600&h=900&fit=crop'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5">
          <div class="apex-card p-4 p-md-5 shadow-lg">
            <div class="text-center mb-4">
              <h2 class="text-white" style="font-family: var(--font-heading); font-size: 2.5rem; letter-spacing: 1px;">WELCOME BACK</h2>
              <p class="text-muted-apex">Sign in to access your account.</p>
            </div>
                  <!-- 🔥 IMPORTANT: Breeze Form -->
                @yield("form")
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 border-top border-apex" style="background: var(--bg-darkest);">
    <div class="container text-center">
      <p class="text-muted-apex mb-0" style="font-size: 12px;">© 2026 APEX Fitness. All rights reserved.</p>
    </div>
  </footer>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      window.location.href = 'account.html';
    });
  </script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
         {{-- @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif --}}