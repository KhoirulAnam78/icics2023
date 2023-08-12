<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Receipt</title>
</head>

<body>
    <div class="row justify-content-center">
        <div style="width:100%">
            <div class="row justify-content-center" style="margin:0px 5px">
                <table>
                    <tr style="margin:0; padding:0">
                        <td style="width:20%">
                            <img src="{{ public_path('assets\img\unja-3d.jpeg') }}" width="100px" alt="">
                        </td>
                        <td style="width:80%">
                            <h4 style="text-align: center; font-size:18px; margin:0; padding:0">
                                The 11st International Conference of the Indonesian Chemical Society <br>(ICICS 2023)
                            </h4>
                            <h6 style="text-align: center; font-size:16px; margin:0; padding:0">
                                DEPARTMENT OF CHEMISTRY <br>
                                FACULTY OF SCIENCE AND
                                TECHNOLOGY <br>
                                UNIVERSITAS JAMBI</h6>
                            <p style="text-align: center; font-size:14px; margin:0; padding:0">
                                Email : icics2023@unja.ac.id; Website : https://icics2023.unja.ac.id
                            </p>
                        </td>
                        <td style="width:15%">
                            <img src="{{ public_path('assets\img\logo-fix.png') }}" width="150px" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr style="height:2px; background-color:black">
                        </td>
                    </tr>
                </table>
                <h4 style="text-align: center">RECEIPT</h4>
                <table style="width:100%">
                    <tr>
                        <td>
                            No
                        </td>
                        <td>: 92804823432/42423/432/4</td>
                    </tr>
                    <tr>
                        <td>Received From</td>
                        <td>: Khoirul Anam</td>
                    </tr>
                    <tr>
                        <td>
                            Amount Paid
                        </td>
                        <td>
                            : IDR 750.000
                        </td>
                    </tr>
                    <tr>
                        <td>For the Payment of</td>
                        <td>: Registration Fee of ICICS 2023 as Author</td>
                    </tr>
                </table>
                <table style="width:100%">
                    <tr>
                        <td width="70%"></td>
                        <td width="30%">
                            <p style="margin:50px 0px 0px 0px; padding:0px;font-size: 14px; text-align:end">
                                {{ date('d F Y') }} <br>
                                Signature of Receiver<br>
                            </p>
                            <div class="parent">
                                <div class="parent" style="position: relative;top: 10px;left: 0;">
                                    <img class="image1" style="position: relative;top: 0;left: 0;"
                                        src="{{ public_path('assets\img\stempel-removebg-preview.png') }}"
                                        width="100px" />
                                    <img class="image2" style="position: absolute;left: 70px;"
                                        src="{{ public_path('assets\img\ttd_receipt-removebg-preview.png') }}"
                                        width="100px" />
                                </div>
                            </div>
                            <p style="margin:10px 0px 0px 0px; padding:0px;font-size: 14px; text-align:end">
                                Restina Bemis, S.Si., M.Si.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Paid : IDR 750.000</strong></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
</body>

</html>
