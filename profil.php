<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nesfy - Profil</title>
   
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--CSS --> 
  <link rel="stylesheet" href= "style.css">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>
  <nav class="navbar navbar-light bg-white shadow-sm">
    <div class="container">
    <a href="index.php">
            <img src="img/Nesfy.png"  alt="" width="50" height="50">
          </a>
           
        <div style="text-align:left; "> <a class="navbar-brand" href="index.php">Nesfy</a> 
        <a href="index.php" class="btn btn-outline-primary me-2"><i class="fa-solid fa-house"></i> Ana Sayfa</a>
        <a href="ayarlar.php" class="btn btn-outline-primary me-2"><i class="fa-solid fa-gear"></i> Ayarlar</a>
        <a href="giris.php" class="btn btn-outline-danger"><i class="fa-solid fa-right-from-bracket"></i> Çıkış</a>
        
      </div>
    </div>
  </nav>
  <!-- Profil Bölümü -->
  <div class="container mt-4" style="max-width: 700px;">
  <div style="text-align:center"  > 
    <div class="profile-card mb-4">
      <img src="img/enes.jpg "class= "rounded-circle me-3" alt="Profil Fotoğrafı" width="150" height="150">
      <h4>@enes81905</h4>
      <p class="text-muted mb-2">“Kod yazmak bir sanattır 🎨”</p>
</div>
      <div class="profile-stats">
        <div><span>81</span><br>Takipçi</div>
        <div><span>81</span><br>Takip</div>
      </div>

      
    </div>

    <!-- Kullanıcının Gönderileri -->
    <h5 class="text-white mb-3"><i class="fa-solid fa-paper-plane me-2"></i>Gönderiler</h5>

    <div class="card mb-3 shadow-sm">
      <div class="card-body d-flex">
        <img src="img/enes.jpg" class="rounded-circle me-3" width="45" height="45" alt="avatar">
        <div>
          <strong>@enes81905</strong> <span class="text-muted">· 5dk önce</span>
          <p class="mt-2 mb-2">Yeni proje kodlamaya başladım! 🚀</p>
          <img src="img/kod.webp"alt="" width="480" height="280" > <div style="margin: 5px;"> </div>
          <button class="btn btn-sm btn-outline-primary"><i class="fa-regular fa-thumbs-up"></i> Beğen</button>
          <button class="btn btn-sm btn-outline-secondary"><i class="fa-regular fa-comment"></i> Yorum</button>
        </div>
      </div>
    </div>

    <div class="card mb-3 shadow-sm">
      <div class="card-body d-flex">
        <img src="img/enes.jpg" class="rounded-circle me-3" width="45" height="45" alt="avatar">
        <div>
          <strong>@enes81905</strong> <span class="text-muted">· 30dk önce</span>
          <p class="mt-2 mb-2">#Galatasaray</p>
          <img src="img/osh.png"alt="" width="300" height="350" >
          <div style="margin: 5px;"> </div><button class="btn btn-sm btn-outline-primary"><i class="fa-regular fa-thumbs-up"></i> Beğen</button>
          <button class="btn btn-sm btn-outline-secondary"><i class="fa-regular fa-comment"></i> Yorum</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Profil Düzenleme Modalı -->
  <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="editProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProfileLabel">Profili Düzenle</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3 text-center">
            <img src="img/avatar.png" width="80" class="rounded-circle mb-2" alt="avatar">
            <input type="file" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Kullanıcı Adı</label>
            <input type="text" class="form-control" value="@enes">
          </div>

          <div class="mb-3">
            <label class="form-label">Biyografi</label>
            <textarea class="form-control" rows="2">Kod yazmak bir sanattır 🎨</textarea>
          </div>

          <div class="text-end">
            <button class="btn btn-primary"><i class="fa-solid fa-floppy-disk me-1"></i> Kaydet</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
