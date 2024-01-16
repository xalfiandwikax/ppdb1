<div class="container">

    <div class="card o-hidden border-0 shadow-lg">
        <div class="card-body p-0">
            <!-- Neste  d Row within Card Body -->
            <div class="row mb-sm-0">
                <div class="col-12 text-center">
                    
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 my-4">Data diri</h1>
                        </div>
                        <?= form_open_multipart('Web/biodata'); ?>
                            <div class="container">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input type="text" name="nama_lengkap" class="form-control form-control-user"
                                            placeholder="Nama Lengkap" >
                                            <?= form_error('nama_lengkap','<small class="text-danger">','</small>'); ?>
                                        
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input type="text" name="nik" class="form-control form-control-user"
                                        placeholder="NIK">
                                        <?= form_error('nik','<small class="text-danger">','</small>'); ?>
                                        
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <input type="text" name="no_kk" class="form-control form-control-user"
                                             placeholder="Nomor Kartu Keluarga">
                                            <?= form_error('no_kk','<small class="text-danger">','</small>'); ?>
                                      
                                    </div>
                                </div>
                                <div class=" form-grub row mb-3">
                                    <div class="col-2">
                                        <legend>Jenis Kelamin</legend>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="laki-laki" value="Laki-Laki">
                                        <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="perempuan" value="Perempuan">
                                        <label class="form-check-label" for="perempuan">Perempuan</label>
                                        <?= form_error('jenis_kelamin','<small class="text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2">
                                        <legend>Tanggal Lahir</legend>
                                    </div>
                                    <div class="col-3" data-provide="datepicker">
                                        <input type="date" class="form-control" name="ttl">
                                        <?= form_error('ttl','<small class="text-danger">','</small>'); ?>
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <textarea name="alamat" class="form-control" aria-label="With textarea" placeholder="Alamat" ></textarea>
                                    </div>
                                </div>

                                <div class=" form-grub row mb-3">
                                    <div class="col-2">
                                        <legend>Kejar Paket</legend>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="SD (Paket A)" placeholder="pendidikan" value="SD (Paket A)">
                                        <label class="form-check-label" for="SD (Paket A)">SD (Paket A)</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="SMP (Paket B)" placeholder="pendidikan" value="SMP (Paket B)">
                                        <label class="form-check-label" for="SMP (Paket B)">SMP (Paket B)</label>
                                    </div>
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="pendidikan"
                                            id="SMA (Paket C)" placeholder="pendidikan" value="SMA (PAKET C)">
                                        <label class="form-check-label" for="SMA (Paket C)">SMA (Paket C)</label>
                                        <?= form_error('pendidikan','<small class="text-danger">','</small>'); ?>                                    
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col">
                            <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="gambar_akta">Upload Akte Kelahiran</label> 
                                <input type="file" class="form-control" id="gambar_akta" name="gambar_akta" multiple>
                                <?= form_error('gambar_akta','<small class="text-danger">','</small>'); ?>
                            </div>
                            </div>
                            <div class="col">
                            <div class="input-group mb-3 mt-3">
                                <label class="input-group-text" for="gambar_kk">Upload Kartu Keluarga</label>
                                <input type="file" class="form-control" id="gambar_kk" name="gambar_kk" multiple>
                                <?= form_error('gambar_kk','<small class="text-danger">','</small>'); ?>
                            </div>
                            </div>
                            <div class="col">
                            <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="gambar_ijazah">Upload Ijazah Terakhir</label>
                                <input type="file" class="form-control" id="gambar_ijazah" name="gambar_ijazah" multiple>
                                <?= form_error('gambar_ijazah','<small class="text-danger">','</small>'); ?>
                            </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block" >
                                Unggah Data
                            </button>


                            <?= form_close(); ?>


                    
                </div>
            </div>
        </div>
    </div>

</div>