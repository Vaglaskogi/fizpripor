const lists = document.querySelectorAll('.photopage-sub')
const btns = document.querySelectorAll('.photopage-button');


btns.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        btns.forEach((btnItem, idx) => {
            if (btnItem === btn) {
                btnItem.classList.toggle('photopage-button__active');
                lists[idx].classList.toggle('hidden')
                
            } else {
                btnItem.classList.remove('photopage-button__active');
                lists[idx].classList.add('hidden')
            }
        })
    });
})