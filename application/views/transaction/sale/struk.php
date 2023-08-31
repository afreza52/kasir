<!DOCTYPE html>
<html>

<head>
    <title>Toko MYpos - Struk Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .receipt {

            padding: 10px;
            width: 500px;
        }

        .header {
            border-top: 1px dashed #000;
            border-bottom: 1px dashed #000;
            text-align: center;
        }

        .info {
            margin-bottom: 10px;
        }

        .item-list {
            width: 100%;
            border-collapse: collapse;

            border-bottom: 1px dashed #000;
        }

        .item-list th {
            padding: 10px;
            border-top: 1px dashed #000;
            border-bottom: 1px dashed #000;
            border-bottom: 1px dashed #000;
        }

        .item-list td {
            text-align: center;
            border: 0px solid #000;
            margin-left: 5px;
            padding: 5px;

        }

        .total {
            width: 97%;
            text-align: right;


        }


        .garis {
            text-align: right;
            border-bottom: 1px dashed #000;
            margin-left: 5px;
            padding: 5px;

        }


        .footer {

            margin-top: 10px;
            text-align: center;
        }

        .footer hr {

            border-top: 1px dashed #000;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <div class="header">

            <h2>TOKO MY POS</h2>
        </div>
        <div class="info">
            <table>
                <tr>

                    <td style="width:260px   ;">

                        <?php echo date("Y-m-d H:i:s"); ?>
                    </td>

                    <td>
                        Kasir
                    </td>
                    <td>:
                        <?= ucwords($this->fungsi->user_login()->name) ?>
                    </td>
                </tr>
                <tr>


                    <td>
                        <?php echo $sale_data['invoice']; ?>
                    </td>
                    <td style="float-right">
                        Customer
                    </td>
                    <td>:
                        <?php echo $customer['name']; ?>
                    </td>
                </tr>
            </table>
        </div>
        <table class="item-list">
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Diskon Item</th>
                <th>Total</th>
            </tr>
            <?php foreach ($sale_items as $item) { ?>
                <tr>
                    <td>
                        <?php echo $item['item']; ?>
                    </td>
                    <td>
                        <?php echo $item['qty']; ?>
                    </td>
                    <td>
                        <?php echo $item['price']; ?>
                    </td>
                    <td>
                        <?php echo $item['discount']; ?>
                    </td>
                    <td>
                        <?php echo $item['total']; ?>
                    </td>
                </tr>
            <?php } ?>

        </table><br>
        <table class="total">

            <tr>
                <td>SubTotal : Rp</td>

                <td class="garis">
                    <?php echo $sale_data['total_price']; ?>
                </td>
            </tr>
            <tr>
                <td>Anda Hemat :(-)Rp</td>

                <td class="garis">
                    <?php echo $sale_data['discount']; ?>
                </td>
            </tr>
            <tr>
                <td>Total : Rp</td>

                <td class="garis">
                    <?php echo $sale_data['final_price']; ?>
                </td>
            </tr>
            <tr>
                <td>Tunai : Rp</td>

                <td>
                    <?php echo $sale_data['cash']; ?>
                </td>
            </tr>
            <tr>
                <td>Kembali : Rp</td>

                <td>
                    <?php echo $sale_data['remaining']; ?>
                </td>
            </tr>

        </table>
        <div class="footer">
            <hr>
            <p>*Terima kasih telah berbelanja di Toko MYpos</p>
        </div>
    </div>
</body>
<script>
    // Cetak struk ketika halaman selesai dimuat
    window.onload = function () {
        window.print();
    };
</script>

</html>