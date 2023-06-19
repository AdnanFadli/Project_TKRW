<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-xxl-3 col-md-4">
                <div class="card bg-info">
                    <div class="card-body text-white">
                        <div class="card-body-icon">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <h5 class="card-title text-white">JUMLAH SANTRI</h5>
                        <div class="display-5">{{ $santriCount }}</div>
                        <a href="{{ route('santri.index') }}">
                            <p class="card-text text-white">Lihat Detail <i class="bi bi-chevron-double-right ml-2"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-4">
                <div class="card bg-success">
                    <div class="card-body text-white">
                        <div class="card-body-icon-2">
                            <i class="ri-exchange-dollar-fill"></i>
                        </div>
                        <h5 class="card-title text-white">PEMASUKAN</h5>
                        <div class="display-8">Rp. {{ $pemasukanCount }}</div>
                        <a href="{{ route('kasMasuk.index') }}">
                            <p class="card-text text-white">Lihat Detail <i class="bi bi-chevron-double-right ml-2"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-3 col-md-4">
                <div class="card bg-danger">
                    <div class="card-body text-white">
                        <div class="card-body-icon">
                            <i class="bx bxs-badge-dollar"></i>
                        </div>
                        <h5 class="card-title text-white">PENGELUARAN</h5>
                        <div class="display-8">Rp. {{ $pengeluaranCount }}</div>
                        <a href="{{ route('kasKeluar.index') }}">
                            <p class="card-text text-white">Lihat Detail <i class="bi bi-chevron-double-right ml-2"></i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- End Page Title -->

</main><!-- End #main -->
