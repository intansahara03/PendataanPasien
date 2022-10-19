<html>
    <head>
    </head>
    <body>
        <h3>Form Tambah Pasien</h3>
        <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama Pasien:</label>
                    <input type="text" name="nama" />
                </p>
                <p> 
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" row="5"></textarea>
                </p>
                <p> 
                    <label for="jk">Jenis Kelamin:</label>
                    <label><input type="radio" name="jk" value="laki-laki" />Laki-Laki</label>
                    <label><input type="radio" name="jk" value="perempuan" />Perempuan</label>
                </p>
                <p>
                    <label for="no_telpon">No_Telpon:</label>
                    <input type="number" name="no_telpon" />
                    
                </p>
                <p>
                    <label for="agama">agama:</label>
                    <select name="agama">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindhu">Hindhu</option>
                        <option value="budha">Budha</option>
                        <option value="konghuchu">Konghuchu</option>
                    </select>
                </p>
                <p>
                    <label for="tanggal_masuk">tanggal masuk:</label>
                    <input type="date" name="tanggal_masuk" />
                </p>
                <p>
                    <label for="gejala">Gejala:</label>
                    <input type="text" name="gejala" />
                    
                </p>
                <p>
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" />
                    
                </p>
                <p>
                    <label for="tanggal_lahir">Tanggal_Lahir:</label>
                    <input type="date" name="tanggal_lahir" />
                    
                </p>
                <p>
                    <label for="no_kamar">No.Kamar:</label>
                    <input type="number" name="no_kamar" />
                    
                </p>
                    <input type="submit" value="Tambah Pasien" name="tambah_pasien" />
                </p>
            </fieldset>
        </form>
    </body?>
</html>         
               