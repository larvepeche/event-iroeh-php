function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return rect.top <= (window.innerHeight || document.documentElement.clientHeight) || rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)

}
const SCROLLMAX = 1200
const MAX = 244
const MIN = 27
var circleTop = document.querySelector('.circle1')
var circleMid = document.querySelector('.circle2')

window.addEventListener('scroll', function () {

    var scrollY = window.scrollY
    var diff = MAX - MIN
    var toAdd = MIN + ((scrollY * diff) / SCROLLMAX)
    // var current = 
    toAdd = toAdd > MAX ? MAX : toAdd
    document.body.style.backgroundColor = 'rgb(' + toAdd + ',' + toAdd + ',' + toAdd + ')'

    //parallax
    circleTop.style.transform = 'translateY('+(scrollY/2)+'px)'
    circleMid.style.transform = 'translateY('+(-scrollY/3)+'px)'
})