// var nav = document.querySelector('.navbar')
$('#toTop').on('click', function(e){
    e.preventDefault()
    document.querySelector('.navbar').scrollIntoView()
})
window.addEventListener('scroll', function(){
    var scrollY = window.scrollY
    if(scrollY > 500){
        $('#toTop').slideDown()
    }
    else{
        $('#toTop').slideUp()
    }
})