<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <p>Register Siswa</p>
                    </div>
                    <div class="login-form">
                        <form action="<?= base_url('user/prosesRegisterSiswa') ?>" method="post">
                            <div class="form-group">
                                <label>NIS <span class="text-error">*</span></label>
                                <input type="text" id="nis" name="nis" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama <span class="text-error">*</span></label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="exampleRadios1">
                                    <label class="form-check-label" for="exampleRadios1">Laki-laki</label><br>
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="exampleRadios2">
                                    <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tahun Masuk <span class="text-error">*</span></label>
                                <input type="text" name="tahun_masuk" class="form-control" maxlength="4" required>
                            </div>
                            <div class="form-group">
                                <label>Kelas <span class="text-error">*</span></label>
                                <select class="form-control" name="kelas_id" required>
                                    <?php foreach ($kelas as $key) { ?>
                                        <option value="<?= $key->id ?>"><?= $key->nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select name="agama" class="form-control">
                                    <option required>--pilih--</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="userfile">
                            </div>
                            <div class="form-group">
                                <label>Username <span class="text-error">*</span></label>
                                <input type="text" id="username" name="username" class="form-control" required placeholder="example@example.sch.id">
                            </div>
                            <div class="form-group">
                                <label>Password <span class="text-error">*</span></label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Ulangi Password <span class="text-error">*</span></label>
                                <input type="password" id="confirm_password" name="password2" class="form-control" required><span id='message'></span>
                            </div>
                            <!-- <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>NAMA</label>
                                <input class="au-input au-input--full" type="text" name="nama" placeholder="nama">
                            </div>
                            <div class="form-group">
                                <label>NIS</label>
                                <input class="au-input au-input--full" type="text" name="nis" placeholder="NIS">
                            </div>
                            <div class="form-group">
                                <label>tempat lahir</label>
                                <input class="au-input au-input--full" type="text" name="tempatlahir" placeholder="tempat lahir">
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Jenis Kelamin</label>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-check">
                                        <label for="inline-radio1" class="form-check-inline form-check">
                                            <input type="radio" id="inline-radio1" name="jk" value="Laki-laki" class="form-check-input">Laki-Laki
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="jk" value="Perempuan" class="form-check-input">Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>alamat</label>
                                <input class="au-input au-input--full" type="text" name="alamat" placeholder="alamat">
                            </div>
                            <div class="form-group">
                                <label>Tahun masuk</label>
                                <input class="au-input au-input--full" type="text" name="tahunmasuk" placeholder="Tahun masuk">
                            </div> -->
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                        </form>
                        <div class="register-link">
                            <p>Register Sebagai?
                                <a href="<?= base_url('user/registerGuru') ?>">Guru</a> atau
                                <a href="<?= base_url('user/registerSiswa') ?>">siswa</a>
                            </p>
                        </div>
                        <div class="register-link">
                            <p>Already have account?
                                <a href="<?= base_url('user') ?>">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>