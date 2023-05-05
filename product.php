<?php
    // include_once 'top.php';
    // include_once 'menu.php';
 

    $model = new Produk();
    $data_produk = $model->dataProduk();

    // foreach($data_produk as $produk) {
    //     echo $produk['kode'] . ' - ' . $produk['nama'] . ' - ' . $produk['harga_jual'] . '<br>';
    // }
?>

                   <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Min Stok</th>
                                            <th>Jenis Produk Id</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Min Stok</th>
                                            <th>Jenis Produk Id</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no =1;
                                            foreach($data_produk as $produk)
                                            {
                                                ?><tr>
                                                <th><?= $no ?></th>
                                                <th><?= $produk['kode']?></th>
                                                <th><?= $produk['nama']?></th>
                                                <th><?= $produk['harga_jual']?></th>
                                                <th><?= $produk['harga_beli']?></th>
                                                <th><?= $produk['stok']?></th>
                                                <th><?= $produk['min_stok']?></th>
                                                <th><?= $produk['jenis_produk_id']?></th>

                                            <?php
                                            $no++;  
                                            }
                                            ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php
    include_once 'buttom.php';
?>