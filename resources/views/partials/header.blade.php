<header class="container">
    <nav class="d-flex justify-content-between align-items-center">
        <img src="/img/dc-logo.png" alt="DC Logo">
        <ul class="d-flex align-items-center list-unstyled m-0 h-100 d-none d-lg-flex">
            <li class="me-3 h-100 d-flex align-items-center">
                <a href="/" class="nav-link fw-bold text-uppercase me-3">Home</a>
                <a href="/comics-list" class="nav-link fw-bold text-uppercase">Comics List</a>
            </li>
        </ul>
    </nav>
</header>



<style lang="scss" scoped>
    @use '../assets/styles/colors.scss'as *;

    .border-transparent {
        border-bottom: 3px solid transparent;
    }

    .active {
        border-bottom: 3px solid $blue-secondary;
        color: $blue-secondary;
    }

    .active-dropdown {
        background-color: $blue-secondary;
        color: white;
    }

    nav {
        ul {
            color: $bg-contacts;

            li:hover {
                border-bottom: 3px solid $blue-secondary;
                color: $blue-secondary;
            }
        }
    }

    .dropdown {
        ul {
            right: 0px;
        }

        li:hover {
            border: none;
            color: white;
        }
    }
</style>
