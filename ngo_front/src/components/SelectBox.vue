<template>
    <div>
        <section class="selectionContainer">
            <div class="select-box">
                <div class="options-container" id="target">

                    <div class="option">
                        <input type="radio" class="radio" id="womanInHistory" name="category"/>
                        <label for="selectCategory">SELECT CAMPAIGN CATEGORY</label>
                    </div>
                    
                    <div class="option">
                        <input type="radio" class="radio" id="womanInHistory" name="category"/>
                        <label for="womanInHistory">WOMAN IN HISTORY - PHOTOGRAPHY</label>
                    </div>

                    <div class="option">
                        <input type="radio" class="radio" id="womanInHistory" name="category"/>
                        <label for="womanInHistory">WOMAN IN HISTORY - ARTICLE</label>
                    </div>

                    <div class="option">
                        <input type="radio" class="radio" id="womanInHistory" name="category"/>
                        <label for="womanInHistory">WOMAN IN HISTORY - NEWTRO GENERATION</label>
                    </div>

                    <div class="option">
                        <input type="radio" class="radio" id="cultureNfestival" name="category"/>
                        <label for="cultureNfestival">CULTURE AND FESTIVAL - CULTURAL COSTUME</label>
                    </div>

                    <div class="option">
                        <input type="radio" class="radio" id="cultureNfestival" name="category"/>
                        <label for="cultureNfestival">CULTURE AND FESTIVAL - PERFUME AND BODY MIST </label>
                    </div>
                </div>

                <div class="selected">
                    <p>SELECT CAMPAIGN CATEGORY</p>
                </div>
            </div>
        </section>

        <div id="content-1" class="inv">
            <div class="card campaignOne">
                <img class="mobile" src="@/assets/images/m-campaignOne.jpg" alt="Campaign One - Woman In History">
                <div class="effectBox">
                    <div class="frosted-glass"></div>
                </div>
                <div class="infoBox">
                    <p class="open">OPEN</p>

                    <div class="textBox">
                        <div class="text-t">
                            <h3>WOMAN IN HISTORY</h3>
                        </div>

                        <div class="text-m">
                            <h4>Date</h4>
                            <p>Mar 4th</p>
                        </div>

                        <div class="text-b">
                            <h4>Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <button><a href="Contact.vue">VIEW DETAIL</a></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SelectBox',

    mounted() {
        const selected = document.querySelector(".selected");
        const optionsContainer = document.querySelector(".options-container");
        const optionsList = document.querySelectorAll(".option");

        selected.addEventListener("click", () => {
            optionsContainer.classList.toggle("active");
        });

        optionsList.forEach(o => {
            o.addEventListener("click", () => {
                selected.innerHTML= o.querySelector("label").innerHTML;
                optionsContainer.classList.remove("active");
            });
        });
    }
}

</script>

<style>
* {
    margin: 0;
    box-sizing: border-box;
}

.selectionContainer {
    width: 428px;
    font-family: "Roboto";
    font-size: 12px;
    font-weight: 500;
    color: #111111;
    background-color: #F9FAF8;
    margin: 10px auto;
    padding: 5px;
    border-radius: 15px;
}

.select-box {
    display: flex;
    width: 400px;
    flex-direction: column;
    margin: 5px auto;
}

.select-box .options-container {
    background-color: white;
    max-height: 0px;
    width: 100%;
    opacity: 0;
    transition: all .4s;
    border-radius: 20px;
    overflow: hidden;

    order: 1;
}

.selected {
    background: white;
    border-radius: 70px;
    width: 400px;
    margin: 0 auto 8px auto;
    color: #111111;
    box-shadow: 0 5px 6px rgba(163, 201, 76, 0.15);
    position: relative;

    order: 0;
}

.selected::after {
    content: "";
    background: url("@/assets/images/arrow-down.png");
    background-size: contain;
    background-repeat: no-repeat;

    position: absolute;
    height: 100%;
    width: 15px;
    right: 20px;
    top: 23px;

    transition: all 0.2s ease-in;
}

.options-container {
    padding-top: 10px;
    padding-bottom: 10px;
    height: 460px;
}

.select-box .options-container.active {
    max-height: 200px;
    opacity: 1;
    overflow-y: scroll;
    scrollbar-width: auto;
}

.select-box .options-container.active + .selected::after {
    transform: rotateX(180deg);
    top: -23px;
}

.selected {
    padding: 20px 28px;
    cursor: pointer;
}

.select-box .option {
    margin-left: 10px;
    padding: 20px 18px;
    cursor: pointer;
}

.select-box .option:hover {
    background-color: #A3C94C;
    color: white;
    width: 375px;
    border-radius: 100px;
    transition: all .2s ease-in;
}

.select-box label {
    cursor: pointer;
}

.select-box .option .radio {
    display: none;
}

.card img {
    position: relative;
    background-attachment: fixed;
}

.infoBox {
    position: absolute;
    top: 183%;
    left: 20px;
}

.open {
    font-size: 10px;
    border-width: 1px solid;
    padding: 5px 8px;
}

.effectBox {
    position: absolute;
    top: 183%;
    left: 20px;
}

.frosted-glass{
    position: relative;
    border-radius: 15px;
    height: 170px;
    width: 380px;
    box-shadow: 0 0 6px 0 rgba(90, 90, 90, 0.5);
    background: inherit;
}

.frosted-glass:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: inset 0 0 30px rgba(255, 255, 255, .5);
    filter: blur(10px);
    background: inherit;
}
</style>