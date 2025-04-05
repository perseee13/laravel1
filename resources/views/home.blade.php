<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome | Your Site</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f8f9fa;
    }
    .hero {
      background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1470&q=80') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 150px 20px;
      text-align: center;
      position: relative;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    .hero-content {
      position: relative;
      z-index: 1;
    }
    .features {
      margin-top: 60px;
    }
    .feature-box {
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .feature-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    footer {
      margin-top: 60px;
      padding: 20px;
      text-align: center;
      background: #343a40;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">YourSite</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          <li class="nav-item">
            <a class="btn btn-outline-light ms-3" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary ms-2" href="/register">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <div class="hero-content">
      <h1>Welcome to Your Site</h1>
      <p class="lead">Build amazing things with Laravel.</p>
      <a href="#features" class="btn btn-light btn-lg mt-4">Explore Features</a>
    </div>
  </div>

  <!-- Features Section -->
  <div class="container features" id="features">
    <div class="row text-center">
      <div class="col-md-4 mb-4">
        <div class="feature-box">
          <h3>Fast</h3>
          <p>Lightning fast performance using Laravel's best practices.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="feature-box">
          <h3>Secure</h3>
          <p>Keep your project safe with built-in authentication and protection.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="feature-box">
          <h3>Scalable</h3>
          <p>Ready to grow when you are — easily scalable architecture.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="container my-5" id="contact">
    <div class="text-center mb-4">
      <h2>Contact Us</h2>
      <p>Have questions? We would love to hear from you.</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="mb-3">
            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary w-100">Send Message</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
