<!DOCTYPE html>
<html lang="tr">
<head>
<?php include 'header.php'; ?>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Nesfy - Ayarlar</title>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href= "style.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4" style="max-width: 700px;">
  <div style="text-align:center"  > 
    <div class="profile-card mb-4">
      <img src="img/enes.jpg "class= "rounded-circle me-3" alt="Profil Fotoğrafı" width="150" height="150">
 
 <div class="container mt-4" style="max-width: 700px;">
 <div class="card shadow-sm">
 <div class="card-body">
            
            <form action="ayarlari_guncelle.php" method="POST"> 
            
                <h5 class="mb-3 text-primary"><i class="fa-solid fa-user-pen me-2"></i>Profil Bilgileri</h5>
                <div class="mb-3">
                    <label for="profile_photo" class="form-label">Profil Fotoğrafı</label>
                    <input class="form-control" type="file" id="profile_photo" name="profile_photo">
                </div>

                <div class="mb-3">
                    <label for="display_name" class="form-label">Görünen Adın</label>
                    <input type="text" class="form-control" id="display_name" name="display_name" placeholder="Adınız Soyadınız">
                </div>

                <div class="mb-3">
                    <label for="bio" class="form-label">Biyografi (Max 160 Karakter)</label>
                    <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Kendiniz hakkında kısa bir şeyler yazın..."></textarea>
                </div>

                <hr>

                <h5 class="mb-3 text-primary"><i class="fa-solid fa-gear me-2"></i>Hesap Ayarları</h5>

                <div class="mb-3">
                    <label for="username" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="@kullaniciadi" value="<?php echo htmlspecialchars($mevcut_kullaniciadi ?? ''); ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-posta</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ornek@mail.com" value="<?php echo htmlspecialchars($mevcut_email ?? ''); ?>">
                </div>

                <div class="mb-3">
                    <label for="new_password" class="form-label">Yeni Şifre</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Yeni Şifreniz">
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Yeni Şifre (Tekrar)</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Yeni Şifrenizi Tekrar Girin">
                </div>

                <hr>

                <h5 class="mb-3 text-primary"><i class="fa-solid fa-lock me-2"></i>Gizlilik Ayarları</h5>
                <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="gizliHesap" name="is_private">
                    <label class="form-check-label" for="gizliHesap">Hesabımı gizli yap</label>
                </div>
                
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" role="switch" id="twoFA" name="two_factor_auth">
                    <label class="form-check-label" for="twoFA">İki Faktörlü Kimlik Doğrulamayı Aç</label>
                </div>

                <hr>

                <h5 class="mb-3 text-primary"><i class="fa-solid fa-bell me-2"></i>Bildirimler</h5>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" id="bildirim1" name="notify_likes" checked>
                    <label class="form-check-label" for="bildirim1">Beğeni bildirimleri</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="bildirim2" name="notify_comments" checked>
                    <label class="form-check-label" for="bildirim2">Yorum bildirimleri</label>
                </div>
                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="bildirim3" name="notify_follows">
                    <label class="form-check-label" for="bildirim3">Yeni takipçi bildirimleri</label>
                </div>

                <div class="text-end mb-4">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk me-1"></i> Ayarları Kaydet</button>
                </div>
            
            </form>
            
            <hr>
            
            <h5 class="mb-3 text-danger"><i class="fa-solid fa-triangle-exclamation me-2"></i>Tehlikeli Alan</h5>
            <p class="text-muted small">Hesabınızı kalıcı olarak silmek istiyorsanız aşağıdaki butona tıklayın. Bu işlem geri alınamaz!</p>
            <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                <i class="fa-solid fa-trash-can me-1"></i> Hesabı Sil
            </button>


      </div>
    </div>
  </div>

<div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteAccountModalLabel">Hesabı Silme Onayı</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Kapat"></button>
      </div>
      <div class="modal-body">
        Hesabınızı silmek istediğinizden emin misiniz? Bu işlem geri alınamaz ve tüm verileriniz kalıcı olarak silinecektir.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
        <a href="hesap_sil.php" class="btn btn-danger">Hesabımı Sil</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>