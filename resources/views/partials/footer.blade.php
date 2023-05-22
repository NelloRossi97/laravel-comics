<footer>
    <div class="container d-flex justify-content-between position-relative overflow-hidden">
        <div class="lists-container py-5 d-flex gap-5">
            <div>
                <div>
                    <h3 class="text-uppercase">DC Comics</h3>
                    <ul class="list-unstyled">
                        @foreach ($comicsArray as $item)
                            <li>{{ $item['text'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-uppercase">Shop</h3>
                    <ul class="list-unstyled">
                        @foreach ($shopArray as $item)
                            <li>{{ $item['text'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div>
                <h3 class="text-uppercase">DC</h3>
                <ul class="list-unstyled">
                    @foreach ($dcArray as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h3 class="text-uppercase">sites</h3>
                <ul class="list-unstyled">
                    @foreach ($sitesArray as $item)
                        <li>{{ $item['text'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="logo-container position-absolute d-none d-xl-block">
            <img src="/img/dc-logo-bg.png" alt="Logo">
        </div>
    </div>
    @include('partials.contacts')
</footer>

<style lang="scss" scoped>
    li {
        color: #797979;

        &:hover {
            cursor: pointer;
        }
    }

    .logo-container {
        height: 150%;
        right: 0;
        top: -80px;
    }
</style>
