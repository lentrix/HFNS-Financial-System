<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-light-green to-yellow">
      <img src="/images/hfns_logo.png" class="w-64 h-64 mb-8">
      <h1 class="text-4xl lg:text-5xl font-bold mb-4">HOLY FAMILY OF NAZARETH SCHOOL, INC.</h1>
      <p class="text-2xl lg:text-3xl mb-8">INTEGRATED ACCOUNTING SYSTEM</p>
      <button @click="redirectToLogin" class="px-6 py-3 text-fff5e1 bg-973131 rounded-md hover:bg-872121">
        Get Started
      </button>
    </div>
  </template>

  <script>
  export default {
    methods: {
      redirectToLogin() {
        this.$inertia.visit('/login');
      }
    }
  }
  </script>

  <style scoped>
  .w-64 {
    width: 20rem;
  }
  .h-64 {
    height: 25rem;
  }
  .bg-973131 {
    background-color: #973131;
  }
  .text-fff5e1 {
    color: #FFF5E1;
  }
  .rounded-md {
    border-radius: 0.375rem;
  }
  .hover\:bg-872121:hover {
    background-color: #872121;
  }

  /* Gradient background */
  .bg-gradient-to-b {
    background-image: linear-gradient(to bottom,#1e9b57, #d9c450); /* light green to yellow */
  }

  /* Responsive font sizes */
  @media (min-width: 768px) {
    .text-4xl {
      font-size: 2.25rem;
    }
    .text-5xl {
      font-size: 3rem;
    }
    .text-2xl {
      font-size: 1.5rem;
    }
    .text-3xl {
      font-size: 1.875rem;
    }
  }
  </style>
