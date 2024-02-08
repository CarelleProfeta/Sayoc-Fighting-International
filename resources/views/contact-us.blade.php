<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sayoc Fighting International</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            body, table, td, a {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            table,
            td {
                mso-table-rspace: 0pt;
                mso-table-lspace: 0pt;
            }

            img {
                -ms-interpolation-mode: bicubic;
            }

            a[x-apple-data-detectors] {
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                color: inherit !important;
                text-decoration: none !important;
            }

            div[style*="margin: 16px 0;"] {
                margin: 0 !important;
            }

            body {
                width: 100% !important;
                height: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
            }

            table {
                border-collapse: collapse !important;
            }

            a {
                color: #1a82e2;
            }

            img {
                height: auto;
                line-height: 100%;
                text-decoration: none;
                border: 0;
                outline: none;
            }
        </style>
    </head>
    <!-- End Head -->

    <body style="background-color: #fff6de">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">

            <!-- Logo -->
            <tr>
                <td align="center">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                        <tr>
                            <td align="center" valign="top" style="padding: 36px 24px;">
                                <a href="http://127.0.0.1:8000/home" target="_blank" style="display: inline-block;">
                                    <img src="assets/img/hero-carousel/cover14.jpg" alt="SFI Logo" border="0" width="300" style="display: block; width: 300px; max-width: 300px; min-width: 300px;">
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- End Logo -->

            <!-- Content -->
            <tr>
                <td align="center">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; border: 3px solid #d4dadf;">
                        <tr>
                            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Nunito', sans-serif;"></td>
                        </tr>
                        <tr>
                            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Nunito', sans-serif; font-size: 16px; line-height: 24px;">
                                <p>Dear Lakans,</p>
                                <p>We've recently received a message from a visitor to our website who expressed interest in our martial arts services. Here are the details of the inquiry:</p>
                                <ul>
                                    <li><strong>Name:</strong> {{ $data['name'] }} </li>
                                    <li><strong>Email:</strong> {{ $data['email'] }} </li>
                                    <li><strong>Phone Number:</strong> {{ $data['subject'] }}</li>
                                    <li><strong>Message:</strong> {{ $data['message'] }} </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Nunito', sans-serif; font-size: 16px; line-height: 24px;">
                                <p style="margin: 0;">Best Regards,<br> SFI - Website</p>
                            </td>
                        </tr>
                    </table>

                    <table>
                        <!-- Spacing at the bottom -->
                        <tr>
                            <td height="60" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                        </tr>
                        <!-- End Spacing -->
                    </table>
                </td>
            </tr>
            <!-- End Content -->

        </table>
    </body><!-- end body -->
</html>
