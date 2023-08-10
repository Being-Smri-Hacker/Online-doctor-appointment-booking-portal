<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Contact Us Page</title>
  <script src="https://kit.fontawesome.com/c32adfdcda.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="contact_us.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  min-height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-image: url(../img/contact.jpg);
  background-size: cover;
  background-position: center;
  position: relative;
}

body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(52, 26, 46, 0.8);
}

section {
  position: relative;
  z-index: 3;
  padding-top: 50px;
  padding-bottom: 50px;
}

.container {
  max-width: 1080px;
  margin-left: 10%;
  margin-right: 10%;
  padding-left: 20px;
  padding-right: 20px;
}

.section-header {
  margin-bottom: 50px;
  text-align: center;
}

.section-header h2 {
  color: #FFF;
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
}

.section-header p {
  color: #FFF;
}

.row  {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.contact-info {
  width: 50%;
  align-items:center;
}

.contact-info-item {
  display: flex;
  margin-bottom: 30px;

}

.contact-info-icon {
  height: 70px;
  width: 70px;
  background-color: #fff;
  text-align: center;
  border-radius: 50%;
}

.contact-info-icon i {
  font-size: 30px;
  line-height: 70px;
}

.contact-info-content {
  margin-left: 20px;
}

.contact-info-content h4 {
  color: #fbf5fa;
  font-size: 1.4em;
  margin-bottom: 5px;
}

.contact-info-content p {
  color: #FFF;
  font-size: 1em;
}



@media (max-width: 991px) {
  section {
    padding-top: 50px;
    padding-bottom: 50px;
  }

  .row {
    flex-direction: column;
  }

  .contact-info {
    margin-bottom: 40px;
    width: 100%;
  }


}
  </style>
</head>
<body>

  <section>

    <div class="section-header">
      <div class="container">
        <h2>Contact Us</h2>
        <p>ExpressCare is always looking to make things easier for you. Our aim is to provide our customers with the best medical facilities, constant care, and reliable support. If you would like to get in touch with a doctor from a specific department or would like some specific information about the services, feel free to contact us anytime. </p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="contact-info">
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-home"></i>
            </div>

            <div class="contact-info-content">
              <h4>Address</h4>
              <p>No 10, Radhakrishnan St,<br> Subramania Salai, Fathima Nagar,<br> Valasaravakkam, Chennai, Tamil Nadu ,<br> Chennai-600023</p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-phone"></i>
            </div>

            <div class="contact-info-content">
              <h4>Phone</h4>
              <p>571-457-2321</p>
              <p>235-356-6799</p>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="contact-info-icon">
              <i class="fas fa-envelope"></i>
            </div>

            <div class="contact-info-content">
              <h4>Email</h4>
             <p>expresscare@gmail.com</p>
            </div>
          </div>

        </div>
        </div>
    </div>
</section>
</body>
</html>
