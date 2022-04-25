const linkHeads = document.querySelectorAll('.main-info__button')
const mainScroll = document.querySelector('.main__scroll')
const newArray = [...linkHeads, mainScroll]

newArray.forEach(link =>{
    link.addEventListener('click', (event) => {
        event.preventDefault()


        const ID = event.target.getAttribute('href').substr(1);

        document.getElementById(ID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })

    })
})