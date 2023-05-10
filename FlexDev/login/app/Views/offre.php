  <html lang="fr">
  <link rel="stylesheet" href="../css/offers.css" />
  <body>
    <div class="container">
      <header>
        <h1>Offre d'emploi</h1>
        <p>
          Ici vous trouverez des Offres d'emploi Développeur Web
        </p>
      </header>
      <section>
        <div class="job">
          <img src="https://i.postimg.cc/MZYcgynJ/development.png" alt="" />
          <div class="job-info">
            <small>PERFMANAGER</small>
            <h3>Développeur Web Full-Stack</h3>
            <p>
              Publiée par  : <span>Genie Thompson</span> &nbsp;&nbsp; dans :
              <span>Development</span> &nbsp;&nbsp;Date : 21.09.2022
            </p>
          </div>
          <p>Paris <br /><small>France</small></p>
          <div class="offer">
            <h3> 1500€ - 1700€ </h3>
            <button type="submit">Postuler</button>
          </div>
        </div>
      </section>
      <section>
        <div class="job">
          <img
            src="https://i.postimg.cc/43TsJS0L/responsive-website.jpg"
            alt=""
          />
          <div class="job-info">
            <small>Freelance</small>
            <h3>Conception d'un site internet responsive</h3>
            <p>
              Publiée par : <span>Gaston Houdin</span> &nbsp;&nbsp; dans :
              <span>Design Web</span> &nbsp;&nbsp;Date : 18.07.2022
            </p>
          </div>
          <p>Nantes <br /><small>France</small></p>
          <div class="offer">
            <h3>1200€</h3>
            <button type="submit">Postuler</button>
          </div>
        </div>
      </section>
      <section>
        <div class="job">
          <img
            src="https://i.postimg.cc/prvsrDvt/teaching-english.png"
            alt=""
          />
          <div class="job-info">
            <small class="parttime">ArInfo</small>
            <h3>Développeur Web .Net C# H/F</h3>
            <p>
              Publiée : <span>Lucille Brousseau</span> &nbsp;&nbsp; dans :
              <span>Development</span> &nbsp;&nbsp;Date : 01.09.2022
            </p>
          </div>
          <p>Toulouse <br /><small>France</small></p>
          <div class="offer">
            <h3>1800-2100</h3>
            <button type="submit">Postuler</button>
          </div>
        </div>
      </section>
      <section>
        <div class="job">
          <img src="https://i.postimg.cc/9MmpjcYW/graphic-d.jpg" alt="" />
          <div class="job-info">
            <small class="full-time">ManPower</small>
            <h3>Concepteur - Design - Développeur Informatique H/F</h3>
            <p>
              Publiée : <span>Josué Jauffret</span> &nbsp;&nbsp; dans :
              <span>Developpement</span> &nbsp;&nbsp;Date : 15.10.2022
            </p>
          </div>
          <p>Paris <br /><small>France</small></p>
          <div class="offer">
            <h3>1500€-1700</h3>
            <button type="submit">Postuler</button>
          </div>
        </div>
      </section>
      <section>
        <div class="job">
          <img src="https://i.postimg.cc/dtVVZp4L/typography.png" alt="" />
          <div class="job-info">
            <small>Freelance</small>
            <h3>Développeur Logiciel Java Freelance H/F</h3>
            <p>
              Publiée: <span>Bruno Lémery</span> &nbsp;&nbsp; dans :
              <span>Développement</span> &nbsp;&nbsp;Date : 28.07.2022
            </p>
          </div>
          <p>Toulouse <br /><small>France</small></p>
          <div class="offer">
            <h3>3000€</h3>
            <button type="submit">Postuler</button>
          </div>
        </div>
      </section>
      <section>
        <div class="job">
          <img src="https://i.postimg.cc/CKL3cpnq/wordpress.jpg" alt="" />
          <div class="job-info">
            <small class="Partnership">DenAvel</small>
            <h3>Développeur Wordpress H/F</h3>
            <p>
              Publiée : <span>Bastien Carrell</span> &nbsp;&nbsp; dans :
              <span>WordPress Developpement</span> &nbsp;&nbsp;Date : 06.08.2022
            </p>
          </div>
          <p>Nantes<br /><small>France</small></p>
          <div class="offer">
            <h3>-</h3>
            <button type="submit">Contact</button>
          </div>
        </div>
      </section>
    </div>
  </body>
  <style>
  * {
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  margin: 0px;
  padding: 0px;
}
body {
  font-family: "Open Sans", sans-serif;
}

@media (max-width: 800px) {
  .container {
    padding: 20px 30px;
  }
}
/* Start Header */
.container header {
  text-align: center;
  margin-bottom: 80px;
}
.container header h1 {
  position: relative;
  padding: 0px 0px 30px;
  color: #364248;
}
.container header h1::before {
  content: "";
  width: 70px;
  height: 3px;
  background-color: #2980b9;
  position: absolute;
  bottom: 0px;
  left: 50%;
  transform: translateX(-50%);
}
.container header p {
  color: #777;
  line-height: 1.8;
  padding: 0px 50px;
  font-size: 15px;
}
/* End Header */
.container section {
  background: white;
  border-bottom: 2px solid #eee;
  position: relative;
}
.container section:first-of-type::before {
  content: "Featured";
  background-color: rgb(255, 255, 255);
  position: absolute;
  padding: 10px 30px;
  left: 0;
  top: -38px;
  border-top: 3px solid rgb(41, 128, 185);
  font-size: 13px;
  font-weight: 800;
}
.container section:last-of-type {
  border-bottom: none;
}
.container section .job {
  display: grid;
  grid-template-columns: 165px 3fr 1fr 130px;
  align-items: center;
  padding: 25px;
}
@media (max-width: 760px) {
  .container section .job {
    display: flex;
    flex-direction: column;
  }
  .container section .job > p {
    margin: 15px 0px;
  }
}
.container section .job img {
  background-color: #eee;
  padding: 5px 4px 5px 5px;
  border-radius: 3px;
  width: 140px;
  height: 110px;
  object-fit: cover;
  transition: 0.3s;
}
@media (max-width: 440px) {
  .container section .job img {
    margin-bottom: 15px;
  }
  .container header p {
    padding: 0px 0px;
  }
}
.container section .job img:hover {
  transform: scale(1.5);
}
.container section .job .job-info small {
  padding: 4px 0px;
  display: block;
  width: 85px;
  text-align: center;
  color: white;
  background-color: #7fb13d;
  font-weight: 700;
  font-size: 11px;
  border-radius: 3px;
}
.container section:nth-of-type(3) .job .job-info small {
  background-color: #2980b9;
}
.container section:nth-of-type(4) .job .job-info small {
  background-color: #8e44ad;
}
.container section:nth-of-type(6) .job .job-info small {
  background-color: #3498db;
}
.container section .job .job-info h3 {
  color: #111517;
  font-size: 17px;
  margin: 12px 0px;
}
.container section .job .job-info p {
  font-size: 13px;
  color: #777;
}
@media (max-width: 538px) {
  .container section .job .job-info h3,
  .container section .job .job-info p {
    line-height: 1.4;
  }
}
.container section .job .job-info p span {
  color: black;
}
.container section .job > p {
  font-size: 17px;
}
.container section .job > p small {
  font-size: 13px;
  color: #777;
}
.container section .job .offer h3 {
  margin-bottom: 10px;
  font-size: 17px;
  color: #111517;
  text-align: center;
}
.container section .job .offer button {
  border: none;
  background-color: #2980b9;
  color: #fff;
  padding: 5px 0px;
  width: 130px;
  font-size: 12px;
  cursor: pointer;
  border-radius: 3px;
  transition: 0.3s;
}
.container section .job .offer button:hover {
  transform: scale(1.1);
}
  </style>
  </html>
