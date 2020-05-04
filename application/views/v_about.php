<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card-about {
  margin-top: 90px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  margin-left: auto;
  margin-right: 20px;
}
.bodi{
  margin-top: 90px;
  margin-left: 20px;
}
.title-card {
  color: grey;
  font-size: 18px;
}

.imgabt{
  border-radius: 25px 25px 0 0;
}
.about{
  margin-bottom: 40px;
}
.flex-container{
  display: flex;
  margin: auto;
}
</style>
</head>
<body>
<div class="bodi">
<h2 class="about" style="text-align:left ">Tentang Aidok</h2>
<p>Web Aidok merupakan website kesehatan yang dapat menunjang dan mempermudah masyarakat dalam mencari dokter. Website ini menyediakan fitur chat dengan <br> dokter, kemudian buat janji dengan dokter (dengan mendatangi rumah sakit ia bekerja).
Di website ini juga menyediakan fitur pencarian rumah sakit yang ada beserta list dokter yang bekerja dan poli apa saja yang ada  di rumah sakit tersebut. <br><br> Pembuatan web Aidok ini dibuat demi memenuhi topik tugas besar yang berkaitan dengan kesehatan. Situs konsultasi dengan dokter ini merupakan salah satu topik hangat yang sedang ada saat ini, maka kami membuat fitur tersebut yang menjadi highlight di tugas besar Pemrograman Web ini.</p>
<br>
<h2 class="about" style="text-align:center">Para Pendekar Aidok</h2>
  <div class="flex-container">
    <div class="card card-about">
        <img src="<?php echo base_url(); ?>/Assets/alvin.png" class="imgabt" alt="alvin" style="width:100%">
        <h2>Alvin Lander</h2>
        <p class="title-card">Back End Developer</p>
        <p>Telkom University</p>
    </div>
      <div class="card card-about">
        <img src="<?php echo base_url(); ?>/Assets/zaki.png" class="imgabt" alt="alvin" style="width:100%">
        <h2>Zakiya Ainur R</h2>
        <p class="title-card">Back End Developer</p>
        <p>Telkom University</p>

      </div>
        <div class="card card-about">
          <img src="<?php echo base_url(); ?>/Assets/dita.png" class="imgabt" alt="alvin" style="width:100%">
          <h2>Dita Anjani</h2>
          <p class="title-card">Front End Developer</p>
          <p>Telkom University</p>

        </div>
    <div class="card card-about">
        <img src="<?php echo base_url(); ?>/Assets/ferzi.png" class="imgabt" alt="alvin" style="width:100%">
        <h2>Ferzi Samal</h2>
        <p class="title-card">Front End Developer</p>
        <p>Telkom University</p>

    </div>
      <div class="card card about">
        <img src="<?php echo base_url(); ?>/Assets/fauzi.png" class="imgabt" alt="alvin" style="width:100%">
        <h2>Fauzi Cahya</h2>
        <p class="title-card">Database Developer</p>
        <p>Telkom University</p>

      </div>
</div>
</div>
</body>
</html>
