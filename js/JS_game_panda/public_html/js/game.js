    /* Игровой цикл  */
    (function () {
    /* я проверил, в новых браузерах все одинаково работает без префиксов,
    но отдам дань прошлому и напишу традиционно */
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    window.requestAnimationFrame = requestAnimationFrame;
})();
/* Область рисования */
var canvas = document.getElementById("canvas"),
context = canvas.getContext("2d");
var width = 960;
var height = 300;
canvas.width = width;
canvas.height = height;

/* Персонаж игрока */
var player = {
    x: width / 2,
    y: height - 50,
    width: 25,
    height: 40,
    speed: 3,
    velX: 0,
    velY: 0,
    jumping: false,
    grounded: false
};

/* нажатые клавиши */
var keys = [];
/* коэффициент трения для того чтобы плавно останавливался */
friction = 0.7,
/* коэффициент гравитации (чем меньше, тем выше прыжок) */
gravity = 0.2;

/* препятствия */
var barriers = [];
/* земля */
barriers.push({
    x : 0,
    y : height - 15,
    width  : width,
    height : 15    
});
/* потолок */
barriers.push({
    x : 0,
    y : 0,
    width  : width,
    height : 1    
});
/* левая стена */
barriers.push({
    x : 0,
    y : 0,
    width  : 1,
    height : height
});
/* правая стена */
barriers.push({
    x : width - 1,
    y : 0,
    width  : 1,
    height : height
});

/* островки */
barriers.push({
    x : 20,
    y : 220,
    width  : 100,
    height : 10
});

barriers.push({
    x : 200,
    y : 160,
    width  : 320,
    height : 10
});

barriers.push({
    x : 610,
    y : 130,
    width  : 40,
    height : 10
});

barriers.push({
    x : 780,
    y : 130,
    width  : 10,
    height : 30
});


barriers.push({
    x : 680,
    y : 160,
    width  : 200,
    height : 10
});

barriers.push({
    x : 680,
    y : 250,
    width  : 10,
    height : 50
});

barriers.push({
    x : 320,
    y : 150,
    width  : 10,
    height : 50
});

barriers.push({
    x : 320,
    y : 250,
    width  : 10,
    height : 50
});

barriers.push({
    x : 450,
    y : 30,
    width  : 300,
    height : 10
});

barriers.push({
    x : 280,
    y : 150,
    width  : 10,
    height : 50
});

barriers.push({
    x : 280,
    y : 250,
    width  : 10,
    height : 50
});

barriers.push({
    x : 10,
    y : 80,
    width  : 10,
    height : 70
});

barriers.push({
    x : 10,
    y : 150,
    width  : 100,
    height : 10
});

barriers.push({
    x : 70,
    y : 80,
    width  : 100,
    height : 10
});

barriers.push({
    x : 170,
    y : 120,
    width  : 100,
    height : 10
});

barriers.push({
    x : 470,
    y : 220,
    width  : 100,
    height : 10
});

barriers.push({
    x : 530,
    y : 220,
    width  : 10,
    height : 100
});

/* обновление поля рисования */
function update() {
    /* прыжок */
    if (keys[38]) {
        if (!player.jumping && player.grounded) {
            player.jumping = true;
            player.grounded = false;
            player.velY = -player.speed * 2;
        }
    }
    /* вправо */
    if (keys[39]) {
        if (player.velX < player.speed) {
            player.velX++;
        }
    }
    /* влево */
    if (keys[37]) {
        if (player.velX > -player.speed) {
            player.velX--;
        }
    }
    /* погрешность на трение */
    player.velX *= friction;
    /* воздействие гравитации */
    player.velY += gravity;
    context.clearRect(0, 0, width, height);    
    

    context.fill();
    context.fillStyle = "black";
    context.beginPath();
    
    player.grounded = false;

    for (var i = 0; i < barriers.length; i++) {

        context.rect(barriers[i].x, barriers[i].y, barriers[i].width, barriers[i].height);
        
        var dir = colCheck(player, barriers[i]);

        if (dir === "l" || dir === "r") {
            player.velX = 0;
            player.jumping = false;
        } else if (dir === "b") {
            player.grounded = true;
            player.jumping = false;
        } else if (dir === "t") {
            player.velY *= -1;
        }

    }
    
    if(player.grounded){
     player.velY = 0;
 }

 /* двигаем персонажа */
 player.x += player.velX;
 player.y += player.velY;

 /* рисуем персонажа заново */
 var playerImg = document.getElementById("player");
 context.drawImage(playerImg, player.x, player.y);
 context.stroke();

/* функция постоянного рендеринга (хз, говорят правильно ее использовать);
    сейчас игру надо дописать и сдать, а про это потом можно почитать тут:
    https://www.paulirish.com/2011/requestanimationframe-for-smart-animating/
    */
    requestAnimationFrame(update);
}


/* проверка столкновений */
function colCheck(shapeA, shapeB) {
    /* рассчитываем векторы движения */
    var vX = (shapeA.x + (shapeA.width / 2)) - (shapeB.x + (shapeB.width / 2)),
    vY = (shapeA.y + (shapeA.height / 2)) - (shapeB.y + (shapeB.height / 2)),
    /* веторы между серединами объектов */
    hWidths = (shapeA.width / 2) + (shapeB.width / 2),
    hHeights = (shapeA.height / 2) + (shapeB.height / 2),
    colDir = null;

    /* векторы по Х и У меньше половины измерений объектов
    означает столкновение объектов */
    if (Math.abs(vX) < hWidths && Math.abs(vY) < hHeights) {
        /* вектор сближения помогает рассчитать сторону приближения по знаку векторов */
        var oX = hWidths - Math.abs(vX),
        oY = hHeights - Math.abs(vY);
        if (oX >= oY) {
            if (vY > 0) {
                colDir = "t";
                shapeA.y += oY;
            } else {
                colDir = "b";
                shapeA.y -= oY;
            }
        } else {
            if (vX > 0) {
                colDir = "l";
                shapeA.x += oX;
            } else {
                colDir = "r";
                shapeA.x -= oX;
            }
        }
    }
    return colDir;
}

/* отслеживание нажатия кнопки */
document.body.addEventListener("keydown", function(e) {
    keys[e.keyCode] = true;
});
/* отслеживание отпускания кнопки */
document.body.addEventListener("keyup", function(e) {
    keys[e.keyCode] = false;
});

/* первый запуск игры */
window.addEventListener("load",function(){
    update();
});