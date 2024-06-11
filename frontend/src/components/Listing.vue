<template>
    <div class="listing">
      <button @click="$router.go(-1)">Back</button>
      <img :src="listing.image" alt="dorm or apartment" class="listing-image" />
      <h2>{{ listing.name }}</h2>
      <p><strong>Type of room:</strong> {{ listing.roomType }}</p>
      <p><strong>Rented to:</strong> {{ listing.rentedTo }}</p>
      <p><strong>Description:</strong> {{ listing.description }}</p>
      <p><strong>Room facility:</strong> {{ listing.facility }}</p>
      <p><strong>Price:</strong> {{ listing.price }}</p>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      listing: Object
    }
  }
  </script>
  
  <style scoped>
  .listing {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 20px 0;
  }
  .listing-image {
    width: 100%;
    height: auto;
    border-radius: 5px;
  }
  button {
    background-color: #35424a;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  button:hover {
    background-color: #e8491d;
  }
  </style>
  