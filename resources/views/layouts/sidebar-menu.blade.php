<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt green"></i>
                <p>
                    Dashboard
                </p>
            </router-link>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-microphone green"></i>
                <p>
                    Podcasts
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>

            <ul class="nav nav-treeview">

                <li class="ml-3 nav-item">
                    <router-link to="/podcastAudience" class="nav-link">
                        <p>
                            Audience
                        </p>
                    </router-link>
                </li>


                <li class="ml-3 nav-item">
                    <router-link to="/podcastRankings" class="nav-link">
                        <p>
                            Rankings
                        </p>
                    </router-link>
                </li>


                <li class="ml-3 nav-item">
                    <router-link to="/podcastRankingsTable" class="nav-link">
                        <p>
                            Rankings Table
                        </p>
                    </router-link>
                </li>


                <li class="ml-3 nav-item">
                    <router-link to="/podcastSEO" class="nav-link">
                        <p>
                            SEO
                        </p>
                    </router-link>
                </li>

                <li class="ml-3 nav-item">
                    <router-link to="/podcastOptimization" class="nav-link">
                        <p>
                            Optimization
                        </p>
                    </router-link>
                </li>


                <li class="ml-3 nav-item">
                    <router-link to="/products" class="nav-link">
                        <p>
                            Product
                        </p>
                    </router-link>
                </li>

                <li class="ml-3 nav-item">
                    <router-link to="/product/category" class="nav-link">
                        <p>
                            Category
                        </p>
                    </router-link>
                </li>

            </ul>

        <li class="nav-item">
            <router-link to="/users" class="nav-link">
                <i class="fa fa-users nav-icon green"></i>
                <p>Users</p>
            </router-link>
        </li>


        </li>



        <li class="nav-item">
            <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-power-off red"></i>
                <p>
                    {{ __('Logout') }}
                </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>

