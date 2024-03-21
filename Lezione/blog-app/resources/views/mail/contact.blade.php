<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form Submission</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @keyframes heartbeat {
      0% { transform: scale(1); }
      50% { transform: scale(1.1); }
      100% { transform: scale(1); }
    }

    @keyframes scale {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    .heart {
      width: 50px;
      animation: heartbeat 1.5s infinite;
    }

    .envelope {
      width: 40px;
      animation: scale 2s infinite;
    }
  </style>
</head>
<body>
  <div class="container" style="max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; background-color: #f8d7da; animation: fadeIn 1s;">
    <h2 style="margin-top: 0; color: #721c24;">Contact Form Submission from {{ config('app.name') }}</h2>
    <div class="sender-info" style="margin-bottom: 20px;">
      <p><strong>From:</strong> &lt;{{ $email }}&gt;</p>
    </div>
    <div class="message" style="margin-bottom: 20px;">
      <p><strong>Message:</strong></p>
      <p>{!! nl2br(e($content)) !!}</p>
    </div>
    <svg class="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#dc3545" width="50px" height="50px">
      <path d="M0 0h24v24H0z" fill="none"/>
      <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
    </svg>
    <svg class="envelope" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007bff" width="40px" height="40px">
      <path d="M0 0h24v24H0z" fill="none"/>
      <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 1.99 2H20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-8 9l-8 5h16l-8-5zm8-3.5l-6.4 4.5L12 14l-3.6 1.5L4 9.5V6h16v3.5z"/>
    </svg>
  </div>

  <style>
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</body>
</html>
