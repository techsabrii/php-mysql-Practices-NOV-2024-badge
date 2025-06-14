<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f0f8ff;
      padding: 50px;
    }
    .weather-box {
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-4">🌤️ Weather App</h2>
  <div class="row justify-content-center">
    <div class="col-md-6 weather-box text-center">
      <input type="text" id="cityInput" class="form-control mb-3" placeholder="Enter city name">
      <button onclick="getWeather()" class="btn btn-primary">Get Weather</button>
      <div id="weatherResult" class="mt-4"></div>
    </div>
  </div>
</div>

<script>
  async function getWeather() {
    let city = document.getElementById('cityInput').value.trim();

    if (!city) {
      document.getElementById('weatherResult').innerHTML = `<p class="text-danger">Please enter a city name.</p>`;
      return;
    }

    const apiKey = 'd566c65f60e6aa8e0c02fd08876bc560'; // Your actual API key
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${encodeURIComponent(city)}&appid=${apiKey}&units=metric`;

    try {
      const response = await fetch(url);
      const data = await response.json();
      console.log(data);

      if (data.cod === 200) {
        document.getElementById('weatherResult').innerHTML = `
          <h4>${data.name}, ${data.sys.country}</h4>
          <p><strong>Temperature:</strong> ${data.main.temp} °C</p>
          <p><strong>Weather:</strong> ${data.weather[0].description}</p>
          <p><strong>Humidity:</strong> ${data.main.humidity}%</p>
          <p><strong>Wind Speed:</strong> ${data.wind.speed} m/s</p>
        `;
      } else {
        document.getElementById('weatherResult').innerHTML = `<p class="text-danger">City not found!</p>`;
      }
    } catch (error) {
      console.error(error);
      document.getElementById('weatherResult').innerHTML = `<p class="text-danger">Error fetching data!</p>`;
    }
  }
</script>

</body>
</html>
