<template>
  <main>
    <h1 class="hidden">Wikimedia Foundation Promoting Website</h1>
    
    <div class="topBanner">
      <img src="@/assets/images/aboutTopBanner.jpg" alt="About Page Top Banner Image">

      <p>We Share A Commitment <br> To Free Knowledge And Work Together <br> With Our Community.</p>
    </div>

    <section class="introduction">
      <img src="@/assets/images/blurredLogo.png" alt="Blurred Wikimedia Foundation Logo">
      <h2>WHO ARE WE</h2>
      <p>The Wikimedia Foundation is the nonprofit that hosts Wikipedia and our other free knowledge projects. We want to make it easier for everyone to share what they know. To do this, we keep Wikipedia and Wikimedia sites fast, reliable, and available to all. We protect the values and policies that allow free knowledge to thrive. We build new features and tools to make it easy to read, edit, and share from the Wikimedia sites. Above all, we support the communities of volunteers around the world who edit, improve, and add knowledge across Wikimedia projects.</p>
    </section>

    <section class="founders">
      <div class="foundersTitle">
        <hr>
        <h2>FOUNDERS</h2>
        <hr>
      </div>

      <div class="eachFounder">
        <div class="tim">
          <img src="@/assets/images/timBerners.png" alt="Tim Berners Lee">
          <h3>TIM BERNERS LEE</h3>
          <hr>
          <p>COMPUTER SCIENTIST</p>
        </div>

        <div class="larry">
          <img src="@/assets/images/larrySanger.png" alt="Larry Sanger">
          <h3>LARRY SANGER</h3>
          <hr>
          <p>INTERNET PROJECT DEVELOPER</p>
        </div>

        <div class="jimmy">
          <img src="@/assets/images/jimmyWales.png" alt="Jimmy Wales">
          <h3>JIMMY WALES</h3>
          <hr>
          <p>INTERNET ENTREPRENEUR</p>
        </div>
      </div>
    </section>

    <section class="theOtherOrg">
      <div class="organizationSubTitle">
        <hr>
        <h2>WE ARE HOSTING</h2>
        <hr>
      </div>
      
      <section class="organizationMain">
        <h3>THE OTHER ORGANIZATIONS</h3>

        <div class="list">
          <div class="listTop">
            <li><img src="@/assets/images/wikipedia.png" alt="Wikipedia"><a href="https://en.wikipedia.org/wiki/Main_Page">WIKIPEDIA</a></li>
            <li><img src="@/assets/images/wikibooks.png" alt="Wikibooks"><a href="https://en.wikibooks.org/wiki/Main_Page">WIKIBOOKS</a></li>
            <li><img src="@/assets/images/wikiversity.png" alt="Wikiversity"><a href="https://en.wikiversity.org/wiki/Wikiversity:Main_Page">WIKIVERSITY</a></li>
            <li><img src="@/assets/images/wikinews.png" alt="Wikinews"><a href="https://en.wikinews.org/wiki/Main_Page">WIKINEWS</a></li>
            <li><img src="@/assets/images/wiktionary.png" alt="Wiktionary"><a href="https://www.wiktionary.org/">WIKTIONARY</a></li>
          </div>

          <div class="listBottom">
            <li><img src="@/assets/images/wikisource.png" alt="Wikisource"><a href="https://en.wikisource.org/wiki/Main_Page">WIKISOURCE</a></li>
            <li><img src="@/assets/images/wikiquote.png" alt="Wikiquote"><a href="https://en.wikiquote.org/wiki/Main_Page">WIKIQUOTE</a></li>
            <li><img src="@/assets/images/wikivoyage.png" alt="Wikivoyage"><a href="https://en.wikivoyage.org/wiki/Main_Page">WIKIVOYAGE</a></li>
            <li><img src="@/assets/images/wikiCommons.png" alt="Wikimedia Commons"><a href="https://commons.wikimedia.org/wiki/Main_Page">WIKIMEDIA COMMONS</a></li>
            <li><img src="@/assets/images/wikidata.png" alt="Wikidata"><a href="https://www.wikidata.org/wiki/Wikidata:Main_Page">WIKIDATA</a></li>
            <li><img src="@/assets/images/wikispecies.png" alt="Wikispecies"><a href="https://species.wikimedia.org/wiki/Main_Page">WIKISPECIES</a></li>
            <li><img src="@/assets/images/mediawiki.png" alt="Media Wiki"><a href="https://www.mediawiki.org/wiki/MediaWiki">MEDIAWIKI</a></li>
          </div>
        </div>
      </section>

      <section class="missionNvision">
        <div class="mNvTitle">
          <h3>MISSOIN AND VISION</h3>
          <h4>IN WIKIMEDIA FOUNDATION</h4>
        </div>

        <div class="mission mNv-box">
          <h3>MISSION</h3>
          <h4>COLLECT, DEVELOP, DISSEMINATE</h4>
          <p>Our mission is to empower and engage people around the world to collect and develop educational content under a free license or in the public domain, and to disseminate it effectively and globally.</p>
        </div>

        <div class="mission mNv-box">
          <h3>VISION</h3>
          <h4>"WE SEE YOU AND YOU BELONG WITH US."</h4>
          <p>Our vision is about more than providing universal access to all forms of knowledge. It is about creating an inclusive culture. It is about inviting others to join in and thrive with us. It is about embracing human diversity.</p>
        </div>
      </section>

      <section class="crews">
        <div class="crew-1">
          <img src="" alt="">
        </div>

        <div class="crew-2">
          <img src="" alt="">
        </div>

        <div class="crew-3">
          <img src="" alt="">
        </div>
      </section>
    </section>



  </main>
</template>

<script>
export default {
  name: 'About'
}
</script>

<style lang="scss">
    @import "@/assets/sass/about.scss";
</style>