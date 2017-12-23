<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('common.home') }}">
                {{ config('app.name') }}
            </a>

            <!--suppress XmlUnboundNsPrefix -->
            <div class="navbar-burger burger" v-on:click="navToggle = !navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>
