<?php 
session_start();
?>

<?php require __DIR__ . '/Connect_db.php';


// $t_sql = "SELECT COUNT(member_id) FROM `members`";

// 以下讀取資料庫
if(isset($_SESSION['members'])){
    $sql = "SELECT * FROM members where member_id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['members']['member_id']]);
    $r = $stmt->fetch();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂活動頁</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Crimson Text -->
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Noto -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
        
    <!-- font css -->
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/normalize.css">
    <style>
        .wrapper1 {
            display: flex;
            margin: 0 auto;
            justify-content: center;
        }

        .coverfit {
            width: 100%;
            height: 100%;
            object-fit: cover;

        }

        .rwdBtn {
            display: none;
        }

        .skpBtn {
            border: none;
            display: none;
            background-color: #828282;
            color: white;
           width: 375px;
           height: 70px;
            text-align: center;
            align-items: center;
            justify-content: center;
            margin-top: 50px;
        }

        @media screen and (max-width: 768px) {
            .rwdBtn {
                display: flex;
            }
        }


       
        * {
            box-sizing: border-box;
            font-family: arial;
        }

        .accordion {
            max-width: 600px;
            margin: 0 0 100px 0;
        }

        .cardWrapper {
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            margin-top: 30px;
            background-color: #ffffff;
        }

        .accordion__heading {
            position: relative;
            display: block;
            background: white;
            padding: 10px 40px;
            margin: 0;
            color: #5D5D5D;
            cursor: pointer;

        }

        .accordion__heading:after,
        .accordion__heading:before {
            content: "";
            position: absolute;
            width: 14px;
            height: 4px;
            background: #09839C;
            top: 50%;
            right: 30px;
            -webkit-transition: all 0.4s;
            transition: all 0.4s;

        }

        .accordion__checkbox:checked~.accordion__heading:before {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
        }

        .accordion__heading:after {
            -webkit-transition: all 0.4s;
            transition: all 0.4s;
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            /* opacity: 0; */
        }

        .accordion__checkbox:checked~.accordion__heading:before {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .accordion__checkbox {
            display: none;
            position: absolute;
            left: -9999em;
        }

        .accordion__checkbox {
            max-height: 1200px;
            -webkit-transition: all 1s;
            transition: all 1s;
        }

        .accordion__checkbox:checked~.accordion__content {
            max-height: 0;
            overflow: hidden;
            -webkit-transition: all 1s;
            transition: all 1s;
        }

        @media screen and (max-width: 768px) {
            .accordion__heading {
                padding: 30px 30px;
            }
        }

        /* activity  */
        .activityCard {
            display: flex;
            padding: 0px 40px 40px 40px;
            width: 600px;
            /* box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px; */
            margin-top: 30px;
            background-color: #ffffff;

        }

        .activity {
            max-width: 350px;
            margin: 0 10px 0 10px;

        }

        .activityimg {
            width: 240px;
            height: 200px;
            position: relative;
        }

        .checkDetail {
            position: absolute;
            background-color: #262525;
            opacity: 0.6;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            color: white;
            opacity: 0;
            justify-content: center;
            align-items: center;
            display: flex;
            transition: .6s ease;

        }

        .checkDetail:hover {
            opacity: 1;
            background-color: hsla(0, 1%, 15%, 0.6);
            color: white;
            text-decoration: none;

        }

        .titleBox {
            display: flex;
        }

        .activityTitle {
            margin: 10px 0 5px 0;
        }

        .activityLetter {
            margin: 10px 0 5px 0;
        }

        .activityPrice {
            margin: 5px 0 5px 0;
        }

        .activityNum {
            border: 1.5px solid #09839C;
            color: #09839C;
            background-color: white;
            width: 240px;
            height: 32px;
        }

        .priceBox {
            display: flex;
        }

        .activity-priceTag {
            display: flex;
            margin: 5px 0 5px 0;
            ;
        }

        .addBtn {
            width: 240px;
            height: 42px;
            border: 2px solid #EB9851;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0 0 0;
            color: #EB9851;
            background: white;
            font-weight: bold;
            padding: 0;
        }

        .addBtn:hover {
            text-decoration: none;
            color: #EB9851;
        }

        .rwdSet {
            display: unset;
        }

        @media screen and (max-width: 768px) {
            .activityList {
                width: 100%;
                padding: 0;

            }

            .activityCard {
                flex-direction: column;
                max-width: 375px;
                padding: 0;
                box-shadow: none;
                /* margin: 50px 0 0 0 ; */
                justify-content: center;
                align-items: center;
            }

            .activity {
                position: unset;
                margin-bottom: 50px;
            }

            .rwdSet {
                display: flex;
            }

            .title {
                position: unset;
                max-width: 340px;
                margin-right: 0;
            }

            .activityimg {
                width: 340px;
                height: 200px;
            }

            .checkDetail {
                position: absolute;
                background-color: #262525;
                opacity: 0.6;
                width: 100%;
                height: 100%;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                color: white;
                opacity: 0;
                justify-content: center;
                align-items: center;
                display: flex;
                transition: .6s ease;

            }

            .checkDetail:hover {
                opacity: 1;
                background-color: hsla(0, 1%, 15%, 0.6);
                color: white;
                text-decoration: none;

            }

            .iconMinus {
                display: none;
            }

            .activityNum {
                position: unset;
                width: 220px;
                height: 40px;
            }

            .addBtn {
                position: unset;
                display: flex;
                margin: 0 0 0 10px;
                width: 110px;
                height: 40px;
                background: white;
            }

        }

        /* activity detail-popup1*/
        .modal-content {
            background-color: unset;
            border: none;
            width: 50px;
        }

        .modal-header {
            border: unset;
            margin-left: 490px;
        }

        .modal-body {
            padding: unset;
            margin-left: -140px;
        }

        .close {
            margin-right: -100px;
            font-size: 2rem;
            opacity: 1;
            text-shadow: none;
            font-weight: 500;
            color: white;
        }

        .modal-footer {
            border-top: none;
        }

        .windowTitle {
            color: #09839C;
            justify-content: flex-start;
        }

        .coverfit {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .eventdetailone {
            background-color: #ffffff;
            align-items: center;
            justify-content: center;
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            width: 700px;
            margin: 0 auto;
        }

        .eventDetail {
            display: flex;
        }

        .eventimg {
            width: 300px;
            height: 300px;
        }

        .eventText {
            display: flex;
            flex-direction: column;
            margin: auto 40px 40px 35px;
            width: 400px;
        }

        .eventTitle {
            color: #5D5D5D;
        }

        .eventBody {
            color: #5D5D5D;
        }

        .mintextchi {
            color: #5D5D5D;
        }

        .eventLocation {
            margin-top: 30px;
        }

        .eventInput {
            display: block;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }

        @media screen and (max-width: 375px) {

            .modal-header {
                border: unset;
                margin-left: 285px;
            }

            .modal-body {
                padding: 0;
                margin-left: -32px;
                width: unset;
            }
           
            .eventdetailone {
                width: 360px;
            }

            .mintextchi {
                line-height: unset;
            }

            .eventTitle {
                margin-bottom: 10px;
            }

            .eventDetail {
                display: unset;
            }

            .eventimg {
                width: 360px;
            }

            .eventText {
                width: 360px;
                height: 230px;
                margin: unset;
                padding: 20px;
            }

            .locationRwd {
                margin-top: 15px;
            }

        }

        /* activity detail-popup2*/
        .header2 {
            border: unset;
            margin-left: 480px;
        }

        .eventdetailtwo {
            background-color: #ffffff;
            align-items: center;
            justify-content: center;
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            width: 700px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
        }

        .eventText2 {
            display: flex;
            flex-direction: column;
            margin: auto 0 auto 40px;
            width: 400px;
        }

        .inputbox {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            color: #5D5D5D;
        }

        input {
            height: 10px;
            padding: 0px 20px;
            /* width: 434px; */
        }

        .form-control {
            height: 100px;
        }

        .OrangeBtn {
            background-color: #EB9851;
            padding: 5px 20px 5px 20px;
            /* margin: 20px 0; */
            border: none;
            color: #ffff;
            font-size: 16px;
        }

        @media screen and (max-width: 375px) {
            .header2 {
                margin-left: 285px;
            }

            .eventdetailtwo {
                width: 360px;
                padding: 0;
            }

            .eventimg {
                width: 360px;
            }

            .eventText2 {
                width: 360px;
                margin: unset;
                padding: 20px;
            }

            .inputbox {
                padding: 0 20px 0 20px;
            }
        }

        /* 詳細訂單 */
        .orderList {
            margin-left: 30px;
        }

        .order {
            margin: 30px 0 0 0;
            width: 320px;
            background: white;
            padding: 30px;
            box-shadow: hsla(0, 0%, 36%, 0.5)0 3px 6px;
            ;

        }
        .infoImg{
        width: 260px;
        height: 170px;
    }

        .h4chi {
            font-weight: bold;
            letter-spacing: 0.3em;
            color: #5D5D5D;

        }

        .h3chi {
            font-weight: bold;
        }

        .line {
            height: 1px;

            background: #707070;
            display: flex;
        }

        .day {
            display: flex;
            justify-content: space-between;
        }

        .cancel {
            display: flex;
            justify-content: flex-end;
        }

        .detail {
            margin: 10px 0 10px 0;
        }

        .detail1 {

            display: flex;
            justify-content: flex-end;
        }

        .confirm {
            display: flex;
            align-items: center;
            justify-content: center;


        }
        .confirmBtn{
            border: none;
            background: #EB9851;
            height: 80px;
            width: 320px;
            padding: 0;
        }

        .confirm img {
            width: 20px;
        }

        .h5eng {
            color: white;
        }

        .warning {
            letter-spacing: 0;
        }

 
        /* order-list popup */
        
        .rwdonly{
            display: none;    
        }
      
   

        @media screen and (max-width: 375px) {
            .line{
                margin: 10px 0 10px 0;
            }
            .order{
                margin-left: 33px;
            }
            .checkorder2{
                margin-left: -42px;
            }
             .bookDetail{
            border: none;
            background-color: #09839C;
            color: white;
            
            height: 70px;
            width: 50%;

        }
        .rwdfix{
                display: flex;
                background: grey;
                
                width: 375px;
                align-items: center;
                position: fixed;
                left: 0;
                bottom: 0;
            }
            .rwdconfirmBtn{
                border: none;
                background-color: #EB9851;
                color: white;
                height: 70px;
               width: 50%;
            }
            .rwdonly{
            display: flex;
        }
            .rwddisplaynone{
                display: none;
            }
        }

        .acivity{
            z-index: -1;
            margin: 80px  0 0 0;
        }
              
     /* ---------- BreadCrumbs ---------- */

        .BreadCrumbs {
            color: #747474;
            margin-top: 150px;
            margin-left: 100px;
            margin-bottom: 100px;
        }
        .breadtext{
            font-size: 16px;
            font-weight: bold;
        }
        .LinkColor {
            color: #747474;
        }
        .LinkColor:hover{
            color: #EB9851;
        }

        /* ----- BreadCrumbs RWD ----- */

        @media screen and (max-width: 375px) {
            .BreadCrumbs {
                display: none;
            }
        }

        /* ----- BreadCrumbs RWD ----- */
/* segment bar */
        .bar-wrap{
            margin: 0 auto;
            position: relative;

        }
        .bar-wrap:hover{
            cursor: pointer;
            
        }
        .bar-booking{
            transition: 0.3s;
            z-index: 2;
        }
        .bar-booking:hover{
            transform: scale(1.3);
        }
        .segmentbar-select{
            width: 35px;
            height: 35px;
            background: #09839C;
            border-radius: 50%;
            /* border: 8px solid tomato; */
            justify-content: center;
           display: flex;
            align-items: center;
            margin: 10px 0 0 0;
           

        }
        .segement-bar{
            background: white;
            border: 1px solid #09839C;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin: 10px 0 0 0;
            justify-content: center;
           display: flex;
            align-items: center;
        }

        .segement-bar-num{
            font-size:26px;
            color:white;
            display: flex;
            position: relative;
            font-family: 'Noto Serif TC', serif;
        }
        .segement-num{
            margin: 20px 0 0 0;
        }
        .num-unselect{
            color: #09839C;
            font-size:26px;
            font-family: 'Noto Serif TC', serif;
        }
        .bar-wrap{
            display: flex;
            align-items: center;
            margin-top: 50px;
            align-items: center;
            width: 700px;
            justify-content: space-evenly;
        }
        .segement-text-select{
            width: 80px;
            text-align: center;
            
            color: #EB9851;
        }
        .segement-text{
            width: 80px;
            text-align: center;
            position: relative;
            color: #09839C;
        }
        .bar-booking{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;           
        }
        .bar-line{
            height: 5px;
            background-color: #09839C;
            position: absolute;
            top: 368px;
            width: 488px;
            left: 476px;
            /* z-index: -0.5; */
        }
      
        @media screen and (max-width: 375px) {
            .greybody{
                padding-top: 40px;
            }
            .bar-wrap{
                width: 375px;
            }
            .bar-line{
                height: 5px;
                background-color: #09839C;
                position: absolute;
                top: 216px;
                width: 285px;
                left: 45px;
            }
        }


    </style>
</head>

<?php include __DIR__. '/__nav-forotherpage2.php'?>

<body>
<div class="greybody" >  
    <div >
    <div class="acivity">
    <!-- date picker  -->
    <!---------- BreadCrumbs ---------->

    <div class="BreadCrumbs ">
        <span class="h3chi breadtext">
            <a class="LinkColor" href="">首頁</a> >
            <a class="LinkColor" href="">選擇房型</a> >
            <a class="LinkColor" href="">選擇活動</a>

            
        </span>
    </div>

      <!-- segment bar -->
      <div class="bar-wrap">
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect">1</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">選擇房型</div> 
                </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segmentbar-select">
                            <div class="segement-bar-num ">2</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text-select bodytextchi"  style="color:#EB9851;">選擇活動</div> 
                </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect ">3</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">付款</div> 
                
                        </div>
                
            </div>
                <div class="bar-booking">
                        <div class="segement-bar">
                            <div class="num-unselect">4</div>
                        </div>
                        <div class="segement-num">
                            <div class="segement-text bodytextchi">完成訂單</div> 
                </div>
            
                
            </div> 
            </div>
            <div class="bar-line"></div>
    

<button class="skpBtn rwdBtn" href="">跳過活動選擇</button> 
    <div class="wrapper1">
       
    <div class="accordion">
            <!-- 活動1 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-1">

                    <label class="accordion__heading h4chi" for="accordion-heading-1">1.暢遊海洋</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac1">
                                <div class="activityimg"><img class="coverfit" src="img/activity/experience-sea-diving01.jpg"
                                        alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal1"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-sea-diving01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">浮潛潛水</span>
                                                            <span class="mintextchi eventBody">
                                                                體驗海底五彩繽紛世界，即時不會游泳也不要緊，只要穿上浮潛裝備，聽從當地教練指示，就能輕輕鬆鬆在大海裡探索美麗的海底世界。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: Arcadia海域</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">A.</div>
                                    <div class="activityTitle bodytextchi">浮潛潛水</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=3500>＄3500/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac2">
                                <div class="activityimg"><img class="coverfit" src="img/activity/experience-sea-surf01.jpg"
                                        alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal2"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-sea-surf01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">衝浪體驗</span>
                                                            <span class="mintextchi eventBody">
                                                                來到ARCADIA的衝浪學校，如果你曾接觸過衝浪，這裡會有專業的教練來帶你更深入的學習衝浪技巧，也會有中文助教預先說明衝浪相關知識，與你共同完成安全的衝浪學習之旅。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: Arcadia海域</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">B.</div>
                                    <div class="activityTitle bodytextchi">衝浪體驗</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=1800>＄1800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- 活動2 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-2">

                    <label class="accordion__heading h4chi" for="accordion-heading-2">2.探索森林</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac3">
                                <div class="activityimg"><img class="coverfit" src="img/activity/experience-jungle-eco01.jpg"
                                        alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal11"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal11" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-jungle-eco01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">生態探訪</span>
                                                            <span class="mintextchi eventBody">
                                                                讓ARCADIA專業的團隊帶你體驗熱帶雨林之美，認識雨林中的多元生態。生動有趣的導覽方式讓大人小孩都能快樂學習尊重生命、愛護生態環境，並且帶入生命教育與環保的概念，沐浴在雨林豐沛的芬多精之中。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 森林步道</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">C.</div>
                                    <div class="activityTitle bodytextchi">生態探訪</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=800>＄800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac4">
                                <div class="activityimg"><img class="coverfit"
                                        src="img/activity/experience-jungle- historic.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal4"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-jungle- historic.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">古蹟尋訪</span>
                                                            <span class="mintextchi eventBody">
                                                                記錄著歷史興衰、朝代更替的古蹟，是每一個到ARCADIA的人必去之地，這些歷經政權朝代更迭、戰爭動亂洗禮的古蹟，讓人不經意間就會感受到歷史的厚重感，也使傳奇色彩濃厚的古蹟更加美麗而神秘。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 古蹟群</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">D.</div>
                                    <div class="activityTitle bodytextchi">古蹟尋訪</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=800>＄800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- 活動3 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-3">

                    <label class="accordion__heading h4chi" for="accordion-heading-3">3.特色體驗</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac5">
                                <div class="activityimg"><img class="coverfit"
                                        src="img/activity/experience-lesson-massage01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal5"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal5" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-lesson-massage01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">薰香按摩</span>
                                                            <span class="mintextchi eventBody">
                                                                想把握每分每秒盡情體驗道地的異國風情，讓身體舒適的放鬆，融合當下愉悅氣氛，休息就顯得無比的重要；按摩是現代人不可或缺的日常保健選擇之一，適度的按摩能夠疏通經絡、恢復肌肉彈性、保持身心靈放鬆愉悅。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 桑拿房</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 2人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">E.</div>
                                    <div class="activityTitle bodytextchi">薰香按摩</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=2500>＄2500/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac6">
                                <div class="activityimg"><img class="coverfit" src="img/activity/experience-lesson-yoga.jpg"
                                        alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal6"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal6" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-lesson-yoga.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">紓壓瑜珈</span>
                                                            <span class="mintextchi eventBody">
                                                                立即參加瑜珈體驗，享受一場與自我的對話！旅行不是尋找新的風景，而是擁有新的視野與體驗，專業瑜伽老師帶你一起深呼吸，進行平衡身心的瑜珈練習。將旅行帶來的省思儲存在身體裡，提醒自己原來心靈擁有這麼多自由與美好。
                                                            </span>
                                                            <span class="mintextchi eventLocation"> 地點: 瑜珈室</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 12人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">F.</div>
                                    <div class="activityTitle bodytextchi">紓壓瑜珈</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=1800>＄1800/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <!-- 活動4 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-4">

                    <label class="accordion__heading h4chi" for="accordion-heading-4">4.客製服務</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac7">
                                <div class="activityimg"><img class="coverfit" src="img/activity/experience-party02.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal7"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal7" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-party02.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">派對規劃</span>
                                                            <span class="mintextchi eventBody">
                                                                特殊紀念日選擇來ARCADIA渡假嗎？生日慶生、紀念日、單身派對，都不用操心怎麼準備！我們提供優質有質感的佈置，針對您的派對有不同的選擇，幫您籌備派對流程，留下永生難忘的絕妙回憶。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                Arcadia 活動聽</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control"
                                                                aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">G.</div>
                                    <div class="activityTitle bodytextchi">派對規劃</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=10000>＄10,000/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button> </div>

                            </div>

                            <div class="activity" data-id="ac8">
                                <div class="activityimg"><img class="coverfit" src="img/activity/experience-dinner01.jpg"
                                        alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal8"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal8" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-dinner01.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">尾牙春酒</span>
                                                            <span class="mintextchi eventBody">
                                                                尾牙是慰勞公司員工一整年辛苦工作的最佳時機，而春酒則是慶祝一年的豐收和新一年的到來，這兩項歡慶會對於公司來說是非常重要的日子，當然要好好慶祝囉！不但能讓一整年事業更加順利，也能讓員工為公司更加傾力。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                Arcadia 活動聽</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control"
                                                                aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">H.</div>
                                    <div class="activityTitle bodytextchi">尾牙春酒</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=10000>＄10,000/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <!-- 活動5 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-5">

                    <label class="accordion__heading h4chi" for="accordion-heading-5">5.婚宴規劃</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac9">
                                <div class="activityimg"><img class="coverfit"
                                        src="img/activity/experience-weading-propose01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal9"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal9" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-weading-propose01.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">求婚服務</span>
                                                            <span class="mintextchi eventBody">
                                                                特殊紀念日選擇來ARCADIA渡假嗎？生日慶生、紀念日、單身派對，都不用操心怎麼準備！我們提供優質有質感的佈置，針對您的派對有不同的選擇，幫您籌備派對流程，留下永生難忘的絕妙回憶。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                客戶自選</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control"
                                                                aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">I.</div>
                                    <div class="activityTitle bodytextchi">求婚服務</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=5000>＄5000/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>

                            <div class="activity" data-id="ac10 ">
                                <div class="activityimg"><img class="coverfit" src="img/activity/experience-wedding-wedding.jpg"
                                        alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal10"
                                        data-toggle="modal" type="button">查看細節</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal10" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit"
                                                            src="img/activity/experience-wedding-wedding.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">婚宴服務</span>
                                                            <span class="mintextchi eventBody">
                                                                從小型溫馨婚禮到大型豪華婚宴，我們專業的規劃團隊服務幫忙打造一系列婚禮需求。享受夢幻渡假海島，讓親朋好友們參加一場永生難忘的婚宴。服務團隊確保活動大小環節都能符合您的期待，不論花藝裝飾、現場佈置或菜單設計；我們謹慎安排婚禮中各項重要元素，讓夢想婚禮完美綻放。
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> 地點:
                                                                婚宴聽</span>
                                                            <span class="mintextchi eventPeople">可容納人數: 20人/次</span>
                                                            <span class="mintextchi eventContact">細節請洽客服</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">＊特殊需求留言：</span>
                                                        <div>
                                                            <input type="text" class="form-control"
                                                                aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">送出</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">J.</div>
                                    <div class="activityTitle bodytextchi">婚宴服務</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">價格 </div>
                                    <span class="activity-priceTag bodytextchi" data-val=20000>＄20,000/次</span>
                                </div>
                                <div class="rwdSet"><select class="activityNum" name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <button class="addBtn" href="">+ Add</button></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <!-- 詳細訂單 -->
        <div class="orderList rwddisplaynone">
            <div class="order">
                 <span class="h4chi">訂單明細</span><br>
                
                <!----------------------------------- 住房明細 ------------------------------------>
                
                <?php
                $num = count($_SESSION['order_rooms']['suitetitle']);
                for ($i = 0; $i < $num; $i++) : ?>
                    <div class="line"></div>
                    <div class="roomName">
                        <span class="h5chi"> <?= $_SESSION['order_rooms']['suitetitle'][$i] ?></span>
                    </div><br>
                    <div class="infoImg">
                        <img class="coverfit" src="<?= $_SESSION['order_rooms']['roomimg'][$i] ?>" alt="">
                    </div>

                    <div class="day">
                        <span class="detail bodytextchi">入住日期</span>
                        <span class="detail bodytextchi"><?= $_SESSION['checkindate'] ?></span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">退房日期</span>
                        <span class="detail bodytextchi"><?= $_SESSION['checkoutdate'] ?></span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">入住天數</span>
                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['duration'][$i] ?></span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">入住人數</span>
                        <span class="detail bodytextchi"><?= $_SESSION['persons'] ?></span>
                    </div>
    
                    <div class="day">
                        <span class="detail bodytextchi">入住房數</span>
                        <span class="detail bodytextchi"> <?= $_SESSION['order_rooms']['quantity'][$i] ?></span>
                    </div>                
                    <div class="day">
                        <span class="detail bodytextchi">每晚價格</span>
                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['price'][$i] ?></span>
                    </div>
                    <div class="day">
                        <span class="detail bodytextchi">總計</span>
                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['summary'][$i] ?></span>
                    </div><br>
                <?php endfor; ?>
                <!----------------------------------- 住房明細 ------------------------------------>

                <span class="h4chi">客制選項</span><br>
                <div class="customization">
    <!------------------- 活動明細 --------------------------------------->
                </div>


                <div class="line"></div>
                <div class="day">
                    <span class="h4chi">總計</span>
                    <span  class="h4chi totalPrice" id="summary"><?= $_SESSION['order_rooms']['summary'][0] ?></span>
                </div>

                <div class="inform">
                    <span class="detail1 warning bodytextchi">*此價格不包含客製服務與婚宴規劃</span><br>
                    <span class="detail1 warning bodytextchi">*此價格包含免費機場接駁車</span>
                </div>

            </div>
            <div class="confirm">
                <button class="confirmBtn h5eng">Confirm</button>
                <!-- <img src="/icon/Icon-arrow.svg" alt=""> -->

            </div>
        </div>
    </div>
    <!-- <img src="/proj58/proj_arcadia/imgexperience-dinner01.jpg" alt=""> -->

     <!-- rwd orderlist -->
            <!-- Button trigger modal -->
            <div class="rwdonly">
           <div class="rwdfix">
            <button class="bookDetail bodytextchi" data-target="#exampleModal15" data-toggle="modal" type="button">查看訂單</button>    
            <button class="rwdconfirmBtn confirmBtn h5eng">Confirm</button>                                     
        </div> 
                 <!-- Modal -->
                 <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="checkorder2">
                                                     <!-- 詳細訂單 -->
                                                        <div class="orderList">
                                                            <div class="order">
                                                                <span class="h4chi">訂單明細</span><br>
                                                                
                                                                <!----------------------------------- 住房明細 ------------------------------------>
                                                                
                                                                <?php
                                                                $num = count($_SESSION['order_rooms']['suitetitle']);
                                                                for ($i = 0; $i < $num; $i++) : ?>
                                                                    <div class="line"></div>
                                                                    <div class="roomName">
                                                                        <span class="h5chi"> <?= $_SESSION['order_rooms']['suitetitle'][$i] ?></span>
                                                                    </div><br>
                                                                    <div class="infoImg">
                                                                    <img class="coverfit" src="<?= $_SESSION['order_rooms']['roomimg'][$i] ?>" alt="">
                                                                    </div>

                                                                    <div class="day">
                                                                        <span class="detail bodytextchi">入住日期</span>
                                                                        <span class="detail bodytextchi"><?= $_SESSION['checkindate'] ?></span>
                                                                    </div>
                                                                    <div class="day">
                                                                        <span class="detail bodytextchi">退房日期</span>
                                                                        <span class="detail bodytextchi"><?= $_SESSION['checkoutdate'] ?></span>
                                                                    </div>
                                                                    <div class="day">
                                                                        <span class="detail bodytextchi">入住天數</span>
                                                                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['duration'][$i] ?></span>
                                                                    </div>
                                                                    <div class="day">
                                                                        <span class="detail bodytextchi">入住人數</span>
                                                                        <span class="detail bodytextchi"><?= $_SESSION['persons'] ?></span>
                                                                    </div>
                                                    
                                                                    <div class="day">
                                                                        <span class="detail bodytextchi">入住房數</span>
                                                                        <span class="detail bodytextchi"> <?= $_SESSION['order_rooms']['quantity'][$i] ?></span>
                                                                    </div>                
                                                                    <div class="day">
                                                                        <span class="detail bodytextchi">每晚價格</span>
                                                                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['price'][$i] ?></span>
                                                                    </div>
                                                                    <div class="day">
                                                                        <span class="detail bodytextchi">總計</span>
                                                                        <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['summary'][$i] ?></span>
                                                                    </div><br>
                                                                <?php endfor; ?>

                                                                <!----------------------------------- 住房明細 ------------------------------------>

                                                                <span class="h4chi">客制選項</span><br>
                                                                <div class="customization">

                                                    <!------------------- 活動明細 --------------------------------------->
                                                                </div>

                                                                <div class="line"></div>
                                                                <div class="day">
                                                                    <span class="h4chi">總計</span>
                                                                    <span  class="h4chi totalPrice" id="summary"></span>
                                                                </div>

                                                                <div class="inform">
                                                                    <span class="detail1 warning bodytextchi">*此價格不包含客製服務與婚宴規劃</span><br>
                                                                    <span class="detail1 warning bodytextchi">*此價格包含免費機場接駁車</span>
                                                                </div>

                                                            </div>
                
                                                        </div>
                                                    </div>
                                                    <!-- <img src="/proj58/proj_arcadia/imgexperience-dinner01.jpg" alt=""> -->
                                                                                        
                                       </div>                                   
                                    </div>
                                </div>
                            </div>
                    </div>   
                    </div>
                    </div>

                    </div>                   
                    <style>
                        .x11{
                            background-color: #ffffff;
                        }
                    </style>
                    <!-- <img src="/proj_arcadia/proj_arcadia/img" alt=""> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script> -->

        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <!-- sweet alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <!-- <script src="/sweetalert2-master/src/sweetalert2.js"></script> -->
    <script>
        const allactive = {
            ac1: {
                acname: 'A.浮潛潛水',
                acprice: 3500,
                acimg: 'img/activity/experience-sea-diving01.jpg',
            },
            ac2: {
                acname: '衝浪體驗',
                acprice: 1800,
                acimg:'img/activity/experience-sea-surf01.jpg'
            },
            ac3: {
                acname: '生態探訪',
                acprice: 800,
                acimg:'img/activity/experience-jungle-eco01.jpg'
            },
            ac4: {
                acname: '古蹟尋訪',
                acprice: 800,
                acimg:'img/activity/experience-jungle- historic.jpg'
            },
            ac5: {
                acname: '薰香按摩',
                acprice: 2500,
                acimg:
               'img/activity/experience-lesson-massage01.jpg'
            },
            ac6: {
                acname: '紓壓瑜珈',
                acprice: 1800,
                acimg:'img/activity/experience-lesson-yoga.jpg'
            },
            ac7: {
                acname: '派對規劃',
                acprice: 10000,
                acimg:'img/activity/experience-party02.jpg'

            },
            ac8: {
                acname: '尾牙春酒',
                acprice: 10000,
                acimg:'img/activity/experience-dinner01.jpg'

            },
            ac9: {
                acname: '求婚服務',
                acprice: 0,
                acimg:'img/activity/experience-weading-propose01.jpg'

            },
            ac10: {
                acname: '婚宴服務',
                acprice: 0,
                acimg:'img/activity/experience-wedding-wedding.jpg'
            },
        }


        $('.addBtn').on('click', function () {
            $row = $(this).closest(".activity");
            let title = $row.find(".activityTitle").text();
            let price = $row.find(".activity-priceTag").attr('data-val');
            let quantity = $row.find("select").val();
            
            


            let active_id = $row.attr('data-id');

            console.log(title);
            console.log(price);
            console.log(quantity);




            let html = `<div class="activity-unit" data-id="${active_id}">
            <div class="day">
            <span class="detail bodytextchi">${title}</span>
            <span class="detail bodytextchi times">${quantity}</span>
            <span class="detail bodytextchi actquantity">${parseInt(price) * parseInt(quantity)}</span>
            </div>
            
            <div style="width:40px;margin-left:auto"><a onClick="del_product_item(event) " href="#">刪除</a></div>
            </div>
            `;



            $('.customization').append(html);

            calAllTotal()

        });

        const calActivityTotal = function(){
            var total = 0;
            $(".actquantity").each(function(){
                total += parseInt($(this).text())
            });
            $('#summary').text(total);
        };

        var sum = 0;

        // function del_product_item(event) {
        //     console.log('hi2')
        //     $(event.target).parent().parent().remove();
        //     calAllTotal()

        // }
        function del_product_item(event) {
                $('#exampleModal15').click();
                const swalWithBootstrapButtons = Swal.mixin({

                        customClass: {
                        container: 'con-class',
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                        buttonsStyling: false
                    })

                swalWithBootstrapButtons.fire({
                    
                    text: "您是否要刪除此活動?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: '刪除',
                    confirmButtonColor: 'red',
                    cancelButtonText: '取消',
                    cancelButtonColor: 'green',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.value) {
                        swalWithBootstrapButtons.fire(
                        '此筆活動已刪除',
                        )
                        $(event.target).parent().parent().remove();
                        calAllTotal()

                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                        '活動已保留',
                        )
                    }
                    })
                }


    </script>
  <script>
            const confirm_btn = $('.confirmBtn');

            confirm_btn.click(function() {

               
                // const d_item = $(this).closest('.orderList.rwddisplaynone');
                const d_item = $('.orderList.rwddisplaynone')
                let  active=d_item.find('.activity-unit');
                // let room_ids = [];

                const sendObj = {
                    activetitle: [], 
                    activeimg:[],
                    activetime: [],
                    activequantity:[],
                    totalprice: [],
                }      


                active.each(function(){
                    const active_id =  $(this).attr('data-id');
                    console.log('data_id:', active_id );

                    sendObj.activetitle.push(allactive[active_id].acname);
                    sendObj.activeimg.push(allactive[active_id].acimg);
                    sendObj.activetime.push($(this).find('.times').text());
                    sendObj.activequantity.push($(this).find('.actquantity').text());
                    sendObj.totalprice.push($(summary).text());
                });
                console.log( sendObj );
                // if(! active.length){
                //     sendObj.totalprice[0] = <?= $_SESSION['roomsPrice'] ?>;

                // }



         
                $.get('active-api.php', sendObj, function(data) {
                    console.log(data);
                    // setCartCount(data);

                     location.href = "payment.php";
                }, 'json');
                
            });
// sweet alert
    

            $('.OrangeBtn').on('click', function() {
                console.log("hi");
                $('#exampleModal7').click();
                $('#exampleModal8').click();
                $('#exampleModal9').click();
                $('#exampleModal10').click();

            Swal.fire({
                            text: "Arcadia已收到您的客制服務留言，感謝您的參與!訂房成功後將會有專人與您聯繫規劃活動細節。",
                            icon: 'success',
                            showConfirmButton: true,
                            confirmButtonText: '確認',
                            confirmButtonColor: '#09839C',
                            buttonsStyling: 'false',
                        });
        
        });

        

function calRoomsTotal(){
    return <?= $_SESSION['roomsPrice'] ?>;
}

function calActivitiesTotal(){
    let t = 0;
    $('.activity-unit').each(function(){
        let price = $(this).find('.actquantity').text();
        t += parseInt(price);

    })
    return t;
}

function calAllTotal(){

    console.log( calRoomsTotal() );

    console.log( calActivitiesTotal() );

    let total= calRoomsTotal()+calActivitiesTotal();
    $('#summary').text(total);
}


        </script>

<?php include __DIR__. '/__footer.php'?>

</body>

</html>