 var fechar =0;
function myFunction(value,valueA,valueB,valueC,valueD) {
    mudaImagem(valueD);
    var a = document.getElementById(value);
     var b = document.getElementById(valueA);
      var c = document.getElementById(valueB);
       var d = document.getElementById(valueC);
    if (a.style.display === 'none' || b.style.display === 'none' && c.style.display === 'none' && d.style.display === 'none') {
        a.style.display = 'block';
        b.style.display = 'block';
        c.style.display = 'block';
        d.style.display = 'block';
    } 
        else {
        b.style.display = 'none';
        c.style.display = 'none';
        d.style.display = 'none';
    }
  
   
}
function mudaImagem(i) {    
    if ('App' === i && fechar !==1) {
        fechar+=1;
        document.getElementById("fbSoftw").src = "img/demo/imagem_Tencnologia_Xamarin_Arquitetura_Android_IOS_SoftwMicro.png";
    }
    else {
     document.getElementById("fbSoftw").src = "img/demo/analista-de-sistema.jpg";
     fechar=0;
    }
}