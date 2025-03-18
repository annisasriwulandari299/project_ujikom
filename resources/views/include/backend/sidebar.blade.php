<div class="sidebar-menu">
        <ul class="menu">
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item {{ url()->current() == route('home') ? 'active' : '' }} ">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ url()->current() == route('kategori.index') ? 'active' : '' }}">
                    <a href="{{ route('kategori.index') }}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i>
                        <span>Menu</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="{{ route('pemasukan.index') }}">Pemasukan</a>
                        </li>
                        <li>
                            <a href="{{ route('pengeluaran.index') }}">Pengeluaran</a>
                        </li>
                        <li>
                            <a href="{{ route('anggaran.index') }}">Anggaran</a>
                        </li>
                        <li>
                            <a href="{{ route('laporan.anggaran') }}"> Laporan Anggaran</a>
                        </li>
                        <li>
                            <a href="{{ route('laporan.pemasukan') }}"> Laporan Pemasukan</a>
                        </li>
                        <li>
                            <a href="{{ route('laporan.pengeluaran') }}"> Laporan Pengeluaran</a>
                        </li>
                        <li>
                            <a href="{{ route('laporan.margin') }}"> Laporan Margin</a>
                        </li>
                    </ul>
                </li>
            </ul>
</div>
