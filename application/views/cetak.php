<html>
    <head>
        <title>Sistem Informasi Rekapitulasi Usulan Kegiatan / Belanja OPD | Bidang Anggaran BPKAD Kab. Madiun</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>asset/images/favicon.png">
        <link rel="stylesheet" href="<?= base_url()?>/asset/vendor/fonts/boxicons.css" />

        <style type="text/css">

        .test-results-header {
          text-align: center;
        }

        .test-result-table {

            /*border: 1px solid black;*/
            /*width: 800px;*/
            margin-right: auto;
            margin-left: auto;
            border: 1px black;
        }

        .test-result-table-header-cell {

            border-bottom: 1px solid black;
            background-color: silver;
        }

        .test-result-step-command-cell {

            border-bottom: 1px solid gray;
        }

        .test-result-step-description-cell {

            border-bottom: 1px solid gray;
        }

        .test-result-step-result-cell-ok {

            border-bottom: 1px solid gray;
            background-color: green;
        }

        .test-result-step-result-cell-failure {

            border-bottom: 1px solid gray;
            background-color: red;
        }

        .test-result-step-result-cell-notperformed {

            border-bottom: 1px solid gray;
            background-color: white;
        }

        .test-result-describe-cell {
            background-color: tan;
            font-style: italic;
        }

        .test-cast-status-box-ok {
            border: 1px solid black;
            float: left;
            margin-right: 10px;
            width: 45px;
            height: 25px;
            background-color: green;
        }

        </style>
    </head>
    <body>
        <div class="test-results-header">
          <h3>
              REKAPITULASI USULAN KEGIATAN DAN BELANJA OPD <br>
              PADA PDAK APBD 2022
          </h3>
          <button class="test-results-header" onclick="window.print()"> <i class="menu-icon tf-icons bx bx-printer"></i>cetak</button>
        </div>
        <table class="test-result-table">
            <thead>
                <tr>
                    <td class="test-result-table-header-cell">
                        NO
                    </td>
                    <td class="test-result-table-header-cell">
                        OPD
                    </td>
                    <td class="test-result-table-header-cell">
                        NO SURAT / TANGGAL
                    </td>
                    <td class="test-result-table-header-cell">
                        PROGRAM / KEGIATAN
                    </td>
                    <td class="test-result-table-header-cell">
                        SUMBER DANA
                    </td>
                    <td class="test-result-table-header-cell">
                        ANGGARAN APBD
                    </td>
                    <td class="test-result-table-header-cell">
                        ANGGARAN P-APBD
                    </td>
                    <td class="test-result-table-header-cell">
                        KEPUTUSAN TAPD
                    </td>
                    <td class="test-result-table-header-cell">
                        JUMLAH ACC
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php $row = 1; ?>
                <?php foreach ($laporan as $key => $value) { ?>
                <tr class="test-result-step-row test-result-step-row-altone">
                    <td class="test-result-step-description-cell">
                         <?= $row++; ?>
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $value['nama_skpd']?> 
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $value['nomor_surat_opd']?> 
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $value['program']?> 
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $this->PengajuanConstant->sumber_dana()[$value['sumber_dana']] ?> 
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $this->Converter->to_rupiah($value['anggaran_apbd']) ?> 
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $this->Converter->to_rupiah($value['anggaran_rapbd'])?> 
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $value['keputusan_rapat']?> 
                    </td>
                    <td class="test-result-step-description-cell">
                        <?= $this->Converter->to_rupiah($value['anggaran_acc'])?> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>