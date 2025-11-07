@extends('layouts.app')

@section('title', 'Welcome - School Management System')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section text-center ">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Welcome to SMS</h1>
            <p class="lead mb-4">School Management System</p>
            <p class="mb-5">A comprehensive platform designed to streamline school operations and enhance the educational experience for everyone involved.</p>
            <a href="#features" class="btn btn-light btn-lg me-3">Explore Features</a>
            <a href="/register" class="btn btn-outline-light btn-lg">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="display-5 fw-bold">Why Choose Our System?</h2>
                    <p class="lead">We're making school management effortless and accessible for all stakeholders</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="card-body">
                            <div class="feature-icon mb-3">🚀</div>
                            <h5 class="card-title">Easy to Use</h5>
                            <p class="card-text">Intuitive interface designed for users of all technical backgrounds</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="card-body">
                            <div class="feature-icon mb-3">🔒</div>
                            <h5 class="card-title">Secure & Reliable</h5>
                            <p class="card-text">Your data is protected with enterprise-level security measures</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="card-body">
                            <div class="feature-icon mb-3">⚡</div>
                            <h5 class="card-title">Real-time Updates</h5>
                            <p class="card-text">Instant notifications and live updates for all important activities</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Roles Section -->
    <section id="roles" class="role-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="display-5 fw-bold">Designed For Everyone</h2>
                    <p class="lead">Tailored experiences for different users in the educational ecosystem</p>
                </div>
            </div>
            
            <div class="row g-4">
                <!-- Parents -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="role-icon mb-3" style="font-size: 3rem;">👨‍👩‍👧‍👦</div>
                            <h4 class="card-title">For Parents</h4>
                            <p class="card-text">
                                <strong>Monitor your child's academic journey effortlessly!</strong>
                            </p>
                            <ul class="list-unstyled text-start">
                                <li>✓ View real-time results and reports</li>
                                <li>✓ Track academic progress</li>
                                <li>✓ Receive performance notifications</li>
                                <li>✓ Access attendance records</li>
                                <li>✓ Communicate with teachers</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Students -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="role-icon mb-3" style="font-size: 3rem;">🎓</div>
                            <h4 class="card-title">For Students</h4>
                            <p class="card-text">
                                <strong>Take control of your learning experience!</strong>
                            </p>
                            <ul class="list-unstyled text-start">
                                <li>✓ Access your results anytime</li>
                                <li>✓ View performance analytics</li>
                                <li>✓ Download report cards</li>
                                <li>✓ Check assignment deadlines</li>
                                <li>✓ Track your academic growth</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Teachers -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="role-icon mb-3" style="font-size: 3rem;">👨‍🏫</div>
                            <h4 class="card-title">For Teachers</h4>
                            <p class="card-text">
                                <strong>Streamline your academic responsibilities!</strong>
                            </p>
                            <ul class="list-unstyled text-start">
                                <li>✓ Upload student results easily</li>
                                <li>✓ Edit and update records</li>
                                <li>✓ Delete outdated information</li>
                                <li>✓ Generate performance reports</li>
                                <li>✓ Manage class activities</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Bursar -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="role-icon mb-3" style="font-size: 3rem;">💰</div>
                            <h4 class="card-title">For Bursar</h4>
                            <p class="card-text">
                                <strong>Efficient financial management made simple!</strong>
                            </p>
                            <ul class="list-unstyled text-start">
                                <li>✓ Upload fee information</li>
                                <li>✓ Track payment records</li>
                                <li>✓ Generate financial reports</li>
                                <li>✓ Manage billing cycles</li>
                                <li>✓ Send payment reminders</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- School Admin -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="role-icon mb-3" style="font-size: 3rem;">🏫</div>
                            <h4 class="card-title">School Admin</h4>
                            <p class="card-text">
                                <strong>Complete control over school operations!</strong>
                            </p>
                            <ul class="list-unstyled text-start">
                                <li>✓ Upload school information</li>
                                <li>✓ Edit institutional details</li>
                                <li>✓ Delete outdated data</li>
                                <li>✓ Manage user accounts</li>
                                <li>✓ Oversee system operations</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Super Admin -->
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="role-icon mb-3" style="font-size: 3rem;">🌐</div>
                            <h4 class="card-title">Super Admin (Government)</h4>
                            <p class="card-text">
                                <strong>Centralized oversight and control!</strong>
                            </p>
                            <ul class="list-unstyled text-start">
                                <li>✓ Monitor all school activities</li>
                                <li>✓ Ensure compliance standards</li>
                                <li>✓ Generate national reports</li>
                                <li>✓ Manage system-wide settings</li>
                                <li>✓ Control platform access</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-black text-white">
        <div class="container text-center">
            <h2 class="display-6 fw-bold mb-4">Ready to Transform Education Management?</h2>
            <p class="lead mb-4">Join thousands of schools already using our platform to enhance their educational ecosystem</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="/register" class="btn btn-light btn-lg">Create Account</a>
                <a href="/login" class="btn btn-outline-light btn-lg">Sign In</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-6 fw-bold mb-4">About SMS</h2>
                    <p class="lead">
                        We are committed to bridging the gap between technology and education. Our School Management System 
                        is designed to make educational administration seamless, transparent, and efficient for all stakeholders.
                    </p>
                    <p>
                        From parents wanting to stay informed about their child's progress to government bodies needing 
                        comprehensive oversight, our platform serves everyone in the educational chain with precision and reliability.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <div style="font-size: 8rem;">🎯</div>
                </div>
            </div>
        </div>
    </section>
@endsection