<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Reviews</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" id="nav_element" href="{{  route('main')  }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_element" href="{{  route('listReviews')  }}">Reviews list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_element" href="{{  route('addOrganization')  }}">Add
                            organization
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_element" href="{{  route('addReview')  }}">Add
                            review
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_element" href="{{  route('authorization')  }}">Authorization
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_element" href="{{  route('registration')  }}">Registration
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_element" href="{{  route('test')  }}">Test
                        </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
