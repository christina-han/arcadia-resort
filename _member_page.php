<style>
    .mbody {
        background-color: #EEEEEE;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }


    .breadcrumb {
        max-width: 100vw;
        min-width: 70vw;
        align-items: center;
        padding: 0;
        margin-right: 1rem;
    }

    .whiteWindow {
        margin: 30px 0;
        max-width: 1000px;
        min-width: 70vw;
        background: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 50px;
    }

    form {
        width: 500px;
    }


    .windowTitle {
        max-width: 100vh;
        /* background-color: black; */
        color: #09839C;
        display: flex;
        justify-content: flex-start;
    }

    .inputbox {
        width: 100%;
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        color: #5D5D5D;
    }



    .photo {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background-color: #EEEEEE;
        margin: 0 0 30px 0;
    }

    .memberEmail {
        color: #09839C;


    }

    .connectBox {
        display: flex;
        flex-direction: column;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        padding: .375rem .75rem;

    }

    .connectButton {
        width: 100%;
        height: 50px;
        border: #09839C 1px solid;
        margin: 5px 0;
        padding: 0 20px 0 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-decoration: none;
        color: #09839C;
    }

    .connectButton img {
        width: 32px;
        height: 32px;

    }

    .flexbox {
        width: 32px;
        height: 32px;
        background-color: #fff;
    }

    .creditCardBox {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .creditCard {
        width: 240px;
        height: 144px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        margin: 5px;
        display: flex;
        flex-direction: column;
        padding: 1rem 20px;
        position: relative;
    }

    .creditCard:hover {
        box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.35);
    }

    .creditCard img {
        width: 30px;
    }

    .deleteCard {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        color: #cfcfcf;
    }

    .deleteCard:hover {
        color: red;
    }

    .addCreditcard {
        background-color: #fff;
        color: #5D5D5D;
        width: 240px;
        height: 144px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        margin: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .addCreditcard:hover {
        box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.35);
    }

    .addCreditcard img {
        width: 20px;
        margin-right: 10px;
    }

    .Smallbutton {
        width: 100%;
    }

    /* 2020/08/11 ???????????????????????????????????????????????? */
    .form-group small {
        color: red;
    }

    .AlignPhoto {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .coverfit {
        width: 100%;
        height: 100%;
    }

    .chooseFile {
        width: 240px;
    }

    @media screen and (max-width: 375px) {
        .whiteWindow {
            width: 100%;
            padding: 2rem;
            margin-bottom: 30px;
        }

        .windowTitle {
            width: 100%;
        }

        .connectBox,
        .creditCardBox {
            display: flex;
            flex-direction: column;
        }

        form {
            width: 311px;
        }

        .Smallbutton {
            width: 100%;
        }
    }
</style>

<div class="mbody">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item bodytextchi"><a href="#">??????</a></li>
            <li class="breadcrumb-item bodytextchi"><a href="#">????????????</a></li>
            <li class="breadcrumb-item active bodytextchi" aria-current="page">????????????</li>
        </ol>
    </nav>

    <div class="windowTitle h4chi">
        <span>????????????</span>
    </div>

    <div class="whiteWindow">
        <!-- ?????????????????? -->
        <div class="AlignPhoto">
            <div class="photo">
                <img class="coverfit img" src="" alt="">
            </div>
            <input class="chooseFile bodytextchi" type="file" onchange="previewFile()">
        </div>
        <!-- ?????????????????? -->

        <form name="form_member" method="post" novalidate>
            <div class="inputbox memberemail">
                <span class="bodytextchi">????????????</span>
                <!-- <span class="memberEmail bodytexteng">OOO@gmail.com</span> -->
                <input type="text" class="memberEmail form-control bodytexteng" value="<?= $r['email'] ?>" disabled></input>
            </div>

            <div class="inputbox bodytextchi passportname form-group">
                <span for="lastname">????????????</span>
                <div class="form-row">
                    <div class="col">
                        <!-- <input type="text" class="form-control bodytextchi" placeholder="??????"> -->
                        <input type="text" class="form-control bodytextchi" id="member-lastname" name="lastname" value="<?= $r['lastname'] ?>">
                        <small id="lastnameHelp" class="form-text"></small>
                    </div>
                    <div class="col">
                        <!-- <input type="text" class="form-control bodytextchi" placeholder="??????"> -->
                        <input type="text" class="form-control bodytextchi" id="member-name" name="name" placeholder="??????" value="<?= $r['name'] ?>">
                        <small id="nameHelp" class="form-text"></small>
                    </div>
                </div>
            </div>

            <div class="inputbox birthday bodytextchi form-group">
                <span for="birth">??????</span>
                <!-- <input type="date" class="form-control  bodytextchi"> -->
                <input type="date" class="form-control  bodytextchi" id="birth" name="birth" value="<?= $r['birth'] ?>">
            </div>

            <div class="inputbox country bodytextchi form-group">
                <span for="country">??????</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="?????????????????????"> -->
                <input type="text" class="form-control bodytextchi" placeholder="?????????????????????" id="country" name="country" value="<?= $r['country'] ?>">
            </div>

            <div class="inputbox bodytextchi form-group">
                <span>??????</span>
                <div class="connectBox">
                    <a class="facebooklogin connectButton" href="https://www.facebook.com/">
                        <img src="icon/facebook.svg" alt="">
                        <div class="connecttext bodytextchi">?????????</div>
                        <div class="flexbox"></div>
                    </a>

                    <a class="googlelogin connectButton" href="https://www.google.com/">
                        <img src="icon/google.svg" alt="">
                        <div class="connecttext bodytextchi">?????????</div>
                        <div class="flexbox"></div>
                    </a>
                </div>
            </div>

            <div class="inputbox bodytextchi form-group">
                <span>?????????</span>

                <div class="creditCardBox">
                    <div class="creditCard bodytextchi">
                        <img src="icon/visa.svg" alt="">
                        <span>xxxx-xxxx-xxxx-1234</span>
                        <span>CHANG HUI LIN</span>
                        <span>05/24</span>
                        <a href="" class="deleteCard mintextchi">????????????</a>
                    </div>

                    <div class="addCreditcard"><img src="icon/plus.svg" alt="">???????????????</div>

                </div>

            </div>


            <button type="submit" class="normalBtn" onclick="return formCheckMember()">??????</button>


        </form>


    </div>

    <div class="windowTitle h4chi">
        <span>????????????</span>
    </div>

    <!-- ???????????? -->
    <div id="info_bar2" class="alert alert-success" role="alert" style="display: none;">Test</div>
    <!-- ???????????? -->

    <div class="whiteWindow">

        <form name="form_changepassword" method="post" novalidate>

            <div class="inputbox country bodytextchi form-group">
                <span for="oldpassword">?????????</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="??????????????????"> -->
                <input type="text" class="form-control bodytextchi" id="oldpassword" name="oldpassword" placeholder="??????????????????" required>
                <small id="OldPasswordHelp" class="form-text"></small>
            </div>
            <div class="inputbox country bodytextchi form-group">
                <span for="newpassword">?????????</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="????????????????????????"> -->
                <input type="text" class="form-control bodytextchi" id="newpassword" name="newpassword" placeholder="????????????????????????" required>
                <small id="newPasswordHelp" class="form-text"></small>
            </div>


            <div class="inputbox country bodytextchi form-group">
                <span for="confirmpassword">???????????????</span>
                <!-- <input type="text" class="form-control bodytextchi" placeholder="?????????????????????"> -->
                <input type="text" class="form-control bodytextchi" id="confirmpassword" name="confirmpassword" placeholder="?????????????????????" required>
                <small id="confirmpassword3" class="form-text"></small>
            </div>

            <button type="submit" class="normalBtn" onclick="return formCheckChangePassword()">??????</button>

        </form>

    </div>
</div>


<!----- ???????????? ----->
<script>
    function formCheckMember() {
        //???????????????Email?????????????????????
        const lastname = $('#member-lastname'),
            name = $('#member-name'),
            birth = $('#birth'),
            country = $('#country'),
            // oldpass = $('#oldpassword'),
            // newpass = $('#newpassword'),
            // confirmpass = $('#confirmpassword'),
            info_bar = $('#info_bar');

        console.log();
        lastname.next().text('');
        name.next().text('');
        birth.next().text('');
        country.next().text('');

        // oldpass.next().text('');
        // newpass.next().text('');
        // confirmpass.next().text('');

        let isPass = true;

        if (lastname.val().length < 1) {
            isPass = false;
            lastname.css('border-color', 'red');
            lastname.next().text('*?????????????????????');
        }

        if (lastname.val().length < 1) {
            isPass = false;
            name.css('border-color', 'red');
            name.next().text('*?????????????????????');
        }



        // if (oldpass.val().length < 6) {
        //     isPass = false;
        //     oldpass.css('border-color', 'red');
        //     oldpass.next().text('*??????????????????8????????????');
        // }

        // if (newpass.val().length < 6) {
        //     isPass = false;
        //     newpass.css('border-color', 'red');
        //     newpass.next().text('*??????????????????8????????????');
        // }

        // if (confirmpass.val().length < 6) {
        //     isPass = false;
        //     confirmpass.css('border-color', 'red');
        //     confirmpass.next().text('*??????????????????8????????????');
        // }

        if (isPass) {
            $.post('_member_page-api.php', $(document.form_member).serialize(), function(data) {
                console.log(data);

                if (data.success) {
                    Swal.fire({
                        title: "????????????????????????",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        location.href = '_about.php';
                    }, 3000);
                } else {
                    Swal.fire({
                        title: "?????????????????????????????????????????????",
                        icon: "error",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }

                // if (data.success) {
                //     info_bar.removeClass('alert-danger')
                //         .addClass('alert-success')
                //         .html('????????????????????????!');
                // } else {
                //     info_bar.removeClass('alert-success')
                //         .addClass('alert-danger')
                //         .html(data.error || '?????????????????????');
                // }
                // info_bar.slideDown();

                // setTimeout(function() {
                //     info_bar.slideUp();
                // }, 3000);
            }, 'json');

        }

        return false;
    }
</script>
<!----- ???????????? ----->

<!----- ???????????? ----->
<script>
    function formCheckChangePassword() {
        const oldpass = $('#oldpassword'),
            newpass = $('#newpassword'),
            confirmpass = $('#confirmpassword'),
            info_bar2 = $('#info_bar2');
        console.log();

        const bobo1 = document.getElementById('newpassword').value;
        const bobo2 = document.getElementById('confirmpassword').value;
        const confirmpass02 = $('#confirmpassword');

        oldpass.next().text('');
        newpass.next().text('');
        confirmpass.next().text('');

        let isPass = true;

        if (oldpass.val().length < 6) {
            isPass = false;
            oldpass.css('border-color', 'red');
            oldpass.next().text('*??????????????????8????????????');
        }

        if (newpass.val().length < 6) {
            isPass = false;
            newpass.css('border-color', 'red');
            newpass.next().text('*??????????????????8????????????');
        }

        // if (confirmpass.val().length < 6) {
        //     isPass = false;
        //     confirmpass.css('border-color', 'red');
        //     confirmpass.next().text('*??????????????????8????????????');
        // }

        if (bobo1 !== bobo2) {
            isPass = false;
            confirmpass02.css('border-color', 'red');
            confirmpass02.next().text('?????????????????????');
        }

        if (isPass) {
            $.post('_member_page-api2.php', $(document.form_changepassword).serialize(), function(data) {
                console.log(data);


                if (data.success) {
                    Swal.fire({
                        title: "??????????????????",
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        location.href = '_about.php';
                    }, 3000);
                } else {
                    Swal.fire({
                        title: "??????????????????????????????????????????",
                        icon: "error",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }


                // if (data.success) {
                //     swal({
                //         title: "??????????????????",
                //         icon: "success",
                //         // showConfirmButton: false,
                //         timer: 300000,
                //         // buttons: true,
                //         // dangerMode: true,
                //     });

                //     setTimeout(function() {
                //         location.href = '_index.php';
                //     }, 3000);
                // }

            }, 'json');
        }

        return false;
    }

    // ?????????????????????alert??????
    //         if (data.success) {
    //             info_bar2.removeClass('alert-danger')
    //                 .addClass('alert-success')
    //                 .html('??????????????????!');
    //         } else {
    //             info_bar2.removeClass('alert-success')
    //                 .addClass('alert-danger')
    //                 .html(data.error || '???????????????');
    //         }
    //         info_bar2.slideDown();

    //         setTimeout(function() {
    //             info_bar2.slideUp();
    //         }, 3000);
    //     }, 'json');

    // }
</script>