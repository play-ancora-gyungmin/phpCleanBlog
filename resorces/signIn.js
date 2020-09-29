/* signIn.js */

var $signInBtn = $('#signInBtn');

$signInBtn.click(function(e){
    e.preventDefault();

    var $inputEmail = $('#inputEmail'),
        emailval = $inputEmail.val().trim()
    var $inputPassword = $('#inputPassword'),
        passwordval = $inputPassword.val().trim()

    if (emailval === "" || passwordval === "") {
        alert("이메일 또는 암호가 비어있습니따라락");
        $inputEmail.val('').siblings('#emailHelp').text('이메일을 입력하세요')
        $inputPassword.val('').siblings('#passwordHelp').text('암호를 입력하세요')
        $inputEmail.focus();
    } else {
        //$("#signInForm").submit(); //for test
        $.post('./signInProcess.php',
            {
                inputEmail: emailval,
                inputPassword: passwordval
            },
            function(result){
                if (result=="Failed"){
                    alert("이메일 또는 암호에 문제가 있습니따라락");
                    $inputEmail.val($inputEmail).siblings('#emailHelp').text('이메일을 바르게 입력하세요')
                    $inputPassword.val('').siblings('#passwordHelp').text('암호를 바르게 입력하세요')
                    $inputEmail.focus();
                } else { 
                    alert("감사합니따라락");
                    location.href = "./index.php";
                }
            }
        )
    }
})