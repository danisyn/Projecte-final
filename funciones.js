function eliminar(codigo) {
  
    if (confirm(`Desea eliminar ${codigo}`)) {
      window.location.href = "eliminar.php?name=" + codigo;
    }
  }
