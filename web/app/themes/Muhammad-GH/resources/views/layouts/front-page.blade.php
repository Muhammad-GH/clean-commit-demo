<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')
@include('sections.slider')
@include('sections.front-features')

  <main id="main" class="main">
    @yield('content')
  </main>

@include('sections.front-quote')
@include('sections.front-story')
@include('sections.front-process')
@include('sections.front-testimonials')

@include('sections.footer')
