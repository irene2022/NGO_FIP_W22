<template>
  <main>
    <h1 class="hidden">Wikimedia Foundation Promoting Website</h1>
    
    <div class="top-banner-box">
      <img class="topBanner pc" src="@/assets/images/homeTopBanner.jpg" alt="Home Page Top Banner Image">
      <img class="topBanner mobile" src="@/assets/images/m-homeTopBanner.png" alt="Home Page Top Banner Image">

      <p>Learn Something New. <br> Contribute What You Know.</p>
    </div>

    <section class="upcoming">
      <div class="upcomingTitle">
        <hr>
        <h2>UPCOMING <br> CAMPAIGNS</h2>
        <hr>
      </div>

      <SelectBox
      class="mobileSelectBox"
      />

      <div class="card campaignOne">
        <img class="pc" src="@/assets/images/campaignOne.png" alt="Campaign One - Woman In History">
        <div class="textBox">
          <div class="text-t">
            <h3>WOMAN IN HISTORY</h3>
            <p>OPEN</p>
          </div>

          <div class="text-m">
            <h4>Date</h4>
            <p>Mar 4th</p>
          </div>

          <div class="text-b">
            <h4>Description</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <button><a href="Contact.vue">VIEW DETAIL</a></button>
        </div>
      </div>

      <div class="card campaignTwo">
        <img src="@/assets/images/campaignTwo.png" alt="Campaign Two - Culture And Festival">
        <div class="textBox">
          <div class="text-t">
            <h3>WOMAN IN HISTORY</h3>
            <p>PLANNED</p>
          </div>

          <div class="text-m">
            <h4>Date</h4>
            <p>Mar 17th</p>
          </div>

          <div class="text-b">
            <h4>Description</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <button><a href="Contact.vue">VIEW DETAIL</a></button>
        </div>
      </div>
    </section>

    <section class="videoSection">
      <h2>WHAT DO WE DO</h2>
      <h3>COLLECT, DEVELOP, DISSEMINATE</h3>
      
      <div class="videoBox">
        <!-- <video src="@/assets/video/advertisingVideo.mp4"></video> -->
      </div>
    </section>

    <section class="covid19">
      <h2>RESPONDING TO COVID 19</h2>
      <p>In this time of uncertainty, our enduring commitment is to provide reliable and neutral information for the world. Also, we always appreciate your attention and effort to share the knowledge for everyone.</p>
      <button><a href="https://wikimediafoundation.org/covid19/">MORE DETAIL</a></button>
    </section>
  </main>
</template>

<script>
import SelectBox from '@/components/SelectBox.vue';

export default {
  name: 'Home',

  components: {
    SelectBox
  }
}
</script>

<style lang="scss">
    @import "@/assets/sass/home.scss";
</style>