<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-header bg-primary text-white">Daftar Buku Terbaru Perpustakaan Kendal</h5>

            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Contoh data 20 buku
                    $daftar_buku = [
                        ['Judul 1', 'Pengarang A', '978-1234567890', 2023],
                        ['Judul 2', 'Pengarang B', '978-0987654321', 2022],
                        ['Judul 3', 'Pengarang C', '978-1122334455', 2024],
                        ['Judul 4', 'Pengarang D', '978-9988776655', 2021],
                        ['Judul 5', 'Pengarang E', '978-5544332211', 2023],
                        ['Judul 6', 'Pengarang F', '978-6677889900', 2020],
                        ['Judul 7', 'Pengarang G', '978-0099887766', 2024],
                        ['Judul 8', 'Pengarang H', '978-2233445566', 2022],
                        ['Judul 9', 'Pengarang I', '978-7788990011', 2021],
                        ['Judul 10', 'Pengarang J', '978-3344556677', 2023],
                        ['Judul 11', 'Pengarang K', '978-4455667788', 2020],
                        ['Judul 12', 'Pengarang L', '978-5566778899', 2025],
                        ['Judul 13', 'Pengarang M', '978-6677889901', 2022],
                        ['Judul 14', 'Pengarang N', '978-7788990012', 2021],
                        ['Judul 15', 'Pengarang O', '978-8899001123', 2023],
                        ['Judul 16', 'Pengarang P', '978-9900112234', 2024],
                        ['Judul 17', 'Pengarang Q', '978-0112233445', 2020],
                        ['Judul 18', 'Pengarang R', '978-1223344556', 2025],
                        ['Judul 19', 'Pengarang S', '978-2334455667', 2021],
                        ['Judul 20', 'Pengarang T', '978-3445566778', 2023],
                    ];

                    $nomor = 1;
                    foreach ($daftar_buku as $buku) : ?>
                        <tr>
                            <th scope="row"><?= $nomor++ ?></th>
                            <td><?= $buku[0] ?></td>
                            <td><?= $buku[1] ?></td>
                            <td><?= $buku[2] ?></td>
                            <td><?= $buku[3] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

<?= $this->endSection() ?>