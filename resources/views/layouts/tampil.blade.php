@include('layouts.header')
<main class="main" id="main">
    <section>
        <div class="mt-2">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </section>
</main>
<!-- end content -->
@include('layouts.sidebar')
@include('layouts.footer')
