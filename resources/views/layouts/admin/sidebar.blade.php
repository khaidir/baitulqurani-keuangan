<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Summary</li>
                <li>
                    <a href="/" class="waves-effect">
                        <i class='bx bx-home-alt'></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title" key="t-menu">Keuangan</li>
                <li class="{{ request()->is('transaksi/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/transaksi" class="waves-effect {{ request()->is('transaksi/*') == 1 ? 'active' : ''}}">
                        <i class='bx bxs-file-doc'></i>
                        <span key="t-access">Transaksi</span>
                    </a>
                </li>
                <li class="{{ request()->is('jurnal/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/jurnal" class="waves-effect {{ request()->is('jurnal/*') == 1 ? 'active' : ''}}">
                        <i class='bx bx-file'></i>
                        <span key="t-lokasi">Jurnal</span>
                    </a>
                </li>
                <li class="{{ request()->is('bukubesar/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/bukubesar" class="waves-effect {{ request()->is('bukubesar/*') == 1 ? 'active' : ''}}">
                        <i class='bx bx-file'></i>
                        <span key="t-lokasi">Buku Besar</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Master Data</li>
                <li class="{{ request()->is('coa/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/coa" class="waves-effect {{ request()->is('coa/*') == 1 ? 'active' : ''}}">
                        <i class='bx bx-building' ></i>
                        <span key="t-lokasi">Chart of Account</span>
                    </a>
                </li>
                <li class="{{ request()->is('cost-center/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/cost-center" class="waves-effect {{ request()->is('cost-center/*') == 1 ? 'active' : ''}}">
                        <i class='bx bx-git-branch'></i>
                        <span key="t-provider">Cost Center</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Settings</li>
                <li class="{{ request()->is('users/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/users" class="waves-effect {{ request()->is('users/*') == 1 ? 'active' : ''}}">
                        <i class='bx bx-user'></i>
                        <span key="t-provider">Users</span>
                    </a>
                </li>
                <li class="{{ request()->is('roles/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/roles" class="waves-effect {{ request()->is('roles/*') == 1 ? 'active' : ''}}">
                        <i class='bx bx-target-lock'></i>
                        <span key="t-provider">Rules</span>
                    </a>
                </li>
                <li class="{{ request()->is('permissions/*') == 1 ? 'mm-active' : ''}}">
                    <a href="/permissions" class="waves-effect {{ request()->is('permissions/*') == 1 ? 'active' : ''}}">
                        <i class='bx bx-user-circle'></i>
                        <span key="t-provider">Permissions</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
