@extends('layout')

@section('content')
    <!-- Hero Section with Overlay -->
    <div class="jumbotron jumbotron-fluid bg-light">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <h1 class="display-4 fw-semibold">Healthy Tasty Lunch</h1>
              <p class="lead">For Healthy Life</p>
              <p class="lead">Fresh and tasty, seafood curry of shrimp, consecte tur adfh euid gnibh eug ercoree. </p>
              <a href="#menu" class="btn btn-primary btn-lg">View Menu</a>
            </div>
            <div class="col-md-6">
              <img src="https://images.unsplash.com/photo-1495214783159-3503fd1b572d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid rounded" alt="Healthy Tasty Lunch">
            </div>
          </div>
        </div>
      </div>

    <!-- Menu Section with Improved Layout -->
    <section id="menu" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Signature Dishes</h2>
                <p class="text-muted">Crafted with passion, served with love</p>
            </div>

            <div class="row g-4">
                <!-- Menu Item 1 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <div class="card-img-top overflow-hidden position-relative">
                            <img src="https://images.unsplash.com/photo-1495214783159-3503fd1b572d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 transform-scale" alt="Grilled Chicken">
                            <div class="card-overlay position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a href="#" class="btn btn-white rounded-circle"><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Grilled Chicken Delight</h5>
                            <p class="card-text text-muted mb-3">Succulent grilled chicken with garden-fresh vegetables</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-primary mb-0">$12.99</span>
                                <button class="btn btn-outline-primary btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <div class="card-img-top overflow-hidden position-relative">
                            <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 transform-scale" alt="Spaghetti Bolognese">
                            <div class="card-overlay position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a href="#" class="btn btn-white rounded-circle"><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Spaghetti Bolognese</h5>
                            <p class="card-text text-muted mb-3">Classic Italian pasta with rich, hearty meat sauce</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-primary mb-0">$10.99</span>
                                <button class="btn btn-outline-primary btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="col-md-4">
                    <div class="card border-0 h-100 hover-lift">
                        <div class="card-img-top overflow-hidden position-relative">
                            <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-100 transform-scale" alt="Caesar Salad">
                            <div class="card-overlay position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                <a href="#" class="btn btn-white rounded-circle"><i class="bi bi-plus"></i></a>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold mb-2">Crisp Caesar Salad</h5>
                            <p class="card-text text-muted mb-3">Fresh romaine, parmesan, and homemade croutons</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 text-primary mb-0">$8.99</span>
                                <button class="btn btn-outline-primary btn-sm">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="about-image overflow-hidden rounded-4 shadow-lg">
                        <img src="https://via.placeholder.com/600x400" alt="Our Restaurant" class="img-fluid w-100">
                    </div>
                </div>
                <div class="col-md-6 ps-md-5">
                    <h2 class="display-5 fw-bold mb-4">Our Story</h2>
                    <p class="lead text-muted mb-4">
                        Established in the heart of the city, our restaurant is a celebration of culinary passion and local flavors.
                        We believe in sourcing the freshest ingredients and creating memorable dining experiences.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i>Farm-to-Table Ingredients</li>
                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i>Innovative Culinary Techniques</li>
                        <li class="mb-3"><i class="bi bi-check-circle text-primary me-2"></i>Warm and Inviting Atmosphere</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS for Additional Effects -->
    <style>
        .hero-image {
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-10px);
        }

        .transform-scale {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover .transform-scale {
            transform: scale(1.1);
        }

        .card-overlay {
            background: rgba(0,0,0,0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .hover-lift:hover .card-overlay {
            opacity: 1;
        }

        .card-overlay .btn-white {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection
