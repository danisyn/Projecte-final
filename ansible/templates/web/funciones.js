function eliminar(codigo) {
  
    if (confirm(`Desea eliminar ${codigo}`)) {
      window.location.href = "eliminar.php?name=" + codigo;
    }
  }

  function myFunction() {
    document.getElementById('mydiv').style.cssText = 'transitio-duration:1s; transition-delay:2s; background-color: red; color: white; font-size: 44px';
}
