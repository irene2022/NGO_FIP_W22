<template>
  <section>
    <section id="nav">
      <div>
        <a href="Home.vue"><img id="logo" src="@/assets/images/logo.png" alt="Wikimedia Logo"></a>
      </div>
      
      <div class="nav">

        <li @click="goToHome">HOME</li>
        <li @click="goToAbout">ABOUT</li>
        <li @click="goToPortfolios">PORTFOLIOS</li>
        <li @click="goToContact">CONTACT</li>

        <!-- <li><a href="Home.vue">HOME</a></li>
        <li><a href="About.vue">ABOUT</a></li>
        <li><a href="Portfolios.vue">PORTFOLIOS</a></li>
        <li><a href="Contact.vue">CONTACT</a></li> -->
      </div>

      <div class="subNav">
        <li><button><a href="Register.vue">SIGN IN/UP</a></button></li>
        <li><button><a href="Donation.vue">Donation</a></button></li>
      </div>

      <router-view></router-view>
    </section>

    <div class="backToTop">
      <p>BACK TO TOP</p>
    </div>

    <section id="footer">
      <div class="footerLogo">
        <a href="Home.vue"><img src="@/assets/images/logo.png" alt="Wikimedia Foundation Logo"></a>
      </div>

      <section class="footerInfo">
        <section class="socialMedia">
          <h3>FOLLOW US!</h3>
          <li><a href=""><img src="" alt="FaceBook"></a></li>
          <li><a href=""><img src="" alt="Instagram"></a></li>
          <li><a href=""><img src="" alt="Twitter"></a></li>
          <li><a href=""><img src="" alt="Youtube"></a></li>
        </section>

        <section class="map">
          <h3>MAP</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0339265449884!2d-122.40443898468197!3d37.78924467975678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807d3bb6272b%3A0xfeadb8d7203f8179!2z7JyE7YKk66-465SU7Ja0IOyerOuLqA!5e0!3m2!1sko!2sca!4v1646955808993!5m2!1sko!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="contactUs">
          <h3>CONTACT US!</h3>
          <p>PHONE | (415) 839-6885</p>
          <p>EMAIL | donate@wikimedia.org</p>
          <p>Primary Address</p>
          <p>One Montgomery Street <br>
            Suite 1600 <br>
            San Francisco, CA 94104, USA</p>
        </section>
      </section>

      <div class="copyright">
        <p>2022 BY WIKIMEDIA FOUNDATION. All rights reserved.</p>
      </div>
    </section>
  </section>
</template>

<script>
export default {
  name: "Default",

  methods: {
    goToHome() {
      this.$router.push({ name: "Home" })
    },

    goToAbout() {
      this.$router.push({ name: "About" })
    },

    goToPortfolios() {
      this.$router.push({ name: "Portfolios" })
    },

    goToContact() {
      this.$router.push({ name: "Contact" })
    }
  }
}
</script>

<style lang="scss">
  @import "@/assets/sass/default.scss";
  @import "@/assets/sass/mediaQuery/m_default.scss";
</style>