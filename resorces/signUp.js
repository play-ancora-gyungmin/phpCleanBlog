/* signUp.js */
var pass;

function moreTrim(val) {
    var res = val.replace(/\s/g, "");
    return res;
}

function validReg(id, val) {
    var reg;

    switch (id) {
        case "inputPassword": //비밀번호
            reg = /^.*(?=^.{8,12}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/;
            break;

        case "inputEmail": //이메일검사
            reg = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
            break;

        case "inputName":
            reg = /^[\w\Wㄱ-ㅎㅏ-ㅣ가-힣]{2,20}$/;
            break;

    }
    return reg.test(val);
}

/* 입력값 확인 */ 
var $input = $('input[type=text]#inputName,input[type=email],input[type=password]')

$input.blur(function(){
    var thatId = $(this).attr('id')
    var thatValue = moreTrim($(this).val())
    console.log("확인")

    if (thatId == "inputEmail") {
        $.ajax({
            url: "signUpEmailChk.php",
            type: "post",
            data: {
                inputEmail: $("#inputEmail").val()
            },
            dataType: "html",
            async: false,
            success: function (res) {
                if (res == 'ok'){
                    if (validReg(thatId,thatValue)) {
                        $('#emailHelp').attr('style','').text("Good Job!")
                    } else {
                        $('#emailHelp').attr('style','color: red !important').text("이메일 형식을 맞춰주세요.")
                        pass = false
                    }
                } else {
                     $('#emailHelp').attr('style', 'color: red !important').text("이미 존재하는 이메일입니다.")
                     pass = false
                }
            }

        })
    } else if (thatId == "inputName") {
        $.ajax({
            url: "signUpNameChk.php",
            type: "post",
            data: {
                inputName: $("#inputName").val()
            },
            dataType: "html",
            async: false,
            success: function (res) {
                if (res == 'ok'){
                    if (validReg(thatId,thatValue)) {
                        $('#nameHelp').attr('style','').text("Good Job!")
                    } else {
                        $('#nameHelp').attr('style','color: red !important').text("닉네임 형식을 맞춰주세요.")
                        pass = false
                    }
                } else {
                    $('#nameHelp').attr('style', 'color: red !important').text("이미 존재하는 이름입니다.")
                     pass = false
                }
            }

        })
    } else if (thatId == "inputPassword") {
        if (validReg(thatId, thatValue)) {
            $('#passwordHelp').attr('style', '').text("Good Job!")
        } else {
            $('#passwordHelp').attr('style', 'color: red !important')
            .text("암호는 영대소문자로 시작해서 영문자와 숫자 그리고 특수문자를 포함하여 8-12자로 만드세요.")
            pass = false
        }
    } else if (thatId == "inputPasswordChk") {
       if (thatValue == moreTrim($('#inputPassword').val())) {
           $('#passwordChkHelp').attr('style', '').text("Good Job!")
       } else {
           $('#passwordChkHelp').attr('style', 'color: red !important')
               .text("암호가 같지 않습니다.")
            pass = false
       }
    } else {
        $(this).siblings("small").empty();
    }
})


/* 버튼 클릭 */
$signUpBtn = $('#signUpBtn')

$signUpBtn.click(function(e){
    e.preventDefault();
    pass = true;
    $input.trigger('blur')

    if (pass){
        $("#signUpForm").submit(); //for test
        /*$.post("./signUpProcess.php",
            {
                inputEmail: $("#inputEmail").val(),
                inputName: $("#inputName").val(),
                inputPassword: $("#inputPassword").val(),
                inputLocal: $("#inputLocal").val()
            },
            function () {
                alert("가입되었습니따라락");
                location.replace("signIn.php");
            })*/
    } else {
        alert("잘못된 입력이 있습니다.")
    }
})