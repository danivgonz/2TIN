var svg = "http://www.w3.org/2000/svg";
var canvas = document.getElementById('canvas');

function Circulo(x,y,r,c){
    this.x = x;
    this.y = y; 
    this.r = r;
    this.c = c;

    var novoCirculo = document.createElementNS(svg, "circle");
    novoCirculo.setAttribute("cx", x);
    novoCirculo.setAttribute("cy", y);
    novoCirculo.setAttribute("r", r);
    novoCirculo.setAttribute("fill", c);
    var self = this;

    // exemplo 1 - criar um atributo ao novoCirculo
    this.click = undefined;

    // exemplo 1 - dizendo que sempre que for clicado o circulo e ao estiver "undefined" - chamar o atributo que torna o click undefined
    novoCirculo.addEventListener("click", function(){
        if(self.click != undefined && self.click != null){
           self.click();
        }
    });

    /*novoCirculo.addEventListener("click", function(){
        alert("clicou no circulo na posição " + self.x + ", " + self.y)
    });*/

    novoCirculo.addEventListener("mousedown", function(){
        self.movendo = true;
    });

    novoCirculo.addEventListener("mousemove", function(ev){
        if(self.movendo){
            self.setPos(ev.x, ev.y);
        }
    });

    novoCirculo.addEventListener("mouseup", function(){
        self.movendo = false;
    });

    this.element = novoCirculo;
    canvas.appendChild(this.element);
    this.setPos = function(x,y){
        this.element.setAttribute("cy", y);
        this.element.setAttribute("cx", x);
        this.x = x;
        this.y = y; 
    }
}


// Exemplo 1
var c2 = new Circulo(200,100,150);
// atribuindo ao atributo clique do c2 uma function
// você consegue redefinir o atributo do objeto
c2.click = function() {
    alert("teste");
}


// Animando Circulo
//var c1 = new Circulo(200,100,150);
/*c1.setPos(0,0);
var i = 0;
setInterval(function() {
   c1.setPos(i,0);
    i+=5;
}, 100)*/

//EventListener
/*window.addEventListener("load", function(event){
    alert("Carregou a página!");
})*/

// Gerando cor

// gera uma cor aleatória em hexadecimal
function geraCor(){
    var hexadecimais = '0123456789ABCDEF';
    var cor = '#';
  
    // Pega um número aleatório no array acima
    for (var i = 0; i < 6; i++ ) {
    //E concatena à variável cor
        cor += hexadecimais[Math.floor(Math.random() * 16)];
    }
    return cor;
}

// Criando muitos circulos
for (let i = 0; i < 20; i++) {
    // sortear x
    var randomx = Math.floor((Math.random() * 1028) + 1);
    var randomy = Math.floor((Math.random() * 860) + 1);
    var randomr = Math.floor((Math.random() * 100) + 1);

    var c1 = new Circulo(randomx,randomy,randomr,geraCor());
}


