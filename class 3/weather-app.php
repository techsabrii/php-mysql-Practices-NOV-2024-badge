<?php
$weather = '';
$error = '';
$apiKey = 'd566c65f60e6aa8e0c02fd08876bc560';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $city = trim($_POST['city']);

    if (!empty($city)) {
        $url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid={$apiKey}&units=metric";

        $response = @file_get_contents($url);

        if ($response) {
            $data = json_decode($response, true);
            if ($data['cod'] == 200) {
                $weather = "
                    <h4>{$data['name']}, {$data['sys']['country']}</h4>
                    <p><strong>Temperature:</strong> {$data['main']['temp']} °C</p>
                    <p><strong>Temperature:</strong> {$data['main']['temp_min']} °C</p>
                    <p><strong>Weather:</strong> {$data['weather'][0]['description']}</p>
                    <p><strong>Humidity:</strong> {$data['main']['humidity']}%</p>
                    <p><strong>Wind Speed:</strong> {$data['wind']['speed']} m/s</p>
                ";
            } else {
                $error = "City not found!";
            }
        } else {
            $error = "Error fetching weather data!";
        }
    } else {
        $error = "Please enter a city name.";
    }
}
?>

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
      <form method="POST" action="">
        <input type="text" name="city" class="form-control mb-3" placeholder="Enter city name">
        <button type="submit" class="btn btn-primary">Get Weather</button>
      </form>

      <div id="weatherResult" class="mt-4">
        <?php if ($weather) echo $weather; ?>
        <?php if ($error) echo "<p class='text-danger'>$error</p>"; ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>
