function iniciarApp(){bucarPorFecha()}function bucarPorFecha(){document.querySelector("#fecha").addEventListener("input",(function(n){const e=n.target.value;window.location="?fecha="+e}))}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));