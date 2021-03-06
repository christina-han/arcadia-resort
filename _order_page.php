

    <style>
        body {
            background: #EEEEEE;
        }

        /* ---------- BreadCrumbs ---------- */

        .BreadCrumbs {
            color: #747474;
            margin-top: 100px;
            margin-left: 100px;
            margin-bottom: 100px;
        }

        .LinkColor {
            color: #747474;
        }

        /* ----- BreadCrumbs RWD ----- */
        @media screen and (max-width: 375px) {
            .BreadCrumbs {
                display: none;
            }
        }

        /* ---------- BreadCrumbs RWD ---------- */

        .AlignCard {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /* ----- AlignCard RWD ----- */
        @media screen and (max-width: 375px) {
            .AlignCard {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
        }

        .card {
            max-width: 800px;
            /* min-height: 1500px; */
            background: #ffffff;
            margin: 15 auto;
            padding: 50px;
            margin-bottom: 50px;
        }

        /* ----- card RWD ----- */
        @media screen and (max-width: 375px) {

            .card {
                width: 100%;
                background: #ffffff;
                margin: 15 auto;
                padding: 30px;
                margin-bottom: 50px;
            }
        }


        /* ----- card RWD ----- */

        .card2 {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;

            max-width: 800px;
            background: #ffffff;
            margin: 15 auto;
            padding: 80px;
        }

        /* ----- card2 RWD ----- */
        @media screen and (max-width: 375px) {
            .card2 {
                position: relative;
                display: flex;
                flex-direction: column;
                min-width: 0;
                border: 1px solid rgba(0, 0, 0, .125);
                border-radius: .25rem;

                max-width: 800px;
                background: #ffffff;
                margin: 50px 0 50px 0;
                padding: 80px;
            }
        }

        /* ----- card2 RWD ----- */

        .card2 .svg {
            height: 50px;
        }

        .title {
            border-bottom: #5D5D5D 1px solid;
        }

        .picBox {
            padding: 30px 0px 30px 0px;
            max-width: 700px;
            min-height: 400px;
        }

        .objfit {
            width: 100%;
            /* height: 400px; */
            object-fit: cover;
        }

        /* ----- picBox & objfit RWD ----- */
        @media screen and (max-width: 375px) {
            .picBox {
                padding: 30px 0px 30px 0px;
                max-width: 323px;
                min-height: 0px;
            }

            .objfit{
                width: 100%;
                height: 234px;
                object-fit: cover;
            }
        }

        /* ----- picBox & objfit RWD ----- */

        .orderlist {
            display: flex;
            justify-content: space-between;
        }

        /* ----- orderlist RWD ----- */
        @media screen and (max-width: 375px) {
            .orderlist .bodytextchi {
                letter-spacing: 0.001em;
            }
        }

        /* ----- orderlist RWD ----- */

        .custom {
            border-top: #5D5D5D 1px solid;
            border-bottom: #5D5D5D 1px solid;
        }

        /* ----- orderlist RWD ----- */
        @media screen and (max-width: 375px) {
            .customtitle{
                margin-top: 20px;
                margin-bottom: 20px;
            }
        }

        /* ----- orderlist RWD ----- */

        .customlist {
            display: flex;
            justify-content: space-between;
        }

        .customlistLeft {
            display: flex;
            justify-content: start;
            align-items: center;
            margin-bottom: 20px;

        }

        .customlistLeft p {
            margin-left: 20px;
        }

        .customlistRight {
            width: 200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .leftPicbox {
            width: 200px;
        }

        .picfit {
            width: 100%;
            height: 150px;
            object-fit: cover;
            padding-right: 0;
        }

        /* ----- leftPicbox & picfit RWD ----- */
        @media screen and (max-width: 375px) {
            .leftPicbox {
                /* padding: 30px 0px 30px 0px; */
                max-width: 140px;
                
            }

            .picfit{
                width: 100%;
                height: 85px;
                object-fit: cover;
                padding-right: 0;
            }
        }

        /* ----- leftPicbox & picfit RWD ----- */

        .circle {
            overflow: hidden;
            object-fit: cover;
        }

        .MemberButton {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* ----- MemberButton RWD ----- */
        @media screen and (max-width: 375px) {
            .MemberButton {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 50px;
            }
        }

        /* ----- MemberButton RWD ----- */

        .ButtonStyle {
            background-color: #EB9851;
            color: white;
            width: 268px;
            height: 56px;
            border-width: 2px;

            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <div class="BreadCrumbs">
        <span class="h3chi">
            <a class="LinkColor" href="">??????</a> >
            <a class="LinkColor" href="">????????????</a> >
            <a class="LinkColor" href="">????????????</a> >
            <a class="LinkColor" href="">????????????</a> >
            <a class="LinkColor" href="">??????</a> >
            <a class="LinkColor" href="">????????????</a></span>
    </div>

    <div class="AlignCard">

        <div class="card2">
            <img class="svg" src="svg/checkOK.svg" alt="">
            <span class="bodytextchi" style="padding: 20px;">
                Dear ???????????? Arcadia Resort ???????????????????????? <br>
                <br>
                ???????????????A55287 <br>
                ???????????????2020-07-04 <br>
                ????????????56,800 <br>
                ???????????????****-****-****-5678 <br>
                <br>
                ??????????????????????????? Email ??????????????????Arcadia ???????????????????????????????????? !
            </span>
        </div>

        <div class="card">
            <div class="title h4chi" style="font-weight: 700;">????????????</div>

            <?php
                $num = count($_SESSION['order_rooms']['suitetitle']);
                for ($i = 0; $i < $num; $i++) : ?>
            <div class="picBox">
                <img class="objfit" src="<?= $_SESSION['order_rooms']['roomimg'][$i] ?>" alt="">
            </div>
            <div class="room1">
                <div class="orderlist">
                    <p class="bodytextchi">????????????</p>
                    <p class="bodytextchi"><?= $_SESSION['order_rooms']['suitetitle'][$i] ?></p>
                </div>
                <div class="orderlist">
                    <p class="bodytextchi">????????????</p>
                    <p class="bodytextchi"><?= $_SESSION['checkindate'] ?></p>
                </div>
                <div class="orderlist">
                    <p class="bodytextchi">????????????</p>
                    <p class="bodytextchi"><?= $_SESSION['checkoutdate'] ?></p>
                </div>
                <div class="orderlist">
                    <p class="bodytextchi">????????????</p>
                    <p class="bodytextchi">5???</p>
                </div>
                <div class="orderlist">
                    <p class="bodytextchi">????????????</p>
                    <p class="bodytextchi"><?= $_SESSION['order_rooms']['quantity'][$i] ?>???</p>
                </div>
                <div class="orderlist">
                    <p class="bodytextchi">??????</p>
                    <p class="bodytextchi"></p><?= $_SESSION['order_rooms']['price'][$i] ?>
                </div>
            </div>
            <?php endfor; ?>
            
            

            <div class="custom">
                <div class="customtitle h4chi" style="font-weight: 700;">????????????</div>

                <?php
                $num = count($_SESSION['active']['activetitle']);
                for ($i = 0; $i < $num; $i++) : ?>

                <div class="customlist">
                    <div class="customlistLeft">
                        <div class="leftPicbox">
                            <img class="picfit" src="<?= $_SESSION['active']['activeimg'][$i] ?>" alt="">
                        </div>
                        <p class="h5chi"><?= $_SESSION['active']['activetitle'][$i] ?></p>
                    </div>

                    <div class="customlistRight">
                        <p class="bodytextchi"><?= $_SESSION['active']['activetime'][$i] ?></p>
                        <p class="bodytextchi">$<?= $_SESSION['active']['activequantity'][$i] ?></p>

                    </div>
                </div>
                <?php endfor; ?>

            </div>

            <div class="orderlist">
                <p class="h4chi" style="font-weight: 700;">?????????</p>
                <p class="h4chi" style="font-weight: 700;">???56,800</p>
            </div>
            <p class="bodytextchi" style="text-align: center;">*????????????????????????????????????</p>

        </div>

    </div>


    <div class="MemberButton">
        <div class="AlignButtonContent">
            <button class="ButtonStyle h4chi">????????????</button>
        </div>
    </div>
