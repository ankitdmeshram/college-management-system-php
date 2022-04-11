<?php

    require('vendor/autoload.php');

    include "../resources/config.php";

    ?>

<?php

    $emaill = $_SESSION['email'];
    $query = query("SELECT * FROM users WHERE email = '{$emaill}'");
    confirm($query);


    if (mysqli_num_rows($query) > 0) {
        // print("hello");
        while ($row = fetch_array($query)) {
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $phone2 = $row['phone2'];

$html = <<<DELIMETER



    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
        text-indent: 0;
      }
      .s1 {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 8.5pt;
      }
      .s2 {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8.5pt;
      }
      .s3 {
        color: black;
        font-family: Verdana, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 8.5pt;
      }
      .s4 {
        color: black;
        font-family: Verdana, sans-serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 7.5pt;
      }
      .s5 {
        color: black;
        font-family: Verdana, sans-serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 7.5pt;
      }
      .s6 {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 10.5pt;
      }
      .s7 {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 13.5pt;
      }
      .s8 {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: bold;
        text-decoration: none;
        font-size: 7.5pt;
      }
      .s9 {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8.5pt;
      }
      p {
        color: black;
        font-family: "Times New Roman", serif;
        font-style: normal;
        font-weight: normal;
        text-decoration: none;
        font-size: 8.5pt;
        margin: 0pt;
      }
      table,
      tbody {
        vertical-align: top;
        overflow: visible;
      }
    </style>
  </head>
  <body>
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    
    <p style="text-indent: 0pt; text-align: left"><br /></p>
    <table
      style="border-collapse: collapse; margin-left: 5.64484pt"
      cellspacing="0"
    >
      <tr style="height: 55pt">
        <td
          style="
            width: 75pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
          rowspan="2"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p style="padding-left: 16pt; text-indent: 0pt; text-align: left">
            <span
              ><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <img
                      width="56"
                      height="57"
                      src="data:image/jpg;base64,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"
                    />
                  </td>
                </tr></table
            ></span>
          </p>
        </td>
        <td
          style="
            width: 325pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
          rowspan="2"
        >
          <p
            class="s3"
            style="
              padding-left: 111pt;
              padding-right: 65pt;
              text-indent: 1pt;
              line-height: 19pt;
              text-align: left;
            "
          >
            C.H.M. College (217) University of Mumbai
          </p>
          <p
            class="s4"
            style="
              padding-left: 60pt;
              padding-right: 59pt;
              text-indent: 0pt;
              line-height: 7pt;
              text-align: center;
            "
          >
            M.G.Road, Fort, Mumbai-400032, Maharashtra(India)
          </p>
          <p
            class="s5"
            style="
              padding-left: 60pt;
              padding-right: 57pt;
              text-indent: 0pt;
              line-height: 9pt;
              text-align: center;
            "
          >
            Academic Year: 2020-2021
          </p>
          <p
            class="s3"
            style="
              padding-left: 60pt;
              padding-right: 57pt;
              text-indent: 0pt;
              text-align: center;
            "
          >
            APPLICATION FORM
          </p>
        </td>
        <td
          style="
            width: 134pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s6"
            style="
              padding-left: 28pt;
              padding-right: 27pt;
              text-indent: 0pt;
              text-align: center;
            "
          >
            Application No :
          </p>
          <p
            class="s7"
            style="
              padding-left: 28pt;
              padding-right: 27pt;
              text-indent: 0pt;
              text-align: center;
            "
          >
            1389808
          </p>
          <p
            class="s6"
            style="
              padding-left: 28pt;
              padding-right: 25pt;
              text-indent: 0pt;
              text-align: center;
            "
          >
            Regular
          </p>
        </td>
      </tr>
      <tr style="height: 19pt">
        <td
          style="
            width: 134pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
          rowspan="2"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p style="padding-left: 38pt; text-indent: 0pt; text-align: left">
            <span
              ><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <img
                      width="84"
                      height="18"
                      src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAASAFQDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD0z/gn/wD8ij4Y/wCxc1H/ANNvhuvELj/kf/iX/wBhj4W/+ka17f8A8E//APkUfDH/AGLmo/8Apt8N14hcf8j/APEv/sMfC3/0jWgBbT/kcP2Z/wDsRtU/9RC0rP8Agp/yQX4c/wC54p/9RI1oWn/I4fsz/wDYjap/6iFpWf8ABT/kgvw5/wBzxT/6iRoAdpv/ACI3wm/7I/rf/pp1Otz4c/8AJOfh5/2J3iP/ANRXRKw9N/5Eb4Tf9kf1v/006nW58Of+Sc/Dz/sTvEf/AKiuiUAczrH/ACPf7SX/AF8fE3/0RptdDrP/ACbxoP8A2R3xB/6J0Oue1j/ke/2kv+vj4m/+iNNrodZ/5N40H/sjviD/ANE6HQBD8Kv+THfih/2K9l/6T6bTf2tf+Tg/2k/+v7wp/wCmyenfCr/kx34of9ivZf8ApPptN/a1/wCTg/2k/wDr+8Kf+myegD9cF6UUL0ooA/Pz/gn/AP8AIo+GP+xc1H/02+G68QuP+R/+Jf8A2GPhb/6RrRRQAtp/yOH7M/8A2I2qf+ohaVn/AAU/5IL8Of8Ac8U/+okaKKAHab/yI3wm/wCyP63/AOmnU63Phz/yTn4ef9id4j/9RXRKKKAOZ1j/AJHz9pL/AK+Pib/6I02uh1n/AJN40H/sjviD/wBE6HRRQBD8Kv8Akx34of8AYr2X/pPptN/a1/5OD/aT/wCv7wp/6bJ6KKAP1wXpRRRQB//Z"
                    />
                  </td>
                </tr></table
            ></span>
          </p>
        </td>
      </tr>
      <tr style="height: 5pt">
        <td
          style="
            width: 400pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="6"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
      </tr>
      <tr style="height: 16pt">
        <td
          style="
            width: 400pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="6"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Course Applied for :
            <span class="s8"
              >B.Sc. (I.T.)(with Credits) - Regular - Rev16 - S.Y. B.Sc. (I.T.)
              Sem III (42300003)</span
            >
          </p>
        </td>
        <td
          style="
            width: 134pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            PRN:<span class="s2">2019016400467052</span>
          </p>
        </td>
      </tr>
      <tr style="height: 18pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Application Date : <span class="s2">29/07/2020</span>
          </p>
        </td>
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Payment Category : <span class="s2">25</span>
          </p>
        </td>
        <td
          style="
            width: 80pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
        <td
          style="
            width: 134pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
          rowspan="6"
        >
          <p style="padding-left: 38pt; text-indent: 0pt; text-align: left">
            <span
              ><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <img
                      width="71"
                      height="92"
                      src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCABcAEcDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD6PQYHt71IibcZ5qJWz/PFTRuWYDkseBisNTew4ssaeY/yRoMsxPAA6k14p4//AGxfh14D1SXTVu7jWr6MkSLp0e9FPoWz1rwT9qX9rDVr3Xr/AMG+E7pbHS4C1vfXcX35m6Fc9h9K+UJBHatJPJMd7n7xON3vWsYX1ZLly7H3O3/BQbw8Lsr/AMIrqPkj/loJV3f984r0z4ZftY+APife2+n2V9LpmqSnatpqC+WzNj+E96/MCa5tkTzIboF+4Oc1Wg1R7S8juYZminjYMk0RwykdCDVuC6Ecz3P2wMfTPTtxSSR9j3r86fgn+3F4v8P6/Y2Hiu+j1bQ3KxPLcr88SjjIIH86/Q7RNasfEukWuq6bcJdWN0gkiljbcCD71g00Xe5IUwfrRVhlwfaipApBM84rM8Ual/YXhbWtRXO+1spplH+0qEitZT8pA4qjq9tBqNjcWV0hktbmJoJV9UYYI/I1ZTPxuvNYm1fVLi7kI866laVyT3ZiTVu5043SInmIQO9dF4v+Hg0/xp4o0mxTylsL94IC7cBM8ZP0pnhz4bazJMzyXFs9pERuCSBmIPoPStvaRQlSlM5R9E/fLBHmWZzgIi5JrstM+C12beK4vpTAHwfKK8gV9LeCPBHhrQvDUOq2FkrayI9jS3H7wbu+BWBrLWV7DcQaj4qEV+QXSBEUbATxnjpXDUxPNpE9Slg0leofMXjLwunh3Vra2icsk/GTX6WfsSLeR/ADTba6CsLe5lSNlOTjOefzr4X8Q+E7zWvFvhSxuGQz3N35ImUfKQejYr9Ovhb4GtPh14JsNDs5GkSIeZI7c7nYZJreMuaGpwVock2kdKyjnjn3oqZ1DEY/OilZmJl4zioZkDuhAzzUynjGDmobj5RkfpV2KvqfnJ4h0FNS+IniyBz/AMfN/Lv55xuNdT4e8Ft4b03ULmK0SVPs4jaVz91VHGB61qfGD4bXvw+8e3niKR0ew1m7Z1CE5jPU59KPE/xgg0XwMui2tg88t39+ZVJA9Oa86pzcx7+HUHTu9yXwho+qS+ETqiI/kpLuBB5yfauivfhcuoRxaxJaQyC6hAMhHO30P0Nee+HNR8RXHhd4beU5d/MG5jsHocY616J4K+K11Ppo0a9tJUaBdvnlD5bkdea5nGULu56SlGbV0cF4n0i38N+ItJunIb7O/wAgx0PHT06V9+eFp/tPh3TJiPmlto2J/wCAivj/AMJ+BF+MHjM2F1K1vaRo0ryIuSpzwPxr7H0awTSdJs7JGLx20KxKx7gDFd+HT5bs8LHuPNZFx8DggiikYZ69KK7TylYx/M4HPSmTYkjJ6U2IGRht5Pt3rhfiP8bvBfwqjf8A4SHW4ba5C7hZQ/vJz/wAc0JOWwjI+NPgyHxh4F1S2ckTwxm4gbvvUZA/HmvjPw34ut7qz+wXRSN1fa0bdQehr0P4p/ttReIvD9/pHhvQ5rF7tTEuo3Mo3BD3VR0OK8O03wwPEdgk0UhjuwM7z1Y/WssRR5UnLQ9DB1XdqOp9H+D9M0W705pprmK28vgI8h+b9azfF/jDTtMhNtHOhVPuhD1NePaZ4R13YY2kuQAMDGT+VdZo/wAM54AdQv2PyDIEpyT74ry5Rj1Z70ZS6I+mv2SLH7f4f1PXJVKSXUwhUEfdVf8AGvoZcAY9sda/Oj4d/tPaz8G9e1GwtbWPVtGkcN9kmfZtYdSp7Zr6A8G/tpxeNCTD8OfETqhxJLpsf2iNT9QM17caEo01JbHy9abqVWt2fS8jhVxmiuC0L4tadriAvpOt6cSMkXunSIB+JGKKzcZJi9nLsQ6v4BuPEKNLqmv30WmqpLW1m/2YAY/icda858cfDz4YeDvhh4i1qXTNO1OdoJBFeX8ouZixGFw5JPWvlr4p/teePPiTBdWK3Efh/SpwRLa2JOGX0ya8Sj1S5iGZby5nt1bH2cysyn8K9unh2tWbTxdLWNONxL+2Zo1kUEMOcCvWvgjat4k3wwn99CQWj749cV5fY3j6pcG3gtLmWRshAIW5r2D9lj4beI/GPxZhGjx/Z47FTJetKSqqpBADe+aeOoKrSsuhy4KcqVZO257/AKX4Skt4F3J8/wCVYvjLSrpNPmCnZ8uMiu71CafTr+e2mUrLE5RgexFcV8TPEcPh3wpfahdD5FQqoHdjwB+Zr4qFOTmo2PtZyUYOR8catdx3esXUgXKLMYzz1IPJr6Y/ZB+OegfC+317S/Euptp1pcus9tMQSFIHK8etfOvgbwPrvxH12TSfD2nSahqdxvuVt4/Qcn+dejXP7JnxbaAJ/wAIXesSM5BX/GvvYwjGkqbPh4zqRqurBH2lZfth/CXVY4Wk8RSQqxZClxGQQR3I9D2or4I8W/s3/EnwXZm51bwlfQ2ykAygBgCeg4NFY+xp9zvWMxL2ifTP7If7MXhXxh8Pf+Ek8Z6OdTnvJW+yxTOVj8rHDYHevpzQfgD8PPD9tby6d4P0uF7chlk8gMwOeuT1rz2fxpffCH4D6AdAjt/+JfYxrCLpDICDn73IzXxt8Qv2s/iX4tvZUk15tMibCmLTFMK4+mTWXvTk9Ts5aeHpx927P1CfTdFsBEfsen2/z8kQxp/SuZ8OaB4P8AaprFxp/wBjsbjVbjz7m681Q0jdgxzwB6V+Tt98QfFGrlBfeItSuwWziW4Y1m3l5dXjEz3lzKT13TMf610rDPqzmlj4p6RPv/4i/FPwh4i+MF74d0qaKW9iiBmuI2BillHUKe5AxXU+DvhN4c+LWnaxp/iLThfWSgKm4lTGxHDDHcV+aml38+mXEd1bStHPbyB43B5Br7k+Bvxn8R2WveJtCR7Y2f8AwjrakHaI+YJhESCGz0z2ryq2EVHERcWb0MY69OTkj0P9nT4L+Df2fdS8QvN4n0m51GefEMs93Gs1vDz8hyRg+te5f8LA8MCR0/4SrSOOf+QjH/8AFV+NF3eT6rqd/fXUrzXVzM0skjMSSxOTTPLHJ56ete28Nz6tnAswVJOMYH7L6j4n0DVIFij1/S7nJzsF5G/6Zor8ZJiyqGV3VvVXIorF4RX3KWaP+Q//2QAA"
                    />
                  </td>
                </tr></table
            ></span>
          </p>
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p style="padding-left: 26pt; text-indent: 0pt; text-align: left">
            <span
              ><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>
                    <img
                      width="107"
                      height="25"
                      src="data:image/jpg;base64,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"
                    />
                  </td>
                </tr></table
            ></span>
          </p>
        </td>
      </tr>
      <tr style="height: 18pt">
        <td
          style="
            width: 400pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="6"
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            1.Personal Information
          </p>
        </td>
      </tr>
      <tr style="height: 18pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Candidate&#39;s Name(Regional) :
          </p>
        </td>
        <td
          style="
            width: 240pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
      </tr>
      <tr style="height: 24pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              padding-right: 1pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Candidate&#39;s Name as printed on Mark sheet :
          </p>
        </td>
        <td
          style="
            width: 240pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            BAG ROHAN NOBO
          </p>
          <p
            class="s2"
            style="
              padding-left: 2pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            [*This name will appear on all University records/documents]
          </p>
        </td>
      </tr>
      <tr style="height: 18pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Father&#39;s/Husband&#39;s Name :
          </p>
        </td>
        <td
          style="
            width: 80pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s2"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            NOBO BAG
          </p>
        </td>
        <td
          style="
            width: 80pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Mother&#39;s Name :
          </p>
        </td>
        <td
          style="
            width: 80pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s2"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            RANI
          </p>
        </td>
      </tr>
      <tr style="height: 18pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Marital Status :
          </p>
        </td>
        <td
          style="
            width: 80pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s2"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            UnMarried
          </p>
        </td>
        <td
          style="
            width: 80pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 3pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Mother Tongue :
          </p>
        </td>
        <td
          style="
            width: 80pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Place Of Birth : <span class="s2">ULHASNAGAR</span>
          </p>
        </td>
        <td
          style="
            width: 96pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 1pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Gender : <span class="s2">Male</span>
          </p>
        </td>
        <td
          style="
            width: 278pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="7"
        >
          <p
            class="s1"
            style="padding-top: 1pt; text-indent: 0pt; text-align: left"
          >
            Date of Birth (DD/MM/YYYY) : <span class="s2">14/05/2002</span>
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Blood Group :
          </p>
        </td>
        <td
          style="
            width: 96pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 1pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Religion :
          </p>
        </td>
        <td
          style="
            width: 278pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="7"
        >
          <p
            class="s1"
            style="padding-top: 1pt; text-indent: 0pt; text-align: left"
          >
            Country of Citizenship : <span class="s2">India</span>
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 2pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Height : <span class="s2">Not Available</span>
          </p>
        </td>
        <td
          style="
            width: 96pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 2pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 1pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Weight : <span class="s2">Not Available</span>
          </p>
        </td>
        <td
          style="
            width: 278pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 2pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="7"
        >
          <p
            class="s1"
            style="padding-top: 1pt; text-indent: 0pt; text-align: left"
          >
            Hemoglobin : <span class="s2">Not Available</span>
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 308pt;
            border-top-style: solid;
            border-top-width: 2pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="4"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Is Student NRI/ Foreign National : <span class="s2">No</span>
          </p>
        </td>
        <td
          style="
            width: 226pt;
            border-top-style: solid;
            border-top-width: 2pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="6"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Domicile State: <span class="s2">Maharashtra</span>
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Address For Correspondence :
          </p>
        </td>
      </tr>
      <tr style="height: 24pt">
        <td
          style="
            width: 107pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            State : <span class="s2">Maharashtra</span>
          </p>
        </td>
        <td
          style="
            width: 107pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            District : <span class="s2">Thane</span>
          </p>
        </td>
        <td
          style="
            width: 106pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Tehsil : <span class="s2">Thane</span>
          </p>
        </td>
        <td
          style="
            width: 107pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="3"
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            City/Town/Village :
          </p>
        </td>
        <td
          style="
            width: 107pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="3"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              padding-right: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Location Area : <span class="s2">Not Available</span>
          </p>
        </td>
      </tr>
      <tr style="height: 24pt">
        <td
          style="
            width: 107pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            Address (House
          </p>
          <p
            class="s1"
            style="
              padding-left: 2pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            no,street/area/suburb etc.) :
          </p>
        </td>
        <td
          style="
            width: 320pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="5"
        >
          <p
            class="s2"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            7/2ND FLOOR GANESH NIWAS KATEMANIVALI NAKA KALYAN
          </p>
        </td>
        <td
          style="
            width: 107pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="3"
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Pin Code : <span class="s2">421306</span>
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Contact details
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 66pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Mobile Number
          </p>
        </td>
        <td
          style="
            width: 267pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            919594346947
          </p>
        </td>
        <td
          style="
            width: 201pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="6"
        >
          <p
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            <a
              href="mailto:ROHANBAG32@GMAIL.COM"
              style="
                color: black;
                font-family: 'Times New Roman', serif;
                font-style: normal;
                font-weight: bold;
                text-decoration: none;
                font-size: 8.5pt;
              "
              target="_blank"
              >Email ID: </a
            ><a href="mailto:ROHANBAG32@GMAIL.COM" class="s9" target="_blank"
              >ROHANBAG32@GMAIL.COM</a
            >
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            2.Legal Reservation Information
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 93pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Category Type : <span class="s2">Open</span>
          </p>
        </td>
        <td
          style="
            width: 94pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Category : <span class="s2">GEN</span>
          </p>
        </td>
        <td
          style="
            width: 174pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
        <td
          style="
            width: 173pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="5"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 187pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Is Specially Abled? <span class="s2">No</span>
          </p>
        </td>
        <td
          style="
            width: 347pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="8"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            3.Social Information(Additional Inforamtion)
          </p>
        </td>
      </tr>
      <tr style="height: 5pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Paper Selected for:
          </p>
        </td>
      </tr>
      <tr style="height: 148pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 11pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Sem III
          </p>
          <p
            class="s2"
            style="
              padding-top: 3pt;
              padding-left: 10pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            USIT301 - Python Programming. USIT302 - Data Structures
          </p>
          <p
            class="s2"
            style="
              padding-left: 10pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            USIT303 - Computer Networks USIT304 - Database Management Systems
          </p>
          <p
            class="s2"
            style="
              padding-left: 10pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            USIT305 - Applied Mathematics USIT3P1 - Python Programming Practical
          </p>
          <p
            class="s2"
            style="
              padding-left: 10pt;
              padding-right: 119pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            USIT3P2 - Data Structures Practical USIT3P3 - Computer Networks
            Practical USIT3P4 - Database Management Systems Practical USIT3P5 -
            Mobile Programming Practical
          </p>
          <p
            class="s2"
            style="
              padding-top: 6pt;
              padding-left: 11pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Sem IV
          </p>
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="
              padding-left: 31pt;
              padding-right: 119pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            USIT401 - Core Java USIT402 - Introduction to Embedded Systems
            USIT403 - Computer Oriented Statistical Techniques USIT404 -
            Software Engineering
          </p>
          <p
            class="s2"
            style="
              padding-left: 31pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            USIT405 - Computer Graphics and Animation USIT4P1 - Core Java
            Practical
          </p>
          <p
            class="s2"
            style="
              padding-left: 31pt;
              padding-right: 34pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            USIT4P2 - Introduction to Embedded Systems Practical USIT4P3 -
            Computer Oriented Statistical Techniques Practical USIT4P4 -
            Software Engineering Practical USIT4P5 - Computer Graphics and
            Animation Practical
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Medium of Instruction : <span class="s2">English</span>
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            4.Guardian Information
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 256pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="3"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Occupation of Guardian : <span class="s2">Business</span>
          </p>
        </td>
        <td
          style="
            width: 278pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="7"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 3pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Annual Income of Guardian : <span class="s2">100000</span>
          </p>
        </td>
      </tr>
      <tr style="height: 15pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            5.Educational Details
          </p>
        </td>
      </tr>
      <tr style="height: 34pt">
        <td
          style="
            width: 56pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 3pt;
              padding-right: 3pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: center;
            "
          >
            Name of
          </p>
          <p
            class="s1"
            style="
              padding-left: 3pt;
              padding-right: 3pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: center;
            "
          >
            Examination
          </p>
        </td>
        <td
          style="
            width: 171pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 66pt;
              text-indent: -51pt;
              text-align: left;
            "
          >
            Name of Board/University and State of University
          </p>
        </td>
        <td
          style="
            width: 59pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 11pt;
              text-align: left;
            "
          >
            Name of School/College
          </p>
        </td>
        <td
          style="
            width: 52pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 11pt;
              text-indent: -6pt;
              text-align: left;
            "
          >
            Month and Year of Passing
          </p>
        </td>
        <td
          style="
            width: 31pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 4pt;
              padding-right: 4pt;
              text-indent: 0pt;
              text-align: center;
            "
          >
            Exam Seat No.
          </p>
        </td>
        <td
          style="
            width: 44pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 15pt;
              text-indent: -13pt;
              text-align: left;
            "
          >
            Certificate No.
          </p>
        </td>
        <td
          style="
            width: 40pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 6pt;
              text-align: left;
            "
          >
            Mark Obtained
          </p>
        </td>
        <td
          style="
            width: 28pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s1"
            style="padding-right: 1pt; text-indent: 0pt; text-align: right"
          >
            Out of
          </p>
        </td>
        <td
          style="
            width: 29pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s1"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            CGPA
          </p>
        </td>
        <td
          style="
            width: 24pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s1" style="text-indent: 0pt; text-align: center">%</p>
        </td>
      </tr>
      <tr style="height: 34pt">
        <td
          style="
            width: 56pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            Std 10th
          </p>
        </td>
        <td
          style="
            width: 171pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION,
          </p>
        </td>
        <td
          style="
            width: 59pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
        <td
          style="
            width: 52pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            March 2017
          </p>
        </td>
        <td
          style="
            width: 31pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            --
          </p>
        </td>
        <td
          style="
            width: 44pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            --
          </p>
        </td>
        <td
          style="
            width: 40pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            370.00
          </p>
        </td>
        <td
          style="
            width: 28pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-right: 1pt; text-indent: 0pt; text-align: right"
          >
            500.00
          </p>
        </td>
        <td
          style="
            width: 29pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            -- - --
          </p>
        </td>
        <td
          style="
            width: 24pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="
              padding-left: 1pt;
              padding-right: 1pt;
              text-indent: 0pt;
              text-align: center;
            "
          >
            74.00
          </p>
        </td>
      </tr>
    </table>
    <p style="text-indent: 0pt; text-align: left" />
    <p style="text-indent: 0pt; text-align: left" />
    <p style="padding-left: 1pt; text-indent: 0pt; text-align: left">
      For Office Use Only
    </p>
    <p style="text-indent: 0pt; text-align: left" />
    <table
      style="border-collapse: collapse; margin-left: 5.64484pt"
      cellspacing="0"
    >
      <tr style="height: 33pt">
        <td
          style="
            width: 56pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 3pt;
              padding-right: 3pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: center;
            "
          >
            Name of
          </p>
          <p
            class="s1"
            style="
              padding-left: 3pt;
              padding-right: 3pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: center;
            "
          >
            Examination
          </p>
        </td>
        <td
          style="
            width: 171pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 66pt;
              text-indent: -51pt;
              text-align: left;
            "
          >
            Name of Board/University and State of University
          </p>
        </td>
        <td
          style="
            width: 59pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 11pt;
              text-align: left;
            "
          >
            Name of School/College
          </p>
        </td>
        <td
          style="
            width: 52pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 11pt;
              padding-right: 4pt;
              text-indent: -6pt;
              text-align: left;
            "
          >
            Month and Year of Passing
          </p>
        </td>
        <td
          style="
            width: 31pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 4pt;
              padding-right: 4pt;
              text-indent: 0pt;
              text-align: center;
            "
          >
            Exam Seat No.
          </p>
        </td>
        <td
          style="
            width: 44pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 15pt;
              text-indent: -13pt;
              text-align: left;
            "
          >
            Certificate No.
          </p>
        </td>
        <td
          style="
            width: 40pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s1"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 6pt;
              text-align: left;
            "
          >
            Mark Obtained
          </p>
        </td>
        <td
          style="
            width: 28pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s1"
            style="padding-right: 2pt; text-indent: 0pt; text-align: right"
          >
            Out of
          </p>
        </td>
        <td
          style="
            width: 29pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s1"
            style="padding-left: 1pt; text-indent: 0pt; text-align: left"
          >
            CGPA
          </p>
        </td>
        <td
          style="
            width: 24pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p class="s1" style="text-indent: 0pt; text-align: center">%</p>
        </td>
      </tr>
      <tr style="height: 33pt">
        <td
          style="
            width: 56pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s2"
            style="
              padding-top: 6pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Std 12th 12Th (Commerce)
          </p>
        </td>
        <td
          style="
            width: 171pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            MAHARASHTRA STATE BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION,
          </p>
        </td>
        <td
          style="
            width: 59pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
        </td>
        <td
          style="
            width: 52pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            March 2019
          </p>
        </td>
        <td
          style="
            width: 31pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            --
          </p>
        </td>
        <td
          style="
            width: 44pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 2pt; text-indent: 0pt; text-align: left"
          >
            --
          </p>
        </td>
        <td
          style="
            width: 40pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 1pt; text-indent: 0pt; text-align: left"
          >
            485.00
          </p>
        </td>
        <td
          style="
            width: 28pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-right: 2pt; text-indent: 0pt; text-align: right"
          >
            650.00
          </p>
        </td>
        <td
          style="
            width: 29pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-left: 1pt; text-indent: 0pt; text-align: left"
          >
            -- - --
          </p>
        </td>
        <td
          style="
            width: 24pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s2"
            style="padding-right: 1pt; text-indent: 0pt; text-align: center"
          >
            74.62
          </p>
        </td>
      </tr>
      <tr style="height: 14pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Your Last Qualifying Exam:
          </p>
        </td>
      </tr>
      <tr style="height: 14pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            7.Other Information
          </p>
        </td>
      </tr>
      <tr style="height: 14pt">
        <td
          style="
            width: 481pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="8"
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Would you like to apply for Hostel accommodation required
          </p>
        </td>
        <td
          style="
            width: 53pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s2"
            style="
              padding-top: 1pt;
              padding-left: 1pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            NA
          </p>
        </td>
      </tr>
      <tr style="height: 62pt">
        <td
          style="
            width: 534pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="10"
        >
          <p
            class="s1"
            style="
              padding-top: 1pt;
              padding-left: 2pt;
              text-indent: 0pt;
              line-height: 10pt;
              text-align: left;
            "
          >
            DECLARATION
          </p>
          <p
            class="s2"
            style="
              padding-left: 2pt;
              padding-right: 2pt;
              text-indent: 0pt;
              text-align: justify;
            "
          >
            I hereby declare that all the information furnished by me in this
            application form is true, complete and correct to the best of my
            knowledge and belief. I do understand that I need to obtain and
            produce all the required documents. I admit to having understood
            what constitutes ragging and sexual harassment. I have read the
            guidelines related to the same. I hereby affirm that if found guilty
            of ragging or sexual harassment I am liable for punishment according
            to the university regulations.
          </p>
        </td>
      </tr>
      <tr style="height: 26pt">
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 7pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Place :
          </p>
        </td>
        <td
          style="
            width: 160pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="2"
        >
          <p
            class="s1"
            style="
              padding-top: 7pt;
              padding-left: 2pt;
              text-indent: 0pt;
              text-align: left;
            "
          >
            Date :
          </p>
        </td>
        <td
          style="
            width: 214pt;
            border-top-style: solid;
            border-top-width: 1pt;
            border-left-style: solid;
            border-left-width: 1pt;
            border-bottom-style: solid;
            border-bottom-width: 1pt;
            border-right-style: solid;
            border-right-width: 1pt;
          "
          colspan="6"
        >
          <p style="text-indent: 0pt; text-align: left"><br /></p>
          <p
            class="s1"
            style="padding-left: 52pt; text-indent: 0pt; text-align: left"
          >
            ( Signature of the Candidate )
          </p>
        </td>
      </tr>
    </table>
    <p
      style="
        padding-left: 5pt;
        text-indent: 0pt;
        line-height: 10pt;
        text-align: left;
      "
    >
      Document printed on
      <b>Wed Jul 29 2020 15:58:56 GMT+0530 (India Standard Time)</b>
    </p>

DELIMETER;

echo $html;

//  $mpdf = new \Mpdf\Mpdf(); 
//  $mpdf -> WriteHTML($html);
//   $file = time() . '.pdf';
//   $mpdf -> output($file, 'I');

}

    
} 

?>
