<!DOCTYPE html>
<html lang="tr">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nesfy - Giriş Yap</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"href=style.css>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #66758bff;
      font-family: 'Segoe UI', sans-serif;
    }

    .login-card {
      max-width: 400px;
      margin: 80px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }

    .login-card h3 {
      font-weight: bold;
      text-align: center;
      margin-bottom: 25px;
      color: #2c3e50;
    }

    .btn-primary {
      width: 100%;
    }

    a {
      text-decoration: none;
    }

    .footer-text {
      text-align: center;
      margin-top: 15px;
      color: #2c3e50;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <h3><i class="fa-solid fa-user-circle me-2"></i> Nesfy Giriş</h3>

    <form>
      <div class="mb-3">
        <label class="form-label">Kullanıcı Adı veya E-posta</label>
        <input type="text" class="form-control" placeholder="ornek@gmail.com">
      </div>

      <div class="mb-3">
        <label class="form-label">Şifre</label>
        <input type="password" class="form-control" placeholder="********">
      </div>

      <button type="submit" class="btn btn-primary mt-2">
        <i class="fa-solid fa-right-to-bracket me-1"></i> Giriş Yap
      </button>
    </form>

    <div class="footer-text">
      <p class="mt-3">Hesabın yok mu? <a href="kayit.php" class="text-primary">Kayıt ol</a></p>
    </div>
  </div>

</body>
</html>
    