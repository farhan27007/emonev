    $(document).ready(function()
            {
                $("#delete-button").on("click", function()
             {
                var swalWithBootstrapButtons = Swal.mixin(
                {
                    customClass:
                    {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-danger mr-2"
                    },
                    buttonsStyling: false
                });
                swalWithBootstrapButtons
                .fire(
                {
                    title: "Apakah anda yakin ingin menghapus data ini ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Ya, Hapus data ini !",
                    cancelButtonText: "Batalkan",
                    reverseButtons: true
                })
                .then(function(result)
                {
                    if (result.value)
                    {
                        swalWithBootstrapButtons.fire(
                            "Terhapus",
                            "Anda berhasil menghapus data ini",
                            "success"
                            );
                    }
                    else if (
                                // Read more about handling dismissals
                                result.dismiss === Swal.DismissReason.cancel
                                )
                    {
                        swalWithBootstrapButtons.fire(
                            "Gagal",
                            "Anda gagal menghapus data ini",
                            "error"
                            );
                    }
                });
            });
         });