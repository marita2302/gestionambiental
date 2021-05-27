function eliminarDato(url,text){
                        
    Swal.fire({
        title: 'Desea eliminar: '+text+'?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
      }).then((result) => {
        if (result.isConfirmed) {
        
          window.location.href = url;
        }
      })                    
 }