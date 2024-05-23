<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateJenisBarangValuesInBarangs extends Migration
{
    public function up()
    {
        DB::statement("
            UPDATE barang
            SET jenis_barang = CASE
                WHEN jenis_barang = 1 THEN 'ELEKTRONIKA'
                WHEN jenis_barang = 2 THEN 'OTOMOTIF'
                WHEN jenis_barang = 3 THEN 'LISTRIK'
                WHEN jenis_barang = 4 THEN 'MEKATRONIKA'
                WHEN jenis_barang = 7 THEN 'BHP'
                WHEN jenis_barang = 12 THEN 'ALAT BERAT'
                WHEN jenis_barang = 13 THEN 'OTOTRONIK'
                WHEN jenis_barang = 14 THEN 'PERKAPALAN'
                WHEN jenis_barang = 18 THEN 'LAB BAHASA'
                WHEN jenis_barang = 21 THEN 'PESAWAT UDARA'
                WHEN jenis_barang = 22 THEN 'ENERGI TERBARUKAN'
                WHEN jenis_barang = 23 THEN 'UKM'
                WHEN jenis_barang = 24 THEN 'PENDINGIN'
                WHEN jenis_barang = 25 THEN 'KERETA API'
                WHEN jenis_barang = 29 THEN 'TKJ'
                ELSE jenis_barang
            END;
        ");
    }

    public function down()
    {
        // Optionally handle the rollback.
        // This part can be complex as reverting to original integers may require a more involved process.
    }
}
