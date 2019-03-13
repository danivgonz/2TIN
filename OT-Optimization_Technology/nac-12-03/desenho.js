var svg = "http://www.w3.org/2000/svg";
var tela = document.getElementById('tela');

// Criar círculo

function Circulo(x,y,r){
    this.x = x;
    this.y = y; 
    this.r = r;

    var novoCircle = document.createElementNS(svg, "circle");
    novoCircle.setAttribute("cx", x);
    novoCircle.setAttribute("cy", y);
    novoCircle.setAttribute("r", r);

    this.element = novoCircle;
    tela.appendChild(this.element);
    this.setFill = function(f){
        this.element.setAttribute("fill", f);
    }

    this.setStroke = function(sf, sw){
        this.element.setAttribute("stroke", sf);
        this.element.setAttribute("stroke-width", sw);        
    }
}


function Retangulo(x0,y0,x1,y1){
    this.x0 = x0;
    this.y0 = y0;     

    this.x1 = x1; 
    this.y1 = y1; 

    if ((x1 > x0) && (y1 > y0)) {
        var w = x1 - x0;
        var h = y1 - y0;
    } else{
        var w = x1;
        var h = y1;
    }


    var novoRetangulo = document.createElementNS(svg, "rect");
    novoRetangulo.setAttribute("x", x0);
    novoRetangulo.setAttribute("y", y0);
    novoRetangulo.setAttribute("width", w);
    novoRetangulo.setAttribute("height", h);

    this.element = novoRetangulo;
    tela.appendChild(this.element);
    this.setFill = function(f){
        this.element.setAttribute("fill", f);
    }

    this.setStroke = function(sf, sw){
        this.element.setAttribute("stroke", sf);
        this.element.setAttribute("stroke-width", sw);        
    }
}


function Grid(x0,y0,x1,y1,dx,dy){
    this.x0 = x0;
    this.y0 = y0;     
    this.x1 = x1; 
    this.y1 = y1; 
    this.dx = dx; 
    this.dy = dy; 


    var gridX = 0;
    var gridY = 0;
    var i = 0;

    var el = [];

    for (let i = 0; i < x1; i++) {
        var linha = [];
        for (let j = 0; j < y1; j++) {
            var r  = new Retangulo(gridX, gridY, dx, dy);
            r.setFill('transparent');
            r.setStroke('#000000', 1);
            linha.push(r);
            
            gridX = gridX + dx;
        }
        el.push(linha);
        
        gridY = gridY + dy;
        gridX = 0;
    }

    this.el = el;
    return this;
}

