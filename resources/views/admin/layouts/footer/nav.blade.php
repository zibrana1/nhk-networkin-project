<footer class="footer">
    <div class="container @auth-fluid @endauth">
        <nav>
            <ul class="footer-menu">
                <li>
                    <a href="{{ route('acceuil')}}" class="nav-link" target="_blank">{{ __('NHK networking') }}</a>
                </li>
                <li>
                    <a href="{{ route('A propos')}}" class="nav-link" target="_blank">{{ __('A propos de nous') }}</a>
                </li>
                <li>
                    <a href="{{ route('vente')}}" class="nav-link" target="_blank">{{ __('Vente de matériel informatique') }}</a>
                </li>
            </ul>
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="#">{{ __('NHK networking') }}</a> &amp; {{ __(', made by ZIBRANA 1er&Soumichou') }}
            </p>
        </nav>
    </div>
</footer>