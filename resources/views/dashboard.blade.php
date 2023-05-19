<x-admin-layout>
<style>
    /* Custom styles */
    .card {
      background-color: #f5f5f5;
      border-radius: 0.75rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      color: #333;
      font-size: 1.5rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .card-text {
      color: #666;
      font-size: 1rem;
      margin-bottom: 0.5rem;
    }

    .card-highlight {
      color: #ff6600;
      font-weight: bold;
    }

    .footer {
      background-color: #333;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header -->
    

    <!-- Main Content -->
    <main class="container mx-auto py-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Sales Data -->
        <div class="card p-6">
          <h2 class="card-title">Sales Data</h2>
          <p class="card-text">Total Sales: <span class="card-highlight">$10,000</span></p>
          <p class="card-text">Today's Sales: <span class="card-highlight">$1,000</span></p>
          <p class="card-text">Monthly Sales: <span class="card-highlight">$5,000</span></p>
          <!-- Add more sales data here -->
        </div>

        <!-- Package Data -->
        <div class="card p-6">
          <h2 class="card-title">Package Data</h2>
          <p class="card-text">Total Packages: <span class="card-highlight">50</span></p>
          <p class="card-text">Available Packages: <span class="card-highlight">20</span></p>
          <p class="card-text">Sold Packages: <span class="card-highlight">30</span></p>
          <!-- Add more package data here -->
        </div>

        <!-- Visitor Data -->
        <div class="card p-6">
          <h2 class="card-title">Visitor Data</h2>
          <p class="card-text">Total Visitors: <span class="card-highlight">1,000</span></p>
          <p class="card-text">Today's Visitors: <span class="card-highlight">100</span></p>
          <p class="card-text">Monthly Visitors: <span class="card-highlight">500</span></p>
          <!-- Add more visitor data here -->
        </div>

        <!-- Website Info -->
        <div class="card p-6">
          <h2 class="card-title">Website Info</h2>
          <p class="card-text">Website Name: <span class="card-highlight">My Website</span></p>
          <p class="card-text">Website URL: <span class="card-highlight">www.example.com</span></p>
          <p class="card-text">Website Visitors: <span class="card-highlight">10,000</span></p>
          <!-- Add more website info here -->
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <!-- Footer content -->
      &copy; 2023 Dashboard Overview. All rights reserved.
    </footer>
  </div>
</body>
</x-admin-layout>
