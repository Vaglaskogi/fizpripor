let rightButton = document.querySelector("#right");
let leftButton = document.querySelector("#left");
let oneBlock = document.querySelector("#slideBlock");
let twoBlock = document.querySelector("#slideBlock2");

rightButton.addEventListener("click", function () {
    oneBlock.classList.add("animationRight");
    setTimeout(() => {
        oneBlock.classList.add("hidden");
        oneBlock.classList.remove("animationRight");

        twoBlock.classList.remove("hidden");
        twoBlock.classList.add("animationLeftToRight");

        setTimeout(() => {
            twoBlock.classList.remove("animationLeftToRight");
        }, 1000);
    }, 900);
});

leftButton.addEventListener("click", function () {
    twoBlock.classList.add("animationLeft");
    setTimeout(() => {
        oneBlock.classList.add("animationRightToLeft");
        oneBlock.classList.remove("hidden");

        twoBlock.classList.add("hidden");
        twoBlock.classList.remove("animationLeft");

        setTimeout(() => {
            oneBlock.classList.remove("animationRightToLeft");
        }, 1000);
    }, 900);
});
