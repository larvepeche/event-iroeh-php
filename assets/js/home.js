// animation
function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return rect.top <= (window.innerHeight || document.documentElement.clientHeight) || rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)

}
function rect(element) {
    var rect = element.getBoundingClientRect();
    return rect
}
var sponsorSection = document.querySelector('.sponsor');
var zenbookSection = document.querySelector('.chrono')
var clap = document.getElementById('clap')
var zenbook = document.querySelector('.chrono .right .zenbook')
var stylet = document.querySelector('.chrono .right .stylet')
var archviz = document.querySelector('.chrono .right .archviz')
var animation = document.querySelector('.chrono .right .animation')

window.addEventListener('scroll', () => {
    if (isInViewport(sponsorSection)) {
        clap.style.transform = 'translateY(' + (rect(sponsorSection).y / 4) + 'px)'
    }
    if(isInViewport(zenbookSection)){
        zenbook.style.transform = 'translateY(' +(rect(zenbookSection).y / 5) + 'px)'
        stylet.style.transform = 'rotateZ('+rect(stylet).y/40 + 'deg)'
        // zenbook.style.marginTop = '-'+(rect(stylet).y / 10) + 'px'
        archviz.style.marginTop = (rect(archviz).y / 8) + 'px'
        animation.style.marginTop = '-'+(rect(animation).y / 10) + 'px'

    }

})
zenbookSection.addEventListener('mousemove', (e)=>{
    var angle = e.clientX/200

})
sponsorSection.addEventListener('mousemove', (e)=>{
    var angle = e.clientX/200
    clap.style.transform = 'rotateY('+angle+'deg)'
})
var ellipses = document.querySelector('.ellipses')
// console.log(ellipses.offsetWidth);
window.addEventListener('resize', ()=>{
    // console.log(document.body.clientWidth);
})


//mail
var sent = `<span class="sent"><i class="fa fa-check"></i> enregistré</span>`
var emailForm = $('#emailForm')
var submitBtn = $('#emailForm .submit')
emailForm.on('submit', (e)=>{
    e.preventDefault()
    submitBtn.replaceWith(sent)
})


//parallax
var circleTop = document.querySelector('.circle1')
var circleMid = document.querySelector('.circle2')

window.addEventListener('scroll', function () {

    var scrollY = window.scrollY

    //parallax
    circleTop.style.transform = 'translateY('+(scrollY/2)+'px)'
    circleMid.style.transform = 'translateY('+(-scrollY/3)+'px)'
})