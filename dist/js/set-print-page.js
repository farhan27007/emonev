   var css = '@page { size: landscape; }',
   head = document.head || document.getElementsByTagName('head')[0],
   style = document.createElement('style');

   style.type = 'text/css';
   style.media = 'print';

   if (style.styleSheet){
    style.styleSheet.cssText = css;
  } else {
    style.appendChild(document.createTextNode(css));
  }

  head.appendChild(style);

  window.print();
  window.onfocus=function(){ window.close();}