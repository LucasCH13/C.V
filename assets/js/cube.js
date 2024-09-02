var cube = document.querySelector('.cube');
var btnLeft = document.getElementById('btnLeft');
var btnUp = document.getElementById('btnUp');
var btnDown = document.getElementById('btnDown');
var btnRight = document.getElementById('btnRight');
var reset = document.getElementById('reset');
var roll = document.getElementById('roll');
var initialTransform = 'rotateX(0deg) rotateY(0deg)';
var rotateX = 0;
var rotateY = 0;



cube.addEventListener('mousedown', function(event){
    var startX = event.clientX;
    var startY = event.clientY;

    document.addEventListener('mousemove', rotateCube);

    document.addEventListener('mouseup', function(){
        document.removeEventListener('mousemove',rotateCube);
    });

    function rotateCube(event) {
        var deltaX = event.clientX - startX;
        var deltaY = event.clientY - startY;

        rotateX += deltaY * 0.008;
        rotateY += deltaX * 0.008;

        cube.style.transform = 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
    }
});

btnLeft.addEventListener('click', function(){
    rotateY -= 90;
    cube.style.transform = 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
});
btnUp.addEventListener('click', function(){
    rotateX -= 90;
    cube.style.transform = 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
  });
btnDown.addEventListener('click', function(){
    rotateX += 90;
    cube.style.transform = 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
  });
btnRight.addEventListener('click', function(){
    rotateY += 90;
    cube.style.transform = 'rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
  });
reset.addEventListener('click', function() {
    cube.style.transform = initialTransform;
});

roll.addEventListener('click', function() {
    var randomFaceIndex = Math.floor(Math.random() * 6);
    var rotation = randomFaceIndex * 90;

    cube.style.transform = 'rotateX(' + rotation + 'deg) rotateY(' + rotation + 'deg)';
    
});