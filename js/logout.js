function logout_check(){
    var q=confirm("정말 로그아웃하시겠습니까?");
    if(q){
        location.href="login/logout.php";
    }   
};