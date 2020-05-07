<?php 
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040079") or die("Database salah!");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn , "$sql");

        $rows= [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;

        }

        return $rows;
    }

    //fungsi untuk menambahkan data didalam database
    function tambah($data)
    {
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $jenis = htmlspecialchars($data['jenis']);
        $warna = htmlspecialchars($data['warna']);
        $stock = htmlspecialchars($data['stock']);
        $harga = htmlspecialchars($data['harga']);
        $foto = htmlspecialchars($data['foto']);
        

        $query = "INSERT INTO alat_musik
                        VALUES
                        (null, '$foto', '$nama', '$jenis', '$warna', '$stock', '$harga')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }

    //fungsi untuk menghapus data di dalam database
    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

        return mysqli_affected_rows($conn);
    }  


    function ubah($data)
    {
        $conn = koneksi();
        $id = htmlspecialchars($data['id']);
        $nama = htmlspecialchars($data['nama']);
        $jenis = htmlspecialchars($data['jenis']);
        $warna = htmlspecialchars($data['warna']);
        $stock = htmlspecialchars($data['stock']);
        $harga = htmlspecialchars($data['harga']);
        $foto = htmlspecialchars($data['foto']);
        

        $query = "UPDATE alat_musik
                SET
                nama = '$nama',
                jenis = '$jenis',
                warna = '$warna',
                stock = '$stock',
                harga = '$harga',
                foto = '$foto'
                WHERE id = '$id'
                ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

    }
?>