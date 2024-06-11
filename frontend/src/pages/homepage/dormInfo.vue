<template>
    <div class="dormitory-container">
      <header>
        <div class="w-full max-w-md flex items-center mb-4">
                <router-link :to="{ name: 'HomePage' }">
                    <svg class="w-5 h-5" style="margin-right: 16px;" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" transform="rotate(90 5 3)" />
                    </svg>
                </router-link>
                <h1>VIP Dormitory Type A</h1>
        </div>
        <h2>Phnom Penh</h2>
        <h2>Location: googlemaps </h2>
        <p>Wifi - AC - Bathroom - No pets</p>
      </header>

      <section class="managed-by">
        Dormitory managed by sokeng
      </section>

      <section class="description">
        <h3>Description</h3>
        <p>This dormitory consists of 3 floors. Room type A (VIP) is at the top with windows facing outside and towards the corridor.</p>
        <p>There is also a regular AC cleaning service every 3 months.</p>
      </section>

      <section class="facility">
        <h3>Room Facility</h3>
        <p>AC</p>
        <p>Bedrooms</p>
        <p>Bath</p>
        <p>TV</p>
        <p>Electric</p>
      </section>

      <footer>
        <div class="price">80$/month</div>
        <button class="book-button">Book</button>
      </footer>
    </div>
  </template>
  
  <style scoped>
  .dormitory-container {
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #fff;
    padding: 20px;
    width: 90%; /* Adjust the width as needed */
    max-width: 600px; /* Or set to a fixed max-width */
    margin: 20px auto; /* Centering the box */
    box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Optional: adds shadow for better focus */
  }
  
  header, .managed-by, .description, footer {
    margin-bottom: 20px;
  }
  
  .managed-by {
    background-color: #f0f0f0;
    padding: 10px;
    text-align: center;
  }
  
  .description h3 {
    margin-bottom: 5px;
  }
  
  .facility h3 {
    margin-bottom: 5px;
  }

  .price {
    font-size: 24px;
    font-weight: bold;
    color: green; /* Make the price stand out */
  }
  
  .book-button {
    background-color: #4CAF50; /* Set the background color */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 20px; /* Rounded corners */
    cursor: pointer;
    font-size: 18px;
  }
  
  .book-button:hover {
    background-color: #45a049; /* Slightly darker on hover */
  }
  </style>
  