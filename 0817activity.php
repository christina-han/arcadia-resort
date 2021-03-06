<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Crimson Text -->
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Noto -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- font css -->
    <link rel="stylesheet" href="/css/font.css">
    <link rel="stylesheet" href="/css/normalize.css">
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
            max-width: 375px;
            display: flex;
            background-color: #EB9851;
            color: white;
            padding: 40px 10px 40px 10px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        @media screen and (max-width: 768px) {
            .rwdBtn {
                display: unset;
            }
        }


        /* booking bar */
        /* .bookingbar {
        width: 950px;
        height: 150px;
        display: flex;
        background-color: #FFFFFF;
        align-items: center;
        justify-content: center;
        box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
        margin: 30px auto 0 auto;
        }

        .checkindate {
        display: flex;
        flex-direction: column;
        color: #5D5D5D;
        font-weight: bold;
        margin:  0 30px 0 0;
        }

        .checkoutdate {
        display: flex;
        flex-direction: column;
        font-weight: bold;
        color: #5D5D5D;
        margin:  0 30px 0 0;
        }

        .reservation {
        color: #5D5D5D;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        width: 110px;
        height: 40px;
        margin:  -10px 30px 0 0;
        }
        
        .booking {
        margin:  18px 0 0 0;
        background: #EB9851;
        width: 117px;
        height: 48px;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        }
        .booking a{
        color: white;
        font-family: 'Crimson Text', serif;
        font-size: 15px;
        }
        @media screen and (max-width: 768px) {
            .bookingbar{
                display: none;
            }
        }      
        */

        /* accordian */
        * {
            box-sizing: border-box;
            font-family: arial;
        }

        .accordion {
            max-width: 600px;
            margin: 0 0;
        }

        .cardWrapper {
            box-shadow: hsla(0, 0%, 36%, 0.5) 0 3px 6px;
            margin-top: 30px;
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
                padding: unset;
                margin-left: 0;
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

        /* ???????????? */
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

        .h4chi {
            font-weight: bold;
            letter-spacing: 0.3em;

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
            background: #EB9851;
            width: 320px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;


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

        @media screen and (max-width: 768px) {
            .orderList {
                display: none;
            }

        }
    </style>
</head>

<body>
    <!-- booking bar -->
    <!-- <div class="bookingbar">
        <div class="checkindate">
          <span class="bodytextchi">????????????</span>
    
          <input type="text">
        </div>
        <div class="checkoutdate">
          <span class="bodytextchi">????????????</span>
          <input type="text">
        </div>
        <div class="reservation">
          <span class="bodytextchi">????????????</span>
          <input type="text">
        </div>
        <div class=" d-flex booking">
          <a class=" d-flex bodytexteng" href="">????????????</a>
        </div>
      </div>
<div class="rwdBtn">
<a class="h4chi skpBtn" href="">?????????????????? ???kip
    <img src="/icon/Icon-arrow.svg" alt="">
</a> </div> -->

    <div class="wrapper1">
        <div class="accordion">
            <!-- ??????1 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-1">

                    <label class="accordion__heading h4chi" for="accordion-heading-1">1.????????????</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac1">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-sea-diving01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal1" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-sea-diving01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation"> ??????: Arcadia??????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 12???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">A.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=3500>???3500/???</span>
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
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-sea-surf01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal2" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-sea-surf01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ??????ARCADIA???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation"> ??????: Arcadia??????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 12???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">B.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=1800>???1800/???</span>
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

            <!-- ??????2 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-2">

                    <label class="accordion__heading h4chi" for="accordion-heading-2">2.????????????</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac3">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-jungle-eco01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal3" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-jungle-eco01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ???ARCADIA????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation"> ??????: ????????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 12???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">C.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=800>???800/???</span>
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
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-jungle- historic.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal4" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-jungle- historic.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ???????????????????????????????????????????????????????????????ARCADIA???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation"> ??????: ?????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 12???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">D.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=800>???800/???</span>
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
            <!-- ??????3 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-3">

                    <label class="accordion__heading h4chi" for="accordion-heading-3">3.????????????</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac5">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-lesson-massage01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal5" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-lesson-massage01.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation"> ??????: ?????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 2???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">E.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=2500>???2500/???</span>
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
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-lesson-yoga.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal6" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailone">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-lesson-yoga.jpg"></img>
                                                        <div class="eventText">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation"> ??????: ?????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 12???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">F.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=1800>???1800/???</span>
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


            <!-- ??????4 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-4">

                    <label class="accordion__heading h4chi" for="accordion-heading-4">4.????????????</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac7">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-party02.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal7" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-party02.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ????????????????????????ARCADIA?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> ??????:
                                                                Arcadia ?????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 20???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">????????????????????????</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">??????</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">G.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=10000>???10,000/???</span>
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
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-dinner01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal8" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-dinner01.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> ??????:
                                                                Arcadia ?????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 20???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">????????????????????????</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">??????</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">H.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=10000>???10,000/???</span>
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
            <!-- ??????5 -->
            <div class="cardWrapper">
                <section>
                    <input type="checkbox" class="accordion__checkbox" id="accordion-heading-5">

                    <label class="accordion__heading h4chi" for="accordion-heading-5">5.????????????</label>

                    <div class="accordion__content">
                        <div class="activityCard">
                            <div class="activity" data-id="ac9">
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-weading-propose01.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal9" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-weading-propose01.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ????????????????????????ARCADIA?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> ??????:
                                                                ????????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 20???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">????????????????????????</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">??????</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">I.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=5000>???5000/???</span>
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
                                <div class="activityimg"><img class="coverfit" src="/123/img/activity/experience-wedding-wedding.jpg" alt="">
                                    <!-- Button trigger modal -->
                                    <button class="checkDetail bodytextchi" data-target="#exampleModal10" data-toggle="modal" type="button">????????????</button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header2">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="eventdetailtwo">
                                                    <div class="eventDetail">
                                                        <img class="eventimg coverfit" src="/123/img/activity/experience-wedding-wedding.jpg"></img>
                                                        <div class="eventText2">
                                                            <span class="h4chi eventTitle">????????????</span>
                                                            <span class="mintextchi eventBody">
                                                                ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
                                                            </span>
                                                            <span class="mintextchi eventLocation locationRwd"> ??????:
                                                                ?????????</span>
                                                            <span class="mintextchi eventPeople">???????????????: 20???/???</span>
                                                            <span class="mintextchi eventContact">??????????????????</span>
                                                        </div>
                                                    </div>
                                                    <div class="inputbox account bodytextchi">
                                                        <span class="bodytextchi">????????????????????????</span>
                                                        <div>
                                                            <input type="text" class="form-control" aria-label="creditcard" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="OrangeBtn">??????</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="titleBox">
                                    <div class="activityLetter bodytextchi">J.</div>
                                    <div class="activityTitle bodytextchi">????????????</div>
                                </div>
                                <div class="priceBox">
                                    <div class="activityPrice bodytextchi">?????? </div>
                                    <span class="activity-priceTag bodytextchi" data-val=20000>???20,000/???</span>
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


        <!-- ???????????? -->
        <div class="orderList">
            <div class="order">
                <span class="h4chi">????????????</span><br>



                <!----------------------------------- ???????????? ------------------------------------>
                <div id="activitytotal">
                    <?php
                    $num = count($_SESSION['order_rooms']['suitetitle']);
                    for ($i = 0; $i < $num; $i++) : ?>
                        <div class="line"></div>
                        <div class="roomName">
                            <span class="h5chi"> <?= $_SESSION['order_rooms']['suitetitle'][$i] ?></span>
                        </div><br>
                        <div class="infoImg">
                            <img class="coverfit" src="/123/img/activity/roomOverview-room3.jpg" alt="">
                        </div>

                        <div class="day">
                            <span class="detail bodytextchi">????????????</span>
                            <span class="detail bodytextchi"><?= $_SESSION['checkindate'] ?></span>
                        </div>
                        <div class="day">
                            <span class="detail bodytextchi">????????????</span>
                            <span class="detail bodytextchi"><?= $_SESSION['checkoutdate'] ?></span>
                        </div>
                        <div class="day">
                            <span class="detail bodytextchi">????????????</span>
                            <span class="detail bodytextchi">4???</span>
                        </div>
                        <div class="day">
                            <span class="detail bodytextchi">????????????</span>
                            <span class="detail bodytextchi"><?= $_SESSION['order_rooms']['quantity'][$i] ?></span>
                        </div>
                        <div class="day">
                            <span class="detail bodytextchi">??????</span>
                            <span class="detail bodytextchi" id=""><?= $_SESSION['order_rooms']['price'][$i] ?> </span>
                        </div><br>
                    <?php endfor; ?>

                </div>




                <!----------------------------------- ???????????? ------------------------------------>





                <span class="h4chi">????????????</span><br>
                <div class="customization">


                    <!------------------- ???????????? --------------------------------------->
                </div>


                <div class="line"></div>
                <div class="day">
                    <span class="h4chi">??????</span>
                    <span class="h4chi" id="summary">


                    </span>
                </div>

                <div class="inform">
                    <span class="detail1 warning bodytextchi">*?????????????????????????????????????????????</span><br>
                    <span class="detail1 warning bodytextchi">*????????????????????????????????????</span>
                </div>

            </div>
            <div class="confirm">
                <button class="confirmBtn h5eng">Confirm</button>
                <img src="/icon/Icon-arrow.svg" alt="">

            </div>
        </div>
    </div>
    <img src="/123/123/img/activity/experience-dinner01.jpg" alt="">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        const allactive = {
            ac1: {
                acname: 'A.????????????',
                acprice: 3500,
                acimg: '/123/img/activity/experience-sea-diving01.jpg',
            },
            ac2: {
                acname: '????????????',
                acprice: 1800,
                acimg: '/123/img/activity/experience-sea-surf01.jpg'
            },
            ac3: {
                acname: '????????????',
                acprice: 800,
                acimg: '/123/img/activity/experience-jungle-eco01.jpg'
            },
            ac4: {
                acname: '????????????',
                acprice: 800,
                acimg: '/123/img/activity/experience-jungle- historic.jpg'
            },
            ac5: {
                acname: '????????????',
                acprice: 2500,
                acimg: '/123/img/activity/activityexperience-lesson-massage01.jpg'
            },
            ac6: {
                acname: '????????????',
                acprice: 1800,
                acimg: '/123/img/activity/experience-lesson-yoga.jpg'
            },
            ac7: {
                acname: '????????????',
                acprice: 10000,
                acimg: '/123/img/activity/experience-party02.jpg'

            },
            ac8: {
                acname: '????????????',
                acprice: 10000,
                acimg: '/123/img/activity/experience-dinner01.jpg'

            },
            ac9: {
                acname: '????????????',
                acprice: '????????????',
                acimg: '/123/img/activity/experience-weading-propose01.jpg'

            },
            ac10: {
                acname: '????????????',
                acprice: '????????????',
                acimg: '/123/img/activity/experience-wedding-wedding.jpg'
            },
        }


        $('.addBtn').on('click', function() {
            $row = $(this).closest(".activity");
            let title = $row.find(".activityTitle").text();
            let price = $row.find(".activity-priceTag").attr('data-val');
            let quantity = $row.find("select").val();


            let active_id = $row.attr('data-id');

            // console.log(title);
            // console.log(price);
            // console.log(quantity);




            let html = `<div class="activity-unit" data-id="${active_id}" id="activity-unit">
        <div class="day">
        <span class="detail bodytextchi">${title}</span>
        <span class="detail bodytextchi times">${quantity}</span>
        <span class="detail bodytextchi actquantity" id="actquantity" >${parseInt(price) * parseInt(quantity)}</span>
        </div>
        
        <div style="width:40px;margin-left:auto"><a onClick="del_product_item(event) " href="javascript:">??????</a></div>
        </div>
        `;



            $('.customization').append(html);

            calAllTotal();
            //calActivityTotal();
        }); 

        const calActivityTotal = function(){
            var total = 0;
            $(".actquantity").each(function(){
                total += parseInt($(this).text())
            });
            $('#summary').text(total);
        };

        var sum = 0;

        function del_product_item(event) {
            $(event.target).parent().parent().remove();
            //calActivityTotal();
            calAllTotal();
        }


        // function del_product_item() {
        //     $(event.target).parent().parent().remove();
        // }
    </script>
    <script>
        const confirm_btn = $('.confirmBtn');

        confirm_btn.click(function() {
            const d_item = $(this).closest('.orderList');
            let active = d_item.find('.activity-unit');
            // let room_ids = [];

            const sendObj = {
                activetitle: [],
                activeimg: [],
                activetime: [],
                activequantity: [],
            }


            active.each(function() {
                const active_id = $(this).attr('data-id');
                console.log('data_id:', active_id);

                sendObj.activetitle.push(allactive[active_id].acname);
                sendObj.activeimg.push(allactive[active_id].acimg);
                sendObj.activetime.push($(this).find('.times').text());
                sendObj.activequantity.push($(this).find('.actquantity').text());
            });
            console.log(sendObj);




            $.get('active-api.php', sendObj, function(data) {
                console.log(data);
                // setCartCount(data);

                location.href = "payment.php";
            }, 'json');
/*
            function calTotal() {
                let activity = $('.orderList .activity-unit');
                let total = 0;
                activity.each(function() {
                    const active_id = $(this).attr('data-id');
                    console.log('data_id:', active_id);

                    // sendObj.activetime.push($(this).find('.times').text());
                    // sendObj.activequantity.push($(this).find('.actquantity').text());
                });
                // console.log(total);
                // //let totalroom = write(total);
                // $('#summary').text(total);
            }
            */

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
</body>

</html>