$('#equipeBtn').on('click', function(e){
    e.preventDefault()
    $('#equipeBtn').addClass('active')
    $('#individuBtn').removeClass('active')
    $('#toutBtn').removeClass('active')
    $('.teams .individu').hide()
    $('.teams .equipe').show()
})
$('#individuBtn').on('click', function(e){
    e.preventDefault()
    $('#equipeBtn').removeClass('active')
    $('#individuBtn').addClass('active')
    $('#toutBtn').removeClass('active')
    $('.teams .equipe').hide()
    $('.teams .individu').show()
})
$('#toutBtn').on('click', function(e){
    e.preventDefault()
    $('#equipeBtn').removeClass('active')
    $('#individuBtn').removeClass('active')
    $('#toutBtn').addClass('active')
    $('.teams .equipe').show()
    $('.teams .individu').show()
})
$('#searchInput').on('keyup', function(){
    var value = $('#searchInput').val()
    $('#equipeBtn').removeClass('active')
    $('#individuBtn').removeClass('active')
    $('#toutBtn').addClass('active')
    $('.teamsSection .teams .team').each(function(index){
        var h1 = $('.teams .team h1')[index]
        if(h1.innerText.includes(value)){
            $(this).show()
        }
        else{
            $(this).hide()
        }
    })
    if($('.teamsSection .teams .team').length == 0){
        $('.teams .error').show()
    }
    else{
        $('.teams .error').hide()
    }
})

//parallax
var circleTop = document.querySelector('.circle1')

window.addEventListener('scroll', function () {

    var scrollY = window.scrollY

    //parallax
    circleTop.style.transform = 'translateY('+(scrollY/2)+'px)'
    // circleMid.style.transform = 'translateY('+(-scrollY/3)+'px)'
})