<form action="/serahkanpengajuansuratkeluar/{{$psk->id}}" class="p-5" method="POST">
    @csrf
    @method('PATCH')
    <div class="modal fade " id="ModalSerahkanPengajuanSuratKeluar{{$psk->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 700px; height: 244px" >
                <div class="modal-body p-5">
                    <div class="d-flex justify-content-center">
                        <h4 class="mx-auto d-block" style="text-align: center; font-family: 'Inter', sans-serif; ">Apakah anda ingin menyerahkan data ini  untuk dikelola lebih lanjut?</h4>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="width: 85px">Ya</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width: 85px">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</form>