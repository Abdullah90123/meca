<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mecapparels</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <style>
    :root {
      /* Color palette (Dark Mode Only) */
      --color-bg: #0F172A;
      --color-bg-card: #1E293B;
      --color-text: #F1F5F9;
      --color-muted: #94A3B8;
      --color-primary: #6366F1;
      --color-primary-hover: #4F46E5;
      --color-primary-active: #4338CA;
      --color-accent: #FBBF24;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      background-color: var(--color-bg);
      color: var(--color-text);
      line-height: 1.6;
    }

    a { text-decoration: none; color: inherit; }

    /* Navbar */
    nav {
      background-color: var(--color-bg-card);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }
    nav .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }
    nav a.logo {
      font-size: 1.75rem;
      font-weight: bold;
      color: var(--color-primary);
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 1.25rem;
      padding: 0;
      margin: 0;
    }
    nav ul li a {
      color: var(--color-muted);
      font-weight: 500;
      transition: color 0.2s ease;
    }
    nav ul li a:hover {
      color: var(--color-primary);
    }

    .btn {
      padding: 0.5em 1.2em;
      background: var(--color-primary);
      color: var(--color-text);
      border-radius: 0.375rem;
      font-weight: 600;
      transition: background 0.2s;
    }
    .btn:hover { background: var(--color-primary-hover); }
    .btn:active { background: var(--color-primary-active); }

    /* Hero Section */
    .hero {
      text-align: center;
      padding: 5rem 1rem 3rem;
      background: linear-gradient(to right, #1E293B, #0F172A);
    }
    .hero h1 {
      font-size: 2.8rem;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.2rem;
      color: var(--color-muted);
      max-width: 600px;
      margin: 0 auto 2rem;
    }

    /* Features / Products */
    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
      max-width: 1200px;
      margin: 0 auto;
      padding: 3rem 1rem;
    }
    .feature-card {
      background: var(--color-bg-card);
      padding: 1.5rem;
      border-radius: 0.5rem;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-align: center;
    }
    .feature-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
    .feature-card svg {
      margin-bottom: 1rem;
    }
    .feature-card h3 {
      font-size: 1.25rem;
      margin: 0.5rem 0;
    }
    .feature-card p {
      color: var(--color-muted);
      font-size: 1rem;
    }

    @media (max-width: 768px) {
      nav .container {
        flex-direction: column;
        align-items: flex-start;
      }
      nav ul {
        margin-top: 1rem;
        flex-direction: column;
        gap: 0.5rem;
      }
    }
  </style>
</head>
<body>

  <!-- Responsive Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
      <a class="navbar-brand logo" href="<?= base_url('home');?>">Mecapparels</a>
      <button
        class="navbar-toggler border-0"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainNav"
        aria-controls="mainNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="mainNav">
        <ul class="navbar-nav mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link btn ms-md-3" href="<?= base_url('products');?>">Products</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>