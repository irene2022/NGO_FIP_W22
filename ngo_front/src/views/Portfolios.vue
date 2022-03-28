<template>
    <main>
        <h1 class="hidden">Wikimedia Foundation Promoting Website</h1>

        <section class="portfoliosBanners">

        </section>

        <section class="campaignInfo">
            <div class="info-t">
                <div class="campaignCoreInfo coreInfo-1">
                    <h2>WOMAN IN HISTORY</h2>
                    <p>OPEN</p>
                </div>

                <div class="campaignCoreInfo coreInfo-2">
                    <h3>Date</h3>
                    <p>Mar 4th - 16th</p>
                </div>

                <div class="campaignCoreInfo coreInfo-3">
                    <h3>Description</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class="info-m">
                <hr>
                <h3>Mini Campaigns</h3>
                <div class="c-photography">
                    <h4>Mini Campaign Name Goes Here 1 (PHOTOGRAPHY MINI CAMPAIGN)</h4>

                    <h5>DESCRIPTION</h5>
                    <p>| Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita.</p>
                    <h5>PHOTOGRAPHY CONTEST</h5>
                    <p>| Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita.</p>
                    <h6>REWARDS</h6>
                    <p>| Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>

                <div class="c-article">
                    <h5>DESCRIPTION</h5>
                    <p>| Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita.</p>
                </div>
                <hr>
            </div>
        </section>

        <section class="application">

        </section>

        <section class="covid19">
            <h2>RESPONDING TO COVID 19</h2>
            <p>In this time of uncertainty, our enduring commitment is to provide reliable and neutral information for the world. Also, we always appreciate your attention and effort to share the knowledge for everyone.</p>
            <button><a href="https://wikimediafoundation.org/covid19/">MORE DETAIL</a></button>
        </section>

        <div class="slidingBtn">
            <button @click="goPrevious">PREVIOUS</button>
            <button @click="goNext">NEXT</button>
        </div>
    </main>
</template>

<script>
export default {
    name: 'Portfolios',

    methods: {
    goPrevious() {
        this.$router.push({ name: "CampaignTwo" })
        },

    goNext() {
        this.$router.push({ name: "CampaignThree" })        
        }
    }
}
</script>

<style lang="scss">
    @import "@/assets/sass/portfolios.scss";
</style>